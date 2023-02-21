<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-heading 
                title="Client"
                description="A list of all clients of the system"
                btn-label="Add client"
                :route="route('clients.create')"
            />
            
            <div class="w-full overflow-hidden md:rounded-lg">
                <livewire:table
                    resource="Client"
                    :columns="[
                        ['label' => 'Client',  'column' => 'user.name'],
                        ['label' => 'Email' ,  'column' => 'user.email'],
                        ['label' => 'City'  ,  'column' => 'address.city'],
                        ['label' => 'State' ,  'column' => 'address.state']
                    ]"
                    edit="clients.edit"
                    delete="clients.destroy"
                ></livewire:table>
            </div>
        </div>
    </div>
</x-app-layout>
