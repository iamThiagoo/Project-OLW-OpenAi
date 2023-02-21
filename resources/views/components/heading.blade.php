    <div class="sm:flex sm:items-center pb-8">
    <div class="sm:flex-auto">
        <h1 class="text-xl font-semibold text-gray-900 dark:text-gray-400"> {{ $title }} </h1>
        <p class="mt-2 text-sm text-gray-700 dark:text-gray-100">{{ $description }}</p>
    </div>
    @if (isset($btnLabel))
        <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
            <a
                href="{{ $route }}" 
                class="inline-flex items-center justify-center transition delay-150 rounded-md border border-slate-500 hover:opacity-100 text-white px-5 py-1">
                {{ $btnLabel }}
            </a>
        </div>
    @endif
</div>