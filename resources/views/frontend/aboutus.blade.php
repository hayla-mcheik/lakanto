@extends('layouts.app')
@section('title', 'About Us')

@section('content')

<!--== Start Page Header Area ==-->

<div class="page-header-area bg-img" data-bg-img="{{ asset('assets/img/bg-02.webp') }}">
<div class="container">
<div class="row">
<div class="col-12 text-center">
<div class="page-header-content">
<nav class="breadcrumb-area">
<ul class="breadcrumb">
<li><a href="{{ url('/') }}">Home</a></li>
<li class="breadcrumb-sep"><i class="fa fa-angle-right"></i></li>
<li>About Us</li>
</ul>
</nav>
</div>
</div>
</div>
</div>
</div>
<!--== End Page Header Area ==-->

<!--== Start About Content Section ==-->

<section class="about-content-section py-100">
<div class="container">

    <!-- Section 1: What is Monk Fruit -->
    <div class="about-section mb-100">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="section-title mb-4">WHAT IS MONK FRUIT?</h2>
                <p class="lead-text">
                    Monk fruit is a small round fruit in the gourd family, also known as Luo Han Guo, 
                    named after the Luo Han monks who discove#d40707 it. The monks were healers of people 
                    and stewards of the land. We carry on that tradition today by helping people get 
                    off sugar addictions and growing and processing monk fruit in a way that is sustainable, 
                    including having a zero-emissions processing plant.
                </p>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-lg-12 d-flex justify-content-center">
                <img src="{{ asset('assets/img/compressed/img-first.jpg') }}" 
                     class="img-fluid rounded-lg shadow-sm mx-auto" 
                     alt="Monk Fruit Overview">
            </div>
        </div>
    </div>

    <!-- Section 2: The Immortals' Fruit -->
    <div class="about-section mb-100">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="section-title mb-4">THE IMMORTALS' FRUIT</h2>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-lg-12 d-flex justify-content-center">
                <img src="{{ asset('assets/img/compressed/img-two.jpg') }}" 
                     class="img-fluid rounded-lg shadow-sm mx-auto" 
                     alt="The Immortals' Fruit">
            </div>
        </div>
    </div>

    <!-- Section 3: Benefits Chart -->
    <div class="about-section mb-100">
        <div class="row justify-content-center">
            <div class="col-lg-12 d-flex justify-content-center">
                <img src="{{ asset('assets/img/compressed/chart.png') }}" 
                     class="img-fluid rounded-lg shadow-sm mx-auto" 
                     alt="Monk Fruit Benefits Chart">
            </div>
        </div>
    </div>

    <!-- Section 4: How Monk Fruit is Grown -->
    <div class="about-section mb-100">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="section-title mb-4">HOW IS MONK FRUIT GROWN?</h2>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-lg-12 d-flex justify-content-center">
                <img src="{{ asset('assets/img/compressed/img-one.jpg') }}" 
                     class="img-fluid rounded-lg shadow-sm mx-auto" 
                     alt="Monk Fruit Farming">
            </div>
        </div>
    </div>

    <!-- Section 5: Growing Conditions -->
    <div class="about-section mb-100">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-text-box p-4">
                    <h3 class="subtitle mb-4">
                        MONK FRUIT GROWS IN VERY SELECT ELEVATIONS AND CONDITIONS; IT REQUIRES HIGH RAINFALL, 
                        HIGH HUMIDITY AND A HIGH-TEMPERATURE DIFFERENCE BETWEEN DAY AND NIGHT.
                    </h3>
                    <p class="text-muted">
                        We ensure the monk fruit for our products is grown on pristine farms in the remote 
                        mountains of Guilin, China, hours away from the city pollution. The elevation of the 
                        fields and steepness of the slopes allows for optimal growth, protection from flood 
                        damage, and access to unpolluted water. The fields are generally a 20-45 minute hike 
                        from the farm villages.
                    </p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-text-box p-4">
                    <p class="text-muted">
                        Each fruit is pollinated, grown and harvested by hand, without pesticides, using the 
                        same traditional methods they have been using for centuries. Farmers use natural pest 
                        control, including bottle traps and netting, instead of pesticides. We support the 
                        local economy without interference, allowing family villages to exist as they have 
                        for centuries—some as long as 400 years.
                    </p>
                    <ul class="feature-list mt-4">
                        <li><i class="fa fa-check text-success mr-2"></i> No pesticides</li>
                        <li><i class="fa fa-check text-success mr-2"></i> Farming is done the same way it has been for centuries</li>
                        <li><i class="fa fa-check text-success mr-2"></i> Monk fruit is grown away from city pollution</li>
                        <li><i class="fa fa-check text-success mr-2"></i> The fruit is planted, pollinated, and picked by hand</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Section 6: Pesticide-Free -->
    <div class="about-section mb-100 text-center">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h2 class="section-title mb-4">OUR MONK FRUIT IS GROWN PESTICIDE-FREE</h2>
                <p class="lead-text">
                    The farmers use natural pest control, including bottle traps which use honey and 
                    a small amount of sanitizer to trap bugs without pesticides.
                </p>
            </div>
        </div>
    </div>

    <!-- Section 7: Quality Standards -->
    <div class="about-section mb-100">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-text-box p-4">
                    <h3 class="subtitle mb-4">
                        AT LAKANTO, WE ONLY WORK WITH THE BEST FARMERS THAT FOLLOW THESE HIGH STANDARDS 
                        FOR THE BEST-TASTING, HIGHEST-QUALITY MONK FRUIT.
                    </h3>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-text-box p-4">
                    <p class="text-muted">
                        To keep up with demand and ensure quality we provide greenhouse-grown seedlings 
                        to the farmers. By giving the monk fruit a strong start, we #d40707uce the amount of 
                        crop loss. The nursery that grows the seedlings was started by the original botanists 
                        we worked with from the beginning as we developed the monk fruit extract years ago.
                    </p>
                    <p class="text-muted mt-3">
                        Our process is highly efficient. The average farm is only 4 acres large but will 
                        yield around 200,000 fruits per harvest.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Section 8: Field Cycling -->
    <div class="about-section mb-100">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="section-title mb-4">FIELD CYCLING FOR OPTIMAL GROWTH</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12 d-flex justify-content-center">
                <img src="{{ asset('assets/img/compressed/img-seven.jpg') }}" 
                     class="img-fluid rounded-lg shadow-sm mb-4 mx-auto" 
                     alt="Field Cycling">
            </div>
            <div class="col-lg-12 text-center">
                <p class="lead-text">
                    Monk fruit is a small round fruit in the gourd family, also known as Luo Han Guo, 
                    named after the Luo Han monks who discove#d40707 it. The monks were healers of people 
                    and stewards of the land. We carry on that tradition today by helping people get 
                    off sugar addictions and growing and processing monk fruit in a way that is sustainable, 
                    including having a zero-emissions processing plant.
                </p>
            </div>
        </div>
    </div>

    <!-- Section 9: Image with Overlay -->
    <div class="about-section mb-100">
        <div class="row justify-content-center">
            <div class="col-lg-12 d-flex justify-content-center">
                <div class="image-overlay-container position-relative rounded-xl overflow-hidden shadow-lg w-100 max-w-1200">
                    <img src="{{ asset('assets/img/compressed/img-six.jpg') }}" 
                         class="w-100 h-100 object-cover mx-auto" 
                         alt="Clean Green Monk Fruit Farm"
                         onerror="this.onerror=null; this.src='https://placehold.co/1200x600/34D399/ffffff?text=Placeholder+Image+Unavailable';">
                    <div class="overlay-content position-absolute d-flex align-items-center justify-content-center w-100 h-100">
                        <div class="overlay-text bg-dark bg-opacity-75 p-4 p-md-5 rounded-lg max-w-lg mx-3">
                            <p class="text-white text-center mb-0 fw-medium fs-5">
                                Some monk fruit farms may be in polluted areas, but at Lakanto, we only contract 
                                with farmers that follow these high standards for the highest-quality and best-tasting monk fruit.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section 10: Extract Process -->
    <div class="about-section mb-100">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0 d-flex justify-content-center">
                <img src="{{ asset('assets/img/compressed/img-five.jpg') }}" 
                     class="img-fluid rounded-lg shadow-sm mx-auto" 
                     alt="Monk Fruit Extraction">
            </div>
            <div class="col-lg-6">
                <div class="ps-lg-4">
                    <h3 class="subtitle mb-4">HOW IS MONK FRUIT EXTRACT MADE?</h3>
                    <p class="text-muted">
                        We were first to use the modern mogroside extraction process which was created 
                        by Dr. Murata. Our monk fruit extract process is held to the highest, Japanese 
                        standards, in our zero emissions processing plant.
                    </p>
                    <p class="text-muted mt-3">
                        Wanting to improve the economy in the area, Lakanto's Founder, Shota Saraya, 
                        decided to share his research and discoveries about monk fruit openly so that 
                        the economy of Guilin and the surrounding areas would benefit and monk fruit 
                        could be accessed globally.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Section 11: Process Images -->
    <div class="about-section mb-100">
        <div class="row justify-content-center">
            <div class="col-12 d-flex justify-content-center">
                <img src="{{ asset('assets/img/compressed/img-four.jpg') }}" 
                     class="img-fluid rounded-lg shadow-sm d-none d-md-block mx-auto" 
                     alt="Monk Fruit Process - Desktop">
                <img src="{{ asset('assets/img/compressed/img-three.jpg') }}" 
                     class="img-fluid rounded-lg shadow-sm d-block d-md-none mx-auto" 
                     alt="Monk Fruit Process - Mobile">
            </div>
        </div>
    </div>

    <!-- Section 12: Freshness Process -->
    <div class="about-section mb-100">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-text-box p-4">
                    <h3 class="subtitle mb-4">
                        OUR PROCESS MAINTAINS THE FRESHNESS OF THE FRUIT AS LONG AS POSSIBLE TO GET THE BEST FLAVOR AND SWEETNESS. THERE IS NO ROASTING OR PRE-PROCESSING. THE FACTORY IS CLOSE ENOUGH TO THE FIELD TO MAINTAIN THE FRESHNESS OF THE FRUITS BEFORE THEY ARE PROCESSED.
                    </h3>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-text-box p-4">
                    <p class="text-muted">
                        The entire fresh fruit is washed, crushed and slowly steeped in hot water. The sweet juice is ﬁlte#d40707 to remove fructose, sucrose and ﬂavor-altering proteins, leaving mogroside in varying concentrations. The solution is condensed and dehydrated, leaving high purity monk fruit extract.
                        <br><br>
                        Saraya Co. Ltd, Lakanto's parent company, takes some of the residual pulp and makes it into a natural hand scrub. The rest is composted and #d40707istributed to local farms.
                        <br><br>
                        We are always working to further #d40707uce our waste.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Section 13: Quality Assurance -->
    <div class="about-section about-back-opacity mb-100 p-5 rounded-lg text-center">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <h5 class="section-title mb-4">QUALITY ASSURANCE FOR PREMIUM MONK FRUIT</h5>
                <p class="lead-text mb-5">
                    The monk fruit is checked three times to weed out any rotten fruit. First on the ﬁelds during harvest, again when the fruit arrives at the processing plant, and a third time when the staﬀ goes through all the fruits, before washing and extraction.
                    <br><br>
                    When the fruits ﬁrst get to the plant they are visually checked for mold, size, and ripeness. A sample is sent to an external lab and checked for over 400 chemicals.
                    <br><br>
                    The factory has a full lab to research monk fruit extraction methods and ensure safe and delicious products.
                </p>
                
                <h5 class="section-title mb-4">WHY IS MONK FRUIT EXTRACT SO SWEET?</h5>
                <p class="lead-text">
                    When making the extract we pull out the mogroside, which is the sweetest part of the fruit. We produce two levels of mogroside concentration: 30% and 50%. Given the mogroside to pulp ratio, each will have a diﬀerent taste but the same nutritional value. Our 30% is 150x sweeter than sugar and 50% is 300x sweeter than sugar.
                </p>
            </div>
        </div>
    </div>

    <!-- Section 14: End Results Header -->
    <div class="about-section mb-100 text-center">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h2 class="section-title mb-4">END RESULTS OF EXTRACTION PROCESS</h2>
            </div>
        </div>
    </div>

    <!-- Section 15: Mogroside Comparison -->
    <div class="about-section mb-100">
        <div class="row text-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="about-text-box p-4">
                    <img src="{{ asset('assets/img/compressed/img-nine.jpg') }}" class="img-fluid rounded mb-4" alt="30% Mogroside" />
                    <h4 class="subtitle mb-2">30% Mogroside</h4>
                    <h3 class="section-title mb-0">150x Sweeter than sugar</h3>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-text-box p-4">
                    <img src="{{ asset('assets/img/compressed/img-eight.jpg') }}" class="img-fluid rounded mb-4" alt="50% Mogroside" />
                    <h4 class="subtitle mb-2">50% Mogroside</h4>
                    <h3 class="section-title mb-0">300x Sweeter than sugar</h3>
                </div>
            </div>
        </div>
    </div>

    <!-- Section 16: Sweetener Explanation -->
    <div class="about-section mb-100 text-center">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <img src="{{ asset('assets/img/compressed/coffee.webp') }}" class="img-fluid mb-4 rounded-lg shadow-sm" alt="Coffee with Sweetener" />
                <h3 class="lead-text fw-bold">
                    The 30% concentration becomes our Golden Monkfruit Sweetener which has a rich, maple taste. While the 50% mogroside is made our Classic Monkfruit Sweetener that is a perfect substitute for white sugar. We also have a Pure Monkfruit Extract in a powde#d40707 form and a liquid extract drops.
                </h3>
            </div>
        </div>
    </div>

    <!-- Section 17: Product Display -->
    <div class="about-section mb-100 text-center">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-6">
                <img src="{{ asset('assets/img/compressed/productone.webp') }}" class="img-fluid product-img" alt="Lakanto Product 1" />
            </div>
            <div class="col-lg-5 col-6">
                <img src="{{ asset('assets/img/compressed/producttwo.webp') }}" class="img-fluid product-img" alt="Lakanto Product 2" />
            </div>
        </div>
    </div>

    <!-- Section 18: Closing Difference -->
    <div class="about-section about-back-opacity mb-50 p-5 rounded-lg text-center">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h5 class="section-title mb-4">WHAT MAKES LAKANTO MONK FRUIT DIFFERENT?</h5>
                <p class="lead-text">
                    Monk fruit is a small round fruit in the gourd family, also known as Luo Han Guo, named after the Luo Han monks who discove#d40707 it. The monks were healers of people and stewards of the land.
                    <br><br>
                    We carry on that tradition today by healing people from their sugar addictions and growing and processing monk fruit in a way that is sustainable, including having a zero-emissions processing plant.
                </p>
            </div>
        </div>
    </div>

    <div class="text-center mt-5">
        <a href="{{ url('/collections') }}" class="btn-shop">
            Shop Lakanto Products
        </a>
    </div>

