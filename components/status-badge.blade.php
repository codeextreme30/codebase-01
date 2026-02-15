@props(['status'])

@php
    $colors = [
        'pending' => 'bg-yellow-100 text-yellow-800',
        'approved' => 'bg-blue-100 text-blue-800',
        'received' => 'bg-green-100 text-green-800',
        'cancelled' => 'bg-red-100 text-red-800',
        'shipped' => 'bg-indigo-100 text-indigo-800',
    ];

    $class = $colors[strtolower($status)] ?? 'bg-gray-100 text-gray-800';
@endphp

<span class="px-3 py-1 text-sm font-semibold rounded-full {{ $class }}">
    {{ ucfirst($status) }}
</span>
