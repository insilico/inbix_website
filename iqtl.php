<!-- iqtl.php - Bill White - 6/28/18 -->

<?php 
include 'html_header.html';
include 'header.html';
include 'left_sidebar_menu.html'; 
?>

<h1>iQTL: epIstasis eQTL</h1>

<a name=""><h2></h2>Running iQTL</a>
</p>

<h3>Command Line</h3>
<pre>
inbix [file I/O options] [iqtl options below]
	--iqtl                    Perform epistasis eQTL analysis
	--transcript-matrix       Transcript matrix file
	--coordinates             Transcript coordinates file
	--local-cis               Consider only SNPs within radius
	--radius                  Number of kilobases considered cis
	--TF                      Select SNPs in range of 1 or more transcription factors
	--TF-radius {value}       Number of kilobases considered within TF radius
	--TF-file {filename}      Select coordinates file different from default
	--iqtl-pvalue {threshold} P-value threshold
	--full                    Consider all SNPs
</pre>

<hr>
<em>
This document last modified Thursday, 28-Jun-2018 23:05:00 CDT
</em>

<?php include 'footer.html'; ?>
