@extends('layouts.app')

@section('title')
CV Home
@endsection

@section('style')
h1{
  color: red;
  font-weight: bold
}
@endsection

@section('content')
<header>
    <h1> Francisco Blanco </h1>
</header>
<section class="exps">
    <article class="exp actual"></article>
    <article class="exp"></article>
</section>
<section class="edus">
    <article class="edu"></article>
</section>
<aside>
    <address></address>
    <article></article>
</aside>
@endsection