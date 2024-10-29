@extends('layout.master', ['title' => 'Item'])
@section('content')
    <a href="/item/create" class="btn btn-primary">create item<i class="bi bi-plus-circle"></i></a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">item</th>
                <th scope="col">category</th>
                <th scope="col">quantity</th>
                <th scope="col">price</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->category }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>{{ $item->price }}</td>
                    <td><a href="/item/{{ $item->id }}/edit" class="btn btn-warning">Edit</a>
                        <form action="/item/{{ $item->id }}" method="POST">
                            @method('DELETE')
                            @csrf

                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
