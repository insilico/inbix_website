<!-- ec.php - Bill White - 6/28/18 -->

<?php 
include 'html_header.html';
include 'header.html';
include 'left_sidebar_menu.html'; 
?>

<h1>ec: Evaporative Cooling</h1>

<a name=""><h2>Running ec</h2></a>
</p>

<h3>Command Line</h3>
<pre>
inbix [file I/O options] [ec options below]
	--ec                      Perform a Evaporative Cooling analysis
	--ec-optimize-temp        Turn on temperature optimization
	--ec-algorithm-steps      Algorithm steps (all/default|me|it)
	--ec-me-algorithm         randomforest|edger|deseq|
	--ec-it-algorithm         relieff
	--ec-num-target           Target number of attributes iterative removal
	--ec-iter-remove-n        Number to remove per iteration
	--ec-iter-remove-percent  Percent to remove per iteration
	--ec-iter-write-scores    Write the scores of each iteration

	--ec-privacy              Privacy-preserving Evaporative Cooling analysis
	--ec-privacy-train-file   Privacy EC training file for classifier
	--ec-privacy-holdout-file Privacy EC holdout file for classifier
	--ec-privacy-test-file    Privacy EC testing file for classifier
	--ec-privacy-start-temp   Privacy EC starting temperature
	--ec-privacy-final-temp   Privacy EC final temperature
	--ec-privacy-tau          Privacy EC tau
	--ec-privacy-update-frequency Privacy EC scores updated every frequency iterations
	--ec-privacy-percent-signal Privacy EC percent signal in simulation data sets
</pre>

<hr>
<em>
This document last modified Thursday, 28-Jun-2018 23:05:00 CDT
</em>

<?php include 'footer.html'; ?>
