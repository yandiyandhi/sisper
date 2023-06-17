@extends('dashboard.layout.index')
@section('cont')
    {{-- @if (session()->has('success'))
        <div class="alert alert-warning alert-dismissible col-md-4 fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif --}}
    <div class="table-data">
        <div class="order">
            <div class="row justify-content-between mb-4">
                <div class="col-3">
                    <h5><i class="bi bi-person-fill text-end"></i> <span>User</span></h5>
                </div>
                <div class="col-2">
                    <a href="#" class="add">
                        @if (auth()->user()->level == 'superadmin')
                            <a href="/dashboard/listuser/create" type="button" class="btn btn-outline-primary btn-sm">Add
                                User</a>
                        @endif
                    </a>
                </div>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Level</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($data as $item)
                        <tr>
                            <td>{{ $no }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->username }}</td>
                            <td>{{ $item->level }}</td>
                            <td>{{ $item->email }}</td>
                            <td class="d-flex grid gap-3">
                                @if (auth()->user()->name == $item->name)
                                    <a href="#">
                                        <span><i class="bi bi-pencil-square"></i> </span>
                                    </a>
                                @endif

                                @if (auth()->user()->level == 'superadmin' && auth()->user()->level != $item->level)
                                    <a href="#">
                                        <span><i class="bi bi-pencil-square"></i> </span>
                                    </a>
                                    <form action="/dashboard/listuser/{{ $item->id }}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="badge bg-transparent border-0"
                                            onclick="return confirm('Are Your Sure ?')">
                                            <i class="bi bi-trash text-danger fs-6"></i>
                                        </button>
                                    </form>
                                @endif
                            </td>
                            <input type="text" hidden value="{{ $no++ }}" readonly>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
