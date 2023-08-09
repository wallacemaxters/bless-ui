@props(['theme' => 'normal'])
@php
$config = config('blade-headless-ui.components.select');
@endphp
<div @class($config['wrapper'])>
    <select {{ $attributes->class($config['base'])->class($config['themes'][$theme] ?? null) }}>{{ $slot }}</select>
    <div @class($config['arrow'])>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="feather feather-chevron-down"><path d="m6 9 6 6 6-6"/></svg>
    </div>
</div>