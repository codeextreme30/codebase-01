@props([
    'id',
    'title' => ''
])

<div id="{{ $id }}" class="fixed inset-0 hidden items-center justify-center bg-black bg-opacity-50 z-50">

    <div class="bg-white rounded-lg shadow-lg w-full max-w-lg p-6">

        {{-- Header --}}
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-lg font-semibold">{{ $title }}</h2>
            <button onclick="closeModal('{{ $id }}')" class="text-gray-500">&times;</button>
        </div>

        {{-- Body --}}
        <div>
            {{ $slot }}
        </div>

    </div>
</div>


<script>
function openModal(id){
    document.getElementById(id).classList.remove('hidden');
    document.getElementById(id).classList.add('flex');
}

function closeModal(id){
    document.getElementById(id).classList.remove('flex');
    document.getElementById(id).classList.add('hidden');
}
</script>
