@extends('layout.app')
@section('content')
<h1 class="text-center p-3">Comics</h1>
<div class="container">
    <ul class="row gy-2 list-unstyled">
        @foreach($comics as $comic)
        <li class="col-4 alig-items-center">
            <div class="card d-flex align-items-center h-100 text-center">
                <p>
                    {{$comic['title']}}
        
                </p>
                <img src="{{$comic['thumb']}}" alt="">
                <p>
        
                    {{$comic['series']}}
                </p>

            </div>
        </li>
        
        @endforeach
        
    </ul>

</div>
<!-- @dump($comics) -->
@endsection