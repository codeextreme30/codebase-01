@props(['date'])

@php
    use Carbon\Carbon;

    $expiry = Carbon::parse($date);
    $daysLeft = now()->diffInDays($expiry, false);

    if ($daysLeft < 0) {
        $color = 'bg-red-600 text-white'; // منتهي
        $label = 'Expired';
    } elseif ($daysLeft <= 7) {
        $color = 'bg-red-100 text-red-800';
        $label = "$daysLeft days left";
    } elseif ($daysLeft <= 30) {
        $color = 'bg-yellow-100 text-yellow-800';
        $label = "$daysLeft days left";
    } else {
        $color = 'bg-green-100 text-green-800';
        $label = "$daysLeft days left";
    }
@endphp

<span class="px-3 py-1 text-sm font-semibold rounded {{ $color }}">
    {{ $expiry->format('Y-m-d') }} ({{ $label }})
</span>
