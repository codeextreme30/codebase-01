@props([
    'type' => 'info'
])

@php
    $styles = [
        'success' => 'bg-green-100 text-green-800 border-green-400',
        'error' => 'bg-red-100 text-red-800 border-red-400',
        'warning' => 'bg-yellow-100 text-yellow-800 border-yellow-400',
        'info' => 'bg-blue-100 text-blue-800 border-blue-400',
    ];

    $class = $styles[$type] ?? $styles['info'];
@endphp

<div class="border-l-4 p-4 mb-4 rounded {{ $class }}">
    {{ $slot }}
</div>
