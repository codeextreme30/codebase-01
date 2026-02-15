@props([
    'placeholder' => 'Search...',
    'name' => 'search',
    'value' => '',
    'autofocus' => false
])

<div class="relative w-full">
    <input
        type="text"
        name="{{ $name }}"
        value="{{ $value }}"
        placeholder="{{ $placeholder }}"
        @if($autofocus) autofocus @endif
        {{ $attributes->merge([
            'class' => 'w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none'
        ]) }}
    />

    <span class="absolute right-3 top-2.5 text-gray-400">
        
    </span>
</div>
