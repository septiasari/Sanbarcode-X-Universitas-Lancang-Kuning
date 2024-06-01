@extends('layouts.master')

@section('title')
    Edit Cast
@endsection

@section('content')
<form action="/cast/{{$cast->id}}" method="POST">
    @csrf
    @method('put')
    <div class="form-group">
        <label for="name">Nama</label>
        <input type="text" class="form-control" name="name" value="{{ $cast->name }}">
        @error('name')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="umur">Umur</label>
        <input type="number" class="form-control" name="umur" value="{{ $cast->umur }}">
        @error('umur')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="bio">Bio</label>
        <textarea name="bio" id="" cols="30" rows="10" class="form-control">{{ $cast->bio }}</textarea>
        @error('bio')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
    <button type="submit" class="btn btn-success">Submit</button>
</form>
@endsection