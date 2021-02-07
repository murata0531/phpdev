
<?php
	
    ?>
    
    <!doctype html>
    <html lang="ja">
        <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
        
            <!-- Bootstrap CSS -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
            <title>Hello, world!</title>
            
            <style>

                /* // X-Small devices (portrait phones, less than 576px)
                // No media query for `xs` since this is the default in Bootstrap */

                /* // Small devices (landscape phones, 576px and up) */
                @media (min-width: 576px) {}

                /* // Medium devices (tablets, 768px and up) */
                @media (min-width: 768px) {}

                /* // Large devices (desktops, 992px and up) */
                @media (min-width: 992px) {}

                /* // X-Large devices (large desktops, 1200px and up) */
                @media (min-width: 1200px) {}

                /* // XX-Large devices (larger desktops, 1400px and up) */
                @media (min-width: 1400px) {}

                .container {
                    color:white;
                }
                .con1 {
                    background:red;
                }

                .con2 {
                    background:blue;
                }

                .con3 {
                    background:green;
                }

                .con4 {
                    background:yellow;
                    color:black;
                }

                .con5 {
                    background:gray;
                    color:black;
                }

            </style>

        </head>
        <body>
    
        <!-- Optional JavaScript; choose one of the two! -->
    
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    
        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
        -->
    
            <div class="container con1">
                <div class="container-sm">100% wide until small breakpoint</div>
                <div class="container-md">100% wide until medium breakpoint</div>
                <div class="container-lg">100% wide until large breakpoint</div>
                <div class="container-xl">100% wide until extra large breakpoint</div>
                <div class="container-xxl">100% wide until extra extra large breakpoint</div>
            </div>

            <div class="container con2">
                <div class="row">
                    <div class="col-sm">
                        One of three columns
                    </div>
                    <div class="col-sm">
                        One of three columns
                    </div>
                    <div class="col-sm">
                        One of three columns
                    </div>
                </div>
            </div>

            <div class="container con3">
                <div class="row">
                    <div class="col">
                        1 of 2
                    </div>
                    <div class="col">
                        2 of 2
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        1 of 3
                    </div>
                    <div class="col">
                        2 of 3
                    </div>
                    <div class="col">
                        3 of 3
                    </div>
                </div>
            </div>

            <div class="container con4">
                <div class="row align-items-start">
                    <div class="col">
                        One of three columns
                    </div>
                    <div class="col">
                        One of three columns
                    </div>
                    <div class="col">
                        One of three columns
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col">
                        One of three columns
                    </div>
                    <div class="col">
                        One of three columns
                    </div>
                    <div class="col">
                        One of three columns
                    </div>
                </div>
                <div class="row align-items-end">
                    <div class="col">
                        One of three columns
                    </div>
                    <div class="col">
                        One of three columns
                    </div>
                    <div class="col">
                        One of three columns
                    </div>
                </div>
            </div>
    
            <div class="container px-4 con5">
                <div class="row gx-5">
                    <div class="col">
                        <div class="p-3 border bg-light">Custom column padding</div>
                    </div>
                    <div class="col">
                        <div class="p-3 border bg-light">Custom column padding</div>
                    </div>
                </div>
            </div>

        </body>
    </html>