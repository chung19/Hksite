<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Service</title>
    <!-- bootstrap5 css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('./frontend/font/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" el="stylesheet">
    <!--Stylesheets-->
    <link href="{{asset('./frontend/css/header.css')}}" rel="stylesheet" />
    <link href="{{asset('./frontend/css/footer.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('./frontend/css/servicedetails.css')}}">
    <link rel="stylesheet" href="{{asset('./frontend/css/contact.css')}}">
</head>

<body style="background-color: #ffffff;">

    <!---------------------------------------------------------- header--------------------------------------------------------- -->
    @include("frontend/layout.header")
    <!---------------------------------------------------------- end header--------------------------------------------------------- -->
    <div class="container-fluid header">
        <div class="container">
            <div class="row" style="height: 80px;">
                <div class="col-6 contact-us">
                    <i class="fa fa-circle" aria-hidden="true" style="color: #0a8bfa; font-size: smaller"></i>
                    <b>
                        Services
                    </b>
                </div>
                <div class="col-6 menu-contact-us">
                    Home
                    <a href="#" style="text-decoration: none; color: #707070;">
                        <i class="fa fa-angle-right" aria-hidden="true" style="color: #707070;"></i>
                        Services
                    </a>
                    <a href="#" style="text-decoration: none">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                        Mobile Apps Develop
                    </a>
                </div>
            </div>
        </div>
    </div>
    </nav>
    </section>
    <!-- end <section> topbar ============================-->

    <div class="inforService">
        <div class="inforService__content">
            @if ($se != '')
            <h1 class="inforService__title">{{ $se->title }}</h1>
            <img class="inforService__banner" src="/image/{{ $se->image }}">
            <p class="inforService__text">{!! $se->content !!}</p>
            @else
                @foreach ($service_default as $service)
                    <h1 class="inforService__title">{{ $service->title }}</h1>
                    <img class="inforService__banner" src="/image/{{ $service->image }}">
                    <p class="inforService__text">{!! $service->content !!}</p>
                 @endforeach
            @endif
            <h2 class="inforService__featuresTitle">Key features</h2>
            <div class="inforService__features">
                <img src="./frontend/images/servicedetails/check_features.png">
                <div class="inforService__feature">Custom Installation Process</div>
            </div>
            <div class="inforService__features">
                <img src="./frontend/images/servicedetails/check_features.png">
                <div class="inforService__feature">Customizable Interface</div>
            </div>
            <div class="inforService__features">
                <img src="./frontend/images/servicedetails/check_features.png">
                <div class="inforService__feature">Improved All Performance</div>
            </div>
            <div class="inforService__features">
                <img src="./frontend/images/servicedetails/check_features.png">
                <div class="inforService__feature">High Usablility</div>
            </div>
        </div>
    </div>

    <div class="pricingPlan">
        <div class="pricingPlan-title">Pricing Plan</div>
        <div class="pricingPlan__type">
            <div class="pricingPlan__card">
                <div class="pricingPlan__cardHeader">
                    <div class="pricingPlan__cardTitleContainer">
                        <div class="pricingPlan__cardNameTag">PRICING TABLE</div>
                        <div class="pricingPlan__cardTitle">BASIC</div>
                        <div class="pricingPlan__cardPrice">
                            <div class="pricingPlan__cardBody-price">
                                <p>$</p>199
                            </div>
                            <div class="pricingPlan__cardBody-durationType">Per Month</div>
                        </div>
                    </div>
                </div>
                <div class="pricingPlan__cardBody">
                    <div class="pricingPlan__cardBody-used">
                        <div class="pricingPlan__cardBody-checked">
                            <img src="./frontend/images/servicedetails/check.png">
                        </div>
                        <div class="pricingPlan__cardBody-use">Concept Development</div>
                    </div>
                    <div class="pricingPlan__cardBody-used">
                        <div class="pricingPlan__cardBody-checked">
                            <img src="./frontend/images/servicedetails/check.png">
                        </div>
                        <div class="pricingPlan__cardBody-use">UI/UX Design</div>
                    </div>
                    <div class="pricingPlan__cardBody-used ">
                        <div class="pricingPlan__cardBody-checked" style="background-color: #bfbebe;">
                            <img src="./frontend/images/servicedetails/check.png">
                        </div>
                        <div class="pricingPlan__cardBody-use" style="color: #bfbebe;">Configuration Management</div>
                    </div>
                    <div class="pricingPlan__cardBody-used">
                        <div class="pricingPlan__cardBody-checked" style="background-color: #bfbebe;">
                            <img src="./frontend/images/servicedetails/check.png">
                        </div>
                        <div class="pricingPlan__cardBody-use" style="color: #bfbebe;">App Integrition</div>
                    </div>
                    <div class="pricingPlan__cardBody-used">
                        <div class="pricingPlan__cardBody-checked" style="background-color: #bfbebe;">
                            <img src="./frontend/images/servicedetails/check.png">
                        </div>
                        <div class="pricingPlan__cardBody-use" style="color: #bfbebe;">App Integrition</div>
                    </div>
                    <button class="pricingPlan__cardBtnBuy">BUY NOW</button>
                    <hr class="pricingPlan__cardLine">
                </div>
            </div>
            <div class="pricingPlan__card">
                <div class="pricingPlan__cardHeader">
                    <div class="pricingPlan__cardTitleContainer">
                        <div class="pricingPlan__cardNameTag">PRICING TABLE</div>
                        <div class="pricingPlan__cardTitle">PREMIUM</div>
                        <div class="pricingPlan__cardPrice">
                            <div class="pricingPlan__cardBody-price">
                                <p>$</p>299
                            </div>
                            <div class="pricingPlan__cardBody-durationType">Per Month</div>
                        </div>
                    </div>
                </div>
                <div class="pricingPlan__cardBody">
                    <div class="pricingPlan__cardBody-used">
                        <div class="pricingPlan__cardBody-checked">
                            <img src="./frontend/images/servicedetails/check.png">
                        </div>
                        <div class="pricingPlan__cardBody-use">Concept Development</div>
                    </div>
                    <div class="pricingPlan__cardBody-used">
                        <div class="pricingPlan__cardBody-checked">
                            <img src="./frontend/images/servicedetails/check.png">
                        </div>
                        <div class="pricingPlan__cardBody-use">UI/UX Design</div>
                    </div>
                    <div class="pricingPlan__cardBody-used">
                        <div class="pricingPlan__cardBody-checked">
                            <img src="./frontend/images/servicedetails/check.png">
                        </div>
                        <div class="pricingPlan__cardBody-use" style="color: #bfbebe;">Configuration Management</div>
                    </div>
                    <div class="pricingPlan__cardBody-used">
                        <div class="pricingPlan__cardBody-checked" style="background-color: #bfbebe;">
                            <img src="./frontend/images/servicedetails/check.png">
                        </div>
                        <div class="pricingPlan__cardBody-use" style="color: #bfbebe;">App Integrition</div>
                    </div>
                    <div class="pricingPlan__cardBody-used">
                        <div class="pricingPlan__cardBody-checked" style="background-color: #bfbebe;">
                            <img src="./frontend/images/servicedetails/check.png">
                        </div>
                        <div class="pricingPlan__cardBody-use" style="color: #bfbebe;">App Integrition</div>
                    </div>
                    <button class="pricingPlan__cardBtnBuy">BUY NOW</button>
                    <hr class="pricingPlan__cardLine">
                </div>
            </div>
            <div class="pricingPlan__card">
                <div class="pricingPlan__cardHeader">
                    <div class="pricingPlan__cardTitleContainer">
                        <div class="pricingPlan__cardNameTag">PRICING TABLE</div>
                        <div class="pricingPlan__cardTitle">GOLDEN</div>
                        <div class="pricingPlan__cardPrice">
                            <div class="pricingPlan__cardBody-price">
                                <p>$</p>590
                            </div>
                            <div class="pricingPlan__cardBody-durationType">Per Month</div>
                        </div>
                    </div>
                </div>
                <div class="pricingPlan__cardBody">
                    <div class="pricingPlan__cardBody-used">
                        <div class="pricingPlan__cardBody-checked">
                            <img src="./frontend/images/servicedetails/check.png">
                        </div>
                        <div class="pricingPlan__cardBody-use">Concept Development</div>
                    </div>
                    <div class="pricingPlan__cardBody-used">
                        <div class="pricingPlan__cardBody-checked">
                            <img src="./frontend/images/servicedetails/check.png">
                        </div>
                        <div class="pricingPlan__cardBody-use">UI/UX Design</div>
                    </div>
                    <div class="pricingPlan__cardBody-used">
                        <div class="pricingPlan__cardBody-checked">
                            <img src="./frontend/images/servicedetails/check.png">
                        </div>
                        <div class="pricingPlan__cardBody-use">Configuration Management</div>
                    </div>
                    <div class="pricingPlan__cardBody-used">
                        <div class="pricingPlan__cardBody-checked">
                            <img src="./frontend/images/servicedetails/check.png">
                        </div>
                        <div class="pricingPlan__cardBody-use">App Integrition</div>
                    </div>
                    <div class="pricingPlan__cardBody-used">
                        <div class="pricingPlan__cardBody-checked">
                            <img src="./frontend/images/servicedetails/check.png">
                        </div>
                        <div class="pricingPlan__cardBody-use">App Integrition</div>
                    </div>
                    <button class="pricingPlan__cardBtnBuy">BUY NOW</button>
                    <hr class="pricingPlan__cardLine">
                </div>
            </div>
        </div>
    </div>

    <div class="allServices">
        <h1 class="allServices__title">All Services</h1>
        <div class="allServices__content">
            @foreach ($s as $service)
            <div class="allServices__container">
                <div>
                    <img src="/image/{{ $service->image }}">
                </div>
                <div class="allServices__overlay">
                    <div class="allServices__text">
                        <h2 class="allServices__textTitle">{{ $service->title }}</h2>
                        <p class="allServices__textContent">{!! $service->content !!}</p>
                    </div>
                   
                    <a class="allServices__btn" href="{{ url('/service-details/'.$se->id= $service->id    ) }}">
                        <img src="{{asset('./frontend/images/servicedetails/next.png')}}">
                    </a>
                

                </div>
            </div>
            @endforeach
        </div>
    </div>
    </div>
    <!--  <section> footer ============================-->
    @include("frontend/layout.footer")
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>