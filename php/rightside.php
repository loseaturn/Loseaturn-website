
<div id="rightside">
<script>
/*Modified for discord*/
document.addEventListener("DOMContentLoaded",
	function() {
		var div, n,
			v = document.getElementById("discord");
		
			div = document.createElement("div");
			div.setAttribute("data-id", v.dataset.id);
			div.innerHTML = discordThumb(v.dataset.id);
			div.onclick = discordIframe;
			v.appendChild(div);
		
	});

function discordThumb(id) {
	var thumb = '<img src="http://www.loseaturn.com/images/icons/Discord-Logo+Wordmark-Color.png" style="width:90%;">';
	return thumb;
}

function discordIframe() {
	var iframe = document.createElement("iframe");
	var embed = "https://discordapp.com/widget?id=ID&theme=dark";
	iframe.setAttribute("src", embed.replace("ID", this.dataset.id));
	iframe.setAttribute("frameborder", "0");
	iframe.setAttribute("id", "discordchild");	
	iframe.setAttribute("class", "widgetchild");	
	iframe.setAttribute("allowtransparency", "1");
	this.parentNode.replaceChild(iframe, this);
}


/*Modified for twitch live chat*/
document.addEventListener("DOMContentLoaded",
	function() {
		var chatdiv,
		chatv = document.getElementById("twitchchat");
		chatdiv = document.createElement("div");
		chatdiv.setAttribute("data-id", chatv.dataset.id);
		chatdiv.innerHTML = twitchThumb(chatv.dataset.id);
		chatdiv.onclick = twitchChatIframe;
		chatv.appendChild(chatdiv);
	});

function twitchChatThumb(id) {
	var chatthumb = '<img src="http://www.loseaturn.com/images/icons/455px-Twitch_logo.svg.png">';
	return chatthumb;
}

function twitchChatIframe() {
	var chatiframe = document.createElement("iframe");
	var chatembed = "https://www.twitch.tv/embed/ID/chat";
	chatiframe.setAttribute("src", chatembed.replace("ID", this.dataset.id));
	chatiframe.setAttribute("frameborder", "0");
	chatiframe.setAttribute("scrolling", "yes");
	chatiframe.setAttribute("id", "loseaturnchild");	
	chatiframe.setAttribute("class", "widgetchild");
	this.parentNode.replaceChild(chatiframe, this);
}
</script>
<div id="twitchchat" data-id='loseaturn' class="sidewidgets"></div>
<div id="discord" data-id="249676759929323520" class="sidewidgets"></div>

<br />

<?php include('social.php'); ?>

</div>