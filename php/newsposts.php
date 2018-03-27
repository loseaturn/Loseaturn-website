<?php
function writePosts(){
//$number_of_posts = ; must be specified in calling form 
$args = array( 'numberposts' => $number_of_posts );
$recent_posts = wp_get_recent_posts( $args );

foreach( $recent_posts as $recent_post ){
	echo "<div class='posttitle'><h5 class='ptitle'>".$recent_post['post_title']."</h5 >";
	echo "<small class='postdate'>".$recent_post['post_date']."</small>";
	echo "</div>";
	
	echo  "<section class='postcontent'>".$recent_post['post_content']."</section>";
	
	echo "<a id='links".$recent_post['ID']."' postID='".$recent_post['ID']."' class='linkbutton' text-status='hidden' onclick='linkHider(this)'>Show Links</a><br />";
	echo "<a id='attribution".$recent_post['ID']."' postID='".$recent_post['ID']."' class='attributionbutton' text-status='hidden' onclick='attributionHider(this)'>Show Attribution</a><br />";
	echo "<script type='text/javascript'> 
			var attrs = document.getElementsByClassName('showattribution');
			var links = document.getElementsByClassName('linkdump');
			for (var i = 0, len = attrs.length;i<len; i++){
				var id = attrs[i].id;
				if (!id){attrs[i].id = 'attributiontext".$recent_post['ID']."';}
				var id = links[i].id;
				if (!id){links[i].id = 'linkdump".$recent_post['ID']."';}
			}
		</script>";
	echo "";
	//include('comments.php');
	echo "<div class='postbadges'>";
	include('badges.php');
	echo "</div><div class='postdiv'><hr class='posthr'><br /></div>";
	}
echo "";
}