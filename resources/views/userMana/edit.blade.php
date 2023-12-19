@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('userMana.update', ['userMana' => $user->id]) }}">
        <div class="row">
            <div class="col-6">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">User Name</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="{{ $user->name }}">
                </div>
            </div>
            <div class="col-6">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">User Email</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="{{ $user->email }}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Created_At</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="{{ $user->created_at }}">
                </div>
            </div>
            <div class="col-6">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Updated At</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="{{ $user->updated_at }}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button type="button" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-secondary">Back</button>
            </div>
        </div>
    </form>
</div>
@endsection