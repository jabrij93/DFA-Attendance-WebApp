<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Management System</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

</head>

<body>
    <section class="px-6 py-8">
        <nav class="md:flex md:justify-end md:items-center">
            <div class="mt-8 md:mt-0 flex items-center">
                @auth
                <x-dropdown>
                    <x-slot name="trigger">
                        <button class="text-xs font-bold uppercase">Welcome, {{ auth()->user()->name }}!</button>
                    </x-slot>

                    <x-dropdown-item href="/profile" :active="request()->is('admin/posts')">Profile</x-dropdown-item>
                    <x-dropdown-item href="#" :active="request()->is('admin/posts/create')">Settings</x-dropdown-item>

                    <x-dropdown-item href="#" x-data="{}" @click.prevent="document.querySelector('#logout-form').submit()">Log Out</x-dropdown-item>

                    <form id="logout-form" method="POST" action="/logout" class="hidden">
                        @csrf
                    </form>
                </x-dropdown>

                @else
                <a href="/register" class="text-xs font-bold uppercase">Register</a>
                <a href="/login" class="ml-6 text-xs font-bold uppercase">Log In</a>
                @endauth

                <a href="#newsletter" class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">
                    Subscribe for Updates
                </a>
            </div>
        </nav>

        <div id="newsletter" class="bg-gray-100 border border-black border-opacity-5 flex py-8 px-8 mt-16 gap-x-6 text-white">
            <div class="space-x-2">
                <a href="/" class="transition-colors duration-300 text-s font-semibold bg-blue-500 hover:bg-gray-300 rounded-full py-2 px-8">Dashboard</a>
            </div>

            <div class="space-x-2">
                <a href="/staffrecord" class="transition-colors duration-300 text-s font-semibold bg-blue-500 hover:bg-gray-300 rounded-full py-2 px-8">Staff Record</a>
            </div>

            <div class="space-x-2">
                <a href="" class="transition-colors duration-300 text-s font-semibold bg-blue-500 hover:bg-gray-300 rounded-full py-2 px-8">Outstation</a>
            </div>
        </div>

        {{$slot}}

    </section>
</body>

</html>