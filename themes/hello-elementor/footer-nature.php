    <?php wp_footer(); ?>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>

    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <style>
        .owl-nav{
            top: 35%;
            position: absolute;
            left: 50%;
            transform: translate(-50%, 0);
            width: 100%;
        }
        html button.owl-prev {
            float: left;
            font-size: 3rem !important;
        }
        html button.owl-next {
            float: right;
            font-size: 3rem !important;
        }
        @media (max-width:575px){
            html button.owl-prev {
                margin-left: 1rem;
            }
            html button.owl-next {
                margin-right: 1rem;
            }
        }
    </style>

    <script>

        jQuery(document).ready(function(){

            jQuery(".owl-carousel").owlCarousel({

                items: 4,
                loop: true,
                autoplay: true,
                nav: true,
                autoplayTimeout: 5000,
                smartSpeed: 2000,
                autoplayHoverPause: true,
                slideSpeed: 5000,
                responsive:{
                    0:{
                        items:1
                    },

                    660:{
                        items:2
                    },

                    900:{
                        items:3
                    }
                }

            });
        });

    </script>
    <script>
        
        jQuery(document).ready(function () {

            jQuery('.toggle li').click(function () {
                jQuery('div.panel').slideUp('500');
                var text = jQuery(this).children('div.panel');

                if (text.is(':hidden')) {
                    text.slideDown('500'); 
                } else {
                    text.slideUp('500');   
                }

            });

            jQuery('.title-faq').click(function() {
                $(this).toggleClass('faq-active');
                    $(this).siblings().removeClass('faq-active');
            });

        });

    </script>
</body>
</html>