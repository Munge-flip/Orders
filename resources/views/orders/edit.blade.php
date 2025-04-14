@extends('orders.layouts.app')

@section('title', 'Edit Order')

@section('content')
<div class="container py-5">
    <h2 class="mb-4">Edit Order</h2>
    <form action="{{ route('orders.update', $order->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Customer Name</label>
            <input type="text" name="customer_name" value="{{ old('customer_name', $order->customer_name) }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Product</label>
            <input type="text" name="product" value="{{ old('product', $order->product) }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Quantity</label>
            <input type="number" name="quantity" value="{{ old('quantity', $order->quantity) }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Price</label>
            <input type="number" step="0.01" name="price" value="{{ old('price', $order->price) }}" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Order</button>
        <a href="{{ route('orders.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
