@extends('layouts.login')

@section('content')


<div class="login">
    <div class="login_title">
        <img src="img/esquilax_logo_small.svg">ESQUILAX
     </div>

     <form method="POST" action="{{ route('login') }}">
        @csrf

     <div class="form__group field">
         <input type="email" class="form__field" placeholder="Usuario" name="email" id='email' required />
         <label for="name" class="form__label">Email:</label>

         @error('email')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
         @enderror

       </div>

       <div class="form__group field">
         <input type="password" class="form__field" placeholder="password" name="password" id='password' required />
         <label for="name" class="form__label">Password:</label>

         @error('password')
         <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
         </span>
        @enderror

       </div>

       <div class="form__group field">
           <input class="btn_std" type="submit" value="Ingresar">
       </div>

    </form>
</div>
<div class="login_art">

</div>





@endsection
