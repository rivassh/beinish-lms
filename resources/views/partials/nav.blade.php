<header class="nav-bar">
<div class="container nav-wrap">
<div class="logo">{{ $site['name'] ?? 'Portfolio' }}</div>
<nav class="nav-menu">
<ul class="nav-list">
@foreach ($nav as $item)
<li><a href="{{ $item['path'] ?? '#' }}" data-i18n="nav.{{ $item['label'] }}">{{ $item['label'] }}</a></li>
@endforeach
</ul>
</nav>
<div class="lang-switch" id="lang-switch">
@foreach (config('theme.locales', ['fa','en','ar']) as $l)
<a href="#" data-locale="{{ $l }}">{{ strtoupper($l) }}</a>
@endforeach
</div>
</div>
</header>
