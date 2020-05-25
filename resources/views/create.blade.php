@extends('layouts.app')
@section('title', 'create')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <form method="post" action="created">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Enter name">
                <small id="small" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter email">
                <small id="small" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Address</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="address" placeholder="Enter Address">
                <small id="small" class="form-text text-muted"></small>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    </div>
</div>
@endsection
