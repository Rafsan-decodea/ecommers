@extends('layout')

@section('content')

@section('nav')

@endsection
@include('sidebar')
<div class="col-md-8">
            <div class="widget">
                <h3>Product Fetures</h3>
            </div>
          @foreach ($product as $item )
              
            
            <div class="widget">
              <div class="row">
                  <div class="col-md-2">
                      <div class="card" style="width:400px">
                          <div class="card" style="width: 18rem;">
                         @php $i =1 ; @endphp  
                         @foreach ($productImage as $item2)
                         @if (1>0)
                         <img src="{{ asset('/'.  $item2->images ) }}" class="card-img-top" alt="...">
                         @endif
                         @php $i--; @endphp
                         @endforeach
                             
                             
                              <div class="card-body">
                                <p class="card-text">{{ $item->title }}</p>
                                <P> {{ $item->description }}</p>
                                <p> {{ $item->price }}</p>
                              </div>
                              
                            </div>
                            @endforeach
                            @endsection
                  </div>
              </div>
            </div>
            </div>
           

