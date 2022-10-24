<x-dropdown>
    <x-slot name="trigger">
        <button class="py-2 pl-3 pr-9 text-sm font-semibold w-full lg:w-32 text-left flex lg:inline-flex">
            Category
            <x-icon name="down-arrow" class="absolute pointer-events-none" style="right: 12px;" />
        </button>
    </x-slot>

    <x-dropdown-item href="#"> All </x-dropdown-item>
    <x-dropdown-item href="#"> Permanent </x-dropdown-item>
    <x-dropdown-item href="#"> Part time </x-dropdown-item>
</x-dropdown>