<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <x-slot name="sidemenu">
        <x-side-menu-link :href="route('tasks.index')" :active="request()->routeIs('tasks.index')">
            {{ __('Posts') }}
        </x-side-menu-link>
        <x-side-menu-link :href="route('tasks.create')" :active="request()->routeIs('tasks.create')">
            {{ __('Post Create') }}
        </x-side-menu-link>
    </x-slot>

    <div>
        <div class="mx-auto">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
