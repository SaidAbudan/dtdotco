<?php
foreach ($dataumroh->result() as $r) {
?>
<!DOCTYPE html>
<html lang="zxx">

<!-- Head -->
<head>

<meta name="google-site-verification" content="4P29uSHs7fYMai_sqywTOk4-VNlphvMVZ7QGh_3az_0" />
    <meta name="google-site-verification" content="T9vHs-0GUdWhue22iFWg-C_eCfYEbOnyV43ZrMscbIE" />
<title><?= $r->nmpaketumroh ?> | PT Dream Tours and Travel</title>
<link rel="shortcut icon" href="<?php echo base_url()?>asset/images/icon_dream.png">
    <meta charset="utf-8">
    <meta name="description" content="<?= $r->nmpaketumroh." ".strip_tags($r->overview) ?>">
    <link rel="alternate" hreflang="" href="http://www.dreamtour.co/" />
    <link rel="canonical" href="http://www.dreamtour.co/umroh/paket_umroh_exclsive" />
    <meta name="author" content="Dream Tour">
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow" />
    <meta name="keywords" content="umroh, paket umroh, paket Umroh Murah, Paket Umroh Bintang 5, Umroh direct Madinnah, pt dream tour and travel, umroh vip, travel umroh jakarta, <?= $r->nmpaketumroh ?>" />
    <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Meta-Tags -->

<!-- Custom-Stylesheet-Links -->
<!-- Bootstrap-CSS -->    <link rel="stylesheet" href="<?php echo base_url()?>asset/odyssey/css/bootstrap.css" type="text/css" media="all">
<!-- Index-Page-CSS -->   <link rel="stylesheet" href="<?php echo base_url()?>asset/odyssey/css/style.css"         type="text/css" media="all">
<!-- Owl-Carousel-CSS --> <link rel="stylesheet" href="<?php echo base_url()?>asset/odyssey/css/owl.carousel.css"  type="text/css" media="all">
<!-- Date-Picker-CSS -->  <link rel="stylesheet" href="<?php echo base_url()?>asset/odyssey/css/jquery-ui.css"     type="text/css" media="all">
<!-- Chocolat-CSS -->     <link rel="stylesheet" href="<?php echo base_url()?>asset/odyssey/css/chocolat.css"      type="text/css" media="all">
<!-- //Custom-Stylesheet-Links -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- Fonts -->
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat:400,700"     type="text/css" media="all">
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:100,300,400,500" type="text/css" media="all">
<!-- //Fonts -->

<!-- Font-Awesome-File-Links -->
<!-- CSS --> <link rel="stylesheet" href="<?php echo base_url()?>asset/odyssey/css/font-awesome.css"      type="text/css" media="all">
<!-- TTF --> <link rel="stylesheet" href="<?php echo base_url()?>asset/odyssey/fonts/fontawesome-webfont.ttf" type="text/css" media="all">
<!-- //Font-Awesome-File-Links -->

<!-- Supportive-JavaScript -->
<script src="<?php echo base_url()?>asset/odyssey/js/modernizr.js"></script>
<!-- //Supportive-JavaScript -->
        
      </head>
<!-- //Head -->

<!-- Body -->
<body>

    <!-- Header -->
    <div class="agileheader" id="agileitshome">

        <!-- Navigation -->
        <div class="w3lsnavigation">
            <nav class="navbar navbar-default agilehovereffect wthreehovereffect">
                <div class="navbar-header navbar-left">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="w3_navigation_pos">
                        <a href="<?php echo base_url()?>">
                            <img width="42%"; src="<?php echo base_url()?>asset/odyssey/images/logo-dt.png" alt="dreamtour, dreamtour jakarta, travel umroh terbaik">
                        </a>
                    </div>
                </div>

                <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                    <nav class="link-effect-2" id="link-effect-2">
                        <ul class="nav navbar-nav">
                            <li><a class="" href="<?php echo base_url()?>"><span>Home</span></a></li>
                            <li><a class="" href="<?php echo base_url()?>web/produk"><span>Produk</span></a></li>
                            <li><a class="" href="<?php echo base_url()?>umroh"><span>Umroh</span></a></li>
                            <li><a class="" href="<?php echo base_url()?>tour/wisata_tour"><span>Liburan</span></a></li>
                            <li><a target="_blank" class="" href="<?php echo base_url()?>sohibi"><span>Sohibi</span></a></li>
                            <li><a class="" href="<?php echo base_url()?>web/contact"><span>Kontak Kami</span></a></li>
                        </ul>
                    </nav>
                </div>
            </nav>
        </div>
        <!-- //Navigation -->
    </div>
    <!-- //Header -->

    <!-- Slider -->
<img src="http://admin.dreamtour.co/assets/images/gbrpaket/<?= $r->imgpaketumroh ?>" height="10%">
    <!-- //Slider -->
    <div class="row"></div>
    <div class="container">
        <br>
        <div class="alert alert-success" role="alert">
            <h4>Pesan <?= $r->nmpaketumroh ?></h4>
            <p>Pilih waktu pemberangkatan <?= $r->nmpaketumroh ?></p>
            <hr>
            <div class="col-md-6">
                <select class="form-control" onchange="pemberangkatan(this)">
                    <option>Pilih waktu pemberangkatan...</option>
                    <?php
                    foreach ($pemberangkatan->result() as $rp) {
                        echo '<option value="'.$rp->idpemberangkatan.'">'.tanggal($rp->dari_tanggal).'</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="col-md-6" id="resultbody">
                Waktu pemberangkatan belum dipilih!
            </div>
            <div class="clearfix"></div>
            <br>
            <center>
                <p class="m-t-2"><a href="<?php echo base_url()?>umroh" class="btn btn-theme"><i class="fa fa-home"></i> Paket Umroh Lainnya</a></p>
            </center>
        </div>
        <ul class="nav nav-tabs">
            <li class="active"><a href="#home" data-toggle="tab">Rincian Perjalanan</a>
            </li>
            <li><a href="#profile" data-toggle="tab">Termasuk</a>
            </li>
            <li><a href="#messages" data-toggle="tab">Tidak Termasuk</a>
            </li>
            <li><a href="#settings" data-toggle="tab">Pendaftaran & Persyaratan</a>
            </li>
            <li><a href="#info" data-toggle="tab">Informasi Lebih Lanjut</a>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
           <div class="tab-pane fade in active" id="home">
                <p style="text-align:justify;">
                    <br><br>
                    <h2>Rincian Perjalanan</h2>
                    <br><br>
                    <?= str_replace("<?php echo base_url()?>", base_url(), $r->rincian) ?>
                </p>
            </div>
            <div class="tab-pane fade" id="profile">
                <br><br>
                <h2>Termasuk</h2>
                <br><br>
                <?= $r->termasuk ?>
                <br><br>
            </div>
            <div class="tab-pane fade" id="messages">
                <br><br>
                <h2>Tidak Termasuk</h2>
                <br><br>
                <?= $r->tdktermasuk ?>
                <br><br>
            </div>
            <div class="tab-pane fade" id="settings">
                <br><br>
                <h2>Pendaftaran & Persyaratan Paket Umroh Exclusive 9 Hari</h2>
                <br><br>
                <?= $r->pandp ?>
                <br><br>
            </div>
            <div class="tab-pane fade" id="info">
                <br><br>
                <h2>Informasi Lebih Lanjut</h2>
                <br><br>
                <?= $r->moreinfo ?>
                <br><br>
            </div>

        </div> 
        <br>
        <a target="blank" href="http://admin.dreamtour.co/assets/images/itineraryfiles/<?= $r->itinerary ?>"><button style="" class="btn btn-primary btn-md" required="required">Download Itinerary</button></a>
        <br><br>
    </div>


    <!-- Footer -->
    <div class="agilefooterwthree" id="agilefooterwthree">
        <div class="container">

            <div class="agilefooterwthree-grids">
                <div class="col-md-3 agilefooterwthree-grid agilefooterwthree-grid1">
                    <h4>Kantor Pusat</h4>
                    <ul>
                       <li>Dream House</li>
                       <li>Jalan Matraman No 7</li>
                       <li>Kebon Manggis, Matraman </li>
                       <li>Jakarta Timur</li>
                       <li>(021) 21381090, (021) 21381091, 08119333000</li>
                       <li><a class="mail" href="mailto:mail@example.com">info@dreamtour.co</a></li>
                    </ul>
                </div>
                <div class="col-md-3 agilefooterwthree-grid agilefooterwthree-grid2">
                    <h4>Dream Tour Surabaya</h4>
                    <address>
                        <ul>
                           <li>Gedung Intiland Surabaya</li>
                        <li>1st Floor, Suite 12</li>
                        <li>Jl. Panglima Sudirman 101-103</li>
                        <li>Surabaya, Jawa Timur</li>
                        <li>031 5359666,031 5359555, 08113307330 </li>
                        <li><a class="mail" href="mailto:surabaya@dreamtour.co">surabaya@dreamtour.co</a></li>
                        </ul>
                    </address>
                </div>
                <div class="col-md-3 agilefooterwthree-grid agilefooterwthree-grid3">
                    <h4>Dream Tour Bandung</h4>
                    <address>
                        <ul>
                        <li>Dream Tour Bandung</li>
                        <li>Jalan Lengkong Kecil No 2</li>
                        <li>Paledang, Lengkong/li>
                        <li>Kota Bandung, Jawa Barat</li>
                        <li>022 20546868, 022 20542442</li>
                        <li><a class="mail" href="mailto:surabaya@dreamtour.co">bandung@dreamtour.co.id</a></li>
                        </ul>
                    </address>
                    
                </div>
                <div class="col-md-3 agilefooterwthree-grid agilefooterwthree-grid3">
                    <h4>Dream Tour Pekanbaru</h4>
                    <address>
                        <ul>
                        <li>Dream Tour Pekanbaru</li>
                        <li>Jl. Arifin Ahmad no 90c</li>
                        <li>Tangkerang Tengah, Marpoyan Damai/li>
                        <li>Pekanbaru-Riau</li>
                        <li>(0761) 6709535, 082272206660, 082272206661</li>
                        <li><a class="mail" href="mailto:pekanbaru@dreamtour.co.id">pekanbaru@dreamtour.co.id</a></li>
                        </ul>
                    </address>
                    
                </div>
                <div class="clearfix"></div>
            </div>

        </div>

    </div>
    <!-- //Footer -->



    <!-- Copyright -->
    <div class="copyright">
        <p>© 2018 <a href="www.dremtour.co">PT. Dream Tours & Travel</a>. All Rights Reserved </p>
    </div>
    <!-- //Copyright -->



    <!-- Custom-JavaScript-File-Links -->
    
    <!-- Default-JavaScript -->   <script type="text/javascript" src="<?php echo base_url()?>asset/odyssey/js/jquery-2.1.4.min.js"></script>
    <!-- Bootstrap-JavaScript --> <script type="text/javascript" src="<?php echo base_url()?>asset/odyssey/js/bootstrap.js"></script>

<!-- Responsive-Slider-JavaScript -->
            <script src="<?php echo base_url()?>asset/odyssey/js/responsiveslides.min.js"></script>
            <script>
                $(function () {
                    $("#slider").responsiveSlides({
                        auto: true,
                        nav: true,
                        speed: 2000,
                        namespace: "callbacks",
                        pager: true,
                    });
                });
            </script>
        <!-- //Responsive-Slider-JavaScript -->
        

        <!-- Review-Slider-JavaScript -->
            <script src="<?php echo base_url()?>asset/odyssey/js/main.js"></script>
        <!-- //Review-Slider-JavaScript -->

        <!-- Tour-Locations-JavaScript -->
            <script src="<?php echo base_url()?>asset/odyssey/js/classie.js"></script>
            <script src="<?php echo base_url()?>asset/odyssey/js/helper.js"></script>
            <script src="<?php echo base_url()?>asset/odyssey/js/grid3d.js"></script>
            <script>
                new grid3D( document.getElementById( 'grid3d' ) );
            </script>
        <!-- //Tour-Locations-JavaScript -->

        <!-- Owl-Carousel-JavaScript -->
            <script src="<?php echo base_url()?>asset/odyssey/js/owl.carousel.js"></script>
            <script>
                function pemberangkatan(idpemberangakatan){
                    $('#resultbody').html('Loading...');
                    $.ajax({
                        url: "<?= base_url() ?>book/c_umroh/getdetail/"+idpemberangakatan.value,
                        type: "POST",
                        dataType: "html",
                        success: function(result){
                            $('#resultbody').html(result);
                        }
                    });
                }
                $(document).ready(function() {
                    $("#owl-demo, #owl-demo1, #owl-demo2, #owl-demo3, #owl-demo4").owlCarousel({
                        autoPlay: 4000,
                        items : 3,
                        itemsDesktop : [568,2],
                        itemsDesktopSmall : [414,1]
                    });
                });
            </script>
        <!-- //Owl-Carousel-JavaScript -->

        <!-- Pricing-Popup-Box-JavaScript -->
            <script src="<?php echo base_url()?>asset/odyssey/js/jquery.magnific-popup.js" type="text/javascript"></script>
            <script>
                $(document).ready(function() {
                    $('.popup-with-zoom-anim').magnificPopup({
                        type: 'inline',
                        fixedContentPos: false,
                        fixedBgPos: true,
                        overflowY: 'auto',
                        closeBtnInside: true,
                        preloader: false,
                        midClick: true,
                        removalDelay: 300,
                        mainClass: 'my-mfp-zoom-in'
                    });
                });
            </script>
        <!-- //Pricing-Popup-Box-JavaScript -->

        <!-- Date-Picker-JavaScript -->
            <script src="<?php echo base_url()?>asset/odyssey/js/jquery-ui.js"></script>
            <script>
                $(function() {
                    $( "#datepicker,#datepicker1,#datepicker2" ).datepicker();
                });
            </script>
        <!-- //Date-Picker-JavaScript -->

        <!-- Portfolio-Popup-Box-JavaScript -->
            <script src="<?php echo base_url()?>asset/odyssey/js/jquery.chocolat.js"></script>
            <script type="text/javascript">
                $(function() {
                    $('.w3portfolioaits-item a').Chocolat();
                });
            </script>
        <!-- //Portfolio-Popup-Box-JavaScript -->

        <!-- Map-JavaScript -->
            <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>        
            <script type="text/javascript">
                google.maps.event.addDomListener(window, 'load', init);
                function init() {
                    var mapOptions = {
                        zoom: 11,
                        center: new google.maps.LatLng(43.73333, 7.41667),
                        styles: [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}]
                    };
                    var mapElement = document.getElementById('map');
                    var map = new google.maps.Map(mapElement, mapOptions);
                    var marker = new google.maps.Marker({
                        position: new google.maps.LatLng(43.73333, 7.41667),
                        map: map,
                    });
                }
            </script>
        <!-- //Map-JavaScript -->

        <!-- Smooth-Scrolling-JavaScript -->
            <script type="text/javascript">
                jQuery(document).ready(function($) {
                    $(".scroll").click(function(event){
                        event.preventDefault();
                        $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
                    });
                });
            </script>
        <!-- //Smooth-Scrolling-JavaScript -->

        <!-- Slide-To-Top JavaScript -->
            <script type="text/javascript">
                $(document).ready(function() {
                    var defaults = {
                        containerID: 'toTop',
                        containerHoverID: 'toTopHover',
                        scrollSpeed: 100,
                        easingType: 'linear',
                    };
                });
            </script>
            <a href="#agileitshome" id="toTop" class="stuoyal3w scroll stieliga" style="display: block;"> <span id="toTopHover" style="opacity: 0;"> </span></a>
        <!-- //Slide-To-Top JavaScript -->

    <!-- //Custom-JavaScript-File-Links -->

</body>
<!-- //Body -->
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var $_Tawk_API={},$_Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/54f6c518bd5fa428704c793c/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "628119333000", // WhatsApp number
            call: "02121381090", // Call phone number
            company_logo_url: "//static.whatshelp.io/img/flag.png", // URL of company logo (png, jpg, gif)
            greeting_message: "Assalammu'alaikum. Ada yang bisa kami bantu? Silahkan klik icon WhatsApp untuk mengirim pesan dan icon Telepon untuk menghubungi kami...", // Text of greeting message
            call_to_action: "Kontak Kami Sekarang", // Call to action
            button_color: "#45aa40", // Color of button
            position: "left", // Position may be 'right' or 'left'
            order: "whatsapp,call" // Order of buttons
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>

</html>
<?php } ?>