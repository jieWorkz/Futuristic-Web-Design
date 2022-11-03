<section class="text-center section-xxl fullwidth-page fullwidth-page_mod-1 bg-accent-gradient particles-js-wrap context-dark">
    <div id="particles-js"><canvas class="particles-js-canvas-el" width="1903" height="447" style="width: 100%; height: 100%;"></canvas></div>
    <div class="container">
        <img src="{{ asset('/images/' . $img) }}">
        <h5 class="mt-0 text-width-2 block-centered">{{ $sub ?? '' }}</h5>
        <div class="group-lg group-middle"><a class="button button-black button-shadow" href="#features" data-custom-scroll-to="features">{{ $btnText ?? '' }}</a></div>
    </div>
</section>