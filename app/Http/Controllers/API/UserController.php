<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function regis(Request $request)
    {
        $pesan = [
            'name.required'      => 'Nama wajib diisi.',

            'password.required'  => 'Password wajib diisi.',
            'password.confirmed' => 'Password konfirmasi tidak sesuai.',
            'password.min'       => 'Password minimal diisi dengan 5 karakter.',

            'email.required'     => 'Email wajib diisi.',
            'email.email'        => 'Email tidak valid.',
            'email.unique'       => 'Email sudah terdaftar.',

            'telp.max'           => 'Telepon tidak valid.',
            'telp.required'      => 'Telepon wajib diisi.',
            'telp.numeric'       => 'Telepon harus berupa angka.',
            'telp.unique'        => 'Nomor telepon tertaut pada akun lain.',
        ];

        $request->validate([
            'name'               => ['required', 'string', 'max:255'],
            'email'              => ['required', 'string', 'email', 'unique:users'],
            'telp'               => ['required', 'numeric', 'unique:users'],
            'password'           => ['required', 'min:5', 'string']
        ], $pesan);

        User::create([
            'name'               => $request->name,
            'email'              => $request->email,
            'telp'               => $request->telp,
            'password'           => bcrypt($request->password)
        ]);

        return response()->json([
            'status'             => 'Success',
            'message'                => 'Registrasi Berhasil',
        ], Response::HTTP_OK);
    }

    public function login(Request $request)
    {
        // dd($request->all());
        // die();

        $user = User::where('email', $request->email)->first();

        if ($user) {

            if (password_verify($request->password, $user->password)) {
                return response()->json([
                    'status'    => 'Success',
                    'message'   => "Welcome, $user->name",
                    'data'      => $user
                ], Response::HTTP_OK);
            }

            return $this->errorWoy("Failed", "Password wrong.");
        }
        return $this->errorWoy("Failed", "Email not registered.");
    }

    public function errorWoy($sts, $pesan)
    {
        return response()->json([
            'status'    => $sts,
            'message'   => $pesan
        ], Response::HTTP_UNAUTHORIZED);
    }
}
