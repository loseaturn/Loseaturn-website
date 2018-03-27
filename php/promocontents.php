    <?php
        // Define each name associated with an URL
        $urls = array(
            'Promos' => 'http://seizethegm.com/',
            'Seize The GM' => 'http://seizethegm.com/',
            // …
        );

        foreach ($urls as $name => $url) {
            print '<li '.(($currentPage === $name) ? ' class="active" ': '').
                '><a class="navitem" href="'.$url.'">'.$name.'</a></li>';
        }
    ?>