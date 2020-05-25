@extends('layouts.app')
@section('title', 'Login')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form method="post" action="login">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="email">
                    <small id="small" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="password" class="form-control" id="address" name="password" placeholder="password">
                    <small id="small" class="form-text text-muted"></small>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
</div>
@endsection
