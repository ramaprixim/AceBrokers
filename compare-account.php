<?php include("includes/header.php"); ?>
<style>
    .inner-box{
        background-color: #0a2d2d;
    padding: 25px;
}
.price{
    padding: 18px 0px;
}
.title-card{
    background-color: #ffb905;
    width: fit-content;
    padding: 10px 23px;
    border-radius: 20px;
    color: black;
    font-size: 15px;
    font-weight: 600;
}
.price-list>li{
    font-size: inherit;
    font-weight: inherit;
    color: white;
    padding: 10px 10px;
    display: flex;
    justify-content: space-between;
}
.price-list>li>span{
    font-size: 16px;
    font-weight: 700;
    color: white;
}
.configure{
    padding: 8px;
    font-size: 20px;
    display: flex;
    width: 100%;
    justify-content: center;
    border-radius: 18px;
    color: white;
    border-radius: 10px;
    border: 1px solid white;
}
.configure:hover{
    padding: 8px;
    font-size: 20px;
    display: flex;
    width: 100%;
    justify-content: center;
    border-radius: 18px;
    color: black;
    border-radius: 10px;
    border: 1px solid #ffb905;
    background-color:#ffb905;
}
</style>
<!-- banner section start-->
<section class="banner-section  pt-120 pb-120">
    <div class="container mt-10 mt-lg-0 pt-15 pt-lg-20 pb-5 pb-lg-0">
        <div class="row">
            <div class="col-12 breadcrumb-area ">
                <h2 class="mb-4">Expert Advisors</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item ms-2 ps-7 active" aria-current="page"><span>Expert Advisors</span></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<section class="package-section pt-120 pb-120">
    	<div class="container">
        	<div class="sec-title centered">
            	<div class="title text-center">Packages</div>
                <h2 class="text-center">Our Pricing Plans</h2>
                <p class="text-center mt-4 mb-4">You register for an online trading account with a stock broker or a firm.</p>
            </div>
            <div class="row clearfix pt-10">
            	
                <!--Price Block-->
                <div class="price-block col-lg-3 col-md-4 col-sm-12">
                	<div class="inner-box">
                    	<div class="title-card">MICRO</div>
                        <br>
                        <h2 class="price" style="font-size: 30px;">$ 100-$ 999</h2>
                        <!-- <div class="price">15 <sup>$</sup><sub>/ Mon</sub></div> -->
                        <!-- <div class="contract">With 12 Months Annual Contract</div> -->
                        <ul class="price-list">
                        	<li>Demo Account</li>
                            <li>Leverage 1 <span>500</span> </li>
                            <li>Spread</li>
                            <li>Pricing Format <span>5 Decimal</span></li>
                            <li>Bonus <span>Yes</span></li>
                            <li>Commission <span>$ 0</span></li>
                        </ul>
                        <br>
						<div ><a class="configure" href="#">Buy</a></div>
                    </div>
                </div>
				
				<!--Price Block-->
                <div class="price-block col-lg-3 col-md-4 col-sm-12">
                	<div class="inner-box">
                    	<div class="title-card">MINI</div>
                        <br>
                        <h2 class="price" style="font-size: 30px;">$ 1,000-$ 4,999</h2>
                        <ul class="price-list">
                        	<li>Demo Account</li>
                            <li>Leverage 1 <span>500</span> </li>
                            <li>Spread</li>
                            <li>Pricing Format <span>5 Decimal</span></li>
                            <li>Bonus<span>Yes</span></li>
                            <li>Commission <span>$ 0</span></li>
                        </ul>
                        <br>
						<div ><a class="configure" href="#">Buy</a></div>
                    </div>
                </div>
				
				<!--Price Block-->
                <div class="price-block col-lg-3 col-md-6 col-sm-12">
                	<div class="inner-box">
                    	<div class="title-card">PRIME</div>
                        <br>
                        <h2 class="price" style="font-size: 30px;">$ 5,000-$ 24,999</h2>
                        <ul class="price-list">
                        	<li>Demo Account</li>
                            <li>Leverage 1 <span>400</span> </li>
                            <li>Spread</li>
                            <li>Pricing Format <span>5 Decimal</span></li>
                            <li>Bonus<span>Yes</span></li>
                            <li>Commission <span>$ 0</span></li>
                        </ul>
                        <br>
						<div ><a class="configure" href="#">Buy</a></div>
                    </div>
                </div>
				
				<!--Price Block-->
                <div class="price-block col-lg-3 col-md-6 col-sm-12">
                	<div class="inner-box">
                    	<div class="title-card">LUXURY</div>
                        <br>
                        <h2 class="price" style="font-size: 30px;">$ 25,000</h2>
                        <ul class="price-list">
                        	<li>Demo Account</li>
                            <li>Leverage 1 <span>300</span> </li>
                            <li>Spread</li>
                            <li>Pricing Format <span>5 Decimal</span></li>
                            <li>Bonus <span>Yes</span></li>
                            <li>Commission <span>$ 0</span></li>
                        </ul>
                        <br>
						<div ><a class="configure" href="#">Buy</a></div>
                    </div>
                </div>
				
            </div>
        </div>
    </section>
<?php include("includes/footer.php"); ?>