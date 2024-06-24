@extends('nav')
@section('content')

<html>

    <div class="container">
    <h2 class="mt-4">Mochammad Kani Daffa - 211011401503</h2>
    <a href="/create" class="btn btn-primary mb-3">Tambah Produk</a>
    
    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Harga(Rp.)</th>
                <th>Qty</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($furnitures as $furniture )
            <tr>
                <th scope="row">{{$furniture->id}}</th>
                <td>{{$furniture->nm_barang}}</td>
                <td>{{number_format($furniture->hrg_barang, 0, ',', '.')}}</td>
                <td>{{$furniture->qty}}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                        <div class="btn-group" role="group">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                         Dropdown
                        </button>
                                <ul class="dropdown-menu">
                                <li><a class="dropdown-item" role="button" href="/update/{{$furniture->id}}">update</a></li>
                                
                                <li>
                                  <form action="/delete" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="id" value="{{$furniture->id}}">
                                    <button type="submit" class="dropdown-item">delete</button>
                                      
                                </form>
                                </li>
                                </ul>
                                    </div>
                                    </div>          
                                </td>
                                </tr>
            
            @endforeach    
        </tbody>
    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

</body>
</html>
            @endsection