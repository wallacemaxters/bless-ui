@php
$name = config('bless-ui.namespace') . '::heading.index';
@endphp
<x-dynamic-component :component="$name" tag="h4" {{ $attributes }}>
{{ $slot }}
</x-dynamic-component>
