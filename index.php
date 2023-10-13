<?php

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>


<body class="bg-dark">

    <div id="app">


        <header class="bg-black py-4 text-light px-3">
            <div>
                <img src="https://assets.stickpng.com/images/5ece5029123d6d0004ce5f8b.png" alt="" class="my_w ps-5">
            </div>
        </header>

        <main>
            <div class="container my-5">
                <div class="row row-cols-3 gy-5">
                    <div class="col" v-for="(disk, index) in disks">
                        <div class="card my_card_bg">
                            <div class="card-body text-center text-light">
                                <div class="py-4">
                                    <img :src="disk.poster" alt="" class="my_img img-fluid">
                                </div>
                                <h3>
                                    {{ disk.title }}
                                </h3>
                                <p>
                                    {{ disk.author }}
                                </p>
                                <h4>
                                    {{ disk.year }}
                                </h4>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>


    </div>












    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <script src="./main.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>