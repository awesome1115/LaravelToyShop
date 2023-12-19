@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table">
        <thead>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Edit</th>
            <th>Delete</th>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td>{{ $user->updated_at }}</td>
                    <td><a href="{{ route('userMana.edit', ['userMana' => $user->id]) }}">Edit</a></td>
                    <td><a href="">Delete</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection