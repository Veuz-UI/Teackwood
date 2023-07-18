<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="images/fav.webp" rel="icon" />
    <title>Teckwood</title>
    <link rel="stylesheet" href="css/icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="images/fav.webp" rel="icon" />
</head>

<body>

    <!-- Preloader -->
    <div class="loader-mask">
        <div class="spinnerContainer">
            <img src="images/fav.webp" class="img-fluid logo-rotate-center">
            <div class="rotate-preloader">
                <img src="images/reloader.webp" class="img-fluid">
            </div>
        </div>
    </div>


    <!-- Preloader -->

    <?php include("header.php")?>
    <section class="inner-banner d-flex align-items-center">
        <div class="container">
            <div class="inner-banner-contents">
                <h2>Products</h2>
                <ul class="brud-crumps">
                    <li><a href="index.php">Home</a></li>&ensp;<span>/</span>&ensp;
                    <li>Products</li>
                </ul>
            </div>
        </div>
    </section>


    <section class="space-section-inner">

        <div class="container">
            <div class="row d-flex align-items-center gx-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <!-- card left -->
                    <div class="product-imgs">
                        <div class="img-display">
                            <div class="img-showcase">
                                <img src="images/product/details1.webp" alt="shoe image">
                                <img src="images/product/details2.webp" alt="shoe image">
                                <img src="images/product/details3.webp" alt="shoe image">
                                <img src="images/product/details4.webp" alt="shoe image">
                                <img src="images/product/details5.webp" alt="shoe image">
                            </div>
                        </div>
                        <div class="img-select">
                            <div class="img-item">
                                <a href="#" data-id="1">
                                    <img src="images/product/details1.webp" alt="shoe image">
                                </a>
                            </div>

                            <div class="img-item">
                                <a href="#" data-id="2">
                                    <img src="images/product/details2.webp" alt="shoe image">
                                </a>
                            </div>
                            <div class="img-item">
                                <a href="#" data-id="3">
                                    <img src="images/product/details3.webp" alt="shoe image">
                                </a>
                            </div>
                            <div class="img-item">
                                <a href="#" data-id="4">
                                    <img src="images/product/details4.webp" alt="shoe image">
                                </a>
                            </div>
                            <div class="img-item">
                                <a href="#" data-id="5">
                                    <img src="images/product/details5.webp" alt="shoe image">
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- card right -->
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="product-content">
                        <div class="product-info-sec">
                            <h2 class="product-title">Truman Solid Wood Study Table In Teak Finish</h2>
                            <h4>Product Code <span>#0956786464;</span></h4>
                        </div>

                        <div class="product-detail">
                            <h2>About this item: </h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo eveniet veniam tempora fuga tenetur placeat sapiente architecto illum soluta consequuntur, aspernatur quidem at sequi ipsa!</p>
                            <h4>Measurements</h4>
                            <ul class="avalable-size">
                                <li>Length: <span> 140 cm (55 1/8 ")</span></li>
                                <li>Width: <span> 60 cm (23 5/8 ")</span></li>
                                <li>Height:<span> 73 cm (28 3/4 ") </span></li>
                            </ul>
                            <button data-bs-toggle="modal" href="#exampleModalToggle" role="button" class="button-about button-padd-here mt-3">
                                <span>Request Quote</span>
                              </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>


    </section>
    <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header padding-space2">
                    <h5 class="modal-title" id="exampleModalToggleLabel">Please fill your information</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body padding-space">
                    <div class="row">

                        <div class="col-lg-6">

                            <label class="contact-label2" for="fname">Name</label><br>
                            <input placeholder="Enter Name" class="contact-popup" type="name" id="fname" name="fname">

                        </div>
                        <div class="col-lg-6">

                            <label class="contact-label2" for="fname">Email</label><br>
                            <input placeholder="Enter Email" class="contact-popup" type="name" id="fname" name="fname">


                        </div>
                        <div class="col-lg-6">

                            <label class="contact-label2" for="fname">Phone</label><br>
                            <input placeholder="Enter Phone Number" class="contact-popup" type="name" id="fname" name="fname">

                        </div>
                        <div class="col-lg-6">

                            <label class="contact-label2">Select State</label><br>

                            <select class="form-control contact-popup" id="inputState">
                                <option value="SelectState">Select State</option>
                                <option value="Andra Pradesh">Andra Pradesh</option>
                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                <option value="Assam">Assam</option>
                                <option value="Bihar">Bihar</option>
                                <option value="Chhattisgarh">Chhattisgarh</option>
                                <option value="Goa">Goa</option>
                                <option value="Gujarat">Gujarat</option>
                                <option value="Haryana">Haryana</option>
                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                <option value="Jharkhand">Jharkhand</option>
                                <option value="Karnataka">Karnataka</option>
                                <option value="Kerala">Kerala</option>
                                <option value="Madya Pradesh">Madya Pradesh</option>
                                <option value="Maharashtra">Maharashtra</option>
                                <option value="Manipur">Manipur</option>
                                <option value="Meghalaya">Meghalaya</option>
                                <option value="Mizoram">Mizoram</option>
                                <option value="Nagaland">Nagaland</option>
                                <option value="Orissa">Orissa</option>
                                <option value="Punjab">Punjab</option>
                                <option value="Rajasthan">Rajasthan</option>
                                <option value="Sikkim">Sikkim</option>
                                <option value="Tamil Nadu">Tamil Nadu</option>
                                <option value="Telangana">Telangana</option>
                                <option value="Tripura">Tripura</option>
                                <option value="Uttaranchal">Uttaranchal</option>
                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                <option value="West Bengal">West Bengal</option>
                                <option disabled style="background-color:#aaa; color:#fff">UNION Territories</option>
                                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                <option value="Chandigarh">Chandigarh</option>
                                <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                <option value="Daman and Diu">Daman and Diu</option>
                                <option value="Delhi">Delhi</option>
                                <option value="Lakshadeep">Lakshadeep</option>
                                <option value="Pondicherry">Pondicherry</option>
                              </select>

                        </div>

                        <div class="col-lg-6">

                            <label class="contact-label2">Select District</label><br>
                            <select class="form-control contact-popup" id="inputDistrict">
                                <option value="">-- select one -- </option>
                            </select>


                        </div>
                        <div class="col-lg-6">
                            <div class="margin-button-radio d-flex align-items-center">
                                <p>
                                    <input type="radio" id="test1" name="radio-group" checked>
                                    <label for="test1">Individual</label>
                                </p>
                                <p class="radio-box">
                                    <input type="radio" id="test2" name="radio-group">
                                    <label for="test2">Corporate</label>
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-12 text-center">
                            <button role="button" class="button-about mt-4">
                                <span>Submit</span>
                              </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <?php include("footer.php") ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js " integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js " integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js " integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS " crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js "></script>
    <script src="js/script.js "></script>
    <script src="https://kit.fontawesome.com/49ccdaea81.js " crossorigin="anonymous "></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script>
        AOS.init({disable: 'mobile'});
    </script>
    <script>
        const imgs = document.querySelectorAll('.img-select a');
        const imgBtns = [...imgs];
        let imgId = 1;

        imgBtns.forEach((imgItem) => {
            imgItem.addEventListener('click', (event) => {
                event.preventDefault();
                imgId = imgItem.dataset.id;
                slideImage();
            });
        });

        function slideImage() {
            const displayWidth = document.querySelector('.img-showcase img:first-child').clientWidth;

            document.querySelector('.img-showcase').style.transform = `translateX(${- (imgId - 1) * displayWidth}px)`;
        }

        window.addEventListener('resize', slideImage);
    </script>

    <script>
        $(function() {
            setTimeout(function() {
                // $('.loader-mask').delay(350).fadeOut('slow')
                $(".loader-mask").hide();
            }, 2000)

        })
    </script>
    <script>
        $('.testimonials-carousal').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            autoplay: true,
            autoplayTimeout: 2000,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 4
                }
            }
        })
    </script>

    <script>
        $(function() {
            var navbar = $('.navbar');

            $(window).scroll(function() {
                if ($(window).scrollTop() <= 40) {
                    navbar.removeClass('navbar-scroll');
                } else {
                    navbar.addClass('navbar-scroll');
                }
            });
        });
    </script>

</body>

</html>