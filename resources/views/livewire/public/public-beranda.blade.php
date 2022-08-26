<div>

    <livewire:public.component.public-navbar />

    <section class="container pt-3 pb-5">
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
                width: 325px;
                margin-right: 64px;
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
                width: 268px;
                height: 190px;
            }

            body .gallery .card-hotel-carousel .image-placeholder img {
                width: 100%;
                height: 100%;
                -o-object-fit: cover;
                object-fit: cover;
                border-radius: 16px;
            }

            body .gallery .card-hotel-carousel .card-details {
                padding-bottom: 53px;
                height: 150px;
            }

            body .gallery .card-hotel-carousel .card-details .caption {
                font-weight: 700;
                font-size: 24px;
                color: #080E09;
                margin-top: 24px;
            }

            body .gallery .card-hotel-carousel .card-details .sub-caption {
                font-weight: 400;
                color: #ADB2B8;
            }

            body .gallery .card-hotel-carousel .bottom-text .price-content {
                color: #080E09;
                font-size: 16px;
            }

            body .gallery .card-hotel-carousel .bottom-text .price-content span {
                font-weight: 400;
            }

            body .gallery .card-hotel-carousel .bottom-text .price-content span.price {
                font-weight: 700;
            }

            body .gallery .card-hotel-carousel .bottom-text .rating {
                font-weight: 700;
                font-size: 16px;
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
            <div class="col-xl-6">
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

    <section class="famouly-brands">
        <style scoped>
            body .famouly-brands {
                background: radial-gradient(100% 100% at 50% 0%, #F9FAFE 0%, #FAFAFD 100%);
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
                <div
                    class="right-column d-flex flex-column align-items-lg-start align-items-center text-lg-start text-center">
                    <h2 class="mb-3"><b>Get To About Us</b></h2>
                    {{-- <h4
                        class="title-caption d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">

                        Trusted Mentor
                    </h4> --}}
                    <p class="text-caption">
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
    <section class="h-100 w-100" style="{{ env('BG_COLOR_100') }}" style="box-sizing: border-box;">
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
</div>
