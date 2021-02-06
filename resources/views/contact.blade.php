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

            <form class="form" method="post" action="{{ route('contact') }}" autocomplete="off">

                @csrf

                <h2>CONTACT ME</h2>
                <p type="Name:"><input name="name" value="{{ old('name') }}">
                    @error('name')
                    <p style="color: red; font-size:1rem;">{{ $errors->first('name') }}</p>
                @enderror
                </p>

                <p type="Email:"><input name="email" value="{{ old('email') }}">
                    @error('email')
                    <p style="color: red; font-size:1rem;">{{ $errors->first('email') }}</p>
                @enderror
                </p>
                <p type="Message:"><input name="message" value="{{ old('message') }}">
                    @error('message')
                    <p style="color: red; font-size:1rem;">{{ $errors->first('message') }}</p>
                @enderror
                </p>


                <button>Send Message</button>
                <p class="phone"><span class="fa fa-phone"></span> 0720 080 775</p>



            </form>
        </div>


    </header>

@endsection
