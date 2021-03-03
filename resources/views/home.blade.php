@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
       
        <div class="col-md-6">
            <section id="default" class="padding-top0">
                <div class="row">
                   
                    <div class="large-5 column">
                        <div class="xzoom-container">
                            <img class="xzoom" id="xzoom-default" src="{{asset('xzoom/images/gallery/preview/01_b_car.jpg')}}" xoriginal="{{asset('xzoom/images/gallery/original/01_b_car.jpg')}}" />
                            <div class="xzoom-thumbs">
                                <a href="{{asset('xzoom/images/gallery/original/01_b_car.jpg')}}"><img class="xzoom-gallery" width="80" src="{{asset('xzoom/images/gallery/thumbs/01_b_car.jpg')}}" xpreview="{{asset('xzoom/images/gallery/preview/01_b_car.jpg')}}" title="The description goes here"></a>
                                <a href="{{asset('xzoom/images/gallery/original/02_o_car.jpg')}}"><img class="xzoom-gallery" width="80" src="{{asset('xzoom/images/gallery/preview/02_o_car.jpg')}}" title="The description goes here"></a>
                                <a href="{{asset('xzoom/images/gallery/original/03_r_car.jpg')}}"><img class="xzoom-gallery" width="80" src="{{asset('xzoom/images/gallery/preview/03_r_car.jpg')}}" title="The description goes here"></a>
                                <a href="{{asset('xzoom/images/gallery/original/04_g_car.jpg')}}"><img class="xzoom-gallery" width="80" src="{{asset('xzoom/images/gallery/preview/04_g_car.jpg')}}" title="The description goes here"></a>
                            </div>
                        </div>
                    </div>
                    <div class="large-7 column"></div>
                </div>
            </section>
        </div>
        <div class="col-md-6">
            <!-- <product-display :images='@json($posts)' /> -->
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $(".xzoom, .xzoom-gallery").xzoom({
            tint: "#333",
            Xoffset: 15
        });
    });
</script>
@endsection
