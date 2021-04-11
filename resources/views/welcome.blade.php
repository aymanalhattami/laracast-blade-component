<x-layouts>
    {{-- <x-flash type="error">
        Error
    </x-flash> --}}

    {{-- <x-flash class="mt-4">
        Done !
    </x-flash> --}}

    {{-- <x-modal title="Deactivate Your Account ?" submit-label="Send" cancel-label="Ignore">

        <x-slot name="init">
            <button @click="on = true">Show Modal</button>
        </x-slot>

        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo nisi sunt totam quae adipisci aperiam optio. Voluptates eaque officiis fugiat, inventore, beatae itaque debitis nesciunt necessitatibus dolore facere nobis rerum!</p>
    </x-modal> --}}

    {{-- <x-modal title="Deactivate Your Account ?" submit-label="Send" cancel-label="Ignore">

        <x-slot name="init">
            <button @click="on = true">Click me</button>
        </x-slot>

        <p>Lorem ipsum dolor</p>
    </x-modal> --}}

    {{-- <x-section>
        <div class="flex justify-end">

        </div>
    </x-section> --}}

    <x-section>
        <x-tabs active="First">
            <x-tab name="First">First content goes here</x-tab>
            <x-tab name="Second">Second content goes here</x-tab>
            <x-tab name="Third">Third content goes here</x-tab>
        </x-tabs>
    </x-section>
</x-layouts>
