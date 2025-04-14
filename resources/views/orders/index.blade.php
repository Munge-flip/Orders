@extends('orders.layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mb-6 text-center">View Orders</h1>

    @if (session('success'))
        <div class="bg-green-100 text-green-700 p-4 rounded mb-6 max-w-3xl mx-auto">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-x-auto max-w-4xl mx-auto">
        <table class="min-w-full bg-white border border-gray-200 shadow-md rounded-lg">
            <thead class="bg-gray-100 text-gray-700">
                <tr>
                    <th class="py-3 px-4 text-left">#</th>
                    <th class="py-3 px-4 text-left">Customer</th>
                    <th class="py-3 px-4 text-left">Product</th>
                    <th class="py-3 px-4 text-left">Qty</th>
                    <th class="py-3 px-4 text-left">Price</th>
                    <th class="py-3 px-4 text-left">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($orders as $order)
                    <tr class="border-t">
                        <td class="py-3 px-4">{{ $loop->iteration }}</td>
                        <td class="py-3 px-4">{{ $order->customer_name }}</td>
                        <td class="py-3 px-4">{{ $order->product }}</td>
                        <td class="py-3 px-4">{{ $order->quantity }}</td>
                        <td class="py-3 px-4">{{ $order->price }}</td>
                        <td class="py-3 px-4">
                            <div class="flex gap-2">
                                <a href="{{ route('orders.edit', $order->id) }}" class="bg-yellow-500 hover:bg-yellow-600 text-white py-1 px-3 rounded text-sm">Edit</a>

                                <form action="{{ route('orders.destroy', $order->id) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 hover:bg-red-600 text-white py-1 px-3 rounded text-sm">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center py-6 text-gray-500">No orders found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
