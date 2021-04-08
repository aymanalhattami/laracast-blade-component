@props([
    'method' => 'POST',
    'action' => ''
])

<form action="{{ $action }}" method="{{ $method === 'GET' ? 'GEt' : 'POST' }}" class="bg-green-500" {{ $attributes }}>
    @csrf

    @if(! in_array($method, ['GET', 'POST']))
        @method($method)
    @endif

    {{ $slot }}
