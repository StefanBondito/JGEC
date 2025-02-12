<x-user title=" Homepage">
    {{-- Fixed Join Us Button --}}
    <a href="#" target="_blank" class="fixed-join-us">
        <button class="btn btn-primary button-text">Join Us</button>
    </a>
    {{-- Fixed WhatsApp --}}
    <a href="https://wa.me/6285282669301" target="_blank" class="fixed-wa">
        <i class="fa-brands fa-whatsapp" style="font-size: 30px;"></i>
    </a>

    {{-- SECTION 1 - CAROUSEL --}}
    <div class="container-fluid p-0">
        <section class="carousel">
            <div id="myCarousel" class="carousel slide pointer-event" data-bs-ride="carousel"> {{-- Penentu otomatis ganti (data-bs-ride) --}}
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" aria-label="Slide 1" class="" ></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class="active" aria-current="true"></button>
                </div>
                <div class="carousel-inner">
                    {{-- Carousel 1 --}}
                    <div class="carousel-item" data-bg="/storage/images/assets/Temp img 3.jpg">
                        <img class="d-block img-fluid carousel-img" src="/storage/images/assets/Temp img 3.jpg" width="100%" height="100%" alt="">

                        <div class="container">
                            <div class="carousel-caption text-center">
                                <h1>Example headline.</h1>
                                <p>Some representative placeholder content for the first slide of the carousel.</p>
                                <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                            </div>
                        </div>
                    </div>
                        {{-- Carousel 2 --}}
                    <div class="carousel-item" data-bg="/storage/images/assets/Temp img 1.jpg">
                        <img class="d-block img-fluid carousel-img" src="/storage/images/assets/Temp img 1.jpg" width="100%" height="100%" alt="">

                        <div class="container">
                            <div class="carousel-caption">
                                <h1>Another example headline.</h1>
                                <p>Some representative placeholder content for the second slide of the carousel.</p>
                                <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                            </div>
                        </div>
                    </div>
                        {{-- Carousel 3 --}}
                    <div class="carousel-item active" data-bg="/storage/images/assets/Temp img 2.jpg">
                        <img class="d-block img-fluid carousel-img" src="/storage/images/assets/Temp img 2.jpg" width="100%" height="100%" alt="">

                        <div class="container">
                            <div class="carousel-caption text-center">
                                <h1>One more for good measure.</h1>
                                <p>Some representative placeholder content for the third slide of this carousel.</p>
                                <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Carousel Buttons --}}
                <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev" style="padding-right: 100px;">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next" style="padding-left: 100px;">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
    </div>

    {{-- SECTION 2 - ABOUT US --}}
    <section class="about-us">
        <div class="container pt-5 pb-3">
            <div class="row title pb-3">
                <h1 class=text-center>About Us</h1>
            </div>
            <div class="d-flex align-items-center row featurette py-2">
                <div class="col-md-7">
                    <h2 class="featurette-heading fw-normal lh-1">First featurette heading. <span class="text-body-secondary">It’ll blow your mind.</span></h2>
                    <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
                </div>
                <div class="col-md-5">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-bg)"></rect><text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em">500x500</text></svg>
                </div>
            </div>

            <div class="d-flex align-items-center row featurette py-2">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading fw-normal lh-1">Oh yeah, it’s that good. <span class="text-body-secondary">See for yourself.</span></h2>
                    <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-bg)"></rect><text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em">500x500</text></svg>
                </div>
            </div>

            <div class="d-flex align-items-center row featurette py-2">
                <div class="col-md-7">
                    <h2 class="featurette-heading fw-normal lh-1">First featurette heading. <span class="text-body-secondary">It’ll blow your mind.</span></h2>
                    <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
                </div>
                <div class="col-md-5">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-bg)"></rect><text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em">500x500</text></svg>
                </div>
            </div>
        </div>
    </section>

    <section class="brochures">
        <div class="container pt-5 pb-3">
            <div class="row title pb-3">
                <h1 class=text-center>Brochures</h1>
                <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium magni aut voluptatem exercitationem saepe. Dolore nostrum aspernatur cumque maxime id, quasi quo vitae vel tempora veritatis asperiores ullam quae sapiente.</p>
            </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                {{-- Card 1 --}}
                <div class="col">
                <div class="card shadow-sm">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="600" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Brochure" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Brochure</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Brochure</text></svg>

                    {{-- <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                            </div>
                            <small class="text-muted">9 mins</small>
                        </div>
                    </div> --}}
                </div>
                </div>

                {{-- Card 2 --}}
                <div class="col">
                    <div class="card shadow-sm">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="600" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Brochure" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Brochure</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Brochure</text></svg>

                        {{-- <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div> --}}
                    </div>
                    </div>

                {{-- Card 3 --}}
                <div class="col">
                    <div class="card shadow-sm">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="600" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Brochure" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Brochure</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Brochure</text></svg>

                        {{-- <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div> --}}
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>

    <section class="news">
        <div class="container pt-5 pb-3">
            <div class="row">
                <h1 class=text-center>Articles</h1>
                <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium magni aut voluptatem exercitationem saepe. Dolore nostrum aspernatur cumque maxime id, quasi quo vitae vel tempora veritatis asperiores ullam quae sapiente.</p>
            </div>
            <div class="row row-cols-sm-1 row-cols-md-2 g-5">
                {{-- News 1 --}}
                <div class="col">
                    <div class="card shadow-sm">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="row pb-2">
                                <div class="btn-group text-start px-2">
                                    <button type="button" class="btn border-0 btn-sm w-100" style="white-space: nowrap; padding-right: 30px;" disabled>
                                        <i class="fa-regular fa-calendar"></i> 32 Jan 1999
                                    </button>
                                    <button type="button" class="btn border-0 btn-sm w-100" style="padding-right: 30px;" disabled>
                                        <i class="fa-solid fa-tag"></i> Mystery
                                    </button>
                                    <button type="button" class="btn border-0 btn-sm w-100" style="white-space: nowrap; padding-right: 30px;" disabled>
                                        <i class="fa-solid fa-user"></i> John Doe
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <h3>HEADING</h3>
                        </div>
                        <div class="row pb-2">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="row">
                            <a href="#"><button class="btn btn-primary w-10">Read More Here</button></a>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card shadow-sm">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="row pb-2">
                                <div class="btn-group text-start px-2">
                                    <button type="button" class="btn border-0 btn-sm w-100" style="white-space: nowrap; padding-right: 30px;" disabled>
                                        <i class="fa-regular fa-calendar"></i> 32 Jan 1999
                                    </button>
                                    <button type="button" class="btn border-0 btn-sm w-100" style="padding-right: 30px;" disabled>
                                        <i class="fa-solid fa-tag"></i> Mystery
                                    </button>
                                    <button type="button" class="btn border-0 btn-sm w-100" style="white-space: nowrap; padding-right: 30px;" disabled>
                                        <i class="fa-solid fa-user"></i> John Doe
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <h3>HEADING</h3>
                        </div>
                        <div class="row pb-2">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="row">
                            <a href="#"><button class="btn btn-primary w-10">Read More Here</button></a>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
    </section>

    <section class="testimonials">
        <div class="container pt-5 pb-3">
            <div class="row row-cols-sm-1 row-cols-md-2 g-5">
                <div class="col">
                    <div class="row">
                        <div class="d-flex align-items-center justify-content-start row head-title pb-3">
                            <div class="col-5">
                                <h1>Testimonials</h1>
                            </div>
                            <div class="col-7">
                                <i class="fa-solid fa-volume-high fa-2x"></i>
                            </div>
                        </div>
                        <p class="">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nihil quaerat laboriosam ducimus facilis dolores? Aliquam error architecto dicta eveniet explicabo, laborum nobis debitis accusantium veritatis, nihil, autem aliquid cumque asperiores.</p>
                        <br>
                        <div class="d-flex align-items-center justify-content-center col-3">
                            <i class="fa-solid fa-user-large fa-2x"></i>
                        </div>
                        <div class="d-flex align-items-center justify-content-center col-9">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Amet, dolore aspernatur non iste alias voluptatem neque itaque, velit ex dolor, reiciendis tempora? Fugiat, quas! Voluptatum repudiandae illo commodi adipisci quibusdam!</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <img src="/storage/images/assets/Temp img 1.jpg" width="100%" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="faq">
        <div class="container pt-5 pb-3">
            <div class="row">
                <div class="col">
                    <h1>Frequently Asked Questions</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus expedita quasi aperiam rerum porro quibusdam numquam recusandae veniam earum aliquid, sit obcaecati eius vero saepe explicabo nisi possimus suscipit esse.</p>
                </div>
                <div class="col">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              Accordion Item #1
                            </button>
                          </h2>
                          <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              Accordion Item #2
                            </button>
                          </h2>
                          <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              Accordion Item #3
                            </button>
                          </h2>
                          <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </section>

</x-user>
