<section class="section-lg bg-gray-lighter">
    <div class="bg-decor d-flex align-items-center" data-parallax-scroll='{"y": 100, "smoothness": 30}" style="transform:translate3d(0px, 100px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); -webkit-transform:translate3d(0px, 100px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1);'><img src="images/bg-decor-8.png" alt="" loading="lazy">
    </div>
    <div class="container">
        <div class="row justify-content-md-center flex-lg-row-reverse align-items-lg-center justify-content-lg-between row-50">
            <div class="col-md-9 col-lg-6">
                <h3 class="heading-decorated">{{ $title ?? '' }}</h3>
                <p>{{ $sub ?? '' }}</p>
            </div>
            <div class="col-md-9 col-lg-5">
                <figure class="button-shadow"><img src="{{ asset('/images/' . $img) }}" alt="" width="886" height="1100" loading="lazy">
                </figure>
            </div>
        </div>
    </div>
</section>