@extends('layouts.master')

@section('title')
    Add Cast
@endsection

@section('content')
<form action="/cast" method="post">
    @csrf
    <div class="form-group">
        <label>Nama</label>
        <input type="text" class="form-control" name="name">
        @error('name')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label>Umur</label>
        <input type="number" class="form-control" name="umur">
        @error('umur')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label>Bio</label>
        <textarea name="bio" id="" cols="30" rows="10" class="form-control"></textarea>
        @error('bio')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
    <button type="submit" class="btn btn-success">Submit</button>
</form>
@endsection