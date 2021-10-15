

@extends('layout.main')

@section('container')

@foreach ($posts as $post)

<article class="mb-5">



<h2>
    <a href="/s/{{ $post["slug"] }}">{{ $post["title"] }} </a>
</h2>
<h5>By : {{ $post["autor"] }}</h5>
<p>{{ $post["body"] }}</p>


</article>
@endforeach
@endsection
