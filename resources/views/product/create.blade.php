<?php
    use App\Models\product;

    $product = product::all();
?>

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
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('product.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama:</strong>
                    <input class="form-control pink-in" type="text" name="nama_produk" class="nama_produk" placeholder="nama">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>kategori:</strong>
                    <input class="form-control pink-in" name="kategori" placeholder="kategori"></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>harga jual:</strong>
                    <textarea class="form-control pink-in" name="harga_jual" placeholder="harga_jual"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>harga beli:</strong>
                    <textarea class="form-control pink-in" name="harga_beli" placeholder="harga_beli"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn pink-btn">Submit</button>
            </div>
        </div>

    </form>
</div>
</body>

<style>
    .pink-btn{
        background-color: palevioletred;
        border-color: palevioletred;
    }

    .pink-btn:hover {
        background-color: pink;
        border-color: pink;
    }


    .pink-in:focus {
        border-color: palevioletred;
        box-shadow: 0 0 0 0.2rem pink;
    }
</style>
</html>
