<!-- regain.php - Bill White - 6/28/18 -->

<?php 
include 'html_header.html';
include 'header.html';
include 'left_sidebar_menu.html'; 
?>

<h1>reGAIN: Regression Genetic Association Interaction Networks</h1>

<a name=""><h2>Running reGAIN</h2></a>
</p>

<h3>Command Line</h3>
<pre>
inbix [file I/O options] [regain options below]
	--regain                  Perform a reGAIN analysis   
	--regain-file {regain file} Postprocess an existing reGAIN file
	--regain-use-beta-values  Use betas in reGAIN output  
	--regain-pure-interactions Exclude main effects from interactions
	--regain-fail-value {value} Value to use if regression failure
	--regain-pvalue-threshold {value} P-value threshold for writing reGAIN values
	--regain-compress         Compress reGAIN output      
	--regain-components       Write reGAIN components     
	--regain-fdr {rate}       Set reGAIN FDR              
	--regain-fdr-prune        Perform reGAIN FDR pruning  
	--regain-sif-threshold {threshold}  Filter reGAIN SIF 
	--regain-matrix-threshold-value {threshold}  Filter reGAIN output
	--regain-matrix-format {format}  reGAIN output format 
	--regain-matrix-transform {transform}  reGAIN output transform
	--regain-to-sif {regain}  Convert reGAIN matrix to SIF file
</pre>

<hr>
<em>
This document last modified Thursday, 28-Jun-2018 23:05:00 CDT
</em>

<?php include 'footer.html'; ?>
