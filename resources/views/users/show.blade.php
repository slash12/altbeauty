@extends('layouts.admin')

@section('content')
<style>
        
        </style>

<a href="/viewusers" class="btn btn-default"> Return Back</a>
<br><br>
<table id="t01" class="table table-striped">
        <tr>
          <th>UserName</th>
          <th>Email</th> 
          <th>Contact Number</th>
        </tr>
        <tr>
          <td> {{$users->username}}</td>
          <td>{{$users->email}}</td>
          <td>  {{$users->contactnum}}
            </td>
        </tr>
          </table>
@endsection
    
  

