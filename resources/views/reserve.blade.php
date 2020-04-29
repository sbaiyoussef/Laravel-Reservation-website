@extends('layout')
@extends('messageblock')
@section('content')
<div class="hero-wrap" style="background-image: url('images/bg_1.jpg');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
        <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
            <div class="text">
              <p class="breadcrumbs mb-2"><span class="mr-2"><a href={{route('home')}}>Home</a></span> <span>Reservation</span></p>
              <h1 class="mb-4 bread">Reservation</h1>
          </div>
        </div>
      </div>
    </div>
  </div>



  <div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
    <div class="wrapper wrapper--w960">
        <div class="card card-2">
            <div class="card-heading"></div>
            <div class="card-body">
              <div class="input-container" style="display: flex">
               <i class="fa fa-check-square-o"  aria-hidden="true"></i>
               <h6 class="title" style="color:orangered">Included Breakfast</h6>
              </div> 
              <h5 class="title" style="color:orangered">NO PREPAYMENT NEEDED – pay at the property</h5>
                <h2 class="title">Reservation Info</h2>
                <form method="POST" action="{{route('reservation.create')}}">
                  @csrf
                  <div class="input-group">
                    <input class="input--style-2" type="text"  name="reqcheckin" value={{ request('checkin') }}>
                  </div>
               
                  <div class="input-group">
                    <input class="input--style-2" type="text"   name="reqcheckout" value={{ request('checkout') }}>
                  </div>
                  <div class="input-group">
                    <input class="input--style-2" type="text"  readonly name="reqroom" value={{ request('room') }}>
                  </div>
                  <div class="form-row" style="margin-top:2%">
                    <div class="form-group col-md-3">
                      <label for="adult">Adults</label>
                      <input name="adult" type="text"readonly class="form-control" id="adult" value={{ request('adult') }}>
                    </div>
                    <div class="form-group col-md-3">
                      <label for="child">Children</label>
                      <input name="child" type="text" readonly class="form-control" id="child" value={{ request('child') }}>
                    </div>
                    <div class="form-group col-md-3">
                      <label for="room">Rooms</label>
                      <input name="room" type="text" readonly class="form-control" id="room" value={{ request('Room') }}>
                    </div>
                  </div>
                  <div class="input-group">
                    <input name="price" class="input--style-2" type="text"  readonly name="req_prix"  placeholder="Price" value='120$'>
                  </div>
                 
                  <div class="p-t-30">
                    <a href="#form2" class="btn btn--radius btn--green"  name="reserve" id="formButton">Next:Final Details</a>
                  </div>

                 
                        </div>
                    </div>
                 
                   
                
            </div>
        </div>
    </div>
</div>


  
  <div class="page-wrapper bg-red p-t-180 p-b-100 font-robo" id="form2">
    <div class="wrapper wrapper--w960">
        <div class="card card-2">
            <div class="card-heading"></div>
            <div class="card-body">
                <h2 class="title">Personal Info</h2>
            
                  
                  <div class="input-group">
                    <input class="input--style-2" type="text"  name="firstname" placeholder="First name">
                  </div>
                  <div class="input-group">
                    <input class="input--style-2" type="text"   name="secondname" placeholder="Second name">
                  </div>
                  <div class="input-group">
                    <input class="input--style-2" type="email"   name="Email" placeholder="Email">
                  </div>
                  <div class="input-group">
                    <input class="input--style-2" type="email"   name="confirmemail" placeholder="Confirm Email">
                  </div>
               
                  <select name="country"  class="browser-default custom-select" style="margin-bottom:6%">
                    <option selected>Select Country</option>
                    <option value="Australia">Australia</option>
                    <option value="Belgium">Belgium</option>
                    <option value="Canada">Canada</option>
                    <option value="Denmark">Denmark</option>
                    <option value="Egypt">Egypt</option>
                    <option value="France">France</option>
                    <option value="Hungary">Hungary</option>
                    <option value="Italy">Italy</option>
                    <option value="Japan">Japan</option>
                  </select>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="air" class="custom-control-input" id="defaultUnchecked">
                    <label class="custom-control-label" for="defaultUnchecked">I'm interested in requesting an airport shuttle</label>
                </div>
                {{-- <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" >
                  <label class="custom-control-label" for="defaultUnchecked">I'm interested in renting a car</label>
              </div> --}}
              <div class="custom-control custom-checkbox">
                <input type="checkbox" name="car" class="custom-control-input" id="defaultChecked2" >
                <label class="custom-control-label" for="defaultChecked2">I'm interested in renting a car</label>
              </div>
              
              <div class="text">
                <h4 style="margin-top:2%">Payement Details</h4>
              </div>
              <div class="input-group">
                <input class="input--style-2" type="text"  name="cardname" placeholder="Name On Card">
              </div>
              <div class="input-group">
                <input class="input--style-2" type="text"   name="cardnumber" placeholder="Card Number" maxlength="16">
              </div>

              <div class='form-row'>
                <div class='col-xs-4 form-group cvc required'>
                  <label class='control-label'>CVC</label>
                  <input  class='form-control card-cvc' name="cvv" placeholder='ex. 311' size='4' type='number_format' maxlength="3">
                </div>
                <div class='col-xs-4 form-group expiration required'>
                  <label class='control-label'>Expiration</label>
                  <input class='form-control card-expiry-month' name="mm" placeholder='MM' size='2' type='number_format'  maxlength="2">
                </div>
                <div class='col-xs-4 form-group expiration required'>
                  <label class='control-label'> </label>
                  <input class='form-control card-expiry-year' name="yyyy" placeholder='YYYY' size='4' type='number_format' maxlength="4">
                </div>
              </div>

              
                
                <!-- Credit Card Payment Form - START -->
                
               
                  <div class="p-t-30">
                    <button class="btn btn--radius btn--green" type="submit" name="reserve">reserve</button>
                  </div>

                  
               
                        </div>
                    </div>
                 
                   
                </form>
            </div>
        </div>
    </div>
</div>

@endsection