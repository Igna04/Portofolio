@extends('layouts.app')
@section('title')
Blog - Igna
@endsection

@section('head')
<style>
    .blog-img {
        width: 100%;
        height: 240px; 
        object-fit: cover;
        object-position: center;
    }
</style>
@endsection

@section('content')
<!--==================================
            inner-header Start Here
    ===================================-->
<div id="app" v-cloak>

    <!-- Inner Header Section -->
    <div class="inner-header-main">
        <div class="container-fluid">
            <div class="wrapper">
                <h2 class="heading heading-h2">Blog</h2>
                <div class="linkk-otr">
                    <a href="/" class="home-link linkk-page heading-S">Home</a>
                    <p class="link-slash heading-S">/</p>
                    <a href="/blog" class="inner-page-link linkk-page heading-S">Blog</a>
                </div>
            </div>
        </div>
    </div>
    <!--==================================
            inner-header End Here
    ===================================-->



    <!--==================================
                Blog Start Here
    ===================================-->

    <div class="blog-main-inr">
        <div class="container-fluid">
            <div class="row row-custom">
                <!-- Blog Posts Loop -->
                <div class="col-lg-4 col-md-6 col-otr mb-4" v-for="bl in blog">
                    <div class="col-inr box-1">
                        <a :href="'/blog/detail/' + bl.id" class="img-otr">
                            <!-- Image for the blog post -->
                            <img class="blog-img" :src="'/files/blog/' + bl.image" height="240px" alt="blog" />
                        </a>
                        <div class="content-otr">
                            <!-- Post Meta -->
                            <p class="date-otr heading-S">• by @{{ bl.users.username }} <span class="date-inr"> • @{{ bl.date }}</span></p>
                            <!-- Post Title -->
                            <a :href="'/blog/detail/' + bl.id" class="heading heading-h5">@{{bl.title}}</a>
                            <!-- Post Content with truncated text -->
                            <p class="desc heading-S">
                                @{{ bl.content | liveSubstr}} <a :href="'/blog/detail/' + bl.id" class="date-otr heading-S">Selengkapnya --></a>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- End Blog Posts Loop -->

                <!-- Load More Button -->
                <div class="col-lg-12 col-btn-otr">
                    <div class="col-btn-inr">
                        <a href="" class="btn-primary-2 btn-more heading-SB">Load More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================
                Blog End Here
    ===================================-->

</div>
@endsection

