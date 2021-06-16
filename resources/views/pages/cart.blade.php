@extends('layouts.app')

@section('title')
    Store Cart Page
@endsection

@section('content') 

    <!-- Page Content -->
    <div class="page-content page-cart">
      <section 
        class="store-breadcrumbs" data-aos="fade-down" data-aos-delay="100">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <nav>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="/index.html">Home</a>
                  </li>
                  <li class="breadcrumb-item active">
                    Cart
                  </li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </section>

      <section class="store-cart">
        <div class="container">
          <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-12 table-responsive">
              <table class="table table-borderless table-cart">
                <thead>
                  <tr>
                    <td>Image</td>
                    <td>Name &amp; Seller</td>
                    <td>Price</td>
                    <td>Menu</td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td style="width: 20%;">
                      <img 
                          src="/images/product-cart-1.jpg" 
                          alt="" 
                          class="cart-image w-100"/></td>
                    <td style="width: 35%;">
                      <div class="produck-title">Sofa Ternyaman</div>
                      <div class="product-subtitle">by Andi Sukka</div>
                    </td>
                    <td style="width: 35%;">
                      <div class="produck-title">$29.989</div>
                      <div class="product-subtitle">USD</div>
                    </td>
                    <td style="width: 20%;">
                      <a href="#" class="btn btn-remove-cart">
                        Remove
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td style="width: 20%;">
                      <img 
                          src="/images/product-cart-2.jpg" 
                          alt="" 
                          class="cart-image w-100"/></td>
                    <td style="width: 35%;">
                      <div class="produck-title">Sneaker</div>
                      <div class="product-subtitle">by Rull Irul</div>
                    </td>
                    <td style="width: 35%;">
                      <div class="produck-title">$70.989</div>
                      <div class="product-subtitle">USD</div>
                    </td>
                    <td style="width: 20%;">
                      <a href="#" class="btn btn-remove-cart">
                        Remove
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td style="width: 20%;">
                      <img 
                          src="/images/product-cart-3.jpg" 
                          alt="" 
                          class="cart-image w-100"/></td>
                    <td style="width: 35%;">
                      <div class="product-title">Coffe Holder</div>
                      <div class="product-subtitle">by Karina Nova</div>
                    </td>
                    <td style="width: 35%;">
                      <div class="produck-title">$30.989</div>
                      <div class="product-subtitle">USD</div>
                    </td>
                    <td style="width: 20%;">
                      <a href="#" class="btn btn-remove-cart">
                        Remove
                      </a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="row" data-aos="fade-up" data-aos-delay="150">
            <div class="col-12">
              <hr>
            </div>
            <div class="col-12">
              <h2 class="mb-4">
                Shipping Details
              </h2>
            </div>
          </div>
          <div class="row mb-2" data-aos="fade-up" data-aos-delay="200">
            <!--Alamat 1-->
            <div class="col-md-6">
              <div class="form-group">
                <label for="addressOne">Address 1</label>
                <input 
                  type="text" 
                  class="form-control" 
                  id="AddressOne" 
                  name="AddressOne" 
                  value="Borobudur Timur"/>
              </div>
            </div>
            <!--Alamat 2-->
            <div class="col-md-6">
              <div class="form-group">
                <label for="addressTwo">Address 2</label>
                <input 
                  type="text" 
                  class="form-control" 
                  id="AddressTwo" 
                  name="AddressTwo" 
                  value="RT/RW 04/10"/>
              </div>
            </div>
            <!--provinsi-->
            <div class="col-md-4">
              <div class="form-group">
                <label for="province">Province</label>
                <select 
                  name="province" 
                  id="province" 
                  class="form-control">
                  <option value="Central Java">Central Java</option>
                </select>
              </div>
            </div>
            <!--City-->
            <div class="col-md-4">
              <div class="form-group">
                <label for="city">City</label>
                <select 
                  name="city" 
                  id="city" 
                  class="form-control">
                  <option value="Semarang">Semarang</option>
                </select>
              </div>
            </div>
            <!--Kode Pos-->
            <div class="col-md-4">
              <div class="form-group">
                <label for="kodePos">Kode Pos</label>
                <input 
                  type="text" 
                  class="form-control" 
                  id="kodePos" 
                  name="kodePos" 
                  value="54153"/>
              </div>
            </div>
            <!--Negara-->
            <div class="col-md-6">
              <div class="form-group">
                <label for="negara">Negara</label>
                <input 
                  type="text" 
                  class="form-control" 
                  id="negara" 
                  name="negara" 
                  value="Indonesia"/>
              </div>
            </div>
            <!--No Handphone-->
            <div class="col-md-6">
              <div class="form-group">
                <label for="handphone">No Handphone</label>
                <input 
                  type="text" 
                  class="form-control" 
                  id="handphone" 
                  name="handphone" 
                  value="085640671134"/>
              </div>
            </div>
          </div>
          <div class="row" data-aos="fade-up" data-aos-delay="150">
            <div class="col-12">
              <hr>
            </div>
            <div class="col-12">
              <h2 class="mb-2">
                Payment Information
              </h2>
            </div>
          </div>
          <div class="row" data-aos="fade-up" data-aos-delay="200">
            <div class="col-4 col-md-2">
              <div class="product-title">$23</div>
              <div class="product-subtitle">Country Tax</div>
            </div>
            <div class="col-4 col-md-3">
              <div class="product-title">$230</div>
              <div class="product-subtitle">Product Isurance</div>
            </div>
            <div class="col-4 col-md-2">
              <div class="product-title">$589</div>
              <div class="product-subtitle">Ship to Semarang</div>
            </div>
            <div class="col-4 col-md-2">
              <div class="product-title text-success">$235.909</div>
              <div class="product-subtitle">Total</div>
            </div>
            <div class="col-8 col-md-3">
              <a 
                href="/success.html" 
                class="btn btn-success mt-4 px-4 btn-block">Checkout Now</a>
            </div>
          </div>
        </div>
      </section>
    </div>
    
@endsection