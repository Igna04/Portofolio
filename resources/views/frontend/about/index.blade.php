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

    .social-icons {
        display: flex;
        gap: 10px;
    }

    .social-icons a {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 50px;
        height: 50px;
    }

    .social-icons img {
        width: 100%;
        height: 100%;
        object-fit: contain;
    }

    .caretory-ul {
        list-style-type: none;
        padding: 0;
    }

    .caretory-li {
        margin-bottom: 15px;
        display: flex;
        align-items: center;
    }

    .caretory-a {
        text-decoration: none;
        color: inherit;
        display: flex;
        align-items: center;
    }

    .caretory-a img {
        margin-right: 10px;
        width: 100px; /* Adjust size as needed */
        height: 100px; /* Adjust size as needed */
        object-fit: cover;
    }
    </style>
</style>
@endsection

@section('content')

<!--==================================
            inner-header Start Here
===================================-->

<div class="inner-header-main">
    <div class="container-fluid">
        <div class="wrapper">
            <h2 class="heading heading-h2">About</h2>
            <div class="linkk-otr">
                <a href="/" class="home-link linkk-page heading-S">Home</a>
                <p class="link-slash heading-S">/</p>
                <a href="/about" class="inner-page-link linkk-page heading-S">About</a>
            </div>
        </div>
    </div>
</div>

<!--==================================
            inner-header End Here
===================================-->

<!--==================================
            About Start Here
===================================-->
<div id="app" v-cloak>
    <div class="blog-detail-main">
        <div class="container-fluid">
            <div class="row row-custom">
                <div class="col-lg-8 col-detail-otr">
                    <div class="col-detail-inr">
                        <div class="img-otr">
                            <!-- Optional image or profile picture can be placed here -->
                        </div>
                        <h3 class="head-1 heading-h3">@{{ about.email }}</h3>
                        <p class="desc desc-3 heading-S">@{{ about.role }}</p>
                        <div class="content-otr">
                            <h2 class="heading heading-h2" style="color: bisque">Ignatius Simamora</h2>
                            <p class="desc-inr heading-S" style="text-align: justify">
                                I am Ignatius Pignateli Simamora, the third of three brothers. Currently, I am pursuing higher education as a student at the Del Technology Institute, an institution located in North Sumatra Province, precisely in Laguboti, Sitoluama subdistrict. My dream is to become a software developer, although at first I chose the wrong major, namely a Bachelor of Applied Software Engineering Technology.

                                My hobbies include swimming, playing music, futsal, billiards, traveling and playing badminton. I am an individual who works hard, is responsible, optimistic, and does not give up easily.
                                
                                As a student at Del Institute of Technology, I followed my path towards my dream of becoming a software developer with strong passion and determination. Even though I initially chose the wrong major, I saw it as an opportunity to learn and grow. I gained a deep understanding of the technology and skills necessary to achieve my goals.
                                
                                Apart from academics, I enjoy various hobbies that enrich my life. Swimming provides calm and freshness, while playing music allows me to express my creativity and emotions. Futsal and billiards activities bring a competitive spirit and strengthen friendships with friends and colleagues. I also really enjoy traveling because it opens the door to new experiences and insight into different cultures. Not to forget, I also like playing badminton which shows my agility, focus and sportsmanship.
                                
                                What differentiates me is not only my diverse hobbies but also my character. I am known for my tenacity and toughness at work, always trying to give my best in every endeavor. I bring a high level of responsibility and commitment to every action I take, ensuring that I deliver extraordinary results. My optimism is my driving force in facing challenges, always looking at every obstacle with a positive mind and a firm belief in my abilities. My resilience is reflected in my dislike of giving up easily, turning every failure into a step towards success.
                                
                                In me, Saya Pignateli Simamora, we see a bright future unfolding—a future where dedication, passion, and perseverance meet to create an extraordinary software developer, ready to leave an unforgettable mark in the world of technology.                            <h2 class="heading heading-h2" style="color: bisque">Contact me</h2>
                            <p class="desc-inr heading-S">
                                You can contact me via Whatsapp, Instagram, LinkedIn or Facebook. <br>
                                Whatsapp : +6285362379371 <br> <br>
                                <span class="social-icons">
                                    <a href="https://www.instagram.com/ignasmra_/?hl=en" target="_blank">
                                        <img src="../../../assets/img/instagram.png" alt="Instagram" style="width: 50px; height: 50px;">
                                    </a>
                                    <a href="https://www.linkedin.com/in/ignatius-simamora-31a515268/" target="_blank">
                                        <img src="../../../assets/img/linkedin.png" alt="LinkedIn" style="width: 50px; height: 50px;">
                                    </a>
                                    <a href="https://www.facebook.com/ignatius.simamora.1/" target="_blank">
                                        <img src="../../../assets/img/facebook.png" alt="Facebook" style="width: 50px; height: 50px;">
                                    </a>                                    
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sidebar-otr">
                    <div class="col-sidebar-inr">
                        <div class="category-otr">
                            <h4 class="heading heading-h4">My Photos</h4>
                            <ul class="caretory-ul">
                                <li class="caretory-li" v-for="cat in category" :key="cat.id">
                                    <a href="" class="caretory-a">
                                        <img :src="cat.image" :alt="cat.name" style="width: 100px; height: 100px; object-fit: cover;">
                                        <p class="name heading-M">@{{ cat.name }}</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="tabs-otr">
                            <h4 class="heading heading-h4">Skill</h4>
                            <ul class="tabs">
                                <li class="tabs-btn btn-1" v-for="skill in about.skills" :key="skill">
                                    <a href="" class="btn-primary-2 button heading-SB">@{{ skill }}</a>
                                </li>
                            </ul>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--==================================
            About End Here
===================================-->

@endsection

@section('pagescript')
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    let app = new Vue({
        el: '#app',
        data: {
            about: {}, // Initial data should be empty or default values
            category: [
                    { id: 1, name: 'Almamater', image: '../../../assets/img/almet1.jpg' },
                    { id: 2, name: 'Casual', image: '../../../assets/img/samosir1.jpg' },
                    // Add more category objects as needed
            ],
            about: {
                skills: [
                    'VB.Net', 'C', 'C++', 'C#/.Net', 'PHP',
                    'Kotlin', 'Golang', 'Java', 'Javascript', 'Node.js',
                    'Express.js', 'Nest.js', 'Vue.js', 'React.js',
                    'HTML', 'CSS', 'Boostrap', 'Laravel Framework',
                    'Flutter Framework', 'MySQL', 'SQLYog', 'SQL Server 2014',
                    'PostgreSQL', 'Android Studio', 'Figma', 'Bizagi',
                    'Microsoft Visual Studio', 'Jenkins'
                ]
            }
        },
        created() {
            this.fetchAboutData();
            this.fetchCategoryData();
        },
        methods: {
            fetchAboutData() {
                axios.get('/api/about') // Adjust the API endpoint as necessary
                    .then(response => {
                        this.about = response.data;
                    })
                    .catch(error => {
                        console.error("There was an error fetching the about data!", error);
                    });
            },
            fetchCategoryData() {
                axios.get('/api/categories') // Adjust the API endpoint as necessary
                    .then(response => {
                        this.category = response.data;
                    })
                    .catch(error => {
                        console.error("There was an error fetching the category data!", error);
                    });
            }
        }
    });
</script>
@endsection
