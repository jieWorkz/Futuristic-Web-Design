<section class="section-md bg-default">
        <div class="bg-decor d-flex align-items-center justify-content-end" data-parallax-scroll="{&quot;x&quot;: -100, &quot;y&quot;: -30, &quot;smoothness&quot;: 30}"><img src="images/bg-decor-9.png" alt="" loading="lazy">
        </div>
        <div class="container">
          <div class="row justify-content-md-center justify-content-lg-between row-50 align-items-center">
            <div class="col-md-8 col-lg-6">
              <div id="accordion" role="tablist">
                      <!-- Bootstrap card-->
                      <div class="card card-custom">
                        <div class="card-custom-heading" id="accordionHeading1" role="tab">
                          <h5 class="card-custom-title"><a class="collapsed" role="button" data-bs-toggle="collapse" data-parent="#accordion" href="#accordionCollapse1" aria-controls="accordionCollapse1">{{ $title1 ?? '' }}</a>
                          </h5>
                        </div>
                        <div class="card-custom-collapse collapse" id="accordionCollapse1" role="tabpanel" aria-labelledby="accordionHeading1">
                          <div class="card-custom-body">
                            <p>{{ $sub1 ?? '' }}</p>
                          </div>
                        </div>
                      </div>
                      <!-- Bootstrap card-->
                      <div class="card card-custom">
                        <div class="card-custom-heading" id="accordionHeading2" role="tab">
                          <h5 class="card-custom-title"><a class="collapsed" role="button" data-bs-toggle="collapse" data-parent="#accordion" href="#accordionCollapse2" aria-controls="accordionCollapse2">{{ $title2 ?? '' }}</a>
                          </h5>
                        </div>
                        <div class="card-custom-collapse collapse" id="accordionCollapse2" role="tabpanel" aria-labelledby="accordionHeading2">
                          <div class="card-custom-body">
                            <p>{{ $sub2 ?? '' }}</p>
                          </div>
                        </div>
                      </div>
                      <!-- Bootstrap card-->
                      <div class="card card-custom">
                        <div class="card-custom-heading" id="accordionHeading3" role="tab">
                          <h5 class="card-custom-title"><a class="collapsed" role="button" data-bs-toggle="collapse" data-parent="#accordion" href="#accordionCollapse3" aria-controls="accordionCollapse3">{{ $title3 ?? '' }}</a>
                          </h5>
                        </div>
                        <div class="card-custom-collapse collapse" id="accordionCollapse3" role="tabpanel" aria-labelledby="accordionHeading3">
                          <div class="card-custom-body">
                            <p>{{ $sub3 ?? '' }}</p>
                          </div>
                        </div>
                      </div>
              </div>
            </div>
            <div class="col-md-7 col-lg-5 position-relative">
              <figure class="button-shadow"><img src="{{ asset('/images/' . $img) }}" alt="" width="555" height="800" loading="lazy">
              </figure>
            </div>
          </div>
        </div>
      </section>