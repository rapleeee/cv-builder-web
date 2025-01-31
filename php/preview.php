<?php
    include("connection.php");
    $cv_id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Creative</title>
    <style>
            @import url('https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

            :root{
                --clr-blue: #1A91F0;
                --clr-blue-mid: #1170CD;
                --clr-blue-dark: #1A1C6A;
                --clr-white: #fff;
                --clr-bright: #EFF2F9;
                --clr-dark: #1e2532;
                --clr-black: #000;
                --clr-grey: #656e83;
                --clr-green: #084C41;
                --font-poppins: 'Poppins', sans-serif;
                --font-manrope: 'Manrope', sans-serif;;
                --transition: all 300ms ease-in-out;
            }

            *{
                padding: 0;
                margin: 0;
                box-sizing: border-box;
                scroll-behavior: smooth;
            }

            html{
                font-size: 10px;
            }

            body{
                font-size: 1.6rem;
                font-family: var(--font-poppins);
            }

            button{
                border: none;
                background-color: transparent;
                outline: 0;
                cursor: pointer;
                font-family: inherit;
            }

            img{
                width: 100%;
                display: block;
            }

            a{
                text-decoration: none;
            }

            /* fonts */
            .font-poppins{font-family: var(--font-poppins);}
            .font-manrope{font-family: var(--font-manrope);}

            /* text colors */
            .text-blue{color: var(--clr-blue);}
            .text-blue-mid{color: var(--clr-blue-mid);}
            .text-blue-dark{color: var(--clr-blue-dark);}
            .text-bright{color: var(--clr-bright);}
            .text-dark{color: var(--clr-dark);}
            .text-grey{color: var(--clr-grey);}
            .text-white{color: var(--clr-white);}

            /* backgrounds */
            .bg-blue{background-color: var(--clr-blue);}
            .bg-blue-mid{background-color: var(--clr-blue-mid);}
            .bg-blue-dark{background-color: var(--clr-blue-dark);}
            .bg-bright{background-color: var(--clr-bright);}
            .bg-dark{background-color: var(--clr-dark);}
            .bg-grey{background-color: var(--clr-grey);}
            .bg-white{background-color: var(--clr-white);}
            .bg-black{background-color: var(--clr-black);}
            .bg-green{background-color: var(--clr-green);}
            .bg-pesat{background-color: #002e63;}

            .text-center{ text-align: center;}
            .text-left{text-align: left;}
            .text-right{text-align: right;}
            .text-uppercase{text-transform: uppercase;}
            .text-lowercase{text-transform: lowercase;}
            .text-capitalize{text-transform: capitalize;}
            .text{
                color: var(--clr-dark);
                opacity: 0.9;
                margin: 2rem 0;
                line-height: 1.6;
            }

            .fw-2{font-weight: 200;}
            .fw-3{font-weight: 300;}
            .fw-4{font-weight: 400;}
            .fw-5{font-weight: 500;}
            .fw-6{font-weight: 600;}
            .fw-7{font-weight: 700;}
            .fw-8{font-weight: 800;}

            .fs-13{font-size: 13px;}
            .fs-14{font-size: 14px;}
            .fs-15{font-size: 15px;}
            .fs-16{font-size: 16px;}
            .fs-17{font-size: 17px;}
            .fs-18{font-size: 18px;}
            .fs-19{font-size: 19px;}
            .fs-20{font-size: 20px;}
            .fs-21{font-size: 21px;}
            .fs-22{font-size: 22px;}
            .fs-23{font-size: 23px;}
            .fs-24{font-size: 24px;}
            .fs-25{font-size: 25px;}

            .ls-1{letter-spacing: 1px;}
            .ls-2{letter-spacing: 2px;}

            .container{
                max-width: 1200px;
                margin: 0 auto;
                padding: 0 1.6rem;
            }

            /* bars button */
            .bars{
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                height: 16.5px;
                width: 25px;
            }
            .bars .bar{
                width: 100%;
                height: 2px;
                background-color: var(--clr-blue);
                transition: var(--transition);
            }

            .bars:hover .bar{
                background-color: var(--clr-dark);
            }

            /* buttons */
            .btn{
                font-size: 14.5px;
                font-weight: 600;
                padding: 1.4rem 1.6rem;
                border-radius: 4px;
                display: inline-block;
            }

            .btn-primary{
                background-color: var(--clr-blue);
                color: var(--clr-white);
                border: 1px solid var(--clr-blue);
                transition: var(--transition);
            }

            .btn-primary:hover{
                background-color: transparent;
                color: var(--clr-dark);
                border-color: var(--clr-grey);
            }

            .btn-secondary{
                background-color: transparent;
                color: var(--clr-dark);
                border: 1px solid var(--clr-grey);
                transition: var(--transition);
            }

            .btn-secondary:hover{
                background-color: var(--clr-blue);
                color: var(--clr-white);
                border-color: var(--clr-blue);
            }

            .btn-group button:first-child, .btn-group a:first-child{
                margin-right: 1rem!important;
            }

            /* navbar part */
            .navbar{
                height: 80px;
                display: flex;
                align-items: center;
                box-shadow: rgba(0, 0, 0, 0.08) 0px 3px 8px;
            }

            .navbar .container{
                width: 100%;
            }

            .navbar-brand{
                display: flex;
                align-items: center;
                justify-content: flex-start;
                font-size: 1.8rem;
            }
            .navbar-brand-text{
                color: var(--clr-dark);
                font-weight: 600;
            }
            .navbar-brand-text span{
                color: var(--clr-blue);
            }
            .navbar-brand-icon{
                width: 100px;
                margin-right: 6px;
                opacity: 0.8;
            }
            .brand-and-toggler{
                display: flex;
                align-items: center;
                justify-content: space-between;
            }
            .header{
                min-height: calc(100vh - 80px);
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
            }
            .header-content{
                max-width: 740px;
                margin-right: auto;
                margin-left: auto;
            }
            .header-content img{
                max-width: 760px;
                border-top-right-radius: 8px;
                border-top-left-radius: 8px;
                margin-top: 3.2rem;
            }
            .lg-title{
                margin: 1.4rem 0;
                font-size: 37px;
                line-height: 1.4;
                color: var(--clr-dark);
            }
            .header-content p{
                margin-bottom: 2.6rem;
                line-height: 1.6;
            }


            /* section one */
            .section-one{
                padding: 64px 0;
                min-height: 80vh;
                display: flex;
                align-items: center;
            }
            .section-one-l img{
                max-width: 545px;
                margin-right: auto;
                margin-left: auto;
            }
            .section-one-r{
                margin-top: 4rem;
            }

            .section-one .btn-group{
                margin-top: 2rem;
            }
            .section-one-r{
                max-width: 545px;
                margin-right: auto;
                margin-left: auto;
            }
            .section-one-r .btn-group{
                margin-top: 3rem;
            }

            /* section two */
            .section-two{
                padding: 64px 0;
            }
            .section-two .section-items{
                display: grid;
                gap: 2rem;
            }

            .section-two .section-item{
                max-width: 350px;
                text-align: center;
                margin-right: auto;
                margin-left: auto;
            }
            .section-two .section-item-icon{
                margin: 1rem 0;
            }
            .section-two .section-item-icon img{
                width: 80px;
                margin-right: auto;
                margin-left: auto;
            }
            .section-two .section-item-title{
                color: var(--clr-blue-dark);
                font-size: 1.8rem;
                font-weight: 600;
            }
            .section-two .text{
                margin: 0.9rem 0;
            }

            /* footer */
            .footer{
                padding: 3rem 0;
            }
            .footer-content p{
                color: var(--clr-grey);
            }
            .footer-content p span{
                color: var(--clr-white);
            }

            /* media queries */
            @media screen and (min-width: 768px){
                .section-two .section-items{
                    grid-template-columns: repeat(2, 1fr);
                }
            }

            @media screen and (min-width: 992px){
                .section-one-content{
                    display: grid;
                    grid-template-columns: repeat(2, 1fr);
                    column-gap: 3rem;
                }
                .section-one-r{
                    text-align: left;
                }
                .section-two .section-items{
                    grid-template-columns: repeat(3, 1fr);
                }
                .section-two .section-item{
                    text-align: left;
                }
                .section-two .section-item-icon img{
                    margin-left: 0;
                }
            }



            /* resume page */
            #about-sc{
                padding: 64px 0;
            }

            .cv-form-row-title{
                background-color: var(--clr-dark);
                padding: 0.8rem 1.6rem;
                margin-bottom: 2rem;
            }

            .cv-form-row-title h3{
                color: var(--clr-white);
                font-weight: 500;
                text-transform: uppercase;
                letter-spacing: 1.5px;
                font-size: 1.7rem;
            }
            .cv-form-blk{
                margin: 3rem 0;
            }
            .cv-form-row{
                padding: 3rem 2rem 0 2rem;
                border: 1px solid rgba(0, 0, 0, 0.08);
                margin-bottom: 1rem;
                position: relative;
            }
            textarea{
                resize: none;
            }
            .form-elem{
                margin-bottom: 3rem;
                position: relative;
            }
            .form-label{
                display: block;
                font-weight: 600;
                font-size: 14px;
                color: var(--clr-dark);
                margin-bottom: 0.5rem;
            }
            .form-control{
                border-radius: none;
                border: 1px solid rgba(0, 0, 0, 0.1);
                font-size: 14px;
                padding: 0.8rem 1.6rem;
                font-family: inherit;
                width: 100%;
                outline: 0;
                transition: var(--transition);
            }

            .form-control:focus{
                border-color: rgba(0, 0, 0, 0.3);
            }
            .form-text{
                color: #ca0b00;
                font-size: 12px;
                position: absolute;
                letter-spacing: 0.5px;
                top: calc(100% + 2px);
                left: 0;
                width: 100%;
            }
            .cols-3, .cols-2{
                display: grid;
            }
            .repeater-add-btn{
                width: 25px;
                height: 25px;
                background-color: var(--clr-blue-mid);
                font-size: 1.6rem;
                color: var(--clr-white);
                margin: 1rem 0;
            }
            .repeater-remove-btn{
                position: absolute;
                top: 10px;
                right: 10px;
                z-index: 999;
                width: 25px;
                height: 25px;
                border-radius: 50%;
                background-color: #ca0b00;
                color: var(--clr-white);
                font-size: 1.6rem;
            }

            .preview-cnt{
                border-radius: 5px;
                display: grid;
                grid-template-columns: 32% auto;
                overflow: hidden;
            }

            .preview-cnt-l{
                padding: 3rem 4rem 2rem 3rem;
            }
            .preview-cnt-r{
                padding: 3rem 3rem 3rem 4rem;
                margin-left: 1em;
            }
            .preview-cnt-l .preview-blk:nth-child(1){
                text-align: center;
            }
            .preview-image{
                width: 120px;
                height: 120px;
                border-radius: 50%;
                overflow: hidden;
                margin-right: auto;
                margin-left: auto;
            }
            .preview-image img{
                width: 100%;
                height: 100%;
                object-fit: cover;
            }
            .preview-item-name{
                font-size: 2.4rem;
                font-weight: 600;
                margin: 1.8rem 0;
                position: relative;
            }
            .preview-item-name::after{
                position: absolute;
                content: "";
                bottom: -10px;
                width: 50px;
                height: 1.5px;
                background-color: rgba(255, 255, 255, 0.5);
                left: 50%;
                transform: translateX(-50%);
            }
            .preview-blk{
                padding: 1rem 0;
                margin-bottom: 1rem;
            }
            .preview-blk-title h3{
                text-transform: uppercase;
                letter-spacing: 0.5px;
                border-bottom: 0.5px solid rgba(0, 0, 0, 0.08);
                padding-bottom: 0.5rem;
            }
            .preview-blk-title{
                margin-bottom: 1rem;
            }
            .preview-blk-list .preview-item{
                font-size: 1.5rem;
                margin-bottom: 0.2rem;
                opacity: 0.95;
            }
            .preview-cnt-r .preview-blk-title{
                color: var(--clr-dark);
            }
            .preview-cnt-r .preview-blk-list .preview-item{
                margin-top: 1.8rem;
            }

            .achievements-items.preview-blk-list .preview-item span:first-child,
            .educations-items.preview-blk-list .preview-item span:first-child,
            .experiences-items.preview-blk-list .preview-item span:first-child{
                display: block;
                font-weight: 600;
                margin-bottom: 1em;
                /* background-color: rgba(0, 0, 0, 0.03); */
            }

            .educations-items.preview-blk-list .preview-item span:nth-child(2),
            .experiences-items.preview-blk-list .preview-item span:nth-child(2){
                font-weight: 600;
                margin-right: 1rem;
                display: block;
                /* margin-top: 1em; */
                margin-bottom: 0.5em;
            }

            .educations-items.preview-blk-list .preview-item span:nth-child(3),
            .experiences-items.preview-blk-list .preview-item span:nth-child(3){
                font-style: italic;
                margin-right: 1rem;
            }

            .educations-items.preview-blk-list .preview-item span:nth-child(4),
            .educations-items.preview-blk-list .preview-item span:nth-child(5),
            .experiences-items.preview-blk-list .preview-item span:nth-child(4),
            .experiences-items.preview-blk-list .preview-item span:nth-child(5){
                margin-right: 0.5em;
                background-color: #002e63;
                color: var(--clr-white);
                padding: 0 1rem;
                border-radius: 0.6rem;
            }

            .educations-items.preview-blk-list .preview-item span:nth-child(6),
            .experiences-items.preview-blk-list .preview-item span:nth-child(6){
                font-size: 13.5px;
                display: block;
                opacity: 0.8;
                margin-top: 1rem;
            }
            .projects-items.preview-blk-list .preview-item span{
                display: block;
            }

            .projects-items.preview-blk-list .preview-item span:first-child {
                display: block;
                font-weight: 600;
                margin-bottom: 1rem;
                font-size: 1em;
            }

            .projects-items.preview-blk-list .preview-item span:nth-child(2) {
                /* font-weight: 600; */
                margin-right: 1rem;
            }

            .projects-items.preview-blk-list .preview-item span:nth-child(3) {
                /* font-style: italic; */
                margin-right: 1rem;
            }

            .projects-items.preview-blk-list .preview-item span:nth-child(4),
            .projects-items.preview-blk-list .preview-item span:nth-child(5) {
                margin-right: 1rem;
                background-color: #002e63;
                color: var(--clr-white);
                padding: 0 1rem;
                border-radius: 0.6rem;
            }

            .projects-items.preview-blk-list .preview-item span:nth-child(6) {
                font-size: 13.5px;
                display: block;
                opacity: 0.8;
                margin-top: 1rem;
            }

            .dropdown-container {
                display: flex;
                flex-direction: column;
                align-items: flex-start;
                margin-bottom: 1em;
                margin-left: 6em;
                margin-top: -4em;
            }

            .dropdown-label {
                font-size: 1em;
                margin-bottom: 0.5em;
                color: #333;
            }

            .dropdown-select {
                width: 150px;
                padding: 0.5em 2.5em 0.5em 1em;
                font-size: 1em;
                border: 1px solid #ccc;
                border-radius: 5px;
                background-color: #fff;
                color: #333;
                outline: none;
                transition: all 0.3s ease;
                cursor: pointer;
                appearance: none;
                background-image: url('data:image/svg+xml;charset=UTF-8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="%23333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>');
                background-repeat: no-repeat;
                background-position: right 1em center;
                background-size: 1em;
            }

            .dropdown-select:hover,
            .dropdown-select:focus {
                border-color: #007bff;
                box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
            }

            @media screen and (min-width: 768px){
                .cols-3{
                    grid-template-columns: repeat(3, 1fr);
                    column-gap: 2rem;
                }
                .cols-2{
                    grid-template-columns: repeat(2, 1fr);
                    column-gap: 2rem;
                }
            }

            @media screen and (min-width: 992px){
                .cv-form-row{
                    padding: 3rem 3rem 0rem 3rem;
                }
                .cols-3{
                    grid-template-columns: repeat(3, 1fr);
                }
            }

            .print-btn-sc{
                margin: 2rem 0 6rem 0;
            }

            @media print{
                body *{
                    visibility: hidden;
                }

                .non_print_area{
                    display: none;
                }

                .print_area, .print_area *{
                    visibility: visible;
                }

                .print_area{
                    width: 100%;
                    position: absolute;
                    left: 0;
                    top: 0;
                    overflow: hidden;
                }
            }
                    nav {
                    background: #002147;
                    height: 80px;
                    width: 100%;
                    }

                    label.logo {
                    color: white;
                    font-size: 20px;
                    line-height: 80px;
                    padding: 0 100px;
                    font-weight: bold;
                    }

                    nav ul {
                    float: right;
                    margin-right: 20px;
                    }

                    nav ul li {
                    display: inline-block;
                    line-height: 80px;
                    margin: 0 5px;
                    }

                    nav ul li a {
                    color: white;
                    /* font-size: 17px; */
                    padding: 7px 13px;
                    border-radius: 3px;
                    /* text-transform: uppercase; */
                    }

                    .checkbtn {
                    font-size: 22px;
                    color: white;
                    float: right;
                    line-height: 80px;
                    margin-right: 30px;
                    cursor: pointer;
                    display: none;
                    }

                    #check {
                    display: none;
                    }

                    @media (max-width: 1050px) {
                    label.logo {
                        padding-left: 30px;
                    }

                    nav ul li a {
                        font-size: 16px;
                    }
                    }

                    /* Responsive media query code for small screen */
                    @media (max-width: 890px) {
                    .checkbtn {
                        display: block;
                    }

                    label.logo {
                        font-size: 22px;
                    }

                    ul {
                        position: fixed;
                        width: 100%;
                        height: 100vh;
                        background: #2c3e50;
                        top: 80px;
                        left: -100%;
                        text-align: center;
                        transition: all .5s;
                    }

                    nav ul li {
                        display: block;
                        margin: 50px 0;
                        line-height: 30px;
                    }

                    nav ul li a {
                        font-size: 20px;
                    }

                    #check:checked~ul {
                        left: 0;
                    }
                    }

                    .buat-flex{
                        display: flex;
                    }

                    .dua{
                        margin-left: 1em;
                    }

                    /* Responsive styles for the preview container */
