<!-- modularity.php - Bill White - 6/28/18 -->

<?php 
include 'html_header.html';
include 'header.html';
include 'left_sidebar_menu.html'; 
?>

<h1>Perform a network modularity analysis</h1>

<a name=""><h2>Running a network modularity analysis</h2></a>
</p>

<h3>Command Line</h3>
<pre>
inbix [file I/O options] [modularity options below]
	--modularity              Perform a network modularity analysis
	--modularity-connectivity-threshold Edge threshold for connectivity
	--modularity-binary-threshold Threshold to binary connectivity?
	--modularity-power-transform {exponent} Apply power to exponent transformation
	--modularity-fisher-transform Apply Fisher transformation
	--modularity-homophily    Compute module homophilies
	--sif-file {SIF file}     Read network from a SIF file
	--sif-to-regain           Convert SIF network to reGAIN
	--afni-1d-file {1D file}  Read network from AFNI 1D file
</pre>

<hr>
<em>
This document last modified Thursday, 28-Jun-2018 23:33:00 CDT
</em>

<?php include 'footer.html'; ?>