@section('pagescript')
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    // Vue.js instance to manage blog page
    let app = new Vue({
        el: '#app',
        data: {
            // Dummy data for blog posts
            blog: [
                {
                    id: 1,
                    image: '../../../assets/img/Screenshot JMP.png',
                    users: { username: 'Ignatius Simamora' },
                    date: '2024',
                    title: 'Mobile Programmer Training Participant By Digitalent KOMINFO (2024)',
                    content: 'I have completed junior mobile programming training organized by Digitalent, Indonesian Ministry of Communication and Information. This training was held for one week with the final result being a project using Android Studio tool and Java language. The curriculum was meticulously designed to cover key topics, including an introduction to mobile development, understanding the architecture of mobile applications, and mastering the essential tools and languages used in the industry. A significant portion of the training focused on hands-on practice with Android Studio, a powerful and widely-used integrated development environment (IDE) for Android development. In addition to gaining proficiency with Android Studio, we also learned the intricacies of Java, a robust and versatile programming language that forms the backbone of many Android applications. The training emphasized practical application, ensuring that participants could translate theoretical knowledge into real-world skills. The culmination of the training was a capstone project that required us to design and develop a fully functional mobile application. This project served as a practical demonstration of our acquired skills, allowing us to apply what we had learned in a meaningful way. Working on this project not only reinforced our understanding of mobile programming concepts but also provided valuable experience in problem-solving, debugging, and optimizing mobile applications. Overall, this training program was an invaluable experience that equipped me with the technical skills and confidence needed to embark on a career in mobile development. The knowledge and experience gained from this program have laid a solid foundation for my future endeavors in the field of technology and software development.'
                },
                {
                    id: 2,
                    image: '../../../assets/img/Screenshot PA-I.png',
                    users: { username: 'Ignatius Simamora' },
                    date: '2022',
                    title: 'First Grade Final Project - Balige Literacy Festival',
                    content: 'I have completed My First Grade Final Project, that is Balige Literacy Festival. This project was held on my first grade with the final result being a website using Visual Studio Code & Database MySQL tools and Laravel Framework with PHP Language. Throughout the project, I utilized a variety of powerful tools and technologies to bring the vision to life. The development process was conducted using Visual Studio Code, a versatile and user-friendly integrated development environment (IDE) that facilitated efficient coding and debugging. The website backend was powered by MySQL, a reliable and robust database management system that ensured efficient data handling and storage. To build the website, I employed the Laravel Framework, which is renowned for its elegant syntax and powerful features. Laravel MVC (Model-View-Controller) architecture provided a structured and organized approach to development, enabling me to create a scalable and maintainable application. The website was developed using PHP, a widely-used server-side scripting language that allowed for dynamic content generation and seamless user interactions. The Balige Literacy Festival website aimed to serve as a central hub for information about the festival, including event schedules, speaker profiles, and educational resources. It featured various sections to engage users, such as an interactive event calendar, registration forms, and a blog for news and updates. The design of the website was focused on user experience, ensuring that it was intuitive, responsive, and accessible across different devices. One of the key challenges of the project was integrating different functionalities seamlessly while maintaining a cohesive and aesthetically pleasing design. This required meticulous planning, iterative testing, and constant refinement to achieve the desired outcome. Additionally, working with a real-world project provided invaluable experience in handling client requirements, managing timelines, and collaborating effectively with peers and mentors. The successful completion of the Balige Literacy Festival website was a testament to my growing skills and knowledge in web development. It not only enhanced my technical abilities but also instilled a sense of accomplishment and confidence in my capability to undertake complex projects. This project laid a strong foundation for my subsequent academic and professional endeavors, and I am proud to have contributed to promoting literacy and education through technology.'
                },
                {
                id: 3,
                    image: '../../../assets/img/Screenshot PA-II.png',
                    users: { username: 'Ignatius Simamora' },
                    date: '2023',
                    title: 'Second Grade Final Project - Littlestar Preschool and Kindergarten',
                    content: 'I have completed My Second Final Project, that is Littlestar Preschool and Kindergarten. This Project was held on my second grade with the final result being a website using Visual Studio Code & MySQL Database tools and Laravel Framework with PHP Language. Throughout the duration of the project, I utilized a suite of powerful tools and technologies to ensure a robust and scalable final product. The entire development process was carried out using Visual Studio Code, an intuitive and versatile integrated development environment (IDE) that greatly facilitated coding, debugging, and project management. The backend of the website was managed using MySQL, a reliable and high-performance database management system. MySQL was chosen for its efficiency in handling and organizing large amounts of data, which is crucial for managing student records, class schedules, and other administrative information. For the core development of the website, I employed the Laravel Framework, a PHP-based framework known for its elegant syntax and comprehensive toolkit. Laravel MVC (Model-View-Controller) architecture provided a structured approach to development, which was essential in creating a maintainable and scalable application. The use of PHP as the server-side scripting language enabled dynamic content generation and seamless interaction with the database. The Littlestar Preschool and Kindergarten website was designed to serve multiple functions. It provided detailed information about the institution, including its mission, curriculum, faculty, and facilities. Additionally, it featured an interactive calendar for events, an online enrollment form, and a secure login portal for parents to access student progress reports and communicate with teachers. One of the most challenging aspects of this project was ensuring that the website was not only functional but also visually appealing and user-friendly. This required a keen eye for design, meticulous attention to detail, and iterative testing to refine the user interface and user experience. The website needed to be responsive, ensuring compatibility across various devices and screen sizes, from desktop computers to smartphones and tablets. Working on this project provided invaluable experience in project management, problem-solving, and collaborative work. It taught me how to gather and interpret client requirements, plan and execute development phases, and integrate feedback into the development cycle. The project also reinforced my understanding of web development best practices, including security measures, performance optimization, and data integrity. The successful completion of the Littlestar Preschool and Kindergarten website was a significant achievement that showcased my growing proficiency in web development. It demonstrated my ability to apply theoretical knowledge to real-world applications, resulting in a functional and impactful product. This project not only enhanced my technical skills but also boosted my confidence in handling complex projects, laying a solid foundation for my future academic and professional pursuits.'
                },
                {
                id: 4,
                    image: '../../../assets/img/Screenshot PA-III.png',
                    users: { username: 'Ignatius Simamora' },
                    date: '2024',
                    title: 'Third Grade Final Project - Development of A Mobile-Based Cropsystem Application for Optimizing Agricultural Products',
                    content: 'I have completed My Third Final Project, that is Development of a Mobile-Based Cropsystem Application for Optimizing Agricultural Products. This Project was held on my third grade with the final result being a mobile application using Visual Studio Code, Firebase & MySQL tools and Flutter Framework with Kotlin Language. I am thrilled to share the successful completion of my Third Final Project, which involved the development of a cutting-edge Mobile-Based Cropsystem Application aimed at optimizing agricultural products. This transformative project was undertaken during my third academic year and represents a significant milestone in my journey towards mastering technology and its applications in real-world scenarios. The primary objective of the project was to create a sophisticated mobile application that revolutionizes agricultural practices by leveraging technology. The app, built using a combination of Visual Studio Code, Firebase, and MySQL tools, harnesses the power of data analytics, machine learning, and real-time monitoring to enhance crop productivity, minimize resource wastage, and streamline farm management processes. The choice of Flutter Framework and Kotlin Language for the development of the mobile application was strategic and forward-thinking. Flutter, known for its cross-platform capabilities and expressive UI design, enabled the creation of a seamless and visually appealing user experience across Android and iOS devices. Kotlin, on the other hand, provided a modern and concise programming language that facilitated efficient coding and maintenance of the application. The Mobile-Based Cropsystem Application encompasses a wide range of innovative features and functionalities. It offers farmers real-time access to weather forecasts, soil health analysis, pest and disease detection algorithms, crop yield predictions, and market prices. The integration of Firebase ensures secure and scalable cloud storage, authentication, and data synchronization, empowering users to make data-driven decisions and optimize agricultural operations.'
                },
            ]
        },
        methods: {
            // Add methods if needed
        },
        filters: {
            // Custom Vue.js filter for truncating text
            liveSubstr: function(string) {
                return string.substring(0, 70) + '...';
            }
        }
    })
</script>
@endsection
