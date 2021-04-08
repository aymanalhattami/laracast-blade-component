@props([
    'alignment' => 'left'
])

@php
    $alignmentClasses = [
        'left' => 'left-0',
        'right' => 'right-0'
    ];
@endphp

<div class="relative" x-data="{ open: false }" @click.away="open = false">
    <span @click="open = ! open" class="w-auto">
        {{ $trigger }}
    </span>

    <div
        class="absolute {{ $alignmentClasses[$alignment] }} bg-white rounded shadow-md py-2 mt-1 w-40"
        x-show="open"
        x-transition:enter="transition transform duration-600"
        x-transition:enter-start="opactiy-0 scale-50"
        x-transition:enter-end="opactiy-100 scale-100"
        x-transition:leave="transition transform duration-600"
        x-transition:leave-start="opactiy-100"
        x-transition:leave-end="opactiy-0"
    >
        {{ $slot }}
    </div>
</div>
