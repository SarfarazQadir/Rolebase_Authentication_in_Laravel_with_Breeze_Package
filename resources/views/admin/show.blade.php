@extends('layouts.master')

@section('tilte','Show Product ')
@section("show")
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Responsive Table</h6>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Product Name</th>
                                <th scope="col">Product Discription</th>
                                <th scope="col">Product Price</th>
                                <th scope="col">Product Quantity</th>
                                <th scope="col">Product Image</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach($products as $product) --}}
                            <tr>
                                {{-- <td>{{$product->product_name}}</td> --}}
                            </tr>
                            {{-- @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>
    </div>
</div>
@endsection