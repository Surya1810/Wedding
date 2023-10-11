@extends('layout')

@section('title')
    Oops...
@endsection

@push('css')
    <style>
        body,
        html {
            height: 100%;
        }

        @media (orientation: landscape) {

            /* MAINTANCE PAGE */
            .maintanance-img {
                /* The image used */
                background-image: url("https://ik.imagekit.io/surya1810/Kraf./maintenance_1.jpg?updatedAt=1692104323311");

                /* Full height */
                height: 100%;

                /* Center and scale the image nicely */
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }
        }

        @media (orientation: portrait) {

            /* MAINTANCE PAGE */
            .maintanance-img {
                /* The image used */
                background-image: url("https://ik.imagekit.io/surya1810/Kraf./maintenance_2.jpg?updatedAt=1692104325727");

                /* Full height */
                height: 100%;

                /* Center and scale the image nicely */
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }
        }
    </style>
@endpush

@section('content')
    <div class="maintanance-img"></div>
@endsection

@push('scripts')
@endpush
