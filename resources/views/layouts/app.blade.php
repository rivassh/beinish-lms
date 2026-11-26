@php
    $site = config('theme.site', []);
    $tokens = config('theme.tokens', []);
    $nav = config('theme.nav', []);
    $locale = $site['locale'] ?? 'fa';
    $direction = $site['direction'] ?? 'rtl';
@endphp
<!DOCTYPE html>
<html lang="{{ $locale }}" dir="{{ $direction }}">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>{{ $site['name'] ?? 'Portfolio' }}</title>
<link rel="stylesheet" href="{{ asset('assets/css/base.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/tokens.css') }}">
@php
    $locales = config('theme.locales', ['fa', 'en', 'ar']);
    $localeData = [];
    foreach ($locales as $l) {
        $path = base_path('packages/portfolio-theme/locales/' . $l . '.json');
        if (file_exists($path)) {
            $localeData[$l] = json_decode(file_get_contents($path), true);
        }
    }
@endphp
<script id="locale-data" type="application/json">{{ json_encode($localeData, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) }}</script>
<style>
:root {
    @foreach ($tokens as $key => $value)
    --token-{{ $key }}: {{ $value }};
    @endforeach
}
body { background: var(--token-bg); color: var(--token-text); }
</style>
</head>
<body>
@include('partials.nav')
<main>{{ $slot ?? yield('content') }}</main>
@include('partials.footer')
<script src="{{ asset('assets/js/theme.js') }}"></script>
@stack('scripts')
</body>
</html>
