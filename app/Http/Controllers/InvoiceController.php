<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Mail\InvoiceMail;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\StoreInvoiceRequest;
use App\Http\Requests\UpdateInvoiceRequest;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $invoices = Invoice::latest()->paginate(3);
        return view('invoices.index', ['invoices' => $invoices]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('invoices.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreInvoiceRequest $request)
    {
        $invoice = Invoice::create([
            'invoice_number'=>$request->invoice_number,
            'invoice_date'=>$request->invoice_date,
            'client_name'=>$request->client_name,
            'client_email'=>$request->client_email,
            'item_description' => $request->item_description,
            'item_amount' => $request->item_amount,
            'due_date' => $request->due_date,
            'payment_terms' => $request->payment_terms,
        ]);

        Mail::to($invoice->user)->queue(new InvoiceMail($invoice));
                
        return redirect('/invoices');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Invoice $invoice)
    {
        return view('invoices.show', ['invoice'=> $invoice]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Invoice $invoice)
    {
        return view('invoices.edit', ['invoice'=> $invoice]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInvoiceRequest $request, Invoice $invoice)
    {
        $invoice->update([
            'invoice_number'=>$request->invoice_number,
            'invoice_date'=>$request->invoice_date,
            'client_name'=>$request->client_name,
            'client_email'=>$request->client_email,
            'item_description' => $request->item_description,
            'item_amount' => $request->item_amount,
            'due_date' => $request->due_date,
            'payment_terms' => $request->payment_terms,
        ]);

        return redirect('/invoices/'. $invoice->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Invoice $invoice)
    {
        $invoice->delete();

        return redirect('/invoices');
    }
    
    public function download($id)
    {
        $invoice = Invoice::findOrFail($id);
        $pdf = Pdf::loadView('invoices.pdf', ['invoice' => $invoice]);
        return $pdf->download('invoices.pdf');
        
    }
    
}


