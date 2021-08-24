@extends('admin.inc.app')

@section('title','Manage Users')

@section('main-content')
    <div class="container">
        <div class="d-flex ">
            <div class="p-2 flex-grow-1 ">Mange User</div>

            <a href="{{route('staff.users.create')}}" class="btn btn-primary color-dark "><div class="p-2 fa fa-user-plus ">Add New User</div></a>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-12 col-lg-12">
            <div class="card">
                <div class="card-header border-0">Manage Users</div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Mobile</th>
                            <th>Action</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{++$loop->index}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->mobile}}</td>
                                <td>5</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div><!--End Row-->

@endsection
