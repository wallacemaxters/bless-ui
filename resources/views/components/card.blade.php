@props(['theme' => 'default', 'href' => null])
@php
$config = config('blade-headless-ui.ui.card');
$tag = $href === null ? 'div' : 'a';

@endphp
<{{ $tag }}
    {{ $attributes->merge(['href' => $href])
        ->class($config['base'])
        ->class($config['themes'][$theme]) }}>

    {{ $content ?? $slot }}
</{{ $tag }}>