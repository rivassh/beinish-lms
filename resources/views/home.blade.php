@extends('layouts.app')

@section('content')
<section class="hero">
<div class="hero-gaze" aria-hidden="true"></div>
<div class="hero-content">
<h1 data-i18n="hero.title">{{ config('theme.site.name') }}</h1>
<p data-i18n="hero.subtitle">Starter template &mdash; replace with real content.</p>
<a href="{{ route('home') }}" class="btn btn-primary" data-i18n="hero.cta">Get Started</a>
</div>
</section>
@endsection
