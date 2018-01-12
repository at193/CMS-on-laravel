@extends('layouts.app')

@section('content')

   @if(count($errors)>0)
      <ul class="list-group">
        @foreach($errors->all() as $error)
            <li class="list-group-item text-danger">
              {{ $error }}
            </li>
        @endforeach
      </ul>
   @endif

   <div class="panel panel-default">
      <div class="panel-heading">
          Edit your profile
      </div>

       <div class="panel-body">
          <form action='{{Route('user.profile.update')}}' method="post" enctype="multipart/form-data">
              {{ csrf_field() }}

              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" value='{{ $user->name}}' name="name" class="form-control">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" value='{{ $user->email}}' class="form-control">
              </div>
              <div class="form-group">
                <label for="password">New password</label>
                <input type="password" name="password" class="form-control">
              </div>
              <div class="form-group">
                <label for="avatar">Upload new avatar</label>
                <input type="file" name="avatar" class="form-control">
              </div>
              <div class="form-group">
                <label for="facebook">Facebook profile</label>
                <input type="text" value='{{ $user->profile->facebook}}' name="facebook" class="form-control">
              </div>
              <div class="form-group">
                <label for="youtube">Youtube profile</label>
                <input type="text" value='{{ $user->profile->youtube}}' name="youtube" class="form-control">
              </div>
              <div class="form-group">
                <label for="about">About</label>
                <textarea name="about" id="about" class="form-control" value='{{ $user->profile->about}}' rows="8" cols="80"></textarea>
              </div>

              <div class="form-group">
                 <div class="text-center">
                   <button class="btn btn-success" type="submit">Update Profile</button>
                 </div>
              </div>

          </form>
       </div>
   </div>

@stop
