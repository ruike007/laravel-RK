@extends('app')

@section('content')
    <div class="jumbotron">
        <div class="container">
            <div class="media">
                <div class="media-left">
                <a href = "#">
                    <img class="media-object img-circle" alt="64x64" src="{{$discussion->user->avatar}}" style="width:64px ;height:64px">
                </a>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">{{ $discussion->title }}</h4>
                    {{$discussion->user->name}}  <a class="bun btn-primary btn-lg pull-right" href="#" role="button">修改帖子</a>
                </div>
            </div>

        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-9" role="main">
                {{ $discussion ->body }}
            </div>
        </div>
    </div>

@stop