@extends('templates.main')
@section('main')
    <h1>Гостевая книга</h1>

    <x-feedback :posts="$posts" />
    <x-form/>
@endsection

