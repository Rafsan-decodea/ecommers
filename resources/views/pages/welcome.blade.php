@extends('layout')


@section('content')
    
<div class="container margin-top-20">
    <div class="row">
        <div class="col-md-4">
          <ul class="list-group">
              <li class="list-group-item">Cras justo odio</li>
              <li class="list-group-item">Dapibus ac facilisis in</li>
              <li class="list-group-item">Morbi leo risus</li>
              <li class="list-group-item">Porta ac consectetur ac</li>
              <li class="list-group-item">Vestibulum at eros</li>
            </ul>
        </div>
        
        
        <div class="col-md-8">
            <div class="widget">
                <h3>Product Fetures</h3>
            </div>
            <div class="widget">
              <div class="row">
                  <div class="col-md-2">
                      <div class="card" style="width:400px">
                          <div class="card" style="width: 18rem;">
                              <img src="{{ asset('/'.'p.jpg') }}" class="card-img-top" alt="...">
                              <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card" style="width:400px">
                                    <div class="card" style="width: 18rem;">
                                        <img src="{{ asset('/'.'p.jpg') }}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        </div>
                                      </div>
                         </div>
                         
                  </div>
              </div>
            </div>
        </div>
    </div>
  </div>
@endsection