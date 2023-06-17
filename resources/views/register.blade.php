@extends('layouts.base')

@section('content')

        <div>

          <h1>Registrarse</h1>

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
          
          <form action="/register" method="post">
            @csrf

          <div class="field-wrap">
            <label>
              Nombre completo<span class="req">*</span>
            </label>
            <input type="name" name="name" value="{{old('name')}}" required />
          </div>

          <div class="field-wrap">
            <label>
              Email<span class="req">*</span>
            </label>
            <input type="email" name="email" value="{{old('email')}}" required />
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" name="password" value="{{old('password')}}" required />
          </div>
          
          <button type="submit" class="button button-block"/>Registrarse</button>
          
          </form>
           <a href="/login">Log In</a>
          </div>
      
        @endsection