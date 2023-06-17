@extends('dashboard.layout.index')
@section('cont')
    <div class="row">
        <form action="/dashboard/listuser/" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="card">
                <div class="card-header bg-transparent">
                    <h3 class="card-title text-center mt-3 position-relative top-0 start-0">Add User</h3>
                </div>
                <div class="card-body">
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
                        <input type="password" id="password" class="form-control" required>
                    </div>
                    <div class="form-group mb-4">
                        <label for="confirmpassword" class="mb-2">Konfirmasi Password</label>
                        <input type="password" id="confirmpassword" class="form-control" required>
                        <p id="pesan" class="col-md-3" style="color: red;"></p>
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
    </div>

    <script>
        function cek() {
            const pass = document.getElementById('password').value;
            const confirmpass = document.getElementById('confirmpassword').value;
            const pesan = document.getElementById('pesan');

            if (pass != confirmpass) {
                pesan.textContent = "Password tidak sama";
                // pesan.style.backgroundColor = "#ff4d4d";

                setTimeout(() => {
                    setTime(2000);
                    var a = document.querySelector(".pesan").
                    a.remove(".pesan");
                }, timeout);
            }
        }

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
