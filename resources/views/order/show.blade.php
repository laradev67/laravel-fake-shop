@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">

                <div class="card-header">
                    New order #{{ $order->id }} created successfully!
                </div>

                <div class="card-body">

                    <p>Created at: {{ $order->created_at }}</p>

                    <p>Total: € {{ $order->total }}</p>

                    <p>An email was sent to: {{ $order->user->email }}.</p>

                </div>

            </div>

        </div>
    </div>
</div>
@endsection