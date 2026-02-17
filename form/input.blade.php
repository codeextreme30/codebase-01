@props([
    'label' => '',
    'name',
    'type' => 'text',
    'value' => '',
    'required' => false
])

<div class="mb-4">
    @if($label)
        <label class="block mb-1 text-sm font-medium text-gray-700">
            {{ $label }}
        </label>
    @endif

    <input
        type="{{ $type }}"
        name="{{ $name }}"
        value="{{ old($name, $value) }}"
        @if($required) required @endif
        {{ $attributes->merge([
            'class' => 'w-full px-3 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500'
        ]) }}
    />

    @error($name)
        <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
    @enderror
</div>
