@props([
    'label' => '',
    'name',
    'options' => [],
    'selected' => null
])

<div class="mb-4">
    @if($label)
        <label class="block mb-1 text-sm font-medium text-gray-700">
            {{ $label }}
        </label>
    @endif

    <select
        name="{{ $name }}"
        {{ $attributes->merge([
            'class' => 'w-full px-3 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500'
        ]) }}
    >
        @foreach($options as $value => $text)
            <option value="{{ $value }}"
                {{ old($name, $selected) == $value ? 'selected' : '' }}>
                {{ $text }}
            </option>
        @endforeach
    </select>

    @error($name)
        <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
    @enderror
</div>
