<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <form action="{{ route('invoices.store') }}" method="POST">
        @csrf
        <div class="space-y-12">
          <!-- Invoice Information -->
          <div class="border-b border-gray-900/10 pb-12">
            <h2 class="text-base font-semibold leading-7 text-gray-900">Invoice Information</h2>
            <p class="mt-1 text-sm leading-6 text-gray-600">Fill out the details for the invoice.</p>
      
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
              <div class="sm:col-span-3">
                <label for="invoice-number" class="block text-sm font-medium leading-6 text-gray-900">Invoice Number</label>
                <div class="mt-2">
                  <input type="text" name="invoice_number" id="invoice_number" autocomplete="off" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="INV-001">
                  @error('invoice_number')
                  <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                  @enderror
                </div>
              </div>
      
              <div class="sm:col-span-3">
                <label for="invoice_date" class="block text-sm font-medium leading-6 text-gray-900">Invoice Date</label>
                <div class="mt-2">
                  <input type="date" name="invoice_date" id="invoice_date" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                  @error('invoice_date')
                  <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                  @enderror
                </div>
              </div>
      
              <div class="sm:col-span-6">
                <label for="client_name" class="block text-sm font-medium leading-6 text-gray-900">Client Name</label>
                <div class="mt-2">
                  <input type="text" name="client_name" id="client_name" autocomplete="off" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="John Doe">
                  @error('client_name')
                  <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                  @enderror
                </div>
              </div>
      
              <div class="sm:col-span-6">
                <label for="client_email" class="block text-sm font-medium leading-6 text-gray-900">Client Email</label>
                <div class="mt-2">
                  <input type="email" name="client_email" id="client_email" autocomplete="off" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="john.doe@example.com">
                  @error('client_email')
                  <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                  @enderror
                </div>
              </div>
      
              <div class="sm:col-span-6">
                <label for="item_description" class="block text-sm font-medium leading-6 text-gray-900">Item Description</label>
                <div class="mt-2">
                  <textarea id="item_description" name="item_description" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                  @error('item_description')
                  <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                  @enderror
                </div>
              </div>
      
              <div class="sm:col-span-3">
                <label for="item_amount" class="block text-sm font-medium leading-6 text-gray-900">Item Amount</label>
                <div class="mt-2">
                  <input type="number" step="0.01" name="item_amount" id="item_amount" step="0.01" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="100.00">
                  @error('item_amount')
                  <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                  @enderror
                </div>
              </div>
      
              <div class="sm:col-span-3">
                <label for="due_date" class="block text-sm font-medium leading-6 text-gray-900">Due Date</label>
                <div class="mt-2">
                  <input type="date" name="due_date" id="due_date" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                  @error('due_date')
                  <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                  @enderror
                </div>
              </div>
            </div>
          </div>
      
          <!-- Payment Terms -->
          <div class="border-b border-gray-900/10 pb-12">
            <h2 class="text-base font-semibold leading-7 text-gray-900">Payment Terms</h2>
            <p class="mt-1 text-sm leading-6 text-gray-600">Specify the payment terms for the invoice.</p>
      
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
              <div class="col-span-full">
                <label for="payment_terms" class="block text-sm font-medium leading-6 text-gray-900">Payment Terms</label>
                <div class="mt-2">
                  <textarea id="payment_terms" name="payment_terms" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                </div>
              </div>
            </div>
          </div>
        </div>
      
        <div class="mt-6 flex items-center justify-end gap-x-6">
          <a href="{{ route('invoices') }}">
            <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
          </a>
          <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
        </div>
      </form>
      
</body>
</html>