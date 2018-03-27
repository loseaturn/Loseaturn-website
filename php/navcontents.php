    <?php
        // Define each name associated with an URL
        $urls = array(
            'Home' => '/home.php',
            'News' => '/news.php',
			'About'=>'/about.php',
			'LAT 1.0'=>'onepointo.php',
			'r/Forums'=>'https://www.reddit.com/r/loseaturn/',
			/*'Games' =>'games.php',*/
            // …
        );

        foreach ($urls as $name => $url) {
            print '<a class="navitem" href="'.$url.'">'.$name.'</a>
			';		
        }
		print '<a href="javascript:void(0);" class="navmenu" onclick="navbarCollapse()">&#9776;</a>';

    ?>