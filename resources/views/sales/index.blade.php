<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-heading 
                title="Sales"
                description="A list of all sales of the system"
            />
            
            <div class="w-full overflow-hidden md:rounded-lg">
                <livewire:table
                    resource="Sale"
                    :columns="[
                        ['label' => 'Seller' , 'column' => 'seller.user.name'],
                        ['label' => 'Client' , 'column' => 'client.user.name'],
                        ['label' => 'Sold at', 'column' => 'sold_at'],
                        ['label' => 'Status' , 'column' => 'status'],
                        ['label' => 'Total Amount', 'column' => 'total_amount'],
                    ]"
                ></livewire:table>
            </div>
        </div>
    </div>
</x-app-layout>
