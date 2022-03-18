@extends('layout.master')
@section('title')
    Insert
@endsection
@section('content')
    <div class="row">
        <div class="col-md-2 my-4">
            <a class="btn btn-success" href="{{ url('/') }}"><i class="fa-solid fa-square-plus text-light"></i> show
                Employe</a>
        </div>
        <div class="col-md-6 m-auto my-4">
            <div class="card">
                <h2 class="text-center bg-dark text-light py-2">Add Employe From</h2>
                <div class="card-body">
                    <form action="{{ url('/emp/store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="exampleInputPassword1">
                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <select name="post" class="form-select">
                                <option selected>Post</option>
                                <option value="React developer">React developer</option>
                                <option value="Laravel developer">Laravel developer</option>
                                <option value="Androaid developer">Androaid developer</option>
                                <option value=".Net developer">.Net developer</option>
                            </select>
                            @error('post')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Selory</label>
                            <input type="selory" name="selory" class="form-control" id="exampleInputPassword1">
                            @error('selory')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                        </div>

                        <div class="mb-3">
                            <label for="formFile" class="form-label">Image</label>
                            <input class="form-control" name="image" type="file" id="formFile">
                            @error('image')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
