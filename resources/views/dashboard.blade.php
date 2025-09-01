<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h3 class="text-lg font-medium text-gray-900 mb-4">
                    Welcome, {{ auth()->user()->name }}!
                </h3>

                @if(auth()->user()->role === 'admin')
                    <p class="mb-2">You are logged in as an <strong>Admin</strong>.</p>
                    <a href="{{ route('admin.courses.index') }}" class="inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                        Manage Courses
                    </a>

                @elseif(auth()->user()->role === 'student')
                    <p class="mb-2">You are logged in as a <strong>Student</strong>.</p>
                    <a href="{{ route('courses.index') }}" class="inline-block bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
                        View Available Courses
                    </a>

                @else
                    <p>{{ __("You're logged in!") }}</p>
                @endif
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <p class="text-gray-600">
                    Use the navigation above to access your courses, profile, and other features.
                </p>
            </div>

        </div>
    </div>
</x-app-layout>
