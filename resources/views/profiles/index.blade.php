@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3">
            <img class="rounded-circle w-75" src="{{$user->profile->profileImage()}}">
        </div>
        <div class="col-9">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-baseline">
                <h2>{{$user->username}}</h2>
               <follow-button user-id="{{$user->id}}" follows="{{$follows}}"></follow-button>
                </div>
               
                @can('update',$user->profile)
                <a href="/p/create">Add new post</a>
                @endcan

            </div>
            @can('update',$user->profile)
            <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
            @endcan
            <div class="d-flex">
                <div class="pr-3"><strong>{{$user->posts->count()}}</strong> posts</div>
                <div class="pr-3"><strong>{{$user->profile->followers->count()}}</strong> followers</div>
                <div class=""><strong>{{$user->following->count()}}</strong> following</div>
            </div>
            <div class="pt-3">
                <div><strong>{{$user->profile->title}}</strong></div>
                <div>{{$user->profile->description}}</div>
                <div><a style="text-decoration:none" href="#">{{$user->profile->url}}</a></div>
            </div>

        </div>
    </div>
    <div class="row pt-5">
        @foreach($user->posts as $post)
        <div class="col-4 pb-4">
            <a href="/p/{{$post->id}}">
                <img class="w-100" src="/storage/{{$post->image}}">
            </a>
        </div>
        @endforeach

    </div>

</div>
@endsection