@extends('layouts.app')

@section('content')
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">                  
                    <h4>
                        {{ $post->title }}
                    </h4>
                    <h4>
                        {{ $post->created_at }}
                    </h4><h4>
                        {{ $post->author}}
                    </h4>
                </div>
                <div class="col-12">
                    <img src="{{ $post->image_url }}" alt="{{$post->title}}">
                </div>
                <div class="col-12">
                    <div class="card-text">
                        {{ $post->content }}
                    </div>
                </div>
            </div>
        </div>    
@dd($post)

@endsection
