
@extends('layouts.master')
@section('content')
    @foreach($products as $product)
     <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          @foreach($product->categories as $category)
          {{$category->name}}
          @endforeach
          <h5 class="mb-0">{{$product->title}}</h5>
          <div class="mb-1 text-muted">{{$product->created_at->format('d/m/y')}}</div>
          <p class="card-text mb-auto" style='color: gray;'>{{$product->subtitle}}</p>
          <strong class="card-text mb-auto">{{$product->getPrice()}}</strong>

          <a href="{{route('products.show',$product->slug)}}" class="stretched-link btn btn-info mb-4">voir l'article</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img src=" {{asset('storage/'. $product->image)}}" alt="">
          
        </div>
      </div>
    </div>
    @endforeach
     <div class="d-flex justify-content-center ">{{$products->appends(request()->input())->links()}}</div>
    @endsection
 