@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img class="w-100" src="/storage/{{$post->image}}" alt="image-file">
        </div>
        <div class="col-4">
            <div class="mb-3">
                <div class="d-flex align-items-center">
                    <div class="pr-3">
                        <img style="max-width:40px" class="rounded-circle w-100" src="{{$post->user->profile->profileImage()}}" alt="profile pic">
                    </div>
                    <div class="d-flex">
                        <h5 class="pr-3"><a href="/profile/"><span class="text-dark">{{$post->user->username}}</span></a></h5>
                        <small>⚫</small><a class="pl-3 font-weight-bold" href="#">Follow</a>
                    </div>
                </div>
            </div>

            <p><span class="font-weight-bold"><a href="/profile/{{$post->user->id}}"><span class="text-dark">{{$post->user->username}}</span></a></span> {{$post->caption}}</p>
        </div>
    </div>
</div>
@endsection