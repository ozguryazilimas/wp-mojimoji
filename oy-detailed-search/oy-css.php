<?php
	header("Content-type: text/css");
?>
#oy-hide-button
{
	width:30px;
}
.oy-rotate
{
	display:inline-block;
	transform: rotate(270deg);
}
.oy-de-rotate
{
	display:inline-block;
	transform: rotate(90deg);
}
.oy-ayrinti-text
{
	color:#32ACEB;
}
.oy-de-rotate+#oy-hide-tip
{
	position:relative;
	top:-10px;
	margin-left:5px;
	display:inline-block;
	font-size:0.5em;
	height:30px;
	line-height:30px;
}
.oy-rotate+#oy-hide-tip
{
	display:none;
}
#oy-arama-container
{
	font-family: "Times New Roman", Times, serif;
	padding:0 5%;
	margin-bottom:20px;
}
#oy-arama-container input
{
	padding-left:5px;
	padding-right:5px;
}
.oy-arama-major-field
{
	width:100%;
}
.oy-divider{
	width:90%;
	height:0px;
	margin-top:10px;
	margin-bottom:10px;
	border-bottom:1px solid #ddd;
}
.oy-divider-borderless
{
	height:0px;
	margin-top:10px;
	margin-bottom:10px;
}
.oy-arama-major-field h2
{
	font-size:1.3em;
	font-weight:normal;
}
.oy-arama-input-field
{
	margin-top:3px;
}

.oy-arama-text
{
	display:inline-block;
	width:30%;
	font-size:0.8em;
}

.oy-arama-box
{
	display:inline-block;
	width:55%;
	padding:0 2%;
	font-size:0.8em;
}

.oy-arama-box input[type="text"],.oy-arama-box input[type="username"]
{
	height:20px;
}

.oy-arama-select
{
	width:50%;
	border: 1px solid #ccc;
    border-radius: 3px;
    overflow: hidden;
	background-color:white;
}
.oy-arama-input-small
{
	width:24%;
}

.oy-arama-input-small-small
{
	width:12%;
}


.oy-arama-input-big
{
	width:100%;
}
		
.oy-arama-input-mid
{
	width:49%;
}
.oy-arama-input-field input[type="submit"]
{
	padding:4px 10px;
	width:25%;
	border:1px solid #eee;
	background-color:#43BEEB;
	color:white;
}

.oy-arama-select option
{
	padding:3px 6px;
}
.oy-arama-sonuc
{
	margin-bottom:20px;
	background-color:#43BEEB;
	padding:3px 6px;
	border-radius:5px;
}
.oy-arama-sonuc-icerik
{
	font-size:0.8em;
}
.oy-arama-sonuc-container
{
	padding:20px;
}
.oy-arama-sonuc-meta
{
	margin-bottom:2px;
	font-size:0.6em;
}
.oy-arama-sonuc
{
	color:white;
}
.oy-arama-sonuc a:link
{
	color:white;
}
.oy-arama-sonuc a:visited
{
	color:white;
}
.oy-arama-sonuc a:hover
{
	color:#ddd;
}
.oy-arama-sonuc a:focus,.oy-arama-sonuc-baslik a:active
{
	color:#eee;
}
