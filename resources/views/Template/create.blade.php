@extends('layout')

@section('title')
    Create Invitation
@endsection

@push('css')
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
                    <th>Link</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($invitation as $invit)
                    <tr>
                        <td>{{ $invit->name }}</td>
                        <td>
                            <a href="{{ route('Invitation', $invit->uniqid) }}" class="btn btn-outline-secondary">See
                                Invitation</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@push('scripts')
@endpush
