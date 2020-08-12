<x-layout>
    <x-section>What Should I Do?</x-section>
</x-layout>

<div class="flex mb-4">
    <div class="flex-1 bg-gray-500 h-12">
        <div class="content">
            <div class="title m-b-md">
                @if ($link == '')
                    {{ $whatdo ?? 'What should you do?' }}
                @else
                    <a href="{{ $link }}">{{ $whatdo ?? 'What should you do?' }}</a>
                @endif
            </div>
        </div>
    </div>
</div>

<x-layout>
    <x-section>What Should I Do?</x-section>
</x-layout>