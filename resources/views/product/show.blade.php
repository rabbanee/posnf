@extends('layouts.app')

@section('title')
    Product {{ $product->name }}
@endsection

@section('content')
    <div class="container mt-4">
        <div class="row mb-3">
            <div class="col justify-content-between d-flex">
                <h3>List Product</h3>
                <div class="box">
                    <a class="btn btn-primary" href="{{ route('product.index') }}">Back</a>
                    <a class="btn btn-success" href="{{ route('product.create') }}">Add Product</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Merk</th>
                            <th scope="col">Harga Beli</th>
                            <th scope="col">Harga Jual</th>
                            <th scope="col">Stock</th>
                            <th scope="col">Discount</th>
                            <th scope="col">Category</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">{{ $product->id }}</th>
                            <td>{{ $product['name'] }}</td>
                            <td>{{ $product['merk'] }}</td>
                            <td>{{ $product['harga_beli'] }}</td>
                            <td>{{ $product['harga_jual'] }}</td>
                            <td>{{ $product['stock'] }}</td>
                            <td>{{ $product['discount'] }}</td>
                            <td>{{ $product['category']['name'] }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection