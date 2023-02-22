@push('customer-scripts')
    <script src="https://cdn.jsdelivr.net/npm/vega@5.22.1"></script>
    <script src="https://cdn.jsdelivr.net/npm/vega-lite@5.6.0"></script>
    <script src="https://cdn.jsdelivr.net/npm/vega-embed@6.21.0"></script>

    <style media="screen">
        /* Add space between Vega-Embed links */
        .vega-actions a {
            margin-right: 5px;
        }
    </style>
@endpush

<div class="py-12">
    <div x-data="dashboard">
        <div class="flex flex-col min-h-[calc(100vh - 150px)] justify-between mx-auto max-w-7xl px-6 lg:px-8">
            <x-heading 
                title="Dashboard"
                description="Welcome to your dashboard, using the chat to generate your report..."
            />

            <div class="flex flex-1 w-full py-4 overflow-x-auto" x-ref="vegacontainer">
                <div id="vis"></div>
            </div>

            <div class="absolute flex-col items-start w-full space-y-2 bottom-10 max-w-7xl bottom-flex">
                <textarea
                    wire:model.debounce.500ms="question"
                    class="w-full @error('question') border-red-500 @else border-gray-300 dark:border-gray-700 @enderror dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
                    placeholder="Type your message here..."
                ></textarea>

                @error('question') 
                    <span class="text-xs text-red-500"> {{ $message }} </span>
                @enderror

                <x-primary-button class="inline-flex flex-row items-center gap-2" @click="generateReport()">
                    Generate Report
                    <svg x-show="loading" class="w-5 h-5 -ml-1 text-gray-900 animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                </x-primary-button>
            </div>
        </div>
    </div>
</div>