@extends('layout.app')
@section('content')
<h1 class="text-center p-3">Comics</h1>
<ul>
    @foreach($comics as $comic)
    <li>
        {{$comic['title']}}
        <img src="{{$comic['thumb']}}" alt="">
        {{$comic['series']}}
    </li>
    
    @endforeach
    
</ul>
@dump($comics)
@endsection