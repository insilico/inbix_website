<!-- numerics.php - Bill White - 6/28/18 -->

<?php 
include 'html_header.html';
include 'header.html';
include 'left_sidebar_menu.html'; 
?>

<h1>Numeric Data Operations</h1>

<a name=""><h2>Running operations with numeric data</h2></a>
</p>

<h3>Command Line</h3>
<pre>
inbix --numeric-file [file I/O options] [ options below]
	--covariance-matrix       Compute covariance and correlation matrices
	--coexpression-all         Compute coexpression - all
	--coexpression-casecontrol Compute coexpression - case-control
	--numeric-summary         Report numeric file statistics
	--numeric-extract {file}  Extract numeric attributes
	--numeric-low-value-filter {percentile}  Remove variables with values below given percentile
	--numeric-low-variance-filter {percentile}  Remove variables with variance below given percentile
	--numeric-standardize     Subtract the numeric variable means and divide by standard deviations before analysis
</pre>

<hr>
<em>
This document last modified Thursday, 28-Jun-2018 23:05:00 CDT
</em>

<?php include 'footer.html'; ?>
