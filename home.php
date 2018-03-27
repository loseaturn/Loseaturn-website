<?php $title = 'Home'; ?>
<?php $metaTags = ''; ?>
<?php $currentPage = 'home.php'; ?>
<?php include('php/head.php'); ?>
<?php include('php/body.php'); ?>

<?php 
define('WP_USE_THEMES', false);
require('http://www.loseaturn.com/wordpress/wp-blog-header.php');
?>

<script>
/*Modified for twitch live stream*/
document.addEventListener("DOMContentLoaded",
	function() {
		var div,
		v = document.getElementById("twitchlive");
		div = document.createElement("div");
		div.setAttribute("data-id", v.dataset.id);
		div.innerHTML = twitchThumb(v.dataset.id);
		div.onclick = twitchIframe;
		v.appendChild(div);
	});

function twitchThumb(id) {
	var thumb = '<img src="/images/icons/455px-Twitch_logo.svg.png">',
		play = '<div class="play"></div>';
	return thumb.replace("ID", id) + play;
}

function twitchIframe() {
	var iframe = document.createElement("iframe");
	var embed = "http://player.twitch.tv/?channel=ID";
	iframe.setAttribute("src", embed.replace("ID", this.dataset.id));
	iframe.setAttribute("frameborder", "0");
	iframe.setAttribute("allowfullscreen", "1");
	this.parentNode.replaceChild(iframe, this);
	document.getElementById("twitchlive").removeAttribute("id"); /*removes css styles that limit size*/
}
</script>

<section class="postcontent">
	<h4>Hey! Sometimes we're live on twitch,</h4> <p>Click below to check! <br />Click to the right to join the chat! (Only on desktop or in landscape mode)</p>
	<div id="twitchlive" class="twitch player" data-id="loseaturn" onclick='twitchlivestream(this)'></div>
	<p>Every Monday night around 8 PM central we'll be here for our weekly podcast, live.</p> 
</section>
<br />
<?php
$number_of_posts = 25;
?>
<?php include('php/posts.php'); 
writePosts();
?>
<?php include('php/footer.php'); ?>
