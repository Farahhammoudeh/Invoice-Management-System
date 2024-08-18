<!DOCTYPE html>
<html>
<head>
    <title>Invoice #{{ $invoice->invoice_number }}</title>
    <style>
        body { font-family: Arial, sans-serif; }
        h1, h2, h3 { margin: 0; padding: 0; }
        .invoice-header { margin-bottom: 20px; }
        .client-info, .item-details, .payment-terms { margin-bottom: 15px; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #ddd; padding: 8px; }
    </style>
</head>
<body>
    <div class="invoice-header">
        <h1>Invoice #{{ $invoice->invoice_number }}</h1>
        <p>Date: {{ $invoice->invoice_date }}</p>
        <p>Due Date: {{ $invoice->due_date }}</p>
    </div>
    
    <div class="client-info">
        <h2>Client Information</h2>
        <p>Name: {{ $invoice->client_name }}</p>
        <p>Email: {{ $invoice->client_email }}</p>
    </div>

    <div class="item-details">
        <h2>Item Details</h2>
        <p>Description: {{ $invoice->item_description }}</p>
        <p>Amount: ${{ number_format($invoice->item_amount, 2) }}</p>
    </div>

    <div class="payment-terms">
        <h2>Payment Terms</h2>
        <p>{{ $invoice->payment_terms }}</p>
    </div>
</body>
</html>
