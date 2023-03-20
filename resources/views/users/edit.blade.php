@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Edit User {{ $user->name }}</h1>
                <form action="{{ route('users.update', $user->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="group-form mt-2">
                        <label for="">Name: </label>
                        <input type="text" name="name" class="form-control" id="" value="{{ $user->name }}">
                    </div>
                    <div class="group-form mt-2">
                        <label for="">Email: </label>
                        <input type="email" disabled name="email" class="form-control" id="" value="{{ $user->email }}">
                    </div>
                    <div class="group-form mt-2">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>

                    <div class="group-form">
                        <label for="">Roles: </label>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="roles[]" value="super_admin" {{ $user->hasRole('super_admin') ? 'checked' : '' }} id=""> Super admin
                            </label>
                        </div>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="roles[]" value="user" {{ $user->hasRole('User') ? 'checked' : '' }} id=""> User
                            </label>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