@media screen and (max-width: 992px) {
    .preview-cnt {
        grid-template-columns: 1fr;
    }

    .preview-cnt-l, .preview-cnt-r {
        padding: 2rem;
    }

    .preview-cnt-r {
        margin-left: 0;
    }

    .preview-image {
        width: 100px;
        height: 100px;
    }

    .preview-item-name {
        font-size: 2rem;
    }
}

/* Responsive styles for smaller screens */
@media screen and (max-width: 768px) {
    .container {
        padding: 0 1rem;
    }

    .preview-cnt-l, .preview-cnt-r {
        padding: 1.5rem;
    }

    .preview-blk-title h3 {
        font-size: 1.6rem;
    }

    .preview-item {
        font-size: 1.4rem;
    }

    .buat-flex {
        flex-direction: column;
        gap: 0.5rem;
    }

    .buat-flex > div {
        margin-left: 0 !important;
    }

    .print-btn {
        width: 100%;
        margin-bottom: 1rem;
    }
}


@media screen and (max-width: 480px) {
    html {
        font-size: 9px;
    }

    .preview-cnt-l, .preview-cnt-r {
        padding: 1rem;
    }

    .preview-image {
        width: 80px;
        height: 80px;
    }

    .preview-item-name {
        font-size: 1.8rem;
    }

    .preview-blk {
        padding: 0.5rem 0;
    }

    .educations-items.preview-blk-list .preview-item span,
    .experiences-items.preview-blk-list .preview-item span,
    .projects-items.preview-blk-list .preview-item span {
        display: block;
        margin: 0.5rem 0;
    }

    .satu{
        width: 30%;
        text-align: center;
    }

    .dua{
        width: 40%;
        text-align: center;
    }
}

