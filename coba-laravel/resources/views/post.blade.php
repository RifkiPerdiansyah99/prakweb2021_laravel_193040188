

@extends('layout.main')

@section('container')

<article>
<h2>{{ $post["title"] }}</h2>
<h5>{{ $post["autor"] }}</h5>
<P>{{ $post["body"] }}</P>
</article>

<a href="/blog">Back to Post</a>
@endsection
