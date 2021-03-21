@extends('layouts.login')
@section('content')



<div class="login">
    <div class="login_title">
        <img src="img/esquilax_logo_small.svg">Registrate!
     </div>


     <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="form__group field">
            <input type="text" class="form__field" placeholder="Nombre" name="name" id='name' required />
            <label for="name" class="form__label">Nombre:</label>

            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>

     <div class="form__group field">
         <input type="email" class="form__field" placeholder="Email" name="email" id='email' required />
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
        <input type="password" class="form__field" placeholder="Confirmá tu Password" name="password_confirmation" id='password_confirmation' required />
        <label for="name" class="form__label">Confirmá tu Password:</label>
      </div>

       <div class="form__group field">
           <input class="btn_std" type="submit" value="Ingresar">
       </div>

    </form>
</div>
<div class="login_art">

</div>



@endsection

