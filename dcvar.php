<!-- dcvar.php - Bill White - 6/28/18 -->

<?php 
include 'html_header.html';
include 'header.html';
include 'left_sidebar_menu.html'; 
?>

<h1>dcVar: Differential Coexpression VARiant analysis</h1>

<a name=""><h2></h2>Running dcVar</a>
</p>

<h3>Command Line</h3>
<pre>
inbix [file I/O options] [dcvar options below]
	--dcvar                         Perform a differential coexpression variant analysis
	--dcvar-resume-snp              Resume SNP phenotype loop from checkpoint file
	--dcvar-pfilter-value {value}   P-value filter value default 0.05
	--dcvar-pfilter-type {bon|fdr|custom}  P-value correction filter Bonferroni (default), FDR BH, custom pure cutoff
	--dcvar-var-model {dom|rec|hom} Allelic SNP model
	--dcvar-genotypes-file          Genotypes file: SNPs by subject (0,1,2) - gzipped
	--dcvar-snp-locations-file      SNP locations information filename - gzipped
	--dcvar-gene-expression-file    Gene expression filename: gene by subject
	--dcvar-chip-seq-file           ChIP-seq expression filename: SNPs by measures
	--dcvar-radius {value}          Radius around ChIP-Seq SNP position to search
</pre>

<hr>
<em>
This document last modified Thursday, 28-Jun-2018 23:18:00 CDT
</em>

<?php include 'footer.html'; ?>
