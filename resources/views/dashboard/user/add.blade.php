@extends('dashboard.layout.index')
@section('cont')
    <div class="row">
        <form action="/dashboard/listuser" method="post">
            @csrf
            <div class="card">
                <div class="card-header bg-transparent " style="background: #3C91E6 !important;">
                    <h4 class="card-title text-center mt-3 position-relative
                    top-0 start-0"
                        style="color:azure;">Add User</h4>
                </div>
                <div class="card-body p-3">
                    <div class="form-group mb-4">
                        <label for="nama" class="mb-2">Nama</label>
                        <input type="text" id="nama" name="name" class="form-control" required>
                    </div>
                    <div class="form-group mb-4">
                        <label for="namapengguna" class="mb-2">Nama Pengguna</label>
                        <input type="text" id="namapengguna" name="username" class="form-control" required>
                    </div>
                    <div class="form-group mb-4">
                        <label for="level" class="mb-2">Level</label>
                        <select id="level" class="form-control custom-select">
                            <option selected="" disabled="">Pilih....</option>
                            <option value="superadmin">Superadmin</option>
                            <option value="admin">Admin</option>
                        </select>
                    </div>
                    <div class="form-group mb-4">
                        <label for="fhoto" class="form-label mb-2 @error('image') is-invalid @enderror">Fhoto
                            Profil</label>
                        <img class="img-preview img-fluid mb-3 col-sm-5" style="width: 100px;">
                        <input class="form-control" type="file" id="image" name="image" onchange="previewImage()">
                        @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mb-4">
                        <label for="password" class="mb-2">Password</label>
                        <div class="input-group" id="show">
                            <span class="input-group-text" id="addon-wrapping">
                                <a href=""><i class="bi bi-eye-slash-fill text-black"></i></i></a></span>
                            <input type="password" class="form-control" aria-describedby="addon-wrapping">
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label for="email" class="mb-2">Email</label>
                        <input type="text" id="email" onkeypress="cek();" class="form-control" required>
                    </div>
                    <div class="form-group mb-4">
                        <button type="submit" class="btn btn-primary" style="float: right;">Simpan</button>
                    </div>
                </div>

                <!-- /.card-body -->
            </div>
        </form>

        {{-- <form method="POST" action="/dashboard/listuser" class="mb-5" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Nama</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                    name="title" required autofocus value="{{ old('title') }}">
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug"
                    required value="{{ old('slug') }}">
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="Category" class="form-label">Category</label>
                <select class="form-select" name="category_id">
                    @foreach ($categories as $category)
                        @if (old('category_id') == $category->id)
                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                        @else
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label @error('image') is-invalid @enderror">Post Image</label>
                <img class="img-preview img-fluid mb-3 col-sm-5">
                <input class="form-control" type="file" id="image" name="image" onchange="previewImage()">
                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Body</label>
                @error('body')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <input id="body" type="hidden" name="body" value="{{ old('body') }}">
                <trix-editor input="body"></trix-editor>
            </div>
            <button type="submit" class="btn btn-primary">Create Post</button>
        </form> --}}

    </div>

    <script>
        $(document).ready(function() {
            $("#show a").on('click', function(event) {
                event.preventDefault();
                if ($('#show input').attr("type") == "text") {
                    $('#show input').attr('type', 'password');
                    $('#show i').addClass("bi-eye-slash-fill");
                    $('#show i').removeClass("bi-eye");
                } else if ($('#show input').attr("type") == "password") {
                    $('#show input').attr('type', 'text');
                    $('#show i').removeClass("bi-eye-slash-fill");
                    $('#show i').addClass("bi-eye");
                }
            });
        });

        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
