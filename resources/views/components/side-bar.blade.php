<div x-show="menuVisibility" class="relative z-40 md:hidden" role="dialog" aria-modal="true">
    <div 
        x-show="menuVisibility"
        @click.outside="menuVisibility = false"
        x-transition:enter="transition-opacity ease-linear duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition-opacity ease-linear duration-300"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 bg-gray-600 bg-opacity-75">
    </div>
    
    <div class="fixed inset-0 z-40 flex">

        <div
            x-show="menuVisibility"
            x-transition:enter="transition ease-in-out transform duration-300"
            x-transition:enter-start="-translate-x-full"
            x-transition:enter-end="translate-x-0"
            x-transition:leave="transition ease-in-out transform duration-300"
            x-transition:leave-start="translate-x-0"
            x-transition:leave-end="-translate-x-full"
            class="relative flex flex-col flex-1 w-full max-w-xs pt-5 pb-4 bg-gray-800">
            <div 
                x-show="menuVisibility"
                @click.outside="menuVisibility = false"
                x-transition:enter="transition-opacity ease-linear duration-300"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition-opacity ease-linear duration-300"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                class="absolute top-25 right-0 pt-2 -mr-12">
                <button @click="menuVisibility = false" type="button" class="h-10 w-10 text-white flex items-center justify-center rounded-full focus:outline">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </button>
            </div>

            <x-logo />
            
            <div class="mt-5 h-0 flex-1 overflow-y-auto">
                <x-side-bar-items />
            </div>
        </div>
    </div>
</div>

<div class="hidden md:fixed md:inset-y-0 md:flex md>w-64 md:flex-col">
    <div class="flex px-3 py-5 min-h-0 flex-1 flex-col bg-gray-800">

        <x-logo />

        <div class="flex flex-1 flex-col overflow-y-auto">
            <x-side-bar-items />
        </div>
    </div>
</div>