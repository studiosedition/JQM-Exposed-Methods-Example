<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>jQuery Mobile: Changing Pages</title>
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.css" />
	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.js"></script>
</head>

<body>
    <div data-role="page">
        <div data-role="header"><h1>Page Header</h1></div>
        <div data-role="content">
        	<?php
			if($_POST) {
				foreach($_POST as $key=>$value) {
					echo '<p><b>'.$key.'</b>: '.$value.'</p>';
				}
			}
			?>
        </div>
        <div data-role="footer">Copyright</div>
    </div>
</body>
</html>