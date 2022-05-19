@extends('layouts.app')

@section('content')
        <div class="container-fluid">
            <div class="row">
                <table class="table table-hover table-dark">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Created</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($posts as $post)
                        <tr>
                            <td><a href="{{route("admin.posts.show", $post)}}">{{ $post->title }}</a></td>
                            <td>{{ $post->author}}</td>
                            <td>{{ $post->created_at }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td>Non ci sono posts</td>
                        </tr>
                            
                        @endforelse                       
                    </tbody>
                </table>
            </div>
        </div>    
@endsection

