<x-layouts>
    <x-section>
        <x-form action="/comments" method="PATCH" class="bg-red-500">

            <div class="form-group">
              <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="body">Body</label>
              <textarea class="border border-gray-400 p-2 w-full" name="body" id="body" rows="3">{{ 'Hi aymen' }}</textarea>
            </div>

            <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">Submit</button>
        </x-form>
    </x-section>
</x-layouts>
