@props([
    'type' => 'success',
    'colors' => [
        'success' => 'bg-green-400',
        'error' => 'bg-red-400',
        'warning' => 'bg-orange-400',
    ]
])

<section class="{{ $colors[$type] }} p-4 mb-4">
    <div class="flex justify-between">
        <p>
            {{ $slot }}
        </p>
        <button>&times;</button>
    </div>
</section>
