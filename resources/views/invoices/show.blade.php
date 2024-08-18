<x-layout>
    <x-slot:heading>Invoice Details</x-slot:heading>
    <div class="mt-6 p-6 bg-white rounded-lg shadow-md">
        <div class="mb-4">
            <h2 class="text-xl font-semibold">Invoice #{{ $invoice->invoice_number }}</h2>
            <p class="text-gray-600">Date: {{ $invoice->invoice_date }}</p>
            <p class="text-gray-600">Due Date: {{ $invoice->due_date}}</p>
        </div>

        <div class="mb-4">
            <h3 class="text-lg font-medium">Client Information</h3>
            <p class="text-gray-700">Name: {{ $invoice->client_name }}</p>
            <p class="text-gray-700">Email: {{ $invoice->client_email }}</p>
        </div>

        <div class="mb-4">
            <h3 class="text-lg font-medium">Item Details</h3>
            <p class="text-gray-700">Description: {{ $invoice->item_description }}</p>
            <p class="text-gray-700">Amount: ${{ number_format($invoice->item_amount, 2) }}</p>
        </div>

        <div class="mb-4">
            <h3 class="text-lg font-medium">Payment Terms</h3>
            <p class="text-gray-700">{{ $invoice->payment_terms }}</p>
        </div>
        <div class="mt-6 flex justify-between items-center">
            <a href="{{ route('invoices') }}" class="text-blue-500 hover:underline">Back to Invoices</a>
            <div class="flex gab-x-6">
                <button type="button" onclick="window.print()" class="rounded-md mt-5 bg-gray-600 px-4 py-2 text-xs font-semibold text-white shadow-sm hover:bg-gray-500">Print</button>
                <a href="{{ route('invoices.download', $invoice->id) }}" class="rounded-md mt-5 bg-gray-600 px-2 py-2 text-xs font-semibold text-white shadow-sm hover:bg-gray-500">Export as PDF</a>
        </div>
    </div>
    <a href="{{ route('invoices.edit', $invoice->id) }}" class="text-red-500 hover:underline">Update Invoice</a>
</div>
</x-layout>
