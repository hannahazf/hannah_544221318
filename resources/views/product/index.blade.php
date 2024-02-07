<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div class="container col-xl-10 col-xx1-8 px-4 py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Daftar Produk
                            <a href="{{route('product.create')}}" class="btn btn-success pull-right" style="margin-top: -8px">Tambah</a><br>
                        </h4>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Produk</th>
                                    <th>Kategori</th>
                                    <th>Harga Jual</th>
                                    <th>Harga beli</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($product as $data)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $data->nama_produk }}</td>
                                        <td>{{ $data->nama_kategori }}</td>
                                        <td>{{ $data->harga_jual }}</td>
                                        <td>{{ $data->harga_beli }}</td>
                                        <td>
                                            <form method="post" action="{{ route('product.destroy', $data->id) }}">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <a href="{{ route('product.edit', $data->id) }}" class="btn btn-primary">Edit</a>
                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                            </form>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$product->links('pagination::bootstrap-4')}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
