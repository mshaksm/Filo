@extends ('layouts.app')

@section('content')
<a href="/posts" class="btn btn-default">Go Back</a>
<div>
<h1>{{$post->title}}</h1>
</div>
<br><br>
<div>
    {!!$post->body!!}
</div>
<hr>
<small>Written on {{$post->created_at}}</small>
<hr>
<a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
{!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
{{form::hidden('_method', 'DELETE')}}
{{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
{!!Form::close()!!}
@endsection
