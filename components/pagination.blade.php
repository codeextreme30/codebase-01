@props(['paginator'])

@if ($paginator->hasPages())
    <div class="mt-4">
        {{ $paginator->links('pagination::tailwind') }}
    </div>
@endif
