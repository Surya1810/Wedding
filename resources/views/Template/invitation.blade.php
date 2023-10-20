@extends('layout')

@section('title')
    Wedding Invitation
@endsection

@push('css')
    <style>

    </style>
@endpush

@section('content')
    <audio id="audio" src="{{ asset('assets/Lagu.mp3') }}"></audio>

    <div class="container-fluid d-flex justify-content-center align-items-center" style="min-height:100vh; overflow:hidden;">
        <div class="row text-center d-flex align-items-center" style="overflow:hidden;">
            <div class="col-12">
                <div class="bg-heroes p-3 text-center text-white">
                    <p style="font-size: 3vh">The Wedding of</p>
                    <p class="display-1">Ilham & Riska</p>
                    <p style="font-size: 3vh">22 Oktober 2023</p>
                </div>
                <div class="col-6 mx-auto">
                    <div class="bg-heroes p-3 text-center text-white mt-3">
                        <p class="font-monserrat">Kepada Yth:</p>
                        <p><strong class="font-monserrat">{{ $invitation[0]->name }}</strong></p>
                        <p class="font-monserrat">di Tempat</p>
                    </div>
                </div>
                <div class="col-6 mx-auto">
                    <button class="btn btn-light mt-4" onclick="openInvitation('anchor')">Open Invitation</button>
                </div>
            </div>
        </div>
    </div>

    <div id="content" class="d-none">
        <div id="anchor"></div>

        <div id="married my-3">
            <h1>We Are Getting Merried</h1>
            <div class="col-12">
                <div class="col-6">
                    <div class="card border-0 bg-heroes text-center text-white">
                        Ilham
                    </div>
                </div>
            </div>
        </div>

        <div class="hitung_mundur my-3">
            <div class="card border-0 bg-heroes mx-auto text-center text-white display-4">
                <div class="card-header border-0">Count the Date</div>
                <div class="card-body">
                    <p class="font-monserrat" style="font-size: 15px">Siang dan malam berganti begitu cepat, diantara saat
                        saat mendebarkan yang
                        belum pernah kami rasakan
                        sebelum nya. kami nantikan kehadiran para keluargadan sahabat, untuk menjadi saksi ikrar janji suci
                        kami di hari yang bahagia:</p>
                    <div class="card bg-dark text-white border-0 rounded-4">
                        <div id="count"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="lokasi">

        </div>

        <div id="youtube my-3">
            <div class="col-12">
                <div class="card border-0 bg-heroes text-center text-white">
                    <div class="card-header border-0 Text Center display-4">
                        Love Story
                    </div>
                    <div class="card-body">
                        <iframe width="100%" height="180px"
                            src="https://www.youtube.com/embed/wHI8DurxbIQ?si=odbS0pIOIVKQMFz0&amp;controls=0"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div id="reservasi">
            <div class="col-12 my-3">
                <div class="card border-0 bg-heroes text-white">
                    <div class="card-header border-0 text-center display-4">
                        Buku Tamu
                    </div>
                    <div class="card-body">
                        <div class="card bg-dark text-white border-0 rounded-4">
                            <div class="card-body">
                                <form action="{{ route('kehadiran', $invitation[0]->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="nama" class="form-label text-left font-monserrat">Nama</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="nama" name="nama"
                                                aria-describedby="nama" placeholder="Nama Anda" required>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="jumlah" class="form-label text-left font-monserrat">Jumlah
                                            Tamu</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="jumlah" name="jumlah"
                                                aria-describedby="jumlah" placeholder="Jumlah Tamu" required>
                                        </div>
                                    </div>
                                    <label class="form-label text-left font-monserrat">Konfirmasi Kehadiran</label><br>
                                    <div class="form-check text-left font-monserrat">
                                        <input type="radio" class="form-check-input" id="radio1" name="status"
                                            value="Tidak Hadir" required>Maaf, Saya Tidak Bisa Hadir
                                        <label class="form-check-label" for="radio1"></label>
                                    </div>
                                    <div class="form-check text-left font-monserrat">
                                        <input type="radio" class="form-check-input" id="radio2" name="status"
                                            value="Hadir">Ya, Saya Bersedia Hadir
                                        <label class="form-check-label" for="radio2"></label>
                                    </div>
                                    <button type="submit" class="btn btn-light mt-3">Kirim Konfirmasi</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid d-flex justify-content-center align-items-center"
            style="min-height: 70svh; overflow:hidden;">
            <div class="row text-center d-flex align-items-center" style="overflow:hidden;">
                <div id="terima_kasih">
                    <p class="display-2">Terima Kasih</p>
                    <p class="font-monserrat">Merupakan suatu kebahagiaan dan kehormatan bagi kami, apabila <br>
                        Bapak/Ibu/Saudara/i, berkenan hadir dan memberikan do’a restu kepada kami.</p>
                    <p class="font-monserrat mt-5">KAMI YANG BERBAHAGIA</p>
                    <p class="display-2">Riska & Ilham</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        function openInvitation(h) {
            var audio = document.getElementById("audio");
            var element = document.getElementById("content");
            var anchor = document.getElementById("anchor").offsetTop;

            element.classList.remove("d-none");
            audio.play();
            document.getElementById(h).scrollIntoView();
        }
    </script>

    <script>
        // Set the date we're counting down to
        var countDownDate = new Date("Oct 22, 2023 15:37:25").getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {

            // Get today's date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));

            // Output the result in an element with id="demo"
            document.getElementById("count").innerHTML = days + " hari " + hours + " jam " +
                minutes + " menit";

            // If the count down is over, write some text 
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("count").innerHTML = "EXPIRED";
            }
        }, 1000);
    </script>
@endpush
