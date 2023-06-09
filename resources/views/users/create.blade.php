@extends('users.layout')
  
@section('content')
   
<div class="container mt-5">
   
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Tambah User
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="post" action="{{ route('users.store') }}" id="myForm">
            @csrf
                <div class="form-group">
                    <label for="name">Name</label>                    
                    <input type="text" name="name" class="form-control" id="name" aria-describedby="name" >                
                </div>
                <div class="form-group">
                    <label for="slug">Slug</label>                    
                    <input type="text" name="slug" class="form-control" id="slug" aria-describedby="slug" >                
                </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>
    </div>
@endsection