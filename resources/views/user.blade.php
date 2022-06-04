@extends('layouts.admin')

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Data User</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
          <li class="breadcrumb-item active">Data User</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
  <div class="container-fluid">

    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Table User</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Register</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>

            <?php $i = 1; ?>

            @forelse ($user as $a)
                <tr>
                <td>{{ $a->id }}</td>
                <td>{{ $a->name }}</td>
                <td>{{ $a->telp }}</td>
                <td>{{ $a->email }}</td>
                <td>{{ $a->created_at }}</td>
                <td>
                    <a href="#"><i class="fas fa-edit ijo"></i></a>
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    <a href="#"><i class="fas fa-trash red"></i></a>
                </td>
              </tr>

              @empty
              <tr>
                  <td colspan="6" class="text-center">Data Masih Kosong</td>
              </tr>

          @endforelse

            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>

  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->

@endsection
