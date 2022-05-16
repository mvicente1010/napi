@extends('layout')
@section('title','Api')
@section('content')
	<h1>Api Codigo Postal</h1>
	<form method="POST" action="{{ route('api') }}">
		@csrf
		<input type="text" name="codigo" placeholder="Codigo Postal ...." value="{{ old('codigo') }}" ><button>Solicitar</button>
		{!! $errors->first('codigo', '<br><small>:message</small>') !!}<br>
		<pre>{{ isset($response)? var_dump($response) :  (isset($codigo) ? $codigo.' -> Codigo Postal no Valido' : '') }}</pre>
	</form>
@endsection