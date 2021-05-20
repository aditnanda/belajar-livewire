<div>
    {{-- In work, do what you enjoy. --}}
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form wire:submit.prevent="saveData">

            <div>
                <x-jet-label for="nama" value="{{ __('Nama') }}" />
                <x-jet-input id="nama" class="block mt-1 w-full" type="text" wire:model="nama" :value="old('nama')" />
            </div>

           

            <div class="flex items-center justify-end mt-4">
             
                <x-jet-button class="ml-4" >
                    {{ __('Tambah') }}
                </x-jet-button>
            </div>
        </form>
        <div>
            @foreach ($students as $item)
                {{$item->nama}} &nbsp; <button wire:click="editData('{{$item->id}}')">Edit</button> &nbsp; <button wire:click="deleteData('{{$item->id}}')">Hapus</button>
                <br>
            @endforeach

            {{$students->links()}}
        </div>
    </x-jet-authentication-card>
</div>
