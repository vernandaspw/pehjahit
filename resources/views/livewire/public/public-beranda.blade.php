<div>

    <livewire:public.component.public-navbar />

    {{-- Hero --}}
    <section class="container pt-3 mt-5 mt-md-0 pb-5">
        <style scoped>
            /* @media screen and (min-width: 768px) {
                body .pl-house {
                    margin: 0 !important;
                    padding-left: 100px;
                }
            }

            @media screen and (max-width: 768px) {
                body .pl-house {
                    margin: 0 10px 0 5px !important;
                }
            } */

            body #header {
                margin-top: 138px;
                margin-bottom: 100px;
                width: 100% !important;
            }

            @media screen and (max-width: 768px) {
                body #header {
                    margin-top: 50px;
                    margin-bottom: 50px;
                }
            }

            body .img-header {
                z-index: -1;
                position: absolute;
                top: 0;
                right: 0;
            }

            body .explore {
                background-color: #080E09;
                padding-top: 100px;
                padding-bottom: 50px;
            }

            @media screen and (max-width: 768px) {
                body .explore {
                    padding-top: 50px;
                    padding-bottom: 50px;
                }
            }

            body .explore .descript-explore {
                max-width: 75%;
            }

            body .pt-35 {
                padding-top: 35px;
            }

            body .title h1 {
                font-size: 72px;
                font-weight: 700;
                line-height: 150%;
            }

            @media screen and (max-width: 768px) {
                body .title h1 {
                    font-size: 48px;
                }
            }

            body .stat {
                margin-top: 10px;
            }

            body .stat h2 {
                font-size: 48px;
                font-weight: 800;
            }

            @media screen and (max-width: 768px) {
                body .stat h2 {
                    font-size: 28px;
                }
            }

            body .stat p {
                font-size: 16px;
                color: #75797D;
                font-weight: 400;
                line-height: 28px;
            }

            body .stat .descript-head {
                max-width: 90%;
            }

            body .btn-css {
                /* background-color: #20BA0F; */
                color: white;
                font-weight: 600;
                font-size: 16px;
                border-radius: 12px;
                margin-top: 18px;
            }

            body .btn-css:hover {
                /* background-color: #20BA0F; */

                color: #FFFFFF;
                font-weight: 600;
                font-size: 16px;
                border-radius: 26px;
                margin-top: 18px;
            }


            body .gallery {
                padding: 10px 0;
            }

            @media only screen and (max-width: 768px) {
                body .gallery {
                    margin: 50px 0;
                }
            }

            body .gallery .card-hotel-carousel {
                width: 255px;
                margin-right: 35px;
                padding: 28px 28px 40px;
                border-radius: 28px;
                background: white;
                -webkit-box-shadow: 20px 8px 18px rgba(178, 177, 255, 0.05);
                box-shadow: 20px 8px 18px rgba(178, 177, 255, 0.05);
            }

            @media only screen and (max-width: 768px) {
                body .gallery .card-hotel-carousel {
                    margin-right: 20px;
                }
            }

            body .gallery .card-hotel-carousel .image-placeholder {
                /* width: 268px;
                height: 190px; */
                width: 228px;
                height: 190px;
            }

            body .gallery .card-hotel-carousel .image-placeholder img {
                width: 100%;
                height: 100%;
                -o-object-fit: contain;
                object-fit: contain;
                border-radius: 16px;
            }

            body .gallery .card-hotel-carousel .card-details {
                padding-bottom: 53px;
                height: 100px;
            }

            body .gallery .card-hotel-carousel .card-details .caption {
                font-weight: 700;
                font-size: 19px;
                color: #080E09;
                margin-top: 0px;
            }

            body .gallery .card-hotel-carousel .card-details .sub-caption {
                font-weight: 400;
                font-size: 15px;
                color: #ADB2B8;
            }

            body .gallery .card-hotel-carousel .bottom-text .price-content {
                color: #080E09;
                font-size: 14px;
            }

            body .gallery .card-hotel-carousel .bottom-text .price-content span {
                font-weight: 400;
            }

            body .gallery .card-hotel-carousel .bottom-text .price-content span.price {
                font-weight: 700;
            }

            body .gallery .card-hotel-carousel .bottom-text .rating {
                font-weight: 700;
                font-size: 14px;
                color: #FF9900;
            }

            body .gallery .card-hotel-carousel .bottom-text .rating img {
                margin-top: -1px;
                margin-right: 5px;
            }

            @media screen and (min-width: 600px) {
                body .image-content .img-fluid {
                    height: 144.953px;
                }
            }

            body .text-content h1 {
                font-size: 60px !important;
                line-height: 150%;
                color: white;
            }

            body .text-content p {
                font-size: 16px;
                color: #ADB2B8;
                font-weight: 400;
                line-height: 28px;
                padding-bottom: 108px;
            }

            body .place .img-place-header {
                width: 100% !important;
            }

            body .scrolling-wrapper {
                overflow-x: auto;
            }

            body .section::-webkit-scrollbar {
                height: 0 !important;
            }

            body .section::-webkit-scrollbar-track {
                background-color: #e4e4e4;
                border-radius: 100px;
            }

            body .section::-webkit-scrollbar-thumb {
                background-color: #05BB2D;
                border-radius: 100px;
            }
        </style>
        <img src="{{ asset('images/Torus_3x_Knot_R.png') }}" width="750px" alt="bg-header"
            class="img-header d-none d-md-block">
        <div class="row mx-0" id="header">
            <div class="col-xl-6 ">
                <div class="title">
                    <h1>
                        PehJahit.com
                    </h1>
                </div>

                <div class="stat">
                    <p class="descript-head">
                        PehHahit.com hadir untuk membantu UMKM diindonesia terutama para UMKM yang bisnis utamanya
                        adalah dibidang Fashion/jahit dengan menghubungkan mereka dengan para calon konsumen tanpa
                        batasan jarak.
                    </p>
                </div>
                <div>
                    <button style="{{ env('BG_COLOR_400') }}" class="btn btn-css px-5 py-3 shadow">
                        Mulai Belanja
                    </button>
                    <div class="mt-2">
                        <a href="#" class="text-decoration-none" style="color: #75797D">Atau bergabung sebagai
                            mitra >> </a>
                    </div>
                </div>
            </div>
            {{-- <div class="col-xl-6 my-auto">
                <div class="gallery row p-md-4 section scrolling-wrapper flex-row flex-nowrap">
                    <!-- CARD 1 -->
                    <div class="card-hotel-carousel">
                        <div class="image-placeholder">
                            <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header-House/place.png"
                                alt="images" />
                        </div>
                        <div class="card-details">
                            <div class="caption">Tretes Hotel INA</div>
                            <span class="sub-caption">150m</span>
                        </div>
                        <div class="bottom-text d-flex flex-row justify-content-between">
                            <div class="price-content flex-grow-1">
                                <span>Start from</span> <span class="price">40 USD</span>
                            </div>
                            <div class="rating d-flex align-items-center">
                                <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header-House/star-yellow.svg"
                                    alt="star" />
                                <span>4.8</span>
                            </div>
                        </div>
                    </div>
                    <!-- END CARD 1 -->
                    <!-- CARD 2 -->
                    <div class="card-hotel-carousel">
                        <div class="image-placeholder">
                            <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header-House/place-2.png"
                                alt="images" />
                        </div>
                        <div class="card-details">
                            <div class="caption">Hotel Mawar & Melati Putih</div>
                            <span class="sub-caption">120m</span>
                        </div>
                        <div class="bottom-text d-flex flex-row justify-content-between">
                            <div class="price-content flex-grow-1">
                                <span>Start from</span> <span class="price">40 USD</span>
                            </div>
                            <div class="rating d-flex align-items-center">
                                <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header-House/star-yellow.svg"
                                    alt="star" />
                                <span>4.8</span>
                            </div>
                        </div>
                    </div>
                    <!-- END CARD 2 -->
                    <!-- CARD 3 -->
                    <div class="card-hotel-carousel">
                        <div class="image-placeholder">
                            <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header-House/place.png"
                                alt="images" />
                        </div>
                        <div class="card-details">
                            <div class="caption">Tretes Hotel INA</div>
                            <span class="sub-caption">150m</span>
                        </div>
                        <div class="bottom-text d-flex flex-row justify-content-between">
                            <div class="price-content flex-grow-1">
                                <span>Start from</span> <span class="price">40 USD</span>
                            </div>
                            <div class="rating d-flex align-items-center">
                                <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header-House/star-yellow.svg"
                                    alt="star" />
                                <span>4.8</span>
                            </div>
                        </div>
                    </div>
                    <!-- END CARD 3 -->
                </div>
            </div> --}}
        </div>
    </section>

    {{-- count akun --}}
    <section class="famouly-brands" style="{{ env('BG_COLOR_100') }}">
        <style scoped>
            body .famouly-brands {
                /* background: radial-gradient(100% 100% at 50% 0%, #F9FAFE 0%, #FAFAFD 100%); */
                padding-top: 30px;
                padding-bottom: 10px;
            }

            body .famouly-brands .brand img {
                width: 200px !important;
            }
        </style>
        <div class="container">
            <div class="row brand justify-content-center">
                <div class="col-md-3 col-6 text-center my-md-auto">
                    <div class="text-left me-4 me-md-5">
                        <h2>
                            500+
                        </h2>
                        <p>
                            Customer
                        </p>
                    </div>
                </div>
                <div class="col-md-3 col-6 text-center my-md-auto">
                    <div class="text-left me-4 me-md-5">
                        <h2>
                            200+
                        </h2>
                        <p>
                            Mitra
                        </p>
                    </div>
                </div>
                <div class="col-md-3 col-6 text-center my-md-auto mt-5 mt-md-0">
                    <div class="text-left me-4 me-md-5">
                        <h2>
                            300+
                        </h2>
                        <p>
                            Talent
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- about --}}
    <section class="h-100  w-100 bg-white" style="box-sizing: border-box;">
        <style scoped>
            @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

            .content-3-1 .btn:focus,
            .content-3-1 .btn:active {
                outline: none !important;
            }

            .content-3-1 {
                padding: 5rem 2rem;
            }

            .content-3-1 .img-hero {
                width: 100%;
                margin-bottom: 3rem;
            }

            .content-3-1 .right-column {
                width: 100%;
            }

            .content-3-1 .title-text {
                font: 600 1.875rem/2.25rem Poppins, sans-serif;
                margin-bottom: 2.5rem;
                letter-spacing: -0.025em;
                color: #121212;
            }

            .content-3-1 .title-caption {
                font: 500 1.5rem/2rem Poppins, sans-serif;
                margin-bottom: 1.25rem;
                color: #121212;
            }

            .content-3-1 .circle {
                font: 500 1.25rem/1.75rem Poppins, sans-serif;
                height: 3rem;
                width: 3rem;
                margin-bottom: 1.25rem;
                border-radius: 9999px;
                background-color: #ffbf56;
            }

            .content-3-1 .text-caption {
                font: 400 1rem/1.75rem Poppins, sans-serif;
                letter-spacing: 0.025em;
                color: #565656;
            }

            .content-3-1 .btn-learn {
                font: 600 1rem/1.5rem Poppins, sans-serif;
                padding: 1rem 2.5rem;
                background-color: #ff7c57;
                transition: 0.3s;
                letter-spacing: 0.025em;
                border-radius: 0.75rem;
            }

            .content-3-1 .btn-learn:hover {
                background-color: #ff9779;
                transition: 0.3s;
            }

            @media (min-width: 768px) {
                .content-3-1 .title-text {
                    font: 600 2.25rem/2.5rem Poppins, sans-serif;
                }
            }

            @media (min-width: 992px) {
                .content-3-1 .img-hero {
                    width: 50%;
                    margin-bottom: 0;
                }

                .content-3-1 .right-column {
                    width: 50%;
                }

                .content-3-1 .circle {
                    margin-right: 1.25rem;
                    margin-bottom: 0;
                }
            }
        </style>
        <div class="content-3-1 container-xxl mx-auto position-relative" style="font-family: 'Poppins', sans-serif">
            <div class="d-flex flex-lg-row flex-column align-items-center">
                <!-- Left Column -->
                <div class="img-hero text-center justify-content-center d-flex">
                    <img id="hero" class="img-fluid" width="200" height="200"
                        src="{{ asset('images/logo-bg-none.png') }}" alt="" />
                </div>

                <!-- Right Column -->
                <div class="right-column d-flex flex-column align-items-lg-start align-items-center text-justify">
                    <h2 class="mb-3"><b>Get To About Us</b></h2>
                    {{-- <h4
                        class="title-caption d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">

                        Trusted Mentor
                    </h4> --}}
                    <p class="text-caption text-justify">
                        PehJahit.com merupakan platform digital yang tidak hanya fokus dalam memasarkan produk dan jasa
                        dari para UMKM tetapi juga sebagai platform yang memberikan pelatihan digital marketing kepada
                        para UMKM lokal agar mereka dapat bersaing dalam era digital saat ini. Kami memiliki visi untuk
                        membuat PehJahit.com sebagai platform digital terbesar yang ada diindonesia yang berfokus dalam
                        memasarkan produk fashion buatan pengusaha lokal sampai ke Pasar Internasional.
                    </p>
                    <button style="{{ env('BG_COLOR_400') }}"
                        class="btn mt-2 rounded-pill px-5 text-white">Detail</button>
                </div>
            </div>
        </div>
    </section>

    {{-- visi misi --}}
    <section class="h-100 w-100" style="box-sizing: border-box;">
        <style scoped>
            @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

            .content-3-1 .btn:focus,
            .content-3-1 .btn:active {
                outline: none !important;
            }

            .content-3-1 {
                padding: 5rem 2rem;
            }

            .content-3-1 .img-hero {
                width: 100%;
                margin-bottom: 3rem;
            }

            .content-3-1 .right-column {
                width: 100%;
            }

            .content-3-1 .title-text {
                font: 600 1.875rem/2.25rem Poppins, sans-serif;
                margin-bottom: 2.5rem;
                letter-spacing: -0.025em;
                color: #121212;
            }

            .content-3-1 .title-caption {
                font: 500 1.5rem/2rem Poppins, sans-serif;
                margin-bottom: 1.25rem;
                color: #121212;
            }

            .content-3-1 .circle {
                font: 500 1.25rem/1.75rem Poppins, sans-serif;
                height: 3rem;
                width: 3rem;
                margin-bottom: 1.25rem;
                border-radius: 9999px;
                background-color: #ffbf56;
            }

            .content-3-1 .text-caption {
                font: 400 1rem/1.75rem Poppins, sans-serif;
                letter-spacing: 0.025em;
                color: #565656;
            }

            .content-3-1 .btn-learn {
                font: 600 1rem/1.5rem Poppins, sans-serif;
                padding: 1rem 2.5rem;
                background-color: #ff7c57;
                transition: 0.3s;
                letter-spacing: 0.025em;
                border-radius: 0.75rem;
            }

            .content-3-1 .btn-learn:hover {
                background-color: #ff9779;
                transition: 0.3s;
            }

            @media (min-width: 768px) {
                .content-3-1 .title-text {
                    font: 600 2.25rem/2.5rem Poppins, sans-serif;
                }
            }

            @media (min-width: 992px) {
                .content-3-1 .img-hero {
                    width: 50%;
                    margin-bottom: 0;
                }

                .content-3-1 .right-column {
                    width: 50%;
                }

                .content-3-1 .circle {
                    margin-right: 1.25rem;
                    margin-bottom: 0;
                }
            }
        </style>
        <div class="container">
            <div class="content-3-1 container-xxl mx-auto position-relative" style="font-family: 'Poppins', sans-serif">
                <div class="d-flex flex-lg-row flex-column align-items-center">
                    <!-- Left Column -->
                    <div
                        class="right-column d-flex flex-column align-items-lg-start align-items-center text-lg-start text-center">
                        <h2 class="mb-3"><b>Visi</b></h2>
                        <p class="text-caption">
                            Menciptakan lapangan kerja sebesar-besarnya dengan membantu UMKM yang ada di Indonesia untuk
                            memiliki bisnis yang sustainable dan berjangka panjang.
                        </p>

                        <h2 class="mb-3 mt-3"><b>Misi</b></h2>
                        <p class="text-caption">
                            Menjadi platform penyedia layanan produk lokal terbesar di Indonesia yang menghubungkan para
                            penjahit dan talent keseluruh customer di Indonesia serta Luar negeri.
                        </p>
                        {{-- <button class="btn mt-2 btn-learn text-white">Learn More</button> --}}
                    </div>

                    <!-- Right Column -->
                    <div class="img-hero mt-2 d-none d-md-block text-center justify-content-center d-flex">
                        <img id="hero" style="border-radius: 20px" class="shadow" width="500" height="400"
                            src="{{ asset('images/marissa-grootes-flRm0z3MEoA-unsplash.jpg') }}" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- produk --}}

    <section class="content text-center" style="{{ env('BG_COLOR_100') }}">
        <style scoped>
            @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap");

            * {
                font-family: 'Poppins', sans-serif !important;
            }

            body .content {
                /* background: #FFFFFF; */
            }

            body .content .content {
                padding-top: 90px;
                padding-bottom: 90px;
            }

            body .content .content .tagline {
                font-family: Poppins;
                font-style: normal;
                font-weight: bold;
                font-size: 18px;
                line-height: 27px;
                /* identical to box height */
                text-align: center;
                color: {{ env('COLOR_400') }};
            }

            body .content .content .headline {
                font-family: Poppins;
                font-style: normal;
                font-weight: bold;
                font-size: 45px;
                line-height: 67px;
                text-align: center;
                color: #111F37;
            }

            body .content .content .benefits {
                margin-top: 50px;
            }

            body .content .content .benefits .rectangle {
                max-width: 302px;
                max-height: 334px;
                border: 1px solid {{ env('COLOR_100') }};
                -webkit-box-sizing: border-box;
                box-sizing: border-box;
                border-radius: 25px;
            }

            body .content .content .benefits .rectangle img {
                margin-top: 50px;
            }

            body .content .content .benefits .rectangle .headline-benefit {
                margin-top: 40px;
                font-family: Poppins;
                font-style: normal;
                font-weight: 600;
                font-size: 18px;
                line-height: 27px;
                /* identical to box height */
                text-align: center;
                color: #111F37;
            }

            body .content .content .benefits .rectangle .subheadline-benefit {
                font-family: Poppins;
                font-style: normal;
                font-weight: 500;
                font-size: 16px;
                line-height: 28px;
                /* or 175% */
                text-align: center;
                color: #627492;
                margin-bottom: 40px;
            }

            body .content .content .button-header {
                margin-top: 40px;
            }

            body .content .content .button-header .btn-started {
                width: 150px;
                height: 50px;
                background: #0DDB93 !important;
                border-radius: 8px;
                font-weight: 600;
                font-size: 16px;
                color: #001D01;
            }

            body .content .content .button-header .btn-story {
                width: 150px;
                height: 50px;
                border: 1px solid #9BA8BE;
                -webkit-box-sizing: border-box;
                box-sizing: border-box;
                border-radius: 8px;
                font-family: Poppins;
                font-style: normal;
                font-weight: 500;
                font-size: 16px;
                line-height: 24px;
                /* identical to box height */
                text-align: center;
                color: #627492;
            }



            /*# sourceMappingURL=main.css.map */
        </style>
        <div class="container">
            <div class="row content">
                <div class="col-12 px-md-0 my-auto">
                    <div class="tagline">
                        OUR PRODUCTS
                    </div>
                    <div class="headline mt-3">
                        Find Your Needs With Our Products
                    </div>

                    <div class="col-xl-12 my-auto mt-3">
                        <div class="gallery row p-md-4 section scrolling-wrapper flex-row flex-nowrap">
                            <a href="#"
                                class="card-hotel-carousel hover-overlay hover-zoom hover-shadow ripple shadow-sm">
                                <div class="d-flex text-center justify-content-center align-items-center">
                                    <img class="" width="120" height="120"
                                        src="{{ asset('images/logo-bg-none.png') }}" alt="images" />
                                </div>
                                <div class="card-details">
                                    <div class="mt-4 sub-caption" style="">
                                        For all
                                    </div>
                                    <div class="caption">Marketplace</div>
                                    <span class="sub-caption">
                                        Belajar tanpa batasan waktu
                                    </span>
                                </div>
                            </a>
                            <a href="#"
                                class="card-hotel-carousel hover-overlay hover-zoom hover-shadow ripple shadow-sm">
                                <div class="d-flex text-center justify-content-center align-items-center">
                                    <img class="" width="120" height="120"
                                        src="{{ asset('images/logo-bg-none.png') }}" alt="images" />
                                </div>
                                <div class="card-details">
                                    <div class="mt-4 sub-caption" style="">
                                        For Talent
                                    </div>
                                    <div class="caption">Kelas Online</div>
                                    <span class="sub-caption">
                                        Cari produk dan dapatkan produk kualitas terbarik
                                    </span>
                                </div>
                            </a>
                            <a href="#"
                                class="card-hotel-carousel hover-overlay hover-zoom hover-shadow ripple shadow-sm">
                                <div class="d-flex text-center justify-content-center align-items-center">
                                    <img class="" width="120" height="120"
                                        src="{{ asset('images/logo-bg-none.png') }}" alt="images" />
                                </div>
                                <div class="card-details">
                                    <div class="mt-4 sub-caption" style="">
                                        For Talent
                                    </div>
                                    <div class="caption">Pelatihan</div>
                                    <span class="sub-caption">
                                        Cari pelatihan untuk menunjang skill
                                    </span>
                                </div>
                            </a>
                            <a href="#"
                                class="card-hotel-carousel hover-overlay hover-zoom hover-shadow ripple shadow-sm">
                                <div class="d-flex text-center justify-content-center align-items-center">
                                    <img class="" width="120" height="120"
                                        src="{{ asset('images/logo-bg-none.png') }}" alt="images" />
                                </div>
                                <div class="card-details">
                                    <div class="mt-4 sub-caption" style="">
                                        For corporate
                                    </div>
                                    <div class="caption">Corporate Training</div>
                                    <span class="sub-caption">
                                        Perkuat tim dengan kami
                                    </span>
                                </div>
                            </a>
                            <a href="#"
                                class="card-hotel-carousel hover-overlay hover-zoom hover-shadow ripple shadow-sm">
                                <div class="d-flex text-center justify-content-center align-items-center">
                                    <img class="" width="120" height="120"
                                        src="{{ asset('images/logo-bg-none.png') }}" alt="images" />
                                </div>
                                <div class="card-details">
                                    <div class="mt-4 sub-caption" style="">
                                        For corporate
                                    </div>
                                    <div class="caption">Hiring Talent</div>
                                    <span class="sub-caption">
                                        Dapatkan talent terbaik dari kami
                                    </span>
                                </div>
                            </a>
                            <a href="#"
                                class="card-hotel-carousel hover-overlay hover-zoom hover-shadow ripple shadow-sm">
                                <div class="d-flex text-center justify-content-center align-items-center">
                                    <img class="" width="120" height="120"
                                        src="{{ asset('images/logo-bg-none.png') }}" alt="images" />
                                </div>
                                <div class="card-details">
                                    <div class="mt-4 sub-caption" style="">
                                        For corporate
                                    </div>
                                    <div class="caption">Open Job</div>
                                    <span class="sub-caption">
                                        Posting loker pada platform kami
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- section kuality --}}
    <section class="h-100 w-100 bg-white" style="box-sizing: border-box">
        <style scoped>
            @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

            .content-2-1 .btn:focus,
            .content-2-1 .btn:active {
                outline: none !important;
            }

            .content-2-1 .title-text {
                padding-top: 5rem;
                margin-bottom: 3rem;
            }

            .content-2-1 .text-title {
                font: 600 2.25rem/2.5rem Poppins, sans-serif;
                color: #121212;
                margin-bottom: 0.625rem;
            }

            .content-2-1 .text-caption {
                color: #121212;
                font-weight: 300;
            }

            .content-2-1 .column {
                padding: 2rem 2.25rem;
            }

            .content-2-1 .icon {
                margin-bottom: 1.5rem;
            }

            .content-2-1 .icon-title {
                font: 500 1.5rem/2rem Poppins, sans-serif;
                margin-bottom: 0.625rem;
                color: #121212;
            }

            .content-2-1 .icon-caption {
                font: 400 1rem/1.625 Poppins, sans-serif;
                letter-spacing: 0.025em;
                color: #565656;
            }

            .content-2-1 .card-block {
                padding: 1rem 1rem 5rem;
            }

            .content-2-1 .card {
                padding: 1.75rem;
                background-color: #fff7f4;
                border-radius: 0.75rem;
                border: 1px solid #ff7c57;
            }

            .content-2-1 .card-title {
                font: 600 1.5rem/2rem Poppins, sans-serif;
                margin-bottom: 0.625rem;
                color: #000000;
            }

            .content-2-1 .card-caption {
                font: 300 1rem/1.5rem Poppins, sans-serif;
                color: #565656;
                letter-spacing: 0.025em;
                margin-bottom: 0;
            }

            .content-2-1 .btn-card {
                font: 700 1rem/1.5rem Poppins, sans-serif;
                background-color: #ff7c57;
                padding-top: 1rem;
                padding-bottom: 1rem;
                width: 100%;
                border-radius: 0.75rem;
                margin-bottom: 1.25rem;
            }

            .content-2-1 .btn-card:hover {
                --tw-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1),
                    0 4px 6px -2px rgba(0, 0, 0, 0.05);
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
                    var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
            }

            .content-2-1 .btn-outline {
                font: 400 1rem/1.5rem Poppins, sans-serif;
                color: #979797;
                border: 1px solid #979797;
                padding-top: 1rem;
                padding-bottom: 1rem;
                width: 100%;
                border-radius: 0.75rem;
            }

            .content-2-1 .btn-outline:hover {
                border: 1px solid #ff7c57;
                color: #ff7c57;
            }

            .content-2-1 .card-text {
                padding-top: 1.5rem;
                padding-bottom: 1.5rem;
            }

            .content-2-1 .grid-padding {
                padding: 0rem 1rem 3rem;
            }

            @media (min-width: 576px) {
                .content-2-1 .grid-padding {
                    padding: 0rem 2rem 3rem;
                }

                .content-2-1 .card-block {
                    padding: 3rem 2rem 5rem;
                }
            }

            @media (min-width: 768px) {
                .content-2-1 .grid-padding {
                    padding: 0rem 4rem 3rem;
                }

                .content-2-1 .card-block {
                    padding: 3rem 4rem 5rem;
                }
            }

            @media (min-width: 992px) {
                .content-2-1 .grid-padding {
                    padding: 1rem 6rem 3rem;
                }

                .content-2-1 .card-block {
                    padding: 3rem 6rem 5rem;
                }

                .content-2-1 .column {
                    padding: 0rem 2.25rem;
                }
            }

            @media (min-width: 1200px) {
                .content-2-1 .grid-padding {
                    padding: 1rem 10rem 3rem;
                }

                .content-2-1 .card-block {
                    padding: 3rem 6rem 5rem;
                }

                .content-2-1 .card-btn-space {
                    margin-top: 15px;
                    margin-bottom: 15px;
                }

                .content-2-1 .btn-outline,
                .content-2-1 .btn-card {
                    width: 95%;
                    float: right;
                }
            }

            @media (max-width: 980px) {
                .content-2-1 .card-btn-space {
                    width: 100%;
                }
            }
        </style>
        <div class="content-2-1 container-xxl mx-auto p-0  position-relative"
            style="font-family: 'Poppins', sans-serif">
            <div class="text-center title-text">
                <h1 class="text-title">Why choose us</h1>
                {{-- <p class="text-caption" style="margin-left: 3rem; margin-right: 3rem">
                    You can easily manage your business with a powerful tools
                </p> --}}
            </div>

            <div class="grid-padding text-center">
                <div class="row">
                    <div class="col-lg-4 column">
                        <div class="icon">
                            <img width="50" height="50"
                                src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content2/Content-2-2.png"
                                alt="" />
                        </div>
                        <h3 class="icon-title">Buy & Sell Easily</h3>
                        <p class="icon-caption">
                            It can easily help you buy and sell products quickly
                        </p>
                    </div>
                    <div class="col-lg-4 column">
                        <div class="icon">
                            <img width="50" height="50"
                                src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content2/Content-2-3.png"
                                alt="" />
                        </div>
                        <h3 class="icon-title">Scure Transaction</h3>
                        <p class="icon-caption">
                            Security in transactions using a digital wallet
                        </p>
                    </div>
                    <div class="col-lg-4 column">
                        <div class="icon">
                            <img width="50" height="50"
                                src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content2/Content-2-4.png"
                                alt="" />
                        </div>
                        <h3 class="icon-title">Quality Platform</h3>
                        <p class="icon-caption">
                            With QA we will guarantee the best platform service quality for you
                        </p>
                    </div>
                </div>
            </div>


        </div>
    </section>

    <section>
        <div class="d-md-flex align-items-center">
            <div class="col-md-4  d-flex align-items-center justify-content-center py-5" style="{{ env('BG_COLOR_200') }}">
                <div class="p-4 text-center">
                    <img src="{{ asset('http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content2/Content-2-3.png') }}" width="65" height="65" alt="">
                    <div class="text-white mt-3">
                        Make money instantly
                    </div>
                    <h4 class="text-white">
                        <strong>
                            Start Selling
                        </strong>
                    </h4>
                    <a href="#" class="btn rounded-pill  mt-2" style="{{ env('BG_COLOR_100') }}">Open your shop</a>
                </div>
            </div>

            <div class="col-md-4  d-flex align-items-center justify-content-center py-5" style="{{ env('BG_COLOR_300') }}">
                <div class="p-4 text-center">
                    <img src="{{ asset('http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content2/Content-2-3.png') }}" width="65" height="65" alt="">
                    <div class="text-white mt-3">
                        Find anything you want
                    </div>
                    <h4 class="text-white">
                        <strong>
                            Start Buying
                        </strong>
                    </h4>
                    <a href="#" class="btn rounded-pill  mt-2" style="{{ env('BG_COLOR_100') }}">Go to Marketpleace</a>
                </div>
            </div>

            <div class="col-md-4  d-flex align-items-center justify-content-center py-5" style="{{ env('BG_COLOR_400') }}">
                <div class="p-4 text-center">
                    <img src="{{ asset('http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content2/Content-2-3.png') }}" width="65" height="65" alt="">
                    <div class="text-white mt-3">
                        find the class and training you want
                    </div>
                    <h4 class="text-white">
                        <strong>
                            Start study/training
                        </strong>
                    </h4>
                    <a href="#" class="btn rounded-pill  mt-2" style="{{ env('BG_COLOR_100') }}">Go to Talent</a>
                </div>
            </div>
    </section>
</div>
