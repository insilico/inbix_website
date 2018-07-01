<!-- snprank.php - Bill White - 6/28/18 -->

<?php 
include 'html_header.html';
include 'header.html';
include 'left_sidebar_menu.html'; 
?>

<h1>SNPrank</h1>

<a name=""><h2>Running snprank</h2></a>
</p>

<h3>Command Line</h3>
<pre>
inbix [file I/O options] [snprank options below]
	--regain-file {regain file} Postprocess an existing reGAIN file
	--rank-by {ranker}        Rank variables by ranker
	--rank-top-n {top N}      Keep only top N ranked variables
	--rank-save-data {file name} Save ranker results to new data file
	--rank-file {ranker file} Load an existing ranker file
	--rank-centrality-gamma {gamma} Use a specified gamma
</pre>

<hr>
<em>
This document last modified Thursday, 28-Jun-2018 23:41:00 CDT
</em>

<?php include 'footer.html'; ?>
