@extends('layouts.frontend')

@section('main_content')
     <!--error-404 start-->
     <section class="error-404">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ttm-big-icon ttm-textcolor-skincolor">
                            <i class="fa fa-thumbs-o-down"></i>
                        </div>
                        <header class="page-header"><h1 class="page-title">404 ERROR</h1></header>
                        <div class="page-content"> <p>This page may have been moved or deleted. Be sure to check your spelling.</p></div>
                        <a class="ttm-btn ttm-btn-size-md ttm-btn-bgcolor-skincolor mb-15" href="/">Back To Home</a>
                    </div>
                </div>
            </div>
        </section>
        <!--error-404 end-->      
@endsection