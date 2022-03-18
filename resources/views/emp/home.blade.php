@extends('layout.master')
@section('title')
    Home
@endsection

@section('content')
    <div class="row">
        <div class="col-md-2 my-4">
            <a class="btn btn-success" href="{{url('/emp/insert')}}"><i class="fa-solid fa-square-plus text-light"></i> Add Employe</a>
        </div>
        <div class="col-md-10 my-4">
            <div class="card">
                <h2 class="text-center bg-dark text-light py-2">Employes data</h2>
                <div class="card-body">

                    @if (Session::has('massage'))
                    <script>
                        swal("Grate job!", "{!! session::get('massage') !!}", "success", {
                            button: "ok",
                        })
                        </script>
                    @endif

                    <table class="table table-bordered border-primary table-primary">
                        <thead>
                          <tr>
                            <th scope="col">Image</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Post</th>
                            <th scope="col">Selory</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                         @foreach ($emps as $emp)
                          <tr>
                            <th scope="row"> <img class = "img-thumbnail" src="{{asset('images')}}/{{$emp->image}}" alt="" width="60" height="50"> </th>
                            <td class = "align-middle">{{$emp->name}}</td>
                            <td class = "align-middle">{{$emp->email}}</td>
                            <td class = "align-middle">{{$emp->post}}</td>
                            <td class = "align-middle">{{$emp->selory}}</td>
                            <td class = "align-middle">
                              <a href="{{url('emp/edit/'.$emp->id)}}"><i class="fa-solid fa-pencil text-primary"></i></a>
                              <a href=""><i class="fa-solid fa-image text-info"></i></a>
                              <a href="{{url('emp/destroy/'.$emp->id)}}"><i class="fa-solid fa-trash text-danger"></i></a>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                      {{$emps->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection
