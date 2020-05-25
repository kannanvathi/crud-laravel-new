@extends('layouts.app')
@section('title', 'update')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form method="post" action="updated/{{$editData->id}}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{$editData->name}}">
                        <small id="small" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{$editData->email}}">
                        <small id="small" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Address</label>
                        <input type="text" class="form-control" id="address" name="address" value="{{$editData->address}}">
                        <small id="small" class="form-text text-muted"></small>
                    </div>
                    <button type="submit" class="btn btn-primary">update</button>
                    <button type="cancel" class="btn btn-primary">Cancel</button>
                </form>
            </div>
        </div>
    </div>
@endsection
