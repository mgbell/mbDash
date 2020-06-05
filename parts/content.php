<body onload="letsDoIt();">
	
<link rel="stylesheet" href="./css/parts/content.css">

<div class="hello">
		
		<h1>Hello!</h1>

	</div>

<div class="king-wrapper">

	<div class="calendar">
			
		<iframe src="https://calendar.google.com/calendar/embed?height=400&amp;wkst=2&amp;bgcolor=%23616161&amp;ctz=Europe%2FLondon&amp;src=Mjd2ZjVwb2xyNmlkZGhlaWZuYmVoZ3ZkM2dAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;color=%23E67C73&amp;showTitle=0&amp;showNav=0&amp;showPrint=0&amp;showTabs=0&amp;showTz=0&amp;showCalendars=0&amp;showDate=0&amp;mode=MONTH" style="border-width:0" width="800" height="900" frameborder="0" scrolling="no"></iframe>

	</div>

	<div class="card-holder">

		<div class="card">
			
			<div id="currentTime">

				<p>The day is: <span id="currentDay"></span></p>

				<br />

				<p>The time is: <span id="currentTimeText"></span></p>

				<br />

				<p>The date is: <span id="currentDate"></span></p>

			</div>

		</div>

		<div class="card card-spotify">

			<br />

			<br />

			<div class="now-playing">
				
			</div>

		</div>

		<div class="card card-weather">

			<br />
			
		<a class="weatherwidget-io" href="https://forecast7.com/en/51d950d64/halstead/" data-label_1="HALSTEAD" data-label_2="WEATHER" data-theme="original" >HALSTEAD WEATHER</a>
		<script>
		!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
		</script>

		</div>

		<div class="card card-news">
			
		<?php include 'news.php' ?>

		</div>
			
	</div>

</div>

</body>

