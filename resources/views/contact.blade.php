@extends('layout.layout')

{{-- Title --}}
<title>Alphayo Gacheru | Web Developer | Contact</title>

{{-- Header --}}
@section('header')

    @if (session('flash'))
        <div class="alert">
            <p class="inner">
                {{ session('flash') }}
            </p>
        </div>
    @endif

    <header id="contact">
        <div class="contact-content">

            <form class="form" method="post" action="{{ route('contact') }}" autocomplete="on">

                @csrf

                <h2>CONTACT ME</h2>
                <p type="Name:"><input name="name" value="{{ old('name') }}" type="text">
                     </p>
                @error('name')
                <p style="color: red; font-size:1rem;">{{ $errors->first('name') }}</p>
                @enderror

                <p type="Email:"><input name="email" value="{{ old('email') }}" type="email">
                    
                </p>
                @error('email')
                    <p style="color: red; font-size:1rem;">{{ $errors->first('email') }}</p>
                @enderror
                <p type="Message:"><input name="message" value="{{ old('message') }}" type="text">
              
                </p>
                @error('message')
                <p style="color: red; font-size:1rem;">{{ $errors->first('message') }}</p>
            @enderror


                <button>Send Message</button>
                <p class="phone"><span class="fa fa-phone"></span> 0720 080 775</p>



            </form>
        </div>


    </header>

@endsection
