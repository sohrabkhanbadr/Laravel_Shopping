<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    <ul>
                        <li>
                            <a href="{{ route('projects.index') }}">Projects</a>
                        </li>
                        @can('manage_users')
                        <li>
                            <a href="{{ route('users.index') }}">Users</a>
                        </li>
                        @endcan
                    </ul>


                </div>
            </div>
        </div>
    </div>

</x-app-layout>

