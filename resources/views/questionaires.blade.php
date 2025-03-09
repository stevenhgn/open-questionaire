<x-layouts.app title="Questionaires">
    @if (Auth::check())
        {{Auth::user()->name}}
    @elseif (Auth::guest())
        Guest
    @endif
    - Welcome to questionaire page
    <livewire:questionaire-content />
</x-layouts.app>