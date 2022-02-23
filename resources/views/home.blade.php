@extends('layouts.app')
@section('content')

<div class="container_ss">
    <div class="container-ss d-flex justify-content-between">
        </header-component><header-component>
            
            
        @if (Route::has('login'))
            
                <div class="top-right links">
                    @auth

                    
                    
                        {{-- <a class="btn btn-primary py-0" href="{{ url('/home') }}">
                            Home
                        </a> --}}
                    
                        
                    @else
                        {{-- <a class="btn btn-primary py-0" href="{{ route('login') }}">
                            Login
                        </a> --}}

                        @if (Route::has('register'))
                            {{-- <a class="btn btn-primary py-0" href="{{ route('register') }}">
                                Register
                            </a> --}}
                        @endif
                    @endauth
                </div>
            @endif


    </div>
</div>
    

<div class="container_ss">
    <div class="container-ss">
        <main_admin-component></main_admin-component>
    </div>
</div>
    

@endsection
       