@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <!-- Start: Nice breadcrumb -->
    <ol class="breadcrumb">
        <li class="home"><a href="/"><i class="fas fa-home"></i><span>Home</span></a></li>
        <li><a href="/Contact">Contact Us</a></li>
    </ol>
    <!-- End: Nice breadcrumb -->
</div>
<!-- Start: Highlight Blue -->
<div class="highlight-blue" style="background:RGB(0, 128, 1);">
    <div class="container">
        <!-- Start: Intro -->
        <div class="intro">
            <h2 class="text-center"><strong>Contact Us Via our official Channels</strong></h2>
        </div>
        <!-- End: Intro -->
        <!-- Start: Buttons -->
        <!-- End: Buttons -->
    </div>
</div>
<!-- End: Highlight Blue -->
<div class="container-fluid"></div>
<div class="container-fluid">
    <!-- Start: Contact form simple -->
    <section id="contact" style="padding:40px;padding-right:5px;padding-left:4px;">
        <!-- Start: Contact FormModal Contact Form with Google Map -->
        <div class="container">
            <!-- Start: Contact Form -->
            <form id="contactForm" style="padding:15px;" action="javascript:void();" method="post">
                <div class="form-row" style="margin-left:0px;margin-right:0px;padding:10px;">
                    <div class="col-md-6" style="padding-left:20px;padding-right:20px;">
                        <fieldset></fieldset>
                        <legend><i class="fa fa-info-circle" style="color:green"></i>&nbsp;Contact Us</legend>
                        <p></p>
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td><i class="fa fa-building" style="color:green"></i></td>
                                        <td>Shamata Sub-County</td>
                                    </tr>
                                    <tr>
                                        <td><i class="fa fa-map-marker" style="color:green"></i></td>
                                        <td>P.O. BOX 8- 20304 Kaheho, Shamata Nyandarua County</td>
                                    </tr>
                                    <tr>
                                        <td><i class="fa fa-phone" style="color:green"></i></td>
                                        <td>
                                            +254(0)-720-920-029
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><i class="fa fa-envelope" style="color:green"></i></td>
                                        <td>
                                            info@shamatagirls.ac.ke<br>
                                            mail@shamatagirls.ac.ke
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-12 col-md-6" id="message" style="padding-right:20px;padding-left:20px;">
                        <fieldset>
                            <legend><i class="fa fa-envelope" style="color:#008001"></i>&nbsp;Contact Form</legend>
                        </fieldset>
                        <div class="form-group has-feedback"><label for="from_name">Your Name</label><input class="form-control border-success" type="text" id="from_name" tabindex="-1" name="from_name" required="" placeholder="Enter your Names"></div>
                        <div class="form-group has-feedback"><label for="from_email">Email</label><input class="form-control border-success" type="email" id="from_email" name="from_email" required="" placeholder="Your Email Address" readonly></div>
                        <div class="form-group"><label for="comments">Message</label><textarea class="form-control border-success" id="comments" name="Comments" placeholder="Type Your Message Here" rows="5"></textarea></div>
                        <div class="form-group"><button class="btn btn-primary active btn-block disabled" style="background-color:#008001;" type="submit">Send <i class="fa fa-chevron-circle-right"></i></button></div>
                        <hr>
                    </div>
                </div>
            </form>
            <!-- End: Contact Form -->
        </div>
        <!-- End: Contact FormModal Contact Form with Google Map -->
    </section>
    <!-- End: Contact form simple -->
</div>
<div class="container-fluid"></div>
@stop
