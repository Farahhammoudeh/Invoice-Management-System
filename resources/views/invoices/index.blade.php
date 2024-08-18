<x-layout>
<x-slot:heading>Dashboard</x-slot:heading>
                <div class="mt-4">
                    @foreach ($invoices as $invoice)
                        <div class="p-4 mb-4 bg-gray-100 rounded shadow">
                            <h2 class="text-xl font-semibold">{{ $invoice->invoice_number }}</h2>
                            <p class="text-gray-700">Amount: ${{ number_format($invoice->item_amount, 2) }}</p>
                            <a href="{{ route('invoices.show', $invoice->id) }}" class="text-blue-500 hover:underline">View Details</a>
                        </div>
                    @endforeach
                </div>
        {{ $invoices->links() }} 
</x-layout>
