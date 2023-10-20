@extends('layout')

@section('title')
    Create Invitation
@endsection

@push('css')
    <style>
        * {
            font-family: "Monsterrat", sans-serif !important;
        }
    </style>
@endpush

@section('content')
    <div class="container">

        <form action="{{ route('wedding.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="name">Name</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" id="name" name="name" aria-describedby="name"
                    placeholder="Enter Name">
            </div>
            <button type="submit" class="btn btn-primary">Create Undangan</button>
        </form>

        <table class="table mt-5">
            <thead>
                <tr>
                    <th>Name</th>
                    {{-- <th>Link</th> --}}
                    <th>Status</th>
                    <th>Jumlah Tamu</th>
                    <th>Share</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($invitation as $invit)
                    <tr>
                        <td>{{ $invit->name }}</td>
                        {{-- <td>
                            <a href="{{ route('Invitation', ['name' => $invit->name, 'uniqid' => $invit->uniqid]) }}"
                                class="btn btn-outline-secondary">See
                                Invitation</a>
                        </td> --}}
                        <td>{{ $invit->status }}</td>
                        <td>{{ $invit->jumlah }}</td>
                        <td><button class="btn btn-dark" onclick="copy()">Copy Link</button></td>
                        <input type="hidden" value="{{ $invit->link }}" id="link">
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@push('scripts')
    <script>
        document.getElementById("link").value = window.location.hostname + "/";

        function copy() {
            // Get the text field
            var copyText = document.getElementById("link");

            // Select the text field
            copyText.select();
            copyText.setSelectionRange(0, 99999); // For mobile devices
            var domain = window.location.hostname
            // Copy the text inside the text field
            navigator.clipboard.writeText(.copyText.value);
        }
    </script>
@endpush
