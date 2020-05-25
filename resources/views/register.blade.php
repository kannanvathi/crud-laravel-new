@extends('layouts.app')
@section('title', 'Register')
@section('content')
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('success')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form method="post" action="register">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="name">
                    <small id="small" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="email">
                    <small id="small" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="password">
                    <small id="small" class="form-text text-muted"></small>
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>
</div>
@endsection

