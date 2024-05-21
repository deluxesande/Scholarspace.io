<div class="p-2 md:p-0 md:py-4">
    <x-slot name="header">
        <h2 class="text-gray-800 flex items-center gap-4 leading-tight">
            <i class="fas text-green-500 fa-shopping-bag"></i>
            {{ __('New Order') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl relative h-full mx-auto">
        <div class="flex sm:mx-3 lg:mx-4 flex-col h-full md:flex-row">
            <div class="bg-white p-6 relative md:w-1/3 rounded-lg shadow-sm">
                <!-- About icon -->
                <a href="#" class="absolute top-0 right-0 bg-blue-500 text-white p-2 rounded-bl-lg rounded-tr-lg hover:bg-blue-600">
                    <i class="fas h-4 w-4 center fa-info-circle"></i>
                </a>

                <h3 class="text-lg font-semibold mb-4">Create New Order</h3>
                <form wire:submit.prevent="createOrder">
                    <div class="mb-4">
                        <input type="text" wire:model="title" class="w-full p-2 border border-gray-300 rounded-lg"
                               placeholder="Title">
                        @error('title') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-4">
                        <textarea wire:model="description" class="w-full p-2 border border-gray-300 rounded-lg"
                                  placeholder="Description"></textarea>
                        @error('description') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-4">
                        <input type="number" wire:model="total_price"
                               class="w-full p-2 border border-gray-300 rounded-lg" placeholder="Total Price">
                        @error('total_price') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <button type="submit" class="w-full py-2 bg-blue-500 text-white font-semibold rounded-lg">Create
                        Order
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>