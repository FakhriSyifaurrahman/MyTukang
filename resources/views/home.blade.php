@extends('layouts.app')

@section('content')

 <!-- Fontfaces CSS-->
    <link href="{{url('admin/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{url('admin/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{url('admin/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{url('admin/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{url('admin/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{url('admin/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{url('admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{url('admin/vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{url('admin/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{url('admin/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{url('admin/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{url('admin/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{url('admin/css/theme.css')}}" rel="stylesheet" media="all">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <!-- DATA TABLE-->
            <section class="p-t-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35">data table</h3>
                            <div class="table-data__tool">
                               
                               
                            </div>
                            <div class="table-responsive table-responsive-data2">
                                <table class="table table-data2">
                                    <thead>
                                        <tr>
                                            <th>
                                               
                                            </th>
                                            <th>Nama Pengusaha</th>
                                            <th>Email</th>
                                            <th>Bidang Usaha</th>
                                            <th>Nama Usaha</th>
                                            <th>Keterangan</th>
                                            <th>price</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="tr-shadow">
                                            <td>
                                                
                                            </td>
                                            <td>Lori Lynch</td>
                                            <td>
                                                <span class="block-email">lori@example.com</span>
                                            </td>
                                            <td class="desc">Mebel</td>
                                            <td>Mebel</td>
                                            <td>
                                                <span class="status--process">Processed</span>
                                            </td>
                                            <td>$679.00</td>
                                            <td>
                                               
                                            </td>
                                        </tr>
                                        <tr class="spacer"></tr>
                                        <tr class="tr-shadow">
                                            <td>
                                                
                                            </td>
                                            <td>Lori Lynch</td>
                                            <td>
                                                <span class="block-email">john@example.com</span>
                                            </td>
                                            <td class="desc">Bangunan</td>
                                            <td>Bangunan</td>
                                            <td>
                                                <span class="status--process">Processed</span>
                                            </td>
                                            <td>$999.00</td>
                                            <td>
                                                
                                            </td>
                                        </tr>
                                        <tr class="spacer"></tr>
                                        <tr class="tr-shadow">
                                            <td>
                                               
                                            </td>
                                            <td>Lori Lynch</td>
                                            <td>
                                                <span class="block-email">lyn@example.com</span>
                                            </td>
                                            <td class="desc">Ledeng</td>
                                            <td>Ledeng</td>
                                            <td>
                                                <span class="status--process">Processed</span>
                                            </td>
                                            <td>$1199.00</td>
                                            <td>
                                               
                                            </td>
                                        </tr>
                                        <tr class="spacer"></tr>
                                        <tr class="tr-shadow">
                                            <td>
                                                
                                            </td>
                                            <td>Lori Lynch</td>
                                            <td>
                                                <span class="block-email">doe@example.com</span>
                                            </td>
                                            <td class="desc">Interior</td>
                                            <td>Interior</td>
                                            <td>
                                                <span class="status--process">Processed</span>
                                            </td>
                                            <td>$699.00</td>
                                            <td>
                                               
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

            <!-- END DATA TABLE-->
                </div>
            </div>
        </div>
    </div>
</div>

 <!-- Jquery JS-->
    <script src="{{url('admin/vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap JS-->
    <script src="{{url('admin/vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{url('admin/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <!-- Vendor JS       -->
    <script src="{{url('admin/vendor/slick/slick.min.js')}}">
    </script>
    <script src="{{url('admin/vendor/wow/wow.min.js')}}"></script>
    <script src="{{url('admin/vendor/animsition/animsition.min.js')}}"></script>
    <script src="{{url('adminvendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
    </script>
    <script src="{{url('admin/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="{{url('admin/vendor/counter-up/jquery.counterup.min.js')}}">
    </script>
    <script src="{{url('admin/vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{url('admin/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{url('admin/vendor/chartjs/Chart.bundle.min.js')}}"></script>
    <script src="{{url('admin/vendor/select2/select2.min.js')}}">
    </script>

    <script src="{{url('admin/js/main.js')}}"></script>


@endsection
