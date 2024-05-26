@extends('layouts.app')
@section('title')
Ignatius Simamora
@endsection


@section('head')
<style>
    [v-cloak]>* {
        display: none;
    }

    [v-cloak]::before {
        content: "loading...";
    }

    table tr td {
        padding-top: 10px;
        padding-bottom: 10px;
    }
</style>


@endsection

@section('content')

<!--==================================
              Hero Start Here
    ===================================-->
<div id="app" v-cloak>
    <div class="hero-main">
        <div class="container-fluid" style="min-height: 100vh;">
            <div class="row row-custom">
                <div class="col-lg-6 col-content-otr">
                    <div class="col-content-inr">
                        <h1 class="heading-h1 heading">
                            Ignatius
                            <span class="text-color"> Simamora </span>
                        </h1>
                        <p class="desc heading-L">Look for my portofolio</p>

                        <div class="action">
                            <a href="/blog" class="btn-primary-1 left-btn heading-SB">Blog</a>
                            <a href="/about" class="btn-primary-2 heading-SB">About me</a>
                        </div>
                        <div class="staticstics">

                            <div class="staticstics-box text-center">
                                <a href="https://www.linkedin.com/in/ignatius-simamora-31a515268/">
                                    <img class="hero-img img-fluid" src="assets/img/code.png" alt="hero-img" width="100px" />
                                    <p class="heading-MB static-desc">
                                        My LinkedIn 🤫
                                    </p>
                                </a>
                            </div>

                            <div class="staticstics-box text-center">
                                <a href="https://github.com/Igna04" target="_blank">
                                    <img class="hero-img img-fluid" src="assets/img/kopi.png" alt="hero-img" width="100px" />
                                    <p class="heading-MB static-desc">
                                        My Github 😆
                                    </p>

                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-img-otr">
                    <div class="col-img-inr">
                        <div class="img-otr">
                            <a href="">
                                <img class="hero-img img-fluid" src="assets/img/bunga.png" alt="hero-img">
                            </a>



                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--==================================
              Hero End Here
    ===================================-->

</div>

@endsection

@section('pagescript')
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://momentjs.com/downloads/moment.min.js"></script>
<script src="https://momentjs.com/downloads/moment-with-locales.min.js"></script>

<script>
    const blog = <?php echo Illuminate\Support\Js::from($blog) ?>;
    const project = <?php echo Illuminate\Support\Js::from($project) ?>;
    let app = new Vue({
        el: '#app',
        data: {
            blog,
            project,
        },
        methods: {
            dateOnly(value) {
                return moment(value).format("DD-MM-YYYY");
            },

        },
        filters: {

            liveSubstr: function(string) {
                return string.substring(0, 70) + '...';
            }

        }
    })
</script>
@endsection