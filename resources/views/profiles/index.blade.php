@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="#" class="rounded-circle w-100">
        </div>
        <div class="col-9 pt-5">
          <div class="d-flex justify-content-between align-items-baseline">
            <h1>{{ $user->name }}</h1>
          </div>

              @can ('update', $user->profile)
                <a href="/profiles/{{ $user->id }}/edit">Edit Profile</a>
              @endcan



            <div class="d-flex">
                <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="pr-5"><strong>55K</strong> followers</div>
                <div class="pr-5"><strong>500</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>

    <div class="row pt-5">
        @foreach($user->posts as $post)
            <div class="col-4 pb-4">
                <a href="/p/{{ $post->id }}">
                    <img src="/storage/{{ $post->image }}" class="w-100 rounded-circle">
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
