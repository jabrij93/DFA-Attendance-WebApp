<x-layout>
    <div id="sidebar" class="bg-gray-100 border border-black border-opacity-5 w-96 py-8 px-8 mt-16 text-white">
        <div class="relative flex lg:inline-flex items-center border border-gray-400 rounded-l px-3 py-3 text-white">
            <form method="GET" action="/">
                @csrf

                <input type="text" class="text-black" name="search" placeholder="Search Staff" class="bg-transparent placeholder-gray font-semibold text-sm" value="{{ request('search') }}">
            </form>
        </div>

        <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-4">
            <div class="relative lg:inline-flex bg-blue-500 rounded">
                <x-category-dropdown />
            </div>
        </div>

    </div>
</x-layout>