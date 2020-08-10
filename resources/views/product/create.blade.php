@extends('layouts.app')

@section('title')
    Create Product
@endsection

@section('content')
    <div class="container mt-4">
        <div class="row mb-3">
            <div class="col justify-content-between d-flex">
                <h3>Create Product</h3>
                <a class="btn btn-secondary" href="{{ route('product.index') }}">Back</a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Data is not save</strong> <br/>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form action="{{ route("product.store") }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name Product</label>
                        <input type="text" class="form-control" name="name" id="name">
                    </div>
                    <div class="form-group">
                        <label for="merk">Merk Product</label>
                        <input type="text" class="form-control" name="merk" id="merk">
                    </div>
                    <div class="form-group">
                        <label for="harga_beli">Harga Beli</label>
                        <input type="number" class="form-control" name="harga_beli" id="harga_beli">
                    </div>
                    <div class="form-group">
                        <label for="harga_jual">Harga Jual</label>
                        <input type="number" class="form-control" name="harga_jual" id="harga_jual">
                    </div>
                    <div class="form-group">
                        <label for="stock">Stock</label>
                        <input type="number" class="form-control" name="stock" id="stock">
                    </div>
                    <div class="form-group">
                        <label for="disc">Discount</label>
                        <input type="number" class="form-control" name="disc" id="disc">
                    </div>
                    <div class="form-group">
                        <label for="category">Category</label>
                        <select name="category_id" id="category_id" class="form-control">
                            @foreach ($category as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection