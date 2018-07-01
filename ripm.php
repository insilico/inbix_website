<!-- ripm.php - Bill White - 6/28/18 -->

<?php 
include 'html_header.html';
include 'header.html';
include 'left_sidebar_menu.html'; 
?>

<h1>ripM: Recursive Indirect Paths Modularity analysis</h1>

<a name=""><h2></h2>Running ripM</a>
</p>

<h3>Command Line</h3>
<pre>
inbix [file I/O options] [ripm options below]
	--ripm                    Perform a network recursive indirect paths modularity analysis
	--ripm-threshold-type     Threshold type (hard|soft)
	--ripm-threshold-value    Threshold value
	--ripm-start-merge-order  Starting merge order for small modules
	--ripm-max-merge-order    Maximum merge order for small modules
	--ripm-min-mod-size       Minimum module size
	--ripm-max-mod-size       Maximum module size
	--ripm-abs                Take absolute value of input before threshold
	--ripm-weighted           Keep weighted edges versus make binary
</pre>

<hr>
<em>
This document last modified Thursday, 28-Jun-2018 23:05:00 CDT
</em>

<?php include 'footer.html'; ?>
