@include('layout.header')
@include('layout.menu')
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        @section('biaoti')
                        <h1 class="page-head-line">DASHBOARD</h1>
                        @show
                    </div>
                </div>
                @if(session('msg'))
                <div class="alert alert-info alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    {{session('msg')}}
                </div>
                @endif

                @section('section')
                @show

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
@include('layout.footer')
