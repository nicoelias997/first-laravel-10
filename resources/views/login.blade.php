@extends('layouts.base')

@section('content')
    

        <div id="login">   
          <h1>Login</h1>
          
          @if ($errors->any())          
          <div>
           <h3 class="text-red invalid-feedback "> Algo salio mal</h3>
          </div>
            <ul>
              @foreach ($errors->all() as $error)
                  <li class="text-red">{{$error}}</li>
              @endforeach
            </ul>
          @endif


          <form action="/login" method="post">
            @csrf
          
            <div class="field-wrap">
            <label>
              Email<span class="req">*</span>
            </label>
            <input type="email" name="email" required value="{{old('email')}}"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password"name="password" value="{{old('password')}}" required />
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <button class="button button-block">Log In</button>
          
          </form>
         <a href="/register" class="mt-2">Sign Up</a>

        </div>

        @endsection
     