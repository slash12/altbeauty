@extends('layouts.admin')

@section('content')
<link rel="stylesheet" href="{{asset('css/dataTables.bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('css/responsive.bootstrap.min.css')}}">


{{-- <div class="row">
    <div class="col-lg-12">
        <h1 class="page-header text-center">View Users</h1>
    </div>
    <!-- /.col-lg-12 -->
</div> --}}

<table id="tlbuser" style="width:100%" class="table table-striped">
    <thead>
        <tr>
            <th>
                First Name
            </th> 
            <th>
                Last Name
            </th>
            <th>
                Actions
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>
                {{$user->firstname}}
            </td>
            <td>
                {{$user->lastname}}
            </td>
            <td>
                <a href="/users/show/{{$user->id}}" class="btn btn-primary">Show</a> &nbsp;|&nbsp;
                <button class="btn btn-info"  data-userid={{$user->id}} data-toggle="modal" data-mycontactnum="{{$user->contactnum}}" data-mylastname="{{$user->lastname}}"data-myemail="{{$user->email}}" data-target="#edit">Edit</button>
                &nbsp;|&nbsp;
                <button class="btn btn-danger" data-userid={{$user->id}} data-toggle="modal" data-target="#delete"> Delete</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


@endsection

