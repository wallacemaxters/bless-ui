@php
$name = config('blade-headless-ui.namespace') . '::heading.index';
@endphp
<x-dynamic-component :component="$name" tag="h1" {{ $attributes }}>
{{ $slot }}
</x-dynamic-component>
