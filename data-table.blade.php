@props([
    'headers' => [],
    'paginator' => null
])

<div class="bg-white shadow rounded-lg overflow-hidden">

    {{-- Table --}}
    <table class="min-w-full border-collapse">
        <thead class="bg-gray-100">
            <tr>
                @foreach($headers as $header)
                    <th class="px-4 py-3 text-left text-sm font-semibold text-gray-600">
                        {{ $header }}
                    </th>
                @endforeach
            </tr>
        </thead>

        <tbody class="divide-y divide-gray-200">
            {{ $slot }}
        </tbody>
    </table>

    {{-- Pagination --}}
    @if($paginator)
        <div class="p-4 border-t">
            {{ $paginator->links() }}
        </div>
    @endif

</div>
