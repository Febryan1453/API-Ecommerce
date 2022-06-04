@extends('layouts.admin')

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Data Produk</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
          <li class="breadcrumb-item active">Data Produk</li>
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
            <h3 class="mt-2 card-title">Table Produk</h3>
            <button type="button" data-toggle="modal" data-target="#exampleModalCenter" class="btn bg-gradient-info float-right">Add Product</button>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
          <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Update At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

            @forelse ($user as $a)
                <tr>
                    <td>{{ $a->id }}</td>
                    <td><img src="{{ url('storage/produk/'. $a->image) }}" style="width: 30px; height:30px;"></td>
                    <td>{{ $a->name }}</td>
                    <td>{{"Rp.".number_format($a->harga)}}</td>
                    <td>{{ $a->updated_at}}</td>
                <td>
                    <a
                        data-toggle="modal"
                        data-target="#ModalEdit"

                        data-id={{$a->id}}
                        data-name={{$a->name}}
                        data-harga={{$a->harga}}
                        data-desc={{$a->deskripsi}}
                        data-image={{$a->image}}
                        data-cate_id={{$a->category_id}}

                        style="cursor:pointer;">

                        <i class="fas fa-edit ijo"></i>
                    </a>
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

        {{--  Modal Add Produk  --}}
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Add Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>

                <form method="POST" action="{{ route('produk.store') }}" role="form" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama" name="name">
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Harga</label>
                            <input type="text" class="form-control" placeholder="Harga ..." name="harga">
                        </div>
                        </div>
                        <div class="col-sm-6">
                        <div class="form-group">
                            <label>Pilih Category</label>
                            <select class="form-control" name="category_id">
                            <option value="1">option 1</option>
                            <option value="2">option 2</option>
                            <option value="3">option 3</option>
                            <option value="4">option 4</option>
                            <option value="5">option 5</option>
                            </select>
                        </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea class="form-control" rows="3" placeholder="Deskripsi ..." name="deskripsi"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputFile">File Gambar</label>
                        <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        </div>
                    </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </form>

            </div>
            </div>
        </div>
        {{--  End Modal Add Produk  --}}

        {{--  Modal Edit Produk  --}}
        <div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Edit Produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

              <form method="POST" action="{{route('produk.update', 'test')}}" role="form" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="hidden" class="form-control" id="id" name="id" value="">
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="row">
                    <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Harga</label>
                        <input type="text" class="form-control" id="harga" name="harga">
                    </div>
                    </div>
                    <div class="col-sm-6">
                    <div class="form-group">
                        <label>Pilih Category</label>
                        <select class="form-control" id="cate_id" name="category_id">
                        <option value="1">option 1</option>
                        <option value="2">option 2</option>
                        <option value="3">option 3</option>
                        <option value="4">option 4</option>
                        <option value="5">option 5</option>
                        </select>
                    </div>
                    </div>
                </div>

                <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea class="form-control" rows="3" id="desc" name="deskripsi"></textarea>
                </div>

                <div class="form-group">
                    <label for="exampleInputFile">File Gambar</label>
                    <div>
                        <img src="" width="80px" id="image">
                    </div>
                    <div class="input-group mt-3">
                        <div class="custom-file float-bottom">
                            <input type="file" class="custom-file-input" name="image">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                    </div>
                </div>
                </div>
                <!-- /.card-body -->

                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>

            </div>
          </div>
        </div>
        {{--  End Modal Edit Produk  --}}

  </div>
</section>
<!-- /.content -->

@endsection
