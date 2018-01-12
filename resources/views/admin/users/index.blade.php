@extends('layouts.app')

@section('content')

  <div class="panel panel-default">
     <div class="panle-body">
       <table class="table table-hover">

         <thead>
           <th>
             Image
           </th>
           <th>
             Name
           </th>
           <th>
             Permissions
           </th>
           <th>
             Delete
           </th>
         </thead>

         <tbody>
           @foreach($users as $user)
             <tr>
               <td><img src="{{asset($user->profile->avatar)}}" width="60px" height="60px" style="border-radius:50%" alt=""></td>

               <td>
                 {{$user->name}}
               </td>

               <td>
                @if($user->admin)
                <a href="{{ route('user.not_admin',[$user->id])}}" class="btn btn-xs btn-danger">Remove admin</a>
                @else
                <a href="{{ route('user.admin',[$user->id])}}" class="btn btn-xs btn-success">Make admin</a>
                @endif
               </td>

               <td>
                 @if(Auth::id() !== $user->id)
                <a href="{{ route('user.delete',[$user->id])}}" class="btn btn-xs btn-danger">Delete User</a>
                @endif
               </td>
             </tr>
           @endforeach
         </tbody>

       </table>
     </div>
  </div>

@stop
