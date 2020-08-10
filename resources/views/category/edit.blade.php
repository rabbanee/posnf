@extends('layouts.app')

@section('title')
    Create Category
@endsection

@section('content')
    <div class="container mt-4">
        <div class="row mb-3">
            <div class="col justify-content-between d-flex">
                <h3>Update Category</h3>
                <a class="btn btn-secondary" href="{{ route('category.index') }}">Back</a>
            </div>
        </div>
         <div class="row">
            <div class="col">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Data is not edited</strong> <br/>
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
                <form action="{{ route("category.update", $category->id) }}" method="post">
                    @csrf
                    @method('PUT')
                     <div class="form-group">
                        <label for="name">Name Category</label>
                        <input type="text" class="form-control" name="name" id="name" value="{{ $category['name'] }}" disabled>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection