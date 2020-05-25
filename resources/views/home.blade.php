@extends('layouts.app')
@section('title', 'home')
@section('content')
    <div class="container mt-3">
        @if(Session::get('status'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{Session::get('status')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        @if(Session::get('update'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{Session::get('update')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        @if(Session::get('delete'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{Session::get('delete')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <div class="row">
    <table class="table table-dark">
        <thead>

        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Address</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $item)
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->name}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->address}}</td>
            <td><a href="edit/{{$item->id}}"><i class="fa fa-pen mr-4"></i></a><a href="delete/{{$item->id}}"><i class="fa fa-trash"></i></a></td>
        </tr>
        @endforeach
        </tbody>
    </table>
        </div>
    </div>
@endsection
