@extends('test.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Data Form Warga</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" id="myForm" action="javascript:;">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Nama</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="nama"  placeholder="Masukan Nama" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">NIK</label>
                            <div class="col-md-6">
                                <input type="number" class="form-control" name="nik" id="name" placeholder="NIK" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Nomor KK</label>
                            <div class="col-md-6">
                                <input type="number" class="form-control" name="no_kk" id="name" placeholder="Nomor" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Foto KTP</label>
                            <div class="col-md-6">
                                <input type="file" class="form-control" name="ktp" id="name" placeholder="File" accept=".png, .jpeg. .jpg" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Foto KK</label>
                            <div class="col-md-6">
                                <input type="file" class="form-control" name="kk" id="name" placeholder="File" accept=".png, .jpeg. .jpg" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Umur</label>
                            <div class="col-md-6">
                                <input type="number" class="form-control" name="umur" id="name" placeholder="Umur" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Jenis Kelamin</label>
                            <div class="col-md-6">
                                <select class="form-control" name="jk" required>
                                    <option value="">Pilih</option>    
                                    <option value="Laki-laki">Laki-laki</option>    
                                    <option value="Perempuan">Perempuan</option>    
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Provinsi</label>
                            <div class="col-md-6">
                                <select class="form-control" name="provinsi" id="province" required>
                                    <option value=""></option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Kota/ Kab</label>
                            <div class="col-md-6">
                                <select class="form-control" name="kota" id="city" required>
                                    <option value="">Pilih Kota/ Kab</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Kecamatan</label>
                            <div class="col-md-6">
                                <select class="form-control" name="camat" id="camat" required>
                                    <option value="">Pilih Kecamatan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Kelurahan</label>
                            <div class="col-md-6">
                                <select class="form-control" name="lurah" id="lurah" required>
                                    <option value="">Pilih Kelurahan</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Alamat</label>
                            <div class="col-md-6">
                                {{-- <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" required> --}}
                                <textarea id="" cols="30" name="alamat" rows="3" class="form-control" required></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">RT</label>
                            <div class="col-md-2">
                                <input type="number" class="form-control" name="rt" id="name" placeholder="RT" required>
                            </div>
                            <label for="email" class="col-md-1 control-label">RW</label>
                            <div class="col-md-2">
                                <input type="number" class="form-control" name="rw" id="name" placeholder="Rw" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Penghasilan Sebelum Pandemi</label>
                            <div class="col-md-6">
                                <input type="number" class="form-control" name="sebelum" id="name" placeholder="Sebesar" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Penghasilan Setelah Pandemi</label>
                            <div class="col-md-6">
                                <input type="number" class="form-control" name="sesudah" id="name" placeholder="Sebesar" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Alasan Membutuhkan bantuan</label>
                            <div class="col-md-6">
                                <textarea name="alasan" id="" cols="30" rows="3" name="alasan" class="form-control" required></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary submit-form">
                                    <i class="fa fa-btn fa-sign-in"></i> Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@push('scripts')
<script>
    $(document).ready(function () {
        $.ajax({
           type:"get",
           url: 'https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json',
           success:function(res)
           {       
                if(res)
                {
                    $("#province").empty();
                    $("#province").append('<option value="">Pilih Provinsi</option>');
                    $.each(res,function(key,value){
                        $("#province").append('<option value="'+value.name+'" data-id="'+value.id+'">'+value.name+'</option>');
                    });
                }
           }

        });    
    });

    $(document).on('change', '#province', function (e) {
        var id = $('option:selected',this).data('id');
        console.log(id);
        $.ajax({
           type:"get",
           url: 'https://www.emsifa.com/api-wilayah-indonesia/api/regencies/'+id+'.json',
           success:function(res)
           {       
                if(res)
                {
                    $("#city").empty();
                    $("#city").append('<option value="">Pilih Kota/ Kab</option>');
                    $.each(res,function(key,value){
                        $("#city").append('<option value="'+value.name+'" data-id="'+value.id+'">'+value.name+'</option>');
                    });
                }
           }

        });    
    });
    $(document).on('change', '#city', function (e) {
        var id = $('option:selected',this).data('id');
        $.ajax({
           type:"get",
           url: 'https://www.emsifa.com/api-wilayah-indonesia/api/districts/'+id+'.json',
           success:function(res)
           {       
                if(res)
                {
                    $("#camat").empty();
                    $("#camat").append('<option value="">Pilih Kecamatan</option>');
                    $.each(res,function(key,value){
                        $("#camat").append('<option value="'+value.name+'" data-id="'+value.id+'">'+value.name+'</option>');
                    });
                }
           }

        });    
    });
    $(document).on('change', '#camat', function (e) {
        var id = $('option:selected',this).data('id');
        $.ajax({
           type:"get",
           url: 'https://www.emsifa.com/api-wilayah-indonesia/api/villages/'+id+'.json',
           success:function(res)
           {       
                if(res)
                {
                    $("#lurah").empty();
                    $("#lurah").append('<option value="">Pilih Kelurahan</option>');
                    $.each(res,function(key,value){
                        $("#lurah").append('<option value="'+value.name+'" data-id="'+value.id+'">'+value.name+'</option>');
                    });
                }
           }

        });    
    });

    
    
    // $( document ).on('click', '.submit-form',function(e) {
    $( "#myForm" ).submit(function(e) {
        e.preventDefault();
        var form = $(this);
        Swal.fire({
            icon: 'warning',
            input: 'checkbox',
            inputPlaceholder: 'Saya menyatakan bahwa data yang diisikan adalah benar dan siap mempertanggungjawabkan apabila ditemukan ketidaksesuaian dalam data tersebut.',
            showCancelButton: true,
            confirmButtonText: 'Submit',
            showLoaderOnConfirm: true,
            preConfirm: (login) => {
                console.log(login);
                if(login == 0){
                    Swal.showValidationMessage(
                    `Centang Terlebih Dahulu`
                    )
                }
            },
            allowOutsideClick: () => !Swal.isLoading()
        }).then((result) => {
            if (result.isConfirmed) {
                if (result.value) {
                    let timerInterval
                    Swal.fire({
                    title: 'Loading..!',
                    timer: Math.floor((Math.random() *10000) + 1),
                    timerProgressBar: true,
                    didOpen: () => {
                        Swal.showLoading()
                    },
                    willClose: () => {
                        clearInterval(timerInterval)
                    }
                    }).then((result) => {
                        var formData =  new FormData(this);
                        $.ajax({
                            type:"post",
                            url: "/submit",
                            processData: false,
                            contentType: false,
                            // data: form.serialize(),
                            data: formData,
                            success:function(res)
                            {   
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Yeay...',
                                    text: 'Data Berhasil Disimpan',
                                    showConfirmButton: false,
                                    timer: 1500
                                })    
                                $('#hasil').html(res.html);
                            },
                            error: function (request, status, error) {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    text: 'Something went wrong/ Internal Server Error!',
                                    showConfirmButton: false,
                                    timer: 2000
                                })    
                            }
                        });    
                    })
                } 
            }
        })
       
    });
</script>
@endpush