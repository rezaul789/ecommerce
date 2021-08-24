@extends('admin.inc.app')

@section('title','Manage Users')

@section('main-content')
    <div class="container">
        <div class="d-flex ">
            <div class="p-2 flex-grow-1 ">Add User</div>

            <a href="{{route('staff.users.index')}}" class="btn btn-primary color-dark "><div class="p-2 fa fa-user-plus ">Manage Users</div></a>
        </div>
    </div>

    <div class="row justify-content-center mt-3">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">User Create Form</div>
                    <x-auth-validation-errors></x-auth-validation-errors>
                    @if (session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                    <hr>
                    <form  action="{{route('staff.users.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email Address">
                        </div>
                        <div class="form-group">
                            <label for="mobile">Mobile</label>
                            <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter Your Mobile Number">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
                        </div>
                        <div class="form-group">
                            <label for="confirm_password">Confirm Password</label>
                            <input type="password" class="form-control" id="confirm_password" name="password_confirmation" placeholder="Confirm Password">
                        </div>
                        <div class="form-group text-center">
                            <div class="icheck-material-success icheck-inline">
                                <input type="radio" id="active" name="status" checked value="active">
                                <label for="active">Active</label>
                            </div>
                            <div class="icheck-material-danger icheck-inline">
                                <input type="radio" id="inactive" name="status" value="inactive">
                                <label for="inactive">Inactive</label>
                            </div>
                        </div>
                        <div class="form-group text-right">
                            <button type="submit" class="btn btn-primary px-5"><i class="icon-lock"></i> Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>



@endsection
