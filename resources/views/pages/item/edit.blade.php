@extends('layout.master', ['title' => 'edit'])
@section('content')
    <form action="/item/{{ $data->id }}" method="POST">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">name</label>
            <input type="name" class="form-control" id="name" name="name" value="{{ $data->name }}">
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">category</label>
            <input type="category" class="form-control" id="category" name="category" value="{{ $data->category }}">
        </div>
        <div class="mb-3">
            <label for="quantity" class="form-label">quantity</label>
            <input type="quantity" class="form-control" id="quantity" name="quantity" value="{{ $data->quantity }}">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">price</label>
            <input type="price" class="form-control" id="price" name="price" value="{{ $data->price }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
