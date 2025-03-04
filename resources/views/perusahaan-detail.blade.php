@extends('layoutslp.main')

@section('isi')
<section class="warper bg-light warper-border">
    <div class="container pt-10 pb-9 pt-md-14 pb-md-11 text-center">
        <div class="row">
            <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                <div class="post-header">
                    <div class="post-category text-line">
                        <a href="#" class="hover" rel="category">DETAIL PERSUSAHAAN</a>
                    </div>
                    <!-- /.post-category -->
                    <h1 class="display-1 mb-3">PT. INOVINDO DIGITAL MEDIA</h1>
                    <p class="lead px-md-12 px-lg-12 px-xl-15 px-xxl-18">Integer posuere erat a ante venenatis dapibus
                        posuere. Maecenas faucibus mollis interdum.</p>
                </div>
                <!-- /.post-header -->
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->
<section class="wrapper bg-light wrapper-border">
    <div class="container pb-14 pb-md-16">
        <article>
            <div class="post-slider mb-8 mb-md-12">
                <div class="swiper-container dots-over" data-margin="5" data-dots="true" data-nav="true"
                    data-autoheight="true">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide rounded">
                                <img src="assets/img/photos/pp7.jpg" alt="" />
                                <div class="caption-wrapper p-12">
                                    <div
                                        class="caption bg-white rounded px-4 py-3 ms-auto mt-auto animate_animated animateslideInDown animate_delay-1s">
                                        <h5 class="mb-0">Vivamus sagittis lacus augue</h5>
                                    </div>
                                    <!--/.caption -->
                                </div>
                                <!--/.caption-wrapper -->
                            </div>
                            <!--/.swiper-slide -->
                            <div class="swiper-slide rounded">
                                <img src="assets/img/photos/pp8.jpg" alt="" />
                                <div class="caption-wrapper p-12">
                                    <div
                                        class="caption bg-white rounded px-4 py-3 mx-auto mt-auto animate_animated animateslideInDown animate_delay-1s">
                                        <h5 class="mb-0">Vivamus sagittis lacus augue</h5>
                                    </div>
                                    <!--/.caption -->
                                </div>
                                <!--/.caption-wrapper -->
                            </div>
                            <!--/.swiper-slide -->
                            <div class="swiper-slide rounded">
                                <img src="assets/img/photos/pp9.jpg" alt="" />
                                <div class="caption-wrapper p-12">
                                    <div
                                        class="caption bg-white rounded px-4 py-3 mt-auto animate_animated animateslideInDown animate_delay-1s">
                                        <h5 class="mb-0">Vivamus sagittis lacus augue</h5>
                                    </div>
                                    <!--/.caption -->
                                </div>
                                <!--/.caption-wrapper -->
                            </div>
                            <!--/.swiper-slide -->
                        </div>
                        <!--/.swiper-wrapper -->
                    </div>
                    <!-- /.swiper -->
                </div>
                <!-- /.swiper-container -->
            </div>
            <!-- /.post-slider -->
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <h2 class="display-6 mb-4">TENTANG Perusahaan</h2>
                    <div class="row gx-0">
                        <div class="col-md-9 text-justify">
                            <p>Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus
                                commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                                Integer posuere erat a ante venenatis. Etiam porta sem malesuada magna mollis euismod.
                                Aenean lacinia bibendum.</p>
                            <p>Donec id elit non mi porta gravida at eget metus. Cras mattis consectetur purus sit amet
                                fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed
                                odio dui. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.
                                Sed posuere consectetur est at lobortis. Vivamus sagittis lacus vel augue laoreet rutrum
                                faucibus dolor auctor.</p>
                        </div>
                        <!--/column -->
                        <div class="col-md-2 ms-auto">
                            <ul class="list-unstyled">
                                <li>
                                    <h5 class="mb-1">Date</h5>
                                    <p>17 May 2018</p>
                                </li>
                                <li>
                                    <h5 class="mb-1">Client Name</h5>
                                    <p>Cool House</p>
                                </li>
                            </ul>
                            <a href="#" class="more hover">See Project</a>
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                </div>
                <!-- /column -->
            </div>
            <!--/.row -->
        </article>
        <!-- /.project -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->
<section class="wrapper bg-light">
    <div class="container py-10">
        <div class="row gx-md-6 gy-3 gy-md-0">
            <div class="col-md-8 align-self-center text-center text-md-start navigation">

            </div>
            <!--/column -->
            <aside class="col-md-4 sidebar text-center text-md-end">
                <div class="dropdown share-dropdown btn-group">
                    <button class="btn btn-red rounded-pill btn-icon btn-icon-start dropdown-toggle mb-0 me-0"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="uil uil-share-alt"></i> Share </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#"><i class="uil uil-twitter"></i>Twitter</a>
                        <a class="dropdown-item" href="#"><i class="uil uil-facebook-f"></i>Facebook</a>
                        <a class="dropdown-item" href="#"><i class="uil uil-linkedin"></i>Linkedin</a>
                    </div>
                    <!--/.dropdown-menu -->
                </div>
                <!--/.share-dropdown -->
            </aside>
            <!-- /column .sidebar -->
        </div>
        <!--/.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->
@endsection
