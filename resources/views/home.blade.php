@extends('layout.app')

@section('content')
    @include('components.banner')
    @include('components.class')
    @include('components.location')
    @include('components.signin')
    @include('components.context')
    @include('components.about')
    @include('components.endpage')
@endsection
