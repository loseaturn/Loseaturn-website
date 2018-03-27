<script>
/*Function to add an html id to tags within posts*/
function addIdInPosts(attributionTextId, linkDumpId){
	var attrs = document.getElementsByClassName('showattribution');
		var links = document.getElementsByClassName('linkdump');
		for (var i = 0, len = attrs.length;i<len; i++){
			var id = attrs[i].id;
			if (!id){attrs[i].id = attributionTextId;}
			var id = links[i].id;
			if (!id){links[i].id = linkDumpId;}
		}
}

/* Light YouTube Embeds by @labnol */
/* Web: http://labnol.org/?p=27941 */
document.addEventListener("DOMContentLoaded",
	function() {
		var div, n,
			v = document.getElementsByClassName("youtube player");
		for (n = 0; n < v.length; n++) {
			div = document.createElement("div");
			div.setAttribute("data-id", v[n].dataset.id);
			div.innerHTML = labnolThumb(v[n].dataset.id);
			div.onclick = labnolIframe;
			v[n].appendChild(div);
		}
	});

function labnolThumb(id) {
	var thumb = '<img src="https://i.ytimg.com/vi/ID/hqdefault.jpg">',
		play = '<div class="play"></div>';
	return thumb.replace("ID", id) + play;
}

function labnolIframe() {
	var iframe = document.createElement("iframe");
	var embed = "https://www.youtube.com/embed/ID?autoplay=1";
	iframe.setAttribute("src", embed.replace("ID", this.dataset.id));
	iframe.setAttribute("frameborder", "0");
	iframe.setAttribute("allowfullscreen", "1");
	this.parentNode.replaceChild(iframe, this);
}


/*Hide and show links and attribution*/
function attributionHider(attributionbutton){
	var attributiontext = document.getElementById('attributiontext'+attributionbutton.getAttribute('data-postid'));
	  if (attributionbutton.getAttribute('data-text-status') == 'hidden') {
		attributionbutton.setAttribute('data-text-status', 'shown');
		attributionbutton.innerHTML = 'Hide Attribution';
		attributiontext.style.display = 'inline';
	  } else {
		attributionbutton.setAttribute('data-text-status', 'hidden');
		attributionbutton.innerHTML = 'Show Attribution';
		attributiontext.style.display = 'none';
	  }
}

function linkHider(linkbutton){
	var linktext = document.getElementById('linkdump'+linkbutton.getAttribute('data-postid'));
	  if (linkbutton.getAttribute('data-text-status') == 'hidden') {
		linkbutton.setAttribute('data-text-status', 'shown');
		linkbutton.innerHTML = 'Hide Links';
		linktext.style.display = 'inline';
	  } else {
		linkbutton.setAttribute('data-text-status', 'hidden');
		linkbutton.innerHTML = 'Show Links';
		linktext.style.display = 'none';
	  }
}
</script>

<?php
function writePosts(){
//$number_of_posts = ; must be specified in calling form 
$args = array( 'numberposts' => $number_of_posts );
$recent_posts = wp_get_recent_posts( $args );

echo "";

foreach( $recent_posts as $recent_post ){
	echo "<div class='posttitle' data-postid='".$recent_post['ID']."' ><h5 class='ptitle'>".$recent_post['post_title']."</h5 >";
	echo "<small class='postdate'>".$recent_post['post_date']."</small>";
	echo "</div>";
	
	echo  "<section class='postcontent'>".$recent_post['post_content']."</section>";
	
	echo "<p><a id='links".$recent_post['ID']."' data-postid='".$recent_post['ID']."' class='linkbutton' data-text-status='hidden' onclick='linkHider(this)'>Show Links</a><br />";
	echo "<a id='attribution".$recent_post['ID']."' data-postid='".$recent_post['ID']."' class='attributionbutton' data-text-status='hidden' onclick='attributionHider(this)'>Show Attribution</a><br /></p>";
	echo "<script> addIdInPosts('attributiontext".$recent_post['ID']."', 'linkdump".$recent_post['ID']."'); </script>";
	echo "";
	
	//include('comments.php');
	
	echo "<div class='postbadges'>";
	include('badges.php');
	echo "</div><div class='postdiv'><hr class='posthr'><br /></div>";
	}
echo "";
}
?>