

<?php $title = 'Games'; ?>
<?php $metaTags = 'tag1 tag2'; ?>
<?php $currentPage = 'games.php'; ?>
<?php include('php/head.php'); ?>
<?php include('php/body.php'); ?>

    <style>
        #gc{
            float:left;
            width:620px;
            height:480px;
        }
        #gamelist{
            position:absolute;
        }
        #sourcecode{
            position:absolute;
        }
    </style>
     
	<script type='text/javascript'>
		/*I need to make sure I know how to run or embed each game
		Something to identify each game, probably by ID.
		Replace divs with the embed, either iframe or js canvas
		 
		A way to populate the list of games and submit them easily
		 Styling for the games
		 */
		
		
		
		
		
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
	</script>
	
    <h1>Games</h1>

    <p>
        Here's a list of basic games. Click one, and you can play it. <br />You will also be presented with their source code, if you care about that kind of thing
    </p>

    <aside id="gamelist" role="complementary">
        <ul>
            <li><a href="games/pong.html">Pong</a></li>
            <li><a href="games/pong.html">Snake</a></li>
            <li><div class="games" id="blockbreaker"><a href="games/brockblearkerMatt/index.html">Brock Bleaker</a></div></li>
			<iframe src="games/brockbleakerMatt/index.html"></iframe>
		</ul>
    </aside>

    <canvas id="gc"></canvas>
    
    <div id="sourcecode">
        <object type="text/strings" data="games/pong.html"></object>
    </div>

<?php include('php/footer.php'); ?>