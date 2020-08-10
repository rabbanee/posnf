@extends('layouts.app')

@section('title')
    Category {{ $category->name }}
@endsection

@section('content')
    <div class="container mt-4">
        <div class="row mb-3">
            <div class="col justify-content-between d-flex">
                <h3>List Category</h3>
                <div class="box">
                    <a class="btn btn-primary" href="{{ route('category.create') }}">Add</a>
                    <a class="btn btn-secondary" href="{{ route('category.index') }}">Back</a>
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
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">{{ $category->id }}</th>
                            <td>{{ $category->name }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection