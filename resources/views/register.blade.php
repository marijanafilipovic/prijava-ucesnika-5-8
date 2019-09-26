@extends('layouts.app')
@section('content')
<div style="background-color: #cce3f6">
All registrations are completed.
</div>
   {{--  <div class="container" style="background-color: white">
         <h1 style="margin-bottom: 10px">REGISTRATION INFORMATION</h1>
      --}}{{--   <div class="col-md-6" style="background-color:#2fa360; color:white; margin:3px; border-radius:3px;">
         <h4>Seat Availability: {{ $mesta }}</h4>
         </div>--}}{{--
         <a href="/" class="btn btn-lg btn-default"  style="margin-bottom: 10px; margin-left:5px;">Back</a>
        @foreach($errors->all() as $e)
             <div  class="col-md-12 shadow" style="color: orangered; font-size:16px; font-weight: bold; text-align:center; padding:5px; border: 1px solid red; margin:10px;">{{ $e }}</div>
--}}{{--         <p style="color: darkred; font-size:16px;">{{ $e }}</p>--}}{{--
                  @endforeach
         @isset($msg)
@if($msg == "Registration is completed.")
             <div  class="col-md-12 shadow" style="color: #2d995b; font-size:16px; font-weight: bold; text-align:center; padding:5px; border: 1px solid lightgreen; margin:10px;">{{ $msg }}</div>
@elseif($msg == "E-mail has been used. Try other e-mail account.")
                 <div  class="col-md-12 shadow" style="color: orangered; font-size:16px; font-weight: bold; text-align:center; padding:5px; border: 1px solid red; margin:10px;">{{ $msg }}</div>
             @endif
         @endisset

         <form method="POST" action="submit-registration" >
             @csrf
            <div class="col-md-12">
             <div class="col-md-6">
                 <label>First name *:</label>
                 <input type="text"  value="{{ old('name') }}" name="name" class="form-control"/>
             </div>
                <div class="col-md-6">
                    <label>Last name *:</label>
                    <input type="text" value="{{ old('lastname') }}" name="lastname" class="form-control"/>
                </div>
            </div>
             <div class="col-md-12">
                 <div class="col-md-6">
                     <label>Professional e-mail *:</label>
                     <p>Use your professional e-mail account</p>
                     <input type="email" value="{{ old('email') }}" name="email" class="form-control"/>
                 </div>
                 <div class="col-md-6">
                     <label>Year of birth *:</label>
                     <input type="text"  value="{{ old('birth_year') }}" name="birth_year" class="form-control"/>
                 </div>
             </div>
             <div class="col-md-12">
                 <div class="col-md-6">
                     <label>Organization *:</label>

                     <input type="text" value="{{ old('organization') }}" name="organization" class="form-control"/>
                 </div>
                 <div class="col-md-6">
                     <label>Organization Type *:</label>
                     <select name="type_organization" selected="{{ old('type_organization') }}" class="form-control input-lg dynamic">
                         @if(!empty(old('type_organization')))
                             <option value="{{ old('type_organization') }}">
                         {{ old('type_organization') }}
                             </option>
                         @endisset
                             <option value="Higher Education Institution">
                             Higher Education Institution
                         </option>
                         <option value="International Organization">
                             International Organization
                         </option>
                         <option value="Non-Governmental Organization">
                             Non-Governmental Organization
                         </option>
                         <option value="Public Organization">
                             Public Organization
                         </option>
                         <option value="Private for profit Organization">
                             Private for profit Organization
                         </option>
                         <option value="Research Organization">
                             Research Organization
                         </option>
                         <option value="SME">
                             SME
                         </option>

                     </select>
                     <label>Other organization Type:</label>
                     <input type="text" value="{{ old('drugi_tip_organizacije') }}" name="drugi_tip_organizacije" class="form-control"/>
                 </div>
             </div>
             <div class="col-md-12">
                 <div class="col-md-6">
                     <label>Position in the organization *:</label>
                     <input type="text" value="{{ old('position') }}" name="position" class="form-control"/>
                 </div>
                 <div class="col-md-6">
                     <label>Experience in ERC?</label>
                     <p style="overflow: hidden">
                     <button type="button" id="yes" onclick="show('iskustvo')" value="Yes" name="yes" class="float-left form-control btn btn-info" style="width:80px; color:white;">Yes</button>
                         <button type="button" id="no"  onclick="hide('iskustvo')" value="No" name="yes" class="float-left form-control btn-info" style="width:80px;">No</button>
                     <input id="iskustvo" value="{{ old('iskustvo') }}" type="text" name="iskustvo" class="form-control"/>
                 </div>
                     <script>
                         function show(id) {
                             var e = document.getElementById(id);
                                 e.style.display = 'block';
                         }
                         function hide(id) {
                             var e = document.getElementById(id);
                                 e.style.display = 'none';
                         }
                     </script>

                 </div>


<div class="col-md-12">
    <p >
    <input type="submit" value="CONFIRM" class=" shadow-sm btn btn-lg btn-default" style="width:100%; margin-top:10px;"/>
    </p>
</div>

         </form>
     </div>
</div>
</div>--}}
 @endsection
<style>
    #iskustvo{
        display: none;
    }
</style>
