<!-- relieff.php - Bill White - 6/28/18 -->

<?php 
include 'html_header.html';
include 'header.html';
include 'left_sidebar_menu.html'; 
?>

<h1>Relief-F</h1>

<a name="runrelieff"><h2>Running Relief-F</h2></a>
</p>

<h3>Command Line</h3>
<pre>
inbix [file I/O options] [relieff options below]

	--relieff                 Perform a Relief-F variable ranking algorithm
	--algorithm-mode          Relief algorithm mode (relieff|reliefseq)
	--seq-algorithm-mode      ReliefSeq algorithm mode (snr|tstat)
	--seq-snr-mode            Seq interaction algorithm SNR mode (snr|relieff)
	--seq-tstat-mode          Seq interaction algorithm t-statistic mode (pval|abst|rawt)
	--seq-algorithm-s0        Seq interaction algorithm s0 (0.0 &lt;= s0 &lt;= 1
	--num-target              Target number of attributes to keep after backwards selection
	--iter-remove-n           Number of attributes to remove per iteration of backwards selection
	--iter-remove-percent     Percentage of attributes to remove per iteration of backwards selection
	--normalize-scores        Normalize ReliefF scores? (0|1)
	--snp-metric-nn           Metric for determining the difference between subjects (gm|am|nca|titv|km|grm)
	--snp-metric-diff         Metric for determining the diff(erence) between SNPs (gm|am|nca|titv|km)
	--numeric-metric          Metric for determining the difference between numeric attributes (manhattan|euclidean)
	--k-nearest-neighbors     Set k nearest neighbors (0=optimize k)
	--kopt-begin              Optimize k starting with kopt-begin
	--kopt-end                Optimize k ending with kopt-end
	--kopt-step               optimize k incrementing with kopt-step
	--write-best-k            optimize k, write best k's
	--write-each-k-scores     optimize k, write best scores for each k
	--number-random-samples   number of random samples (0=all|1 &lt;= n &lt;= number of samples)
	--weight-by-distance-method (equal|one_over_k|exponential) 
	--weight-by-distance-sigma (default: 2) 
	--distance-matrix         Create a distance matrix for the loaded samples and exit
	--gain-matrix             Create a GAIN matrix for the loaded samples and exit
	--dump-titv-file          File for dumping SNP transition/transversion information
</pre>

<hr>
<em>
This document last modified Thursday, 28-Jun-2018 22:39:00 CDT
</em>

<?php include 'footer.html'; ?>
