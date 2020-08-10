@extends('layouts.app')

@section('title')
    List Category
@endsection

@section('content')
    <div class="container mt-4">
        <div class="row mb-3">
            <div class="col justify-content-between d-flex">
                <h3>List Category</h3>
                <div class="box">
                    <a class="btn btn-primary" href="{{ route('category.create') }}">Add</a>
                    <a class="btn btn-success" href="{{ route('product.index') }}">List Product</a>
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
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($category as $item)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $item['name'] }}</td>
                                <td>
                                    <form method="post" action="{{ route('category.destroy', $item->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('category.edit', $item['id']) }}" class="btn btn-secondary">Edit</a>
                                        <a href="{{ route('category.show', $item['id']) }}" class="btn btn-warning">Show</a>
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