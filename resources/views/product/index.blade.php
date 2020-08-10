@extends('layouts.app')

@section('title')
    List Product
@endsection

@section('content')
    <div class="container mt-4">
        <div class="row mb-3">
            <div class="col justify-content-between d-flex">
                <h3>List Product</h3>
                <div class="box">
                    <a class="btn btn-primary" href="{{ route('product.create') }}">Add</a>
                    <a class="btn btn-success" href="{{ route('category.index') }}">List Category</a>
                </div>
            </div>
        </div>
         @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Merk</th>
                            <th scope="col">Category</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($product as $item)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $item['name'] }}</td>
                                <td>{{ $item['merk'] }}</td>
                                <td>{{ $item['category']['name'] }}</td>
                                <td>
                                    <form method="post" action="{{ route('product.destroy', $item->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('product.edit', $item['id']) }}" class="btn btn-secondary">Edit</a>
                                        <a href="{{ route('product.show', $item['id']) }}" class="btn btn-warning">Show</a>
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center bg-warning">Tidak ada data</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection