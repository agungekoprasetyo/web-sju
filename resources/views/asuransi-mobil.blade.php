@extends('layouts.app1')

@section('custom-css')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



@endsection

@section('title-page')
Asuransi Mobil
@endsection

@section('content')
<section id="subheader" class="text-light" data-bgimage="url(assets/images/background/subheader6.jpg) top">
    <div class="center-y relative text-center">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="spacer-single"></div>
                    <h1>Asuransi Mobil</h1>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</section>
<!-- section close -->


<section class="no-padding text-light" data-bgcolor="#2F3186">
    <div class="container-fluid">
        <div class="row no-gutters">
            <div class="col-lg-3 col-md-6">
                <div class="feature-box f-boxed style-3" data-bgcolor="rgba(255,255,255,.4)">
                    <i class="bg-color i-boxed fa fa-comments"></i>
                    <div class="text">
                        <h4>Free Consultation</h4>
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem.
                    </div>
                    <i class="wm fa fa-comments"></i>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="feature-box f-boxed style-3" data-bgcolor="rgba(255,255,255,.3)">
                    <i class="bg-color i-boxed fa fa-address-card"></i>
                    <div class="text">
                        <h4>Find an Agent</h4>
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem.
                    </div>
                    <i class="wm fa fa-address-card"></i>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="feature-box f-boxed style-3" data-bgcolor="rgba(255,255,255,.2)">
                    <i class="bg-color i-boxed fa fa-file-text"></i>
                    <div class="text">
                        <h4>Get a Quote</h4>
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem.
                    </div>
                    <i class="wm fa fa-file-text"></i>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="feature-box f-boxed style-3" data-bgcolor="rgba(255,255,255,.1)">
                    <i class="bg-color i-boxed fa fa-comments"></i>
                    <div class="text">
                        <h4>Free Consultation</h4>
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem.
                    </div>
                    <i class="wm fa fa-comments"></i>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="section-fun-facts" class="pt60 pb60" data-bgcolor="#F2F6FE">
    <div class="container">
        <p style="text-align: center;font-size:160%;"><b>Asuransi Mobil Terbaik 2021, Bandingkan Polis!</b></p>
        <br>
        <br>
        <div class="row">
            <div class="form-group col-md-3">
                <label for="inputState">Merek</label>
                <select id="inputState" class="form-control">
                    <option selected>Choose...</option>
                    <option>Honda</option>
                    <option>Daihatsu</option>
                </select>
            </div>

            <div class="form-group col-md-3">
                <label for="inputState">Model</label>
                <select id="inputState" class="form-control">
                    <option selected>Choose...</option>
                    <option>Accord</option>
                    <option>Brio</option>
                </select>
            </div>

            <div class="form-group col-md-3">
                <label for="inputState">Tipe</label>
                <select id="inputState" class="form-control">
                    <option selected>Choose...</option>
                    <option>Brio RS MT</option>
                    <option>Brio RS CVT</option>

                </select>
            </div>

            <div class="form-group col-md-3">
                <label for="inputState">State</label>
                <select id="inputState" class="form-control">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
            </div>

            <div class="form-group col-md-3 button-primary" style="align-items: center;">
                <a href="#" class="btn-custom capsule med">Cari Asuransi</a>

            </div>
        </div>

    </div>
</section>

<section>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <span class="p-title invert">Profile</span><br>
                <h2>
                    Bersama JELAS, tidak ada lagi kerepotan & tidak ada lagi kekhawatiran
                </h2>
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Online Payment</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Quick Claims</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">14-day Guarantee</a>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <p>Consequat occaecat ullamco amet non eiusmod nostrud dolore irure incididunt est duis anim sunt officia. Fugiat velit proident aliquip nisi incididunt nostrud exercitation proident est nisi. Irure magna elit commodo anim ex veniam culpa eiusmod id nostrud sit cupidatat in veniam ad. Eiusmod consequat eu adipisicing minim anim aliquip cupidatat culpa excepteur quis. Occaecat sit eu exercitation irure Lorem incididunt nostrud.</p>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <p>Ad pariatur nostrud pariatur exercitation ipsum ipsum culpa mollit commodo mollit ex. Aute sunt incididunt amet commodo est sint nisi deserunt pariatur do. Aliquip ex eiusmod voluptate exercitation cillum id incididunt elit sunt. Qui minim sit magna Lorem id et dolore velit Lorem amet exercitation duis deserunt. Anim id labore elit adipisicing ut in id occaecat pariatur ut ullamco ea tempor duis.</p>
                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <p>Est quis nulla laborum officia ad nisi ex nostrud culpa Lorem excepteur aliquip dolor aliqua irure ex. Nulla ut duis ipsum nisi elit fugiat commodo sunt reprehenderit laborum veniam eu veniam. Eiusmod minim exercitation fugiat irure ex labore incididunt do fugiat commodo aliquip sit id deserunt reprehenderit aliquip nostrud. Amet ex cupidatat excepteur aute veniam incididunt mollit cupidatat esse irure officia elit do ipsum ullamco Lorem.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 offset-md-1 d-none d-lg-block d-xl-block text-center">
                <img class="relative img-fluid" src="assets/images/misc/2.jpg" alt="" />
            </div>
        </div>
    </div>
</section>


<section class="bg-color-secondary text-light">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2><span class="id-color-secondary">Call us</span> for further information. Priva customer care is here to help you <span class="id-color-secondary">anytime</span>.</h2>
                <p class="lead">We're available for 24 hours!</p>
            </div>

            <div class="col-md-6 text-lg-center text-sm-center">
                <div class="phone-num-big">
                    <i class="fa fa-phone id-color-secondary"></i>
                    <span class="pnb-text">
                        Call Us Now
                    </span>
                    <span class="pnb-num">
                        1 200 333 800
                    </span>
                </div>
                <a href="#" class="btn-custom capsule med">Contact Us</a>
            </div>
        </div>
    </div>
</section>



@endsection

@section('custom-js')


@endsection