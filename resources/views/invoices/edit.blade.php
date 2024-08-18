<x-layout>
  <x-slot:heading>Update Invoice</x-slot:heading>

  <form action="{{ route('invoices.update', $invoice->id) }}" method="POST">
      @csrf
      @method('PATCH')
      <div class="space-y-12">
          <div class="border-b border-gray-900/10 pb-12">
              <h2 class="text-base font-semibold leading-7 text-gray-900">Invoice Information</h2>
              <p class="mt-1 text-sm leading-6 text-gray-600">Update the details for the invoice.</p>

              <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                  <div class="sm:col-span-3">
                      <label for="invoice-number" class="block text-sm font-medium leading-6 text-gray-900">Invoice Number</label>
                      <div class="mt-2">
                          <input type="text" name="invoice_number" id="invoice_number" value="{{ old('invoice_number', $invoice->invoice_number) }}" autocomplete="off" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="INV-001">
                          @error('invoice_number')
                          <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                          @enderror
                      </div>
                  </div>

                  <div class="sm:col-span-3">
                      <label for="invoice_date" class="block text-sm font-medium leading-6 text-gray-900">Invoice Date</label>
                      <div class="mt-2">
                          <input type="date" name="invoice_date" id="invoice_date" value="{{ old('invoice_date', $invoice->invoice_date) }}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                          @error('invoice_date')
                          <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                          @enderror
                      </div>
                  </div>

                  <div class="sm:col-span-6">
                      <label for="client_name" class="block text-sm font-medium leading-6 text-gray-900">Client Name</label>
                      <div class="mt-2">
                          <input type="text" name="client_name" id="client_name" value="{{ old('client_name', $invoice->client_name) }}" autocomplete="off" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="John Doe">
                          @error('client_name')
                          <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                          @enderror
                      </div>
                  </div>

                  <div class="sm:col-span-6">
                      <label for="client_email" class="block text-sm font-medium leading-6 text-gray-900">Client Email</label>
                      <div class="mt-2">
                          <input type="email" name="client_email" id="client_email" value="{{ old('client_email', $invoice->client_email) }}" autocomplete="off" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="john.doe@example.com">
                          @error('client_email')
                          <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                          @enderror
                      </div>
                  </div>

                  <div class="sm:col-span-6">
                      <label for="item_description" class="block text-sm font-medium leading-6 text-gray-900">Item Description</label>
                      <div class="mt-2">
                          <textarea id="item_description" name="item_description" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">{{ old('item_description', $invoice->item_description) }}</textarea>
                          @error('item_description')
                          <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                          @enderror
                      </div>
                  </div>

                  <div class="sm:col-span-3">
                      <label for="item_amount" class="block text-sm font-medium leading-6 text-gray-900">Item Amount</label>
                      <div class="mt-2">
                          <input type="number" step="0.01" name="item_amount" id="item_amount" value="{{ old('item_amount', $invoice->item_amount) }}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="100.00">
                          @error('item_amount')
                          <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                          @enderror
                      </div>
                  </div>

                  <div class="sm:col-span-3">
                      <label for="due_date" class="block text-sm font-medium leading-6 text-gray-900">Due Date</label>
                      <div class="mt-2">
                          <input type="date" name="due_date" id="due_date" value="{{ old('due_date', $invoice->due_date) }}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                          @error('due_date')
                          <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                          @enderror
                      </div>
                  </div>
              </div>
          </div>

          <div class="border-b border-gray-900/10 pb-12">
              <h2 class="text-base font-semibold leading-7 text-gray-900">Payment Terms</h2>
              <p class="mt-1 text-sm leading-6 text-gray-600">Update the payment terms for the invoice.</p>

              <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                  <div class="col-span-full">
                      <label for="payment_terms" class="block text-sm font-medium leading-6 text-gray-900">Payment Terms</label>
                      <div class="mt-2">
                          <textarea id="payment_terms" name="payment_terms" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">{{ old('payment_terms', $invoice->payment_terms) }}</textarea>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="mt-6 flex justify-between items-center">
          <a href="{{ route('invoices') }}" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
          <div class="flex gap-x-6">
              <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
  </form>
  <form action="{{ route('invoices.destroy', $invoice->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this invoice?')">
    @csrf
    @method('DELETE')
    <button type="submit" class="rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">Delete</button>
</form>
</div>
</div>
</x-layout>
