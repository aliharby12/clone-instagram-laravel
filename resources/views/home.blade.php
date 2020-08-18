@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">User Profile</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>You are logged in {{ $user->name }} !</h1><br>
                    <p>{{ $user->profile->title }}</p><br>
                    <p>{{ $user->profile->description }}</p><br>
                    <a href="#"><p>{{ $user->profile->url }}</p></a> <br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
