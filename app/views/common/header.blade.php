<html>
    <head>
        <link rel='stylesheet' type='text/css' href='{{ URL::asset('assets/css/index.css') }}'>
        <link rel='stylesheet' type='text/css' href='{{ URL::asset('assets/custom/bootstrap/css/bootstrap.min.css') }}'>
    </head>
    <body>
        <div class='header-container width-percent-100'>
            <div class="helght-10">
            </div>
            <div class='center-percent-50 width-percent-40 padding-10'>
                <ul class="nav nav-tabs">

                    <?php
                        $links = array('1' => '/', '2' => '/projects', '3' => '/doners', '4' => '/about', '5' => '/contact');
                        $header = array('1' => 'Home', '2' => 'Projects', '3' => 'Doners', '4' => 'About', '5' => 'Contat Us');

                        foreach($links as $index => $link) {

                          if($index == $page) { ?>
                              <li role="presentation" class="active"><a href="<?php echo $link; ?>"><?php echo $header[$index]; ?></a></li>
                    <?php } else { ?>
                        <li role="presentation"><a href="<?php echo $link; ?>"><?php echo $header[$index]; ?></a></li>
                    <?php
                            }
                        }
                    ?>
                </ul>
            </div>
        </div>