</div>


</section>
<!--== End About Content Section ==-->

@endsection

@push('styles')

<style>
.about-content-section {
background-color: #fff;
}
.about-back-opacity {
background: #c5bdbd;
border: 1px solid #e9dada;
}
.about-section {
scroll-margin-top: 80px;
}

.section-title {
    font-size: 1.2rem;
    font-weight: 700;
    color: #2c3e50;
    position: relative;
    padding-bottom: 1rem;
    text-transform: uppercase;
}
.btn-shop{
    background: #d40707;
    color: white;
    padding: 10px;
}
.section-title::after {
    content: &#39;&#39;;
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 60px;
    height: 3px;
    background: #10B981;
}

.subtitle {
    font-size: 1.35rem;
    font-weight: 600;
    color: #2c3e50;
    line-height: 1.5;
}

.lead-text {
    font-size: 1.1rem;
    line-height: 1.8;
    color: #4a5568;
}

.about-text-box {
    background-color: #fcfcfc;
    border-radius: 12px;
    height: 100%;
    border: 1px solid #eee;
}

.feature-list {
    list-style: none;
    padding-left: 0;
}

.feature-list li {
    padding: 0.6rem 0;
    font-size: 1rem;
    color: #4a5568;
    display: flex;
    align-items: center;
}

