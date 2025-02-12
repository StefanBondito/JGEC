<x-user title="Profile">
    {{-- Fixed Join Us Button --}}
    <a href="#" target="_blank" class="fixed-join-us">
        <button class="btn btn-primary button-text">Join Us</button>
    </a>
    {{-- Fixed WhatsApp --}}
    <a href="https://wa.me/6285282669301" target="_blank" class="fixed-wa">
        <i class="fa-brands fa-whatsapp" style="font-size: 30px;"></i>
    </a>

    <section class="top-hero">
        <!-- Gray Area -->
        <div class="hero-section">
            <h2 class="hero-heading">JAYADI GLOBAL EDUCATION CENTER</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc maximus, nulla ut commodo sagittis, sapien
                dui mattis dui.</p>
        </div>

        <!-- White Content -->
        <div class="container pb-5">
            <div class="d-flex row justify-content-center">
                <div class="col-md-10 text-center">
                    <div class="d-flex justify-content-center content-card">
                        <div class="image-placeholder">
                            <img src="{{ asset('placeholder-image.png') }}" alt="Placeholder Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="first-profile">
        <div class="container px-2 py-5">
            <div class="row">
                {{-- Image Section --}}
                <div class="d-flex justify-content-center col-5">
                    <img src="/storage/images/assets/jgec_jgpi_logo.png" alt="" class="w-100 img-fluid">
                </div>
                {{-- Text Section --}}
                <div class="d-flex justify-content-center flex-column col-7">
                    <div class="row text-title">
                        <h1>Apa itu JGEC?</h1>
                    </div>
                    <div class="row text-norm">
                        <p>Jayadi Global Education Center (JGEC) berada di naungan PT Jayadi Global Personal Indonesia
                            (PT JGPI) merupakan sebuah lembaga pendidikan yang memfokuskan diri untuk memberikan kursus
                            persiapan dan kursus bahasa Jepang bagi siapa saja yang ingin mengajukan diri untuk ikut
                            Test Visa Keterampilan Khusus (ingin bekerja di Jepang).</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="second-profile">
        <div class="container px-2 py-5">
            <div class="row text-box">
                <div class="row text-title">
                    <h1>HEADING</h1>
                </div>

                <div class="row text-norm">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum ad dignissimos eius dolore aut?
                        Earum sit cum doloribus dolore natus iure fugiat eveniet dolores obcaecati! Eius esse libero
                        laboriosam tempora. Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe nemo
                        blanditiis consequuntur! Velit minima harum, itaque laboriosam, quos optio perspiciatis
                        explicabo odit minus, distinctio dolores excepturi impedit sit eos inventore! Lorem ipsum dolor
                        sit amet consectetur adipisicing elit. Incidunt minus magni, rerum tempore ex obcaecati ipsam
                        nobis ipsum ad consequatur, expedita animi eius amet vitae numquam? Modi non assumenda
                        maiores?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum repudiandae recusandae
                        debitis laudantium rem unde, sed beatae neque aliquam harum possimus ipsum nisi consequuntur
                        iure delectus quas. Odit, culpa! Repellat?</p>
                </div>
            </div>
        </div>
    </section>
</x-user>
