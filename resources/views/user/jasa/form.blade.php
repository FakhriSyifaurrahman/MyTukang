@extends('user.index')

@section('content')
<form action="{{ route('jasa.store') }}" method="post">
  {{ csrf_field() }}
<div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Daftar Jasa</strong>
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Nama Pengusaha</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="nama_pengusaha" placeholder="Input Nama" class="form-control">
                                                    <small class="form-text text-muted">Input Nama Pengusaha</small>
                                                </div>
                                            </div>
                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Nama Usaha</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="nama_usaha" placeholder="Input Nama" class="form-control">
                                                    <small class="form-text text-muted">Input Nama Usaha</small>
                                                </div>
                                            </div>
                                               <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Bidang Usaha</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="bidang_usaha" placeholder="Input Nama" class="form-control">
                                                    <small class="form-text text-muted">Input Bidang Usaha</small>
                                                </div>
                                            </div>
                                               <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Email</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="email" id="email-input" name="email" placeholder="Input Email" class="form-control">
                                                    <small class="help-block form-text">Input Email</small>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Deskripsi Usaha</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="deskripsi" id="textarea-input" rows="9" placeholder="Ceritakan Tentang Usaha Anda" class="form-control"></textarea>
                                                </div>
                                            </div>
   
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="file-input" class=" form-control-label">Input CV</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="file-input" name="file" class="form-control-file">
                                                </div>
                                            </div>
                                            
                                        </form>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                       
                                    </div>
                                </div>
                            </div>
                        </form>
@endsection