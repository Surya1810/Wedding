@extends('layout')

@section('title')
    Wedding Invitation
@endsection

@push('css')
    <style>
        @media (orientation: landscape) {

            /* MAINTANCE PAGE */
            .maintanance-img {
                /* The image used */
                background-image: url("https://ik.imagekit.io/bghiifrbr/DSC02754.jpg?updatedAt=1697707106983");

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
                background-image: url("https://ik.imagekit.io/bghiifrbr/DSC02756%20copy.jpg?updatedAt=1697707107018");

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
    <div class="maintanance-img">
        <div class="heroes">
            <div class="container h-100">
                <div class="row align-items-center justify-content-center h-100">
                    <div class="col-12">
                        <center>
                            <p class="display-6">The Wedding of</p>
                            <p class="display-1">Ilham & Riska</p>
                            <p class="display-6">22 Oktober 2023</p>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
@endpush
