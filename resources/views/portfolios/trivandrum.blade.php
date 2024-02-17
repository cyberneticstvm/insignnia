@extends("base")
@section("content")
<!--rts projects area start -->
<div class="rts-projects-area rts-section-gap">
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <!-- projecta area tabs start -->
                <div class="projects-wrapper-inner-page">
                    <ul class="nav nav-tabs mb--20" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Projects in Trivandrum (Vazhayila)</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <!-- single tab content start -->
                            <div class="row g-24 mb--25">
                                @for($i=1; $i<=4; $i++) <div class="col-lg-6">
                                    <div class="single-case-wrapper">
                                        <a href="#">
                                            <img class="main-2" src='{{ asset("/assets/images/portfolios/trivandrum/$i.jpeg") }}' alt="projects-images">
                                        </a>
                                        <div class="content">
                                            <a href="#">
                                                <h5 class="title">Project</h5>
                                            </a>
                                            <span>Trivandrum Projects</span>
                                        </div>
                                    </div>
                            </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
            <!-- projecta area tabs end -->
        </div>
    </div>
</div>
</div>
<!--rts projects area end -->
@endsection