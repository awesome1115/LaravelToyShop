@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('userMana.update', ['userMana' => $user->id]) }}" method="POST">
        @csrf
        @method("PUT")
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <div class="row">
            <div class="col-6">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">User Name</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="name" value="{{ $user->name }}">
                </div>
                @if($errors->has('name'))
                    <div class="alert alert-danger" role="alert">Name Field is Required!</div>
                @endif
            </div>
            <div class="col-6">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">User Email</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="email" value="{{ $user->email }}">
                </div>
                @if($errors->has('email'))
                    <div class="alert alert-danger" role="alert">{{ $errors->first('email') }}</div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Created_At</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="created_at" value="{{ $user->created_at }}">
                </div>
                @if($errors->has('created_at'))
                    <div class="alert alert-danger" role="alert">Created_At Field is Required!</div>
                @endif
            </div>
            <div class="col-6">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Updated_At</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="updated_at" value="{{ $user->updated_at }}">
                </div>
                @if($errors->has('updated_at'))
                    <div class="alert alert-danger" role="alert">Updated_At Field is Required!</div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-primary">Save</button>
                <a type="button" class="btn btn-secondary" href="javascript:;history.back();">Back</a>
            </div>
        </div>
    </form>
</div>
@endsection