@extends('website.layouts.app')

@section('content')
    @push('hero-section')
        @include('website.home.sections.hero')
    @endpush
    @include('website.home.sections.services')
    @include('website.home.sections.team')
    @include('website.home.sections.projects')
    @include('website.home.sections.call-to-action')
@endsection
