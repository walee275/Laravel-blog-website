@props(['text_color', 'bg_color'])
<a {{ $attributes }} class="rounded-xl px-3 py-1 text-base" style="color: {{ $text_color }}; background:{{ $bg_color }};">
    {{ $slot }}
</a>
