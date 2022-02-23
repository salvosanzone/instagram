@extends('layouts.guest-layout')
@section('content')

    <div class="guest-container">
        <div class="wrapper">
            <div class="left-wrapper">
                <div class="phone"> 
                    <img style="width: 100%;" src="{{ asset('img/1682317.svg') }}" alt="">

                    <div class="absolute-img">
                        <carousel-component></carousel-component>
                    </div>
                </div>
                
            </div>

            <div>
               <div class="right-wrapper">
                    <div class="top-right-wrapper">
                        <img class="logo" src="https://www.instagram.com/static/images/web/mobile_nav_type_logo.png/735145cfe0a4.png" alt="">
                    </div>
                    <div>
                        <input  placeholder="Nome utente o e-mail" type="text">
                    </div>
                    <div>
                    <input placeholder="Password" type="text"> 
                    </div>
                    
                    @guest
                        <button>
                        <a href="{{ route('login') }}">Accedi</a> 
                        </button>
                        
                    @endguest

                    

                    <div style="margin: 5px 0;">
                        <i class="fa fa-facebook-official" aria-hidden="true"></i>
                        <a class="mb-3" style="color: rgb(0, 0, 101);" href="#">Accedi con Facebook</a>
                    </div>
                    <span style="font-size: 12px">Hai dimenticato la password?</span>

                        
                </div>

                <div class="d-flex justify-content-center">
                    <div class="register-container">
                        @guest
                        <span>
                            Non hai un account? 
                            <a style="color: #3377cf;" href="{{ route('register') }}">Iscriviti</a>
                        </span>   
                        @endguest
                    </div>
                </div>

                {{-- <div class="text-center my-4">
                    Scarica l'applicazione.
                </div> --}}

                <div class="google">
                    <a href="#">
                       <img src="{{ asset('img/google.png') }}" alt=""> 
                    </a>
                    
                </div>


                
                
            
            </div>
            
            
            
        </div>
        
      
    </div>
    

@endsection
       