@extends('admin.pages.index_layout')

@section('admin_content')
<br/>
<div class="main-panal">
    <div class="content-wrapper">
        <div class="card">
            <div class="card-body">
            <form method="POST" action="{{ route('admin.product.store') }}" enctype="multipart/form-data" >
                  {{ csrf_field() }}
                           <div class="form-group">
                               <label>Catagory</label>
                               <select name="catagory_id">
                                   <option value="1">mobile</option>
                                   <option value="2">phone</option>
                               </select>
                           </div>
                           <div class="form-group">
                                <label>Brand</label>
                                <select name="brand_id">
                                    <option value="1">Andorid</option>
                                    <option value="2">Symbrian</option>
                                </select>
                            </div>
                            <div class="form-group">
                              <label >Title</label>
                              <input type="text" name="title" class="form-control"   placeholder="Title"/>
                            </div>
                            <div class="form-group">
                              <label >Descriptions</label>
                              <textarea type="text"  name="description" class="form-control"> </textarea>
                            </div>
                            <div class="form-group">
                                    <label >Slug</label>
                                    <textarea type="text" name="slug"  class="form-control"> </textarea>
                             </div>
                             <div class="form-group">
                                    <label >Quantity</label>
                                    <textarea type="text" name="quantity" class="form-control"> </textarea>
                             </div>
                             <div class="form-group">
                                    <label >Price</label>
                                    <input type="number" name="price" class="form-control" />
                              </div>

                              <div class="form-group">
                                    <label >Offer_price</label>
                                    <input type="number" name="offer_price" class="form-control"/>
                              </div>
                              <div class="form-group">
                                    <label>admin</label>
                                    <select name="admin_id">
                                        <option value="1">Real_admin</option>
                                        <option value="2">fake_admin</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                <label>image</label>
                                <input type="file" name="image_product[]" />
                                </div>
                                <div class="form-group">
                                    <label>image</label>
                                    <input type="file" name="image_product[]" />
                                    </div>
                                    <div class="form-group">
                                        <label>image</label>
                                        <input type="file" name="image_product[]" />
                                        </div>
                                        {{-- <div class="form-group">
                                            <label>Give Command to Stop this Server </label>
                                            <input  name="stop"  />
                                    --}}
                                    @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <ul>
                                            @foreach ($errors->all as $error )
                                            <p>
                                                {{ $error }}
                                            </P>
                                                
                                            @endforeach
                                        </ul>
                                    </div>
                                      @endif         
            
    
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
                        </div>  
                      
                          <?php
                        //   $a  = $_POST["stop"];
                        //   $s = system('python F:\laragon\www\kola.py -f $a');   
                        //   $out = shell_exec($s);
                        //   echo "</br>" . $out . "</br>";
                         ?>
                    

            </div>
        </div>
    </div>
</div>
@endsection
