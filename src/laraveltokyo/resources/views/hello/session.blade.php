@extends('layouts.helloapp')

@section('title', 'Session')

@section('menubar')
@parent
セッションページ
@endsection

@section('content')
<p>{{$session_data}}</p>
<form action="/hello/session" method="post">
  @csrf
  <input type="text" name="input">
  <input type="submit" value="send">
</form>
@endsection

@section('footer')
copylght 2020 tuyano.
@endsection