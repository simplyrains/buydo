
    <!-- BEGIN PRE-FOOTER -->
    <div class="pre-footer">
    </div>
    <!-- END PRE-FOOTER -->

    <!-- BEGIN FOOTER -->
    <div class="footer">
      <div class="container">
        <div class="row">
          <!-- BEGIN COPYRIGHT -->
          <div class="col-md-6 col-sm-6 padding-top-10">
            2014 © Buydo. ALL Rights Reserved.
          </div>
          <!-- END COPYRIGHT -->
        </div>
      </div>
    </div>
    <!-- END fast view of a product -->

    <!-- Load javascripts at bottom, this will reduce page load time -->
    <!-- BEGIN CORE PLUGINS (REQUIRED FOR ALL PAGES) -->
    <!--[if lt IE 9]>
    <script src="/buydo/assets/global/plugins/respond.min.js"></script>  
    <![endif]-->
    <script src="/buydo/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="/buydo/assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
    <script src="/buydo/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>      
    <script src="/buydo/assets/frontend/layout/scripts/back-to-top.js" type="text/javascript"></script>
    <script src="/buydo/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    <script src="/buydo/assets/global/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script><!-- pop up -->
    <script src="/buydo/assets/global/plugins/carousel-owl-carousel/owl-carousel/owl.carousel.min.js" type="text/javascript"></script><!-- slider for products -->
    <script src='/buydo/assets/global/plugins/zoom/jquery.zoom.min.js' type="text/javascript"></script><!-- product zoom -->
    <script src="/buydo/assets/global/plugins/bootstrap-touchspin/bootstrap.touchspin.js" type="text/javascript"></script><!-- Quantity -->

    <!-- BEGIN LayerSlider -->
    <script src="/buydo/assets/global/plugins/slider-layer-slider/js/greensock.js" type="text/javascript"></script><!-- External libraries: GreenSock -->
    <script src="/buydo/assets/global/plugins/slider-layer-slider/js/layerslider.transitions.js" type="text/javascript"></script><!-- LayerSlider script files -->
    <script src="/buydo/assets/global/plugins/slider-layer-slider/js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script><!-- LayerSlider script files -->
    <script src="/buydo/assets/frontend/pages/scripts/layerslider-init.js" type="text/javascript"></script>
    <!-- END LayerSlider -->

    <script src="/buydo/assets/frontend/layout/scripts/layout.js" type="text/javascript"></script>


    <script>
        if(!window.jQuery)
        {
           var script = document.createElement('script');
           script.type = "text/javascript";
           script.src = "http://code.jquery.com/jquery-1.11.1.min.js";
           document.getElementsByTagName('head')[0].appendChild(script);
        }

        
    </script>

    <script type="text/javascript">
        jQuery(document).ready(function() {
            Layout.init();    
            Layout.initOWL();
            LayersliderInit.initLayerSlider();
            Layout.initImageZoom();
            Layout.initTouchspin();
            Layout.initTwitter();
        });
    </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->

    <script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
    <script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
    <script src="/buydo/assets/buydo/js/register_validator.js" type="text/javascript"></script>
    <script src="/buydo/assets/buydo/js/login_validator.js" type="text/javascript"></script>
    <script src="/buydo/assets/buydo/js/add_saleitem_validator.js" type="text/javascript"></script>
    <script src="/buydo/assets/buydo/js/edit_saleitem_validator.js" type="text/javascript"></script>
    <script src="/buydo/assets/buydo/js/addbid_validator.js" type="text/javascript"></script>
    <script src="/buydo/assets/buydo/js/editbid_validator.js" type="text/javascript"></script>
    <script src="/buydo/assets/buydo/js/recovery_password_validator.js" type="text/javascript"></script>
    <script src="/buydo/assets/buydo/js/new_password_form_validator.js" type="text/javascript"></script>
    <script>
        $(document).ready(function() {
            $("#addBidVal").click(function(){
                var bidval = parseInt($("#BidVal").val());
                var stepsize = parseInt($("#StepSize").val());
                stepsize = stepsize/20;
                bidval = bidval+stepsize;
                $("#BidVal").val(bidval.toFixed(2));
            }); 
            $("#decBidVal").click(function(){
                var bidval = parseInt($("#BidVal").val());
                var stepsize = parseInt($("#StepSize").val());
                var current = parseInt($("#currentPrice").val());

                stepsize = stepsize/20;
                bidval = bidval-stepsize;
                if(bidval>=current+stepsize){
                    $("#BidVal").val(bidval.toFixed(2));
                }
            }); 
            $("#btn0").click(function(){
                $("#score").val(-2);
            }); 

            $("#btn1").click(function(){
                $("#score").val(-1);
            }); 
            $("#btn2").click(function(){
                $("#score").val(0);
            }); 
            $("#btn3").click(function(){
                $("#score").val(1);
            }); 
            $("#btn4").click(function(){
                $("#score").val(2);
            }); 
            $("#BidVal").prop( "disabled", true );
        });

    </script>
</body>
<!-- END BODY -->
</html>