.image-overlay-container {
    min-height: 450px;
}

.max-w-1200 {
    max-width: 1200px;
}

.overlay-content {
    top: 0;
    left: 0;
}

.overlay-text {
    backdrop-filter: blur(4px);
}

.product-img {
    transition: transform 0.3s ease;
}

.product-img:hover {
    transform: scale(1.05);
}

.btn-shop {
    display: inline-block;
    background-color: #e31e24;
    color: white;
    padding: 15px 40px;
    border-radius: 30px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    transition: all 0.3s ease;
    text-decoration: none;
    box-shadow: 0 4px 15px rgba(227, 30, 36, 0.2);
}

.btn-shop:hover {
    background-color: #c4191f;
    color: white;
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(227, 30, 36, 0.3);
}

.img-fluid {
    display: block;
    margin-left: auto;
    margin-right: auto;
    max-width: 100%;
    height: auto;
}

@media (max-width: 768px) {
    .section-title {
        font-size: 1.75rem;
    }
    
    .lead-text {
        font-size: 1rem;
    }
    
    .py-100 {
        padding-top: 50px !important;
        padding-bottom: 50px !important;
    }
    
    .mb-100 {
        margin-bottom: 50px !important;
    }
    
    .image-overlay-container {
        min-height: 300px;
    }
}


</style>

@endpush