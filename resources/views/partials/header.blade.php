<header class="bg-gray-700 text-white px-6 py-4" x-data="{ open: false }">
    <div class="flex justify-between items-center">
        <h1 class="font-bold tracking-widest uppercase">Laracast</h1>

        <nav class="hidden md:flex">
            <x-nav-link route="home">Home</x-nav-link>
            <x-nav-link route="about">About</x-nav-link>
            <x-nav-link route="testimonials">Testimonials</x-nav-link>
            <x-nav-link route="contact">Contact</x-nav-link>
        </nav>

        <div class="md:hidden">
            <button @click="open = ! open" x-show="! open">
                Menu
            </button>

            <button @click="open = ! open " x-show="open">
                Hide
            </button>
        </div>

        <div class="hidden md:block">
            <x-dropdown alignment="right">
                <x-slot name="trigger">
                    <button>Click Me</button>
                </x-slot>

                <x-dropdown-link href="/">One</x-dropdown-link>
                <x-dropdown-link href="/">Two</x-dropdown-link>
                <x-dropdown-link href="/">Three</x-dropdown-link>
            </x-dropdown>
        </div>
    </div>


    <div x-show="open" class="mt-4 bg-gray-700 block">
        <a href="/" class="block p-2 {{ Request::is('/') ? 'bg-blue-500 rounded' : '' }}" >Home</a>
        <a href="/" class="block p-2" >About</a>
        <a href="/" class="block p-2" >Testimonials</a>
        <a href="/" class="block p-2" >Contact</a>
    </div>
</header>
