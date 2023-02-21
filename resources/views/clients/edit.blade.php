<x-app-layout>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <x-heading 
            title="Edit client - {{ $client->user->name }}"
            description="Edit client {{ $client->user->name }} into your system..."
            btn-label="Back to List"
            :route="route('clients.index')"
        />
    </div>

    <form method="POST" action="{{ route('clients.update', $client->id) }}" class="flex flex-col items-center mt-3">
        @csrf
        @method('PUT')

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-96" type="text" name="name" value="{{ $client->user->name ?? old('name') }}" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-96" type="email" name="email" value="{{ $client->user->email ?? old('email') }}" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        {{-- Selected Address --}}
        {{-- <x-select-address /> --}}

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ml-4"> Confirm edit </x-primary-button>
        </div>
    </form>

</x-app-layout>

