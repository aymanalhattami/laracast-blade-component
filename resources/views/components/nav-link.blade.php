@props(['route'])

@php
    $classes = Request::routeIs($route) ? 'text-blue-500 underline' : 'hover:text-blue-500'
@endphp

<a href="{{ route($route) }}" class="px-6 hover:underline hover:text-blut-500 {{ $classes }}" href="/">
    {{ $slot }}
</a>
