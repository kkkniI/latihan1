@extends('nav')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Produk</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2 class="mt-4">Update Produk</h2>
    <form method="POST" action="/update/{{$furniture->id}}">
        @method("PUT")
        @csrf
        <div class="form-group">
            <label for="nm_barang">nama Barang</label>
            <input value="{{$furniture->nm_barang}}" type="text" class="form-control" id="nm_barang" name="nm_barang"  required>
            @if ($errors->has('nm_barang'))
            <span class="text-danger">{{ $errors->first('nm_barang') }}</span>
            @endif
        </div>
        <div class="form-group">
            <label for="hrg_barang">harga Barang</label>
            <input value="{{$furniture->hrg_barang}}" type="text" class="form-control" id="hrg_barang" name="hrg_barang" required>
            @if ($errors->has('hrg_barang'))
            <span class="text-danger">{{ $errors->first('hrg_barang') }}</span>
            @endif
        </div>
        <div class="form-group">
            <label for="qty">Qty</label>
            <input value="{{$furniture->qty}}" type="text" class="form-control" id="qty" name="qty"  required>
            @if ($errors->has('qty'))
            <span class="text-danger">{{ $errors->first('qty') }}</span>
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
</body>
</html>

@endsection