/* Print media query refinements */
@media print {
    .preview-cnt {
        grid-template-columns: 32% auto;
    }

    .non_print_area,
    .print-btn-sc {
        display: none !important;
    }

    .preview-cnt-l,
    .preview-cnt-r {
        padding: 2rem;
    }

    html {
        font-size: 10px;
    }
}

        </style>
</head>
<body>
    <section style="margin-left: 1em; margin-bottom: 1em;">
        <div class="buat-flex">
            <div class="satu">
                <a href="index3.php" class="print-btn btn btn-primary">Go back</a>
            </div>
            <div class="dua">
            <a href="preview2.php?id=<?= $cv_id ?>" class="print-btn btn btn-primary">ATS version</a>
            </div>
        </div>
    </section>

<section id = "preview-sc" class = "print_area active">
    <?php
        $cv_id = $_GET['id'];

        $sql = "SELECT creative.*, certifications.title AS certification_title, certifications.description AS certification_description, education.school, education.degree, education.city AS education_city, education.start_date AS education_start_date, education.end_date AS education_end_date, education.description AS education_description, experiences.title AS experience_title, experiences.organization, experiences.location AS experience_location, experiences.start_date AS experience_start_date, experiences.end_date AS experience_end_date, experiences.description AS experience_description, projects.title AS project_title, projects.description AS project_description, skills.skill_name FROM creative LEFT JOIN certifications ON creative.id = certifications.cv_id LEFT JOIN education ON creative.id = education.cv_id LEFT JOIN experiences ON creative.id = experiences.cv_id LEFT JOIN projects ON creative.id = projects.cv_id LEFT JOIN skills ON creative.id = skills.cv_id WHERE creative.id = ?";

        $stmt = mysqli_prepare($connection, $sql);
        mysqli_stmt_bind_param($stmt, "i", $cv_id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $datacv = mysqli_fetch_assoc($result);

        mysqli_stmt_close($stmt);
    ?>
            <div class = "container responsive-container">
                <div class = "preview-cnt">
                    <div class = "preview-cnt-l bg-pesat text-white">
                        <div class = "preview-blk">
                            <div class = "preview-image">
                            <img src="../images/<?= $datacv['photo']?>" alt="" width="100px" height="100px">

                            </div>
                            <div class = "preview-item preview-item-name">
                                <span class = "preview-item-val fw-6" id = "fullname_dsp"><?= $datacv['full_name']; ?></span>
                            </div>
                            <div class = "preview-item">
                                <span class = "preview-item-val text-uppercase fw-6 ls-1" id = "designation_dsp"><?= $datacv['designation']?></span>
                            </div>
                        </div>

                        <div class = "preview-blk">
                            <div class = "preview-blk-title">
                                <h3>about</h3>
                            </div>
                            <div class = "preview-blk-list">
                                <div class = "preview-item">
                                    <span class = "preview-item-val" id = "mobileno_dsp"><?= $datacv['mobileno']?></span>
                                </div>
                                <div class = "preview-item">
                                    <span class = "preview-item-val" id = "email_dsp"><?= $datacv['email']?></span>
                                </div>
                                <div class = "preview-item">
                                    <span class = "preview-item-val" id = "address_dsp"><?= $datacv['address']?></span>
                                </div>
                            </div>
                        </div>

                        <div class = "preview-blk">
                            <div class = "preview-blk-title">
                                <h3>skills</h3>
                            </div>
                            <div class = "skills-items preview-blk-list" id = "skills_dsp">
                            <?php
                                    $sql_certificate = "SELECT * FROM skills WHERE cv_id = ?";
                                    $stmt_certificate = mysqli_prepare($connection, $sql_certificate);
                                    mysqli_stmt_bind_param($stmt_certificate, "i", $cv_id);
                                    mysqli_stmt_execute($stmt_certificate);
                                    $result_certificate = mysqli_stmt_get_result($stmt_certificate);

                                    if (mysqli_num_rows($result_certificate) > 0) {
                                        while ($row = mysqli_fetch_assoc($result_certificate)) {
                                        echo "<div class='satu' style='margin-bottom: 3px; margin-top: 10px;'>";
                                        echo htmlspecialchars($row['skill_name']); 
                                        echo "</div>";
                                    }
                                        } else {
                                            echo "No skill found for this CV.";
                                        }
                                            mysqli_stmt_close($stmt_certificate);
                                ?>
                            </div>
                        </div>
                    </div>

                    <div class = "preview-cnt-r bg-white">

                        <div class = "preview-blk">
                            <div class = "preview-blk-title">
                                <h3>Self description</h3>
                            </div>
                            <div class = "summary preview-blk-list" id = "summary_dsp" style="text-align: justify;"><?= $datacv['selfDescription']?></div>
                        </div>

                        <div class = "preview-blk">
                            <div class = "preview-blk-title">
                                <h3>Certifications</h3>
                            </div>
                            <div class = "achievements-items preview-blk-list" id = "achievements_dsp">
                                <?php
                                    $sql_certificate = "SELECT * FROM certifications WHERE cv_id = ?";
                                    $stmt_certificate = mysqli_prepare($connection, $sql_certificate);
                                    mysqli_stmt_bind_param($stmt_certificate, "i", $cv_id);
                                    mysqli_stmt_execute($stmt_certificate);
                                    $result_certificate = mysqli_stmt_get_result($stmt_certificate);

                                    if (mysqli_num_rows($result_certificate) > 0) {
                                        // Ulangi hasilnya dan tampilin setiap sertifikasi si user
                                        while ($row = mysqli_fetch_assoc($result_certificate)) {
                                        echo "<div class='satu' style='font-weight: bold; margin-bottom: 3px; margin-top: 10px;'>";
                                        echo htmlspecialchars($row['title']); 
                                        echo "</div>";
                                        echo "<div style='text-align: justify;'>" . htmlspecialchars($row['description']) . "</div>";
                                    }
                                        } else {
                                            echo "No certifications found for this CV.";
                                        }
                                            mysqli_stmt_close($stmt_certificate);
                                ?>
                            </div>
                        </div>

                        <div class = "preview-blk">
                            <div class = "preview-blk-title">
                                <h3>educations</h3>
                            </div>
                            <div class = "educations-items preview-blk-list" id = "educations_dsp">
                            <?php
                                    $sql_education = "SELECT * FROM education WHERE cv_id = ?";
                                    $stmt_education = mysqli_prepare($connection, $sql_education);
                                    mysqli_stmt_bind_param($stmt_education, "i", $cv_id);
                                    mysqli_stmt_execute($stmt_education);
                                    $result_education = mysqli_stmt_get_result($stmt_education);

                                    if (mysqli_num_rows($result_education) > 0) {
                                        while ($row = mysqli_fetch_assoc($result_education)) {
                                        echo "<div style='font-weight: bold; margin-bottom: 3px; margin-top: 10px;'>";
                                        echo htmlspecialchars($row['school']);
                                        echo "</div>";
                                        echo "<div style='font-weight: 700; margin-bottom: 3px; margin-top: 10px;'>";
                                        echo htmlspecialchars($row['degree']); 
                                        echo "</div>";
                                        echo "<div class='buat-flex' style='margin-bottom: 8px; margin-top: 10px;'>";
                                            echo "<div class='satu' style='font-style: italic;'>";
                                            echo htmlspecialchars($row['city']); 
                                            echo "</div>";

                                            echo "<div class='dua bg-pesat' style='margin-left: 10px; color: white; padding: 0.2em 0.8em 0.2em 0.8em; border-radius : 8px;'>";
                                            echo htmlspecialchars($row['start_date']); 
                                            echo "</div>";

                                            echo "<div class='tiga bg-pesat' style='margin-left: 10px; color: white; padding: 0.2em 0.8em 0.2em 0.8em; border-radius : 8px;'>";
                                            echo htmlspecialchars($row['end_date']); 
                                            echo "</div>";
                                        echo "</div>";
                                        echo "<div style='text-align: justify;'>" . htmlspecialchars($row['description']) . "</div>";
                                    }
                                        } else {
                                            echo "No education found for this CV.";
                                        }
                                            // mysqli_stmt_close($stmt_certificate);
                                ?>
                            </div>
                        </div>

                        <div class = "preview-blk">
                            <div class = "preview-blk-title">
                                <h3>experiences</h3>
                            </div>
                            <div class = "experiences-items preview-blk-list" id = "experiences_dsp">
                            <?php
                                    $sql_experience = "SELECT * FROM experiences WHERE cv_id = ?";
                                    $stmt_experience = mysqli_prepare($connection, $sql_experience);
                                    mysqli_stmt_bind_param($stmt_experience, "i", $cv_id);
                                    mysqli_stmt_execute($stmt_experience);
                                    $result_experience = mysqli_stmt_get_result($stmt_experience);

                                    if (mysqli_num_rows($result_experience) > 0) {
                                        while ($row = mysqli_fetch_assoc($result_experience)) {
                                        echo "<div style='font-weight: bold; margin-bottom: 3px; margin-top: 10px;'>";
                                        echo htmlspecialchars($row['title']);
                                        echo "</div>";
                                        echo "<div style='font-weight: 700; margin-bottom: 3px; margin-top: 10px;'>";
                                        echo htmlspecialchars($row['organization']); 
                                        echo "</div>";
                                        echo "<div class='buat-flex' style='margin-bottom: 8px; margin-top: 10px;'>";
                                            echo "<div class='satu' style='font-style: italic;'>";
                                            echo htmlspecialchars($row['location']); 
                                            echo "</div>";

                                            echo "<div class='dua bg-pesat' style='margin-left: 10px; color: white; padding: 0.2em 0.8em 0.2em 0.8em; border-radius : 8px;'>";
                                            echo htmlspecialchars($row['start_date']); 
                                            echo "</div>";

                                            echo "<div class='tiga bg-pesat' style='margin-left: 10px; color: white; padding: 0.2em 0.8em 0.2em 0.8em; border-radius : 8px;'>";
                                            echo htmlspecialchars($row['end_date']); 
                                            echo "</div>";
                                        echo "</div>";
                                        echo "<div style='text-align: justify;'>" . htmlspecialchars($row['description']) . "</div>";
                                    }
                                        } else {
                                            echo "No experience found for this CV.";
                                        }
                                            // mysqli_stmt_close($stmt_certificate);
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

                <section class = "print-btn-sc">
                    <div class = "container">
                        <button id="download-pdf-btn" type="button" class="print-btn btn btn-primary" onclick="print()">Download as PDF</button>
                    </div>
                </section>
            
</body>
</html>