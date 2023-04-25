@extends('layouts.frontbase')




    @section('content')

        @section('sidebar')
            @include("home.sidebar")
        @show

        <div id="our_team" class="team-main pad-top-100 pad-bottom-100 parallax">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                            <h2 class="block-title text-center">
                                Our Team
                            </h2>
                            <p class="title-caption text-center">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
                        </div>
                        <div class="team-box">

                            <div class="row">
                                <div class="col-md-4 col-sm-6">
                                    <div class="sf-team">
                                        <div class="thumb">
                                            <a href="#"><img src="{{asset('assets')}}/images/staff-01.jpg" alt=""></a>
                                        </div>
                                        <div class="text-col">
                                            <h3>John Doggett</h3>
                                            <p>Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Aenean commodo ligula.</p>
                                            <ul class="team-social">
                                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-md-4 col-sm-6">
                                    <div class="sf-team">
                                        <div class="thumb">
                                            <a href="#"><img src="{{asset('assets')}}/images/staff-02.jpg" alt=""></a>
                                        </div>
                                        <div class="text-col">
                                            <h3>Jeffrey Spender</h3>
                                            <p>Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Aenean commodo ligula.</p>
                                            <ul class="team-social">
                                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-md-4 col-sm-6">
                                    <div class="sf-team">
                                        <div class="thumb">
                                            <a href="#"><img src="{{asset('assets')}}/images/staff-03.jpg" alt=""></a>
                                        </div>
                                        <div class="text-col">
                                            <h3>Monica Reyes</h3>
                                            <p>Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Aenean commodo ligula.</p>
                                            <ul class="team-social">
                                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->

                        </div>
                        <!-- end team-box -->

                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end team-main -->

        <div id="gallery" class="gallery-main pad-top-100 pad-bottom-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                            <h2 class="block-title text-center">
                                Our Gallery
                            </h2>
                            <p class="title-caption text-center">There are many variations of passages of Lorem Ipsum available </p>
                        </div>
                        <div class="gal-container clearfix">
                            <div class="col-md-8 col-sm-12 co-xs-12 gal-item">
                                <div class="box">
                                    <a href="#" data-toggle="modal" data-target="#1">
                                        <img src="{{asset('assets')}}/images/gallery_01.jpg" alt="" />
                                    </a>
                                    <div class="modal fade" id="1" tabindex="-1" role="dialog">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                <div class="modal-body">
                                                    <img src="{{asset('assets')}}/images/gallery_01.jpg" alt="" />
                                                </div>
                                                <div class="col-md-12 description">
                                                    <h4>This is the 1 one on my Gallery</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                                <div class="box">
                                    <a href="#" data-toggle="modal" data-target="#2">
                                        <img src="{{asset('assets')}}/images/gallery_02.jpg" alt="" />
                                    </a>
                                    <div class="modal fade" id="2" tabindex="-1" role="dialog">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                <div class="modal-body">
                                                    <img src="{{asset('assets')}}/images/gallery_02.jpg" alt="" />
                                                </div>
                                                <div class="col-md-12 description">
                                                    <h4>This is the 2 one on my Gallery</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                                <div class="box">
                                    <a href="#" data-toggle="modal" data-target="#3">
                                        <img src="{{asset('assets')}}/images/gallery_03.jpg" alt="" />
                                    </a>
                                    <div class="modal fade" id="3" tabindex="-1" role="dialog">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                <div class="modal-body">
                                                    <img src="{{asset('assets')}}/images/gallery_03.jpg" alt="" />
                                                </div>
                                                <div class="col-md-12 description">
                                                    <h4>This is the 3 one on my Gallery</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                                <div class="box">
                                    <a href="#" data-toggle="modal" data-target="#4">
                                        <img src="{{asset('assets')}}/images/gallery_04.jpg" alt="" />
                                    </a>
                                    <div class="modal fade" id="4" tabindex="-1" role="dialog">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                <div class="modal-body">
                                                    <img src="{{asset('assets')}}/images/gallery_04.jpg" alt="" />
                                                </div>
                                                <div class="col-md-12 description">
                                                    <h4>This is the 4 one on my Gallery</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                                <div class="box">
                                    <a href="#" data-toggle="modal" data-target="#5">
                                        <img src="{{asset('assets')}}/images/gallery_05.jpg" alt="" />
                                    </a>
                                    <div class="modal fade" id="5" tabindex="-1" role="dialog">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                <div class="modal-body">
                                                    <img src="{{asset('assets')}}/images/gallery_05.jpg" alt="" />
                                                </div>
                                                <div class="col-md-12 description">
                                                    <h4>This is the 5 one on my Gallery</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                                <div class="box">
                                    <a href="#" data-toggle="modal" data-target="#9">
                                        <img src="images/gallery_06.jpg" alt="" />
                                    </a>
                                    <div class="modal fade" id="9" tabindex="-1" role="dialog">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                <div class="modal-body">
                                                    <img src="{{asset('assets')}}/images/gallery_06.jpg" alt="" />
                                                </div>
                                                <div class="col-md-12 description">
                                                    <h4>This is the 6 one on my Gallery</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-12 co-xs-12 gal-item">
                                <div class="box">
                                    <a href="#" data-toggle="modal" data-target="#10">
                                        <img src="{{asset('assets')}}/images/gallery_07.jpg" alt="" />
                                    </a>
                                    <div class="modal fade" id="10" tabindex="-1" role="dialog">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                <div class="modal-body">
                                                    <img src="{{asset('assets')}}/images/gallery_07.jpg" alt="" />
                                                </div>
                                                <div class="col-md-12 description">
                                                    <h4>This is the 7 one on my Gallery</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                                <div class="box">
                                    <a href="#" data-toggle="modal" data-target="#11">
                                        <img src="{{asset('assets')}}/images/gallery_08.jpg" alt="" />
                                    </a>
                                    <div class="modal fade" id="11" tabindex="-1" role="dialog">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                <div class="modal-body">
                                                    <img src="{{asset('assets')}}/images/gallery_08.jpg" alt="" />
                                                </div>
                                                <div class="col-md-12 description">
                                                    <h4>This is the 8 one on my Gallery</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                                <div class="box">
                                    <a href="#" data-toggle="modal" data-target="#12">
                                        <img src="{{asset('assets')}}/images/gallery_09.jpg" alt="" />
                                    </a>
                                    <div class="modal fade" id="12" tabindex="-1" role="dialog">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                <div class="modal-body">
                                                    <img src="{{asset('assets')}}/images/gallery_09.jpg" alt="" />
                                                </div>
                                                <div class="col-md-12 description">
                                                    <h4>This is the 9 one on my Gallery</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                                <div class="box">
                                    <a href="#" data-toggle="modal" data-target="#13">
                                        <img src="{{asset('assets')}}/images/gallery_10.jpg" alt="" />
                                    </a>
                                    <div class="modal fade" id="13" tabindex="-1" role="dialog">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                <div class="modal-body">
                                                    <img src="{{asset('assets')}}/images/gallery_10.jpg" alt="" />
                                                </div>
                                                <div class="col-md-12 description">
                                                    <h4>This is the 10 one on my Gallery</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end gal-container -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end gallery-main -->

        <div id="blog" class="blog-main pad-top-100 pad-bottom-100 parallax">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h2 class="block-title text-center">
                            Our Blog
                        </h2>
                        <div class="blog-box clearfix">
                            <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                                <div class="col-md-6 col-sm-6">
                                    <div class="blog-block">
                                        <div class="blog-img-box">
                                            <img src="{{asset('assets')}}/images/featured-image-01.jpg" alt="" />
                                            <div class="overlay">
                                                <a href=""><i class="fa fa-link" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="blog-dit">
                                            <p><span>25 NOVEMBER, 2014</span></p>
                                            <h2>LATEST RECIPES JUST IN!</h2>
                                            <h5>BY John Doggett</h5>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                                <div class="col-md-6 col-sm-6">
                                    <div class="blog-block">
                                        <div class="blog-img-box">
                                            <img src="{{asset('assets')}}/images/featured-image-02.jpg" alt="" />
                                            <div class="overlay">
                                                <a href=""><i class="fa fa-link" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="blog-dit">
                                            <p><span>2 NOVEMBER, 2014</span></p>
                                            <h2>NEW RECRUITS HAVE ARRIVED!</h2>
                                            <h5>BY Jeffrey Spender</h5>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                                <div class="col-md-6 col-sm-6">
                                    <div class="blog-block">
                                        <div class="blog-img-box">
                                            <img src="{{asset('assets')}}/images/featured-image-03.jpg" alt="" />
                                            <div class="overlay">
                                                <a href=""><i class="fa fa-link" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="blog-dit">
                                            <p><span>4 NOVEMBER, 2014</span></p>
                                            <h2>BAKING TIPS FROM THE PROS</h2>
                                            <h5>BY Monica Reyes</h5>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                                <div class="col-md-6 col-sm-6">
                                    <div class="blog-block">
                                        <div class="blog-img-box">
                                            <img src="{{asset('assets')}}/images/featured-image-04.jpg" alt="" />
                                            <div class="overlay">
                                                <a href=""><i class="fa fa-link" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="blog-dit">
                                            <p><span>12 NOVEMBER, 2014</span></p>
                                            <h2>ALL YOUR EGGS BELONG TO US</h2>
                                            <h5>BY John Doggett</h5>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                        </div>
                        <!-- end blog-box -->

                        <div class="blog-btn-v">
                            <a class="hvr-underline-from-center" href="#">View the Blog</a>
                        </div>

                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end blog-main -->

        <div id="pricing" class="pricing-main pad-top-100 pad-bottom-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h2 class="block-title text-center">
                            Pricing
                        </h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut orci varius, elementum lectus nec, aliquam lectus. Duis neque augue, maximus in sapien ut, porta pharetra odio.</p>
                    </div>
                    <div class="panel-pricing-in">
                        <!-- item -->
                        <div class="col-md-4 col-sm-4 text-center">
                            <div class="panel panel-pricing">
                                <div class="panel-heading">
                                    <div class="pric-icon">
                                        <img src="{{asset('assets')}}/images/store.png" alt="" />
                                    </div>
                                    <h3>Basic</h3>
                                </div>
                                <div class="panel-body text-center">
                                    <p><strong>$30/<span>Month</span></strong></p>
                                </div>
                                <ul class="list-group text-center">
                                    <li class="list-group-item"><i class="fa fa-check"></i> One Website</li>
                                    <li class="list-group-item"><i class="fa fa-check"></i> One User</li>
                                    <li class="list-group-item"><i class="fa fa-check"></i> 10 GB Bandwidth</li>
                                    <li class="list-group-item"><i class="fa fa-times"></i> 2GB Storage</li>
                                    <li class="list-group-item"><i class="fa fa-times"></i> Offline work</li>
                                    <li class="list-group-item"><i class="fa fa-check"></i> 24x7 Support</li>
                                </ul>
                                <div class="panel-footer">
                                    <a class="btn btn-lg btn-block hvr-underline-from-center" href="#">Purchase Now!</a>
                                </div>
                            </div>
                        </div>
                        <!-- /item -->

                        <!-- item -->
                        <div class="col-md-4 col-sm-4 text-center">
                            <div class="panel panel-pricing">
                                <div class="panel-heading">
                                    <div class="pric-icon">
                                        <img src="{{asset('assets')}}/images/food.png" alt="" />
                                    </div>
                                    <h3>Pro</h3>
                                </div>
                                <div class="panel-body text-center">
                                    <p><strong>$60/<span>Month</span></strong></p>
                                </div>
                                <ul class="list-group text-center">
                                    <li class="list-group-item"><i class="fa fa-check"></i> One Website</li>
                                    <li class="list-group-item"><i class="fa fa-check"></i> One User</li>
                                    <li class="list-group-item"><i class="fa fa-check"></i> 50 GB Bandwidth</li>
                                    <li class="list-group-item"><i class="fa fa-check"></i> 2GB Storage</li>
                                    <li class="list-group-item"><i class="fa fa-check"></i> Offline work</li>
                                    <li class="list-group-item"><i class="fa fa-check"></i> 24x7 Support</li>
                                </ul>
                                <div class="panel-footer">
                                    <a class="btn btn-lg btn-block hvr-underline-from-center" href="#">Purchase Now!</a>
                                </div>
                            </div>
                        </div>
                        <!-- /item -->

                        <!-- item -->
                        <div class="col-md-4 col-sm-4 text-center">
                            <div class="panel panel-pricing">
                                <div class="panel-heading">
                                    <div class="pric-icon">
                                        <img src="{{asset('assets')}}/images/coffee.png" alt="" />
                                    </div>
                                    <h3>Platinum</h3>
                                </div>
                                <div class="panel-body text-center">
                                    <p><strong>$90/<span>Month</span></strong></p>
                                </div>
                                <ul class="list-group text-center">
                                    <li class="list-group-item"><i class="fa fa-check"></i> One Website</li>
                                    <li class="list-group-item"><i class="fa fa-check"></i> One User</li>
                                    <li class="list-group-item"><i class="fa fa-check"></i> 100 GB Bandwidth</li>
                                    <li class="list-group-item"><i class="fa fa-check"></i> 2GB Storage</li>
                                    <li class="list-group-item"><i class="fa fa-check"></i> Offline work</li>
                                    <li class="list-group-item"><i class="fa fa-check"></i> 24x7 Support</li>
                                </ul>
                                <div class="panel-footer">
                                    <a class="btn btn-lg btn-block hvr-underline-from-center" href="#">Purchase Now!</a>
                                </div>
                            </div>
                        </div>
                        <!-- /item -->
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end pricing-main -->

        <div id="reservation" class="reservations-main pad-top-100 pad-bottom-100">
            <div class="container">
                <div class="row">
                    <div class="form-reservations-box">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                                <h2 class="block-title text-center">
                                    Reservations
                                </h2>
                            </div>
                            <h4 class="form-title">BOOKING FORM</h4>
                            <p>PLEASE FILL OUT ALL REQUIRED* FIELDS. THANKS!</p>

                            <form id="contact-form" method="post" class="reservations-box" name="contactform" action="mail.php">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-box">
                                        <input type="text" name="form_name" id="form_name" placeholder="Name" required="required" data-error="Firstname is required.">
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-box">
                                        <input type="email" name="email" id="email" placeholder="E-Mail ID" required="required" data-error="E-mail id is required.">
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-box">
                                        <input type="text" name="phone" id="phone" placeholder="contact no.">
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-box">
                                        <select name="no_of_persons" id="no_of_persons" class="selectpicker">
                                            <option selected disabled>No. Of persons</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-box">
                                        <input type="text" name="date-picker" id="date-picker" placeholder="Date" required="required" data-error="Date is required." />
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-box">
                                        <input type="text" name="time-picker" id="time-picker" placeholder="Time" required="required" data-error="Time is required." />
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-box">
                                        <select name="preferred_food" id="preferred_food" class="selectpicker">
                                            <option selected disabled>preferred food</option>
                                            <option>Indian</option>
                                            <option>Continental</option>
                                            <option>Mexican</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-box">
                                        <select name="occasion" id="occasion" class="selectpicker">
                                            <option selected disabled>Occasion</option>
                                            <option>Wedding</option>
                                            <option>Birthday</option>
                                            <option>Anniversary</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- end col -->

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="reserve-book-btn text-center">
                                        <button class="hvr-underline-from-center" type="submit" value="SEND" id="submit">BOOK MY TABLE </button>
                                    </div>
                                </div>
                                <!-- end col -->
                            </form>
                            <!-- end form -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end reservations-box -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end reservations-main -->
