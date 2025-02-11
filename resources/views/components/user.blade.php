<x-layout title="{{ $title }}">
    <style>
        .page-content {
            min-height: 100vh;
        }
    </style>
    <x-navbar></x-navbar>

    <main id="page-toggled" class="page-wrapper">
        {{-- <x-sidebar></x-sidebar> --}}
        <div class="page-content">
            {{ $slot }}
        </div>
    </main>
    {{-- <x-footer></x-footer> --}}

</x-layout>
