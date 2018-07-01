<html>
<body>

<head>
	<link rel="stylesheet" href="plink.css" type="text/css">
	<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
	<title>inbix: In silico Bioinformatics Toolkit - PLINK Capabilities</title>
</head>

<font size="6" color="darkgreen"><b>inbix...</b></font>

<div style="position:absolute;right:10px;top:10px;font-size: 
75%"><em>Last original <tt>inbix</tt> release is <b>v0.99p</b>
(26-Jun-2018)</div>

<h1>inbix: <em>In silico</em> Bioinformatics Toolkit - PLINK Capabilities</h1>

<font size="1" color="darkgreen">
<em>
<a href="index.php">Return to inbix</a> |
<a href="index_plink.php">Introduction to PLINK</a> |
<a href="contact.shtml">Basics</a> |
<!--
<a href="download.shtml">Download</a> |
-->
<a href="reference.shtml">Reference</a> |
<a href="data.shtml">Formats</a> |
<a href="dataman.shtml">Data management</a> |
<a href="summary.shtml">Summary stats</a> |
<a href="thresh.shtml">Filters</a> |
<a href="strat.shtml">Stratification</a> |
<a href="ibdibs.shtml">IBS/IBD</a> |
<a href="anal.shtml">Association</a> |
<a href="fanal.shtml">Family-based</a> |
<a href="perm.shtml">Permutation</a> |
<a href="ld.shtml">LD calcualtions</a> |
<a href="haplo.shtml">Haplotypes</a> |
<a href="whap.shtml">Conditional tests</a> |
<a href="proxy.shtml">Proxy association</a> |
<a href="pimputation.shtml">Imputation</a> |
<a href="dosage.shtml">Dosage data</a> |
<a href="metaanal.shtml">Meta-analysis</a> |
<a href="annot.shtml">Result annotation</a> |
<a href="clump.shtml">Clumping</a> |
<a href="grep.shtml">Gene Report</a> |
<a href="epi.shtml">Epistasis</a> |
<a href="cnv.shtml">Rare CNVs</a> |
<a href="gvar.shtml">Common CNPs</a> |
<a href="rfunc.shtml">R-plugins</a> |
<a href="psnp.shtml">SNP annotation</a> |
<a href="simulate.shtml">Simulation</a> |
<a href="profile.shtml">Profiles</a> |
<a href="ids.shtml">ID helper</a> |
<a href="res.shtml">Resources</a> |
<a href="flow.shtml">Flow chart</a> | 
<a href="misc.shtml">Misc.</a> |
<a href="faq.shtml">FAQ</a>
<!--
<a href="gplink.shtml">gPLINK</a> 
-->
</em></font>
</p>

<table border=0>
<tr>

<td bgcolor="lightblue" valign="top" width=20%>

<font size="1">
<a href="index.php">0. Return to the inbix home page</a> </p>

<a href="index_plink.shtml">1. Introduction to PLINK</a> </p>

<a href="contact.shtml">2. Basic information</a> </p>
<ul> 
	<li> <a href="contact.shtml#cite">Citing PLINK</a>
	<li> <a href="contact.shtml#probs">Reporting problems</a>
	<li> <a href="news.shtml">What's new?</a>
	<li> <a href="pdf.shtml">PDF documentation</a>
</ul>

<a href="download.shtml">3. General notes</a> </p>
<ul> 
	<!--
	<li> <a href="download.shtml#download">Stable download</a>
	<li> <a href="download.shtml#latest">Development code</a>
	-->
	<li> <a href="download.shtml#general">General notes</a>
	<li> <a href="download.shtml#msdos">MS-DOS notes</a>
	<li> <a href="download.shtml#nix">Unix/Linux notes</a>
	<li> <a href="download.shtml#compilation">Compilation</a>
	<li> <a href="download.shtml#input">Using the command line</a>
	<li> <a href="download.shtml#output">Viewing output files</a>
	<li> <a href="changelog.shtml">Version history</a>
</ul>

<a href="reference.shtml">4. Command reference table</a> </p>
<ul> 
	<li> <a href="reference.shtml#options">List of options</a>
	<li> <a href="reference.shtml#output">List of output files</a> 
	<li> <a href="newfeat.shtml">Under development</a>
</ul>

<a href="data.shtml">5. Basic usage/data formats</a> 
<ul> 
	<li> <a href="data.shtml#plink">Running PLINK</a>
	<li> <a href="data.shtml#ped">PED files</a>
	<li> <a href="data.shtml#map">MAP files</a>
	<li> <a href="data.shtml#tr">Transposed filesets</a>
	<li> <a href="data.shtml#long">Long-format filesets</a>
	<li> <a href="data.shtml#bed">Binary PED files</a>
	<li> <a href="data.shtml#pheno">Alternate phenotypes</a>
	<li> <a href="data.shtml#covar">Covariate files</a>
	<li> <a href="data.shtml#clst">Cluster files</a>
	<li> <a href="data.shtml#sets">Set files</a>
</ul>

<a href="dataman.shtml">6. Data management</a> </p>
<ul>
	<li>  <a href="dataman.shtml#recode">Recode</a>
	<li>  <a href="dataman.shtml#recode">Reorder</a>
	<li>  <a href="dataman.shtml#snplist">Write SNP list</a>
	<li>  <a href="dataman.shtml#updatemap">Update SNP map</a>
	<li>  <a href="dataman.shtml#updateallele">Update allele information</a>
	<li>  <a href="dataman.shtml#refallele">Force reference allele</a>
	<li>  <a href="dataman.shtml#updatefam">Update individuals</a>
	<li>  <a href="dataman.shtml#wrtcov">Write covariate files</a>
	<li>  <a href="dataman.shtml#wrtclst">Write cluster files</a>
	<li>  <a href="dataman.shtml#flip">Flip strand</a>
	<li>  <a href="dataman.shtml#flipscan">Scan for strand problem</a>
	<li>  <a href="dataman.shtml#merge">Merge two files</a>
	<li>  <a href="dataman.shtml#mergelist">Merge multiple files</a>
	<li>  <a href="dataman.shtml#extract">Extract SNPs</a>
	<li>  <a href="dataman.shtml#exclude">Remove SNPs</a>
	<li>  <a href="dataman.shtml#zero">Zero out sets of genotypes</a>
	<li>  <a href="dataman.shtml#keep">Extract Individuals</a>
	<li>  <a href="dataman.shtml#remove">Remove Individuals</a>
	<li>  <a href="dataman.shtml#filter">Filter Individuals</a>
	<li>  <a href="dataman.shtml#attrib">Attribute filters</a>
	<li>  <a href="dataman.shtml#makeset">Create a set file</a>
	<li>  <a href="dataman.shtml#tabset">Tabulate SNPs by sets</a>
	<li>  <a href="dataman.shtml#snp-qual">SNP quality scores</a>
	<li>  <a href="dataman.shtml#geno-qual">Genotypic quality scores</a>
</ul>
 
<a href="summary.shtml">7. Summary stats</a>
<ul>
	<li> <a href="summary.shtml#missing">Missingness</a>
	<li> <a href="summary.shtml#oblig_missing">Obligatory missingness</a>
	<li> <a href="summary.shtml#clustermissing">IBM clustering</a>
	<li> <a href="summary.shtml#testmiss">Missingness by phenotype</a>
	<li> <a href="summary.shtml#mishap">Missingness by genotype</a>
	<li> <a href="summary.shtml#hardy">Hardy-Weinberg</a>
	<li> <a href="summary.shtml#freq">Allele frequencies</a>
	<li> <a href="summary.shtml#prune">LD-based SNP pruning</a>
	<li> <a href="summary.shtml#mendel">Mendel errors</a>
	<li> <a href="summary.shtml#sexcheck">Sex check</a>
	<li> <a href="summary.shtml#pederr">Pedigree errors</a>
</ul>

<a href="thresh.shtml">8. Inclusion thresholds</a>
<ul>
	<li> <a href="thresh.shtml#miss2">Missing/person</a>
	<li> <a href="thresh.shtml#maf">Allele frequency</a>
	<li> <a href="thresh.shtml#miss1">Missing/SNP</a>
	<li> <a href="thresh.shtml#hwd">Hardy-Weinberg</a>
	<li> <a href="thresh.shtml#mendel">Mendel errors</a>
</ul>

<a href="strat.shtml">9. Population stratification</a>
<ul>
 <li> <a href="strat.shtml#cluster">IBS clustering</a>
 <li> <a href="strat.shtml#permtest">Permutation test</a>
 <li> <a href="strat.shtml#options">Clustering options</a>
 <li> <a href="strat.shtml#matrix">IBS matrix</a>
 <li> <a href="strat.shtml#mds">Multidimensional scaling</a>
 <li> <a href="strat.shtml#outlier">Outlier detection</a>
</ul>

<a href="ibdibs.shtml">10. IBS/IBD estimation</a>
<ul>
	<li> <a href="ibdibs.shtml#genome">Pairwise IBD</a>
	<li> <a href="ibdibs.shtml#inbreeding">Inbreeding</a>
	<li> <a href="ibdibs.shtml#homo">Runs of homozygosity</a>
	<li> <a href="ibdibs.shtml#segments">Shared segments</a>
</ul>

<a href="anal.shtml">11. Association</a>
<ul>
	<li> <a href="anal.shtml#cc">Case/control</a>
	<li> <a href="anal.shtml#fisher">Fisher's exact</a>
	<li> <a href="anal.shtml#model">Full model</a>
	<li> <a href="anal.shtml#strat">Stratified analysis</a>
	<li> <a href="anal.shtml#homog">Tests of heterogeneity</a>
	<li> <a href="anal.shtml#hotel">Hotelling's T(2) test</a>
	<li> <a href="anal.shtml#qt">Quantitative trait</a>
	<li> <a href="anal.shtml#qtmeans">Quantitative trait means</a>
	<li> <a href="anal.shtml#qtgxe">Quantitative trait GxE</a>
	<li> <a href="anal.shtml#glm">Linear and logistic models</a>
	<li> <a href="anal.shtml#set">Set-based tests</a>
	<li> <a href="anal.shtml#adjust">Multiple-test correction</a>
</ul>

<a href="fanal.shtml">12. Family-based association</a>
<ul>
	<li> <a href="fanal.shtml#tdt">TDT</a>
	<li> <a href="fanal.shtml#ptdt">ParenTDT</a>
	<li> <a href="fanal.shtml#poo">Parent-of-origin</a>
	<li> <a href="fanal.shtml#dfam">DFAM test</a>
	<li> <a href="fanal.shtml#qfam">QFAM test</a>
</ul>

<a href="perm.shtml">13. Permutation procedures</a>
<ul>
	<li> <a href="perm.shtml#perm">Basic permutation</a>
	<li> <a href="perm.shtml#aperm">Adaptive permutation</a>
	<li> <a href="perm.shtml#mperm">max(T) permutation</a>
	<li> <a href="perm.shtml#rank">Ranked permutation</a>
	<li> <a href="perm.shtml#genedropmodel">Gene-dropping</a>
	<li> <a href="perm.shtml#cluster">Within-cluster</a>
	<li> <a href="perm.shtml#mkphe">Permuted phenotypes files</a>
</ul>

<a href="ld.shtml">14. LD calculations</a>
<ul>
	<li> <a href="ld.shtml#ld1">2 SNP pairwise LD</a>
	<li> <a href="ld.shtml#ld2">N SNP pairwise LD</a>
	<li> <a href="ld.shtml#tags">Tagging options</a>
	<li> <a href="ld.shtml#blox">Haplotype blocks</a>
</ul>

<a href="haplo.shtml">15. Multimarker tests</a>
<ul>
	<li> <a href="haplo.shtml#hap1">Imputing haplotypes</a>
	<li> <a href="haplo.shtml#precomputed">Precomputed lists</a>
	<li> <a href="haplo.shtml#hap2">Haplotype frequencies</a>
	<li> <a href="haplo.shtml#hap3">Haplotype-based association</a>
	<li> <a href="haplo.shtml#hap3c">Haplotype-based GLM tests</a>
	<li> <a href="haplo.shtml#hap3b">Haplotype-based TDT</a>
	<li> <a href="haplo.shtml#hap4">Haplotype imputation</a>
	<li> <a href="haplo.shtml#hap5">Individual phases</a>
</ul>

<a href="whap.shtml">16. Conditional haplotype tests</a>
<ul>
	<li> <a href="whap.shtml#whap1">Basic usage</a>
	<li> <a href="whap.shtml#whap2">Specifying type of test</a>
	<li> <a href="whap.shtml#whap3">General haplogrouping</a>
	<li> <a href="whap.shtml#whap4">Covariates and other SNPs</a>
</ul>

<a href="proxy.shtml">17. Proxy association</a>
<ul>
	<li> <a href="proxy.shtml#proxy1">Basic usage</a>
	<li> <a href="proxy.shtml#proxy2">Refining a signal</a>
	<li> <a href="proxy.shtml#proxy2b">Multiple reference SNPs</a>
	<li> <a href="proxy.shtml#proxy3">Haplotype-based SNP tests</a>
</ul>

<a href="pimputation.shtml">18. Imputation (beta)</a>
<ul>
	<li> <a href="pimputation.shtml#impute1">Making reference set</a>
	<li> <a href="pimputation.shtml#impute2">Basic association test</a>
	<li> <a href="pimputation.shtml#impute3">Modifying parameters</a>
	<li> <a href="pimputation.shtml#impute4">Imputing discrete calls</a>
	<li> <a href="pimputation.shtml#impute5">Verbose output options</a>
</ul>

<a href="dosage.shtml">19. Dosage data</a>
<ul>
	<li> <a href="dosage.shtml#format">Input file formats</a>
	<li> <a href="dosage.shtml#assoc">Association analysis</a>
	<li> <a href="dosage.shtml#output">Outputting dosage data</a>
</ul>

<a href="metaanal.shtml">20. Meta-analysis</a>
<ul>
	<li> <a href="metaanal.shtml#basic">Basic usage</a>
	<li> <a href="metaanal.shtml#opt">Misc. options</a>
</ul>

<a href="annot.shtml">21. Annotation (when compiled with web access)</a>
<ul>
	<li> <a href="annot.shtml#basic">Basic usage</a>
	<li> <a href="annot.shtml#opt">Misc. options</a>
</ul>

<a href="clump.shtml">22. LD-based results clumping</a>
<ul>
	<li> <a href="clump.shtml#clump1">Basic usage</a>
	<li> <a href="clump.shtml#clump2">Verbose reporting</a>
	<li> <a href="clump.shtml#clump3">Combining multiple studies</a>
	<li> <a href="clump.shtml#clump4">Best single proxy</a>
</ul>

<a href="grep.shtml">23. Gene-based report</a>
<ul>
	<li> <a href="grep.shtml#grep1">Basic usage</a>
	<li> <a href="grep.shtml#grep2">Other options</a>
</ul>

<a href="epi.shtml">24. Epistasis</a>
<ul>
	<li> <a href="epi.shtml#snp">SNP x SNP</a>
	<li> <a href="epi.shtml#case">Case-only</a>
	<li> <a href="epi.shtml#gene">Gene-based</a>
</ul>

<a href="cnv.shtml">25. Rare CNVs</a>
<ul>
	<li> <a href="cnv.shtml#format">File format</a>
	<li> <a href="cnv.shtml#maps">MAP file construction</a>
	<li> <a href="cnv.shtml#loading">Loading CNVs</a>
	<li> <a href="cnv.shtml#olap_check">Check for overlap</a>
	<li> <a href="cnv.shtml#type_filter">Filter on type </a>
	<li> <a href="cnv.shtml#gene_filter">Filter on genes </a> 
	<li> <a href="cnv.shtml#freq_filter">Filter on frequency </a>
	<li> <a href="cnv.shtml#burden">Burden analysis</a>
	<li> <a href="cnv.shtml#burden2">Geneset enrichment</a>
	<li> <a href="cnv.shtml#assoc">Mapping loci</a>
	<li> <a href="cnv.shtml#reg-assoc">Regional tests</a>
	<li> <a href="cnv.shtml#qt-assoc">Quantitative traits</a>
	<li> <a href="cnv.shtml#write_cnvlist">Write CNV lists</a>
	<li> <a href="cnv.shtml#report">Write gene lists</a>
	<li> <a href="cnv.shtml#groups">Grouping CNVs </a>
</ul>

<a href="gvar.shtml">26. Common CNPs</a>
<ul>
	<li> <a href="gvar.shtml#cnv2"> CNPs/generic variants</a>
	<li> <a href="gvar.shtml#cnv2b"> CNP/SNP association</a>
</ul>

<a href="rfunc.shtml">27. R-plugins</a>
<ul>
	<li> <a href="rfunc.shtml#rfunc1">Basic usage</a>
	<li> <a href="rfunc.shtml#rfunc2">Defining the R function</a>
	<li> <a href="rfunc.shtml#rfunc2b">Example of debugging</a>
	<li> <a href="rfunc.shtml#rfunc3">Installing Rserve</a>
</ul>

<a href="psnp.shtml">28. Annotation web-lookup (when compiled with web access)</a>
<ul>
	<li> <a href="psnp.shtml#psnp1">Basic SNP annotation</a>
	<li> <a href="psnp.shtml#psnp2">Gene-based SNP lookup</a>
	<li> <a href="psnp.shtml#psnp3">Annotation sources</a>
</ul>

<a href="simulate.shtml">29. Simulation tools</a>
<ul>
	<li> <a href="simulate.shtml#sim1">Basic usage</a>
	<li> <a href="simulate.shtml#sim2">Resampling a population</a>
	<li> <a href="simulate.shtml#sim3">Quantitative traits</a>
</ul>

<a href="profile.shtml">30. Profile scoring</a>
<ul>
	<li> <a href="profile.shtml#prof1">Basic usage</a>
	<li> <a href="profile.shtml#prof2">SNP subsets</a>
	<li> <a href="profile.shtml#dose">Dosage data</a>
	<li> <a href="profile.shtml#prof3">Misc options</a>
</ul>

<a href="ids.shtml">31. ID helper</a>
<ul>
	<li> <a href="ids.shtml#ex">Overview/example</a>
	<li> <a href="ids.shtml#intro">Basic usage</a>
	<li> <a href="ids.shtml#check">Consistency checks</a>
	<li> <a href="ids.shtml#alias">Aliases</a>
	<li> <a href="ids.shtml#joint">Joint IDs</a>
	<li> <a href="ids.shtml#lookup">Lookups</a>
	<li> <a href="ids.shtml#replace">Replace values</a>
	<li> <a href="ids.shtml#match">Match files</a>
	<li> <a href="ids.shtml#qmatch">Quick match files</a>
	<li> <a href="ids.shtml#misc">Misc.</a>
</ul>

<a href="res.shtml">32. Resources</a>
<ul>
	<li> <a href="res.shtml#hapmap">HapMap (PLINK format)</a>
	<li> <a href="res.shtml#teach">Teaching materials</a>
	<li> <a href="res.shtml#mmtests">Multimarker tests</a>
	<li> <a href="res.shtml#sets">Gene-set lists</a>
	<li> <a href="res.shtml#glist">Gene range lists</a>
	<li> <a href="res.shtml#attrib">SNP attributes</a>
</ul>

<a href="flow.shtml">33. Flow-chart</a>
<ul>
	<li> <a href="flow.shtml">Order of commands</a>
</ul>

<a href="misc.shtml">34. Miscellaneous</a>
<ul>
	<li> <a href="misc.shtml#opt">Command options/modifiers</a>
	<li> <a href="misc.shtml#output">Association output modifiers</a>
	<li> <a href="misc.shtml#species">Different species</a>
	<li> <a href="misc.shtml#bugs">Known issues</a>
</ul>

<a href="faq.shtml">35. FAQ &amp; Hints</a>
<!--
</p>
<a href="gplink.shtml">36. gPLINK</a>
<ul>
	<li> <a href="gplink.shtml">gPLINK mainpage</a>
	<li> <a href="gplink_tutorial/index.html">Tour of gPLINK</a>
	<li> <a href="gplink.shtml#overview">Overview: using gPLINK</a>
	<li> <a href="gplink.shtml#locrem">Local versus remote modes</a>
	<li> <a href="gplink.shtml#start">Starting a new project</a>
	<li> <a href="gplink.shtml#config">Configuring gPLINK</a>
	<li> <a href="gplink.shtml#plink">Initiating PLINK jobs</a>
	<li> <a href="gplink.shtml#view">Viewing PLINK output</a>
	<li> <a href="gplink.shtml#hv">Integration with Haploview</a>
	<li> <a href="gplink.shtml#down">Downloading gPLINK</a></p>
</ul>
-->
<a href="index.php">Return to the inbix home page</a> 
</p>

</font>
</td><td width=5%>

<td valign="top">

&nbsp;</p>

<table border=0 width=100%>
<tr><td width=70%>

<p><font color="red"><b>New (15-May-2014)</font>: PLINK 1.9 is now <a href="plink2.shtml">available</a> for beta-testing!</b></p><hr>

<tt><font color="darkgreen"><b>PLINK</b></font></tt> is a free, 
open-source whole genome association analysis toolset, designed to perform 
a range of basic, large-scale analyses in a computationally efficient 
manner. 

</p>

The focus of <tt><font color="darkgreen"><b>PLINK</b></font></tt> 
is purely on <em>analysis</em> of genotype/phenotype data, so
there is no support for steps prior to this (e.g. study design 
and planning, generating genotype or CNV calls from raw data). 
Through integration with <a href="gplink.shtml">gPLINK</a> and 
<a href="http://www.broad.mit.edu/mpg/haploview">Haploview</a>, 
there is some support for the subsequent visualization, annotation 
and storage of results. 

</p>

<tt><font color="darkgreen"><b>PLINK</b></font></tt> was developed by 
<a href="http://zzz.bwh.harvard.edu">Shaun Purcell</a> whilst at the 
Center for Human Genetic Research (<a href="http://chgr.mgh.harvard.edu">CHGR</a>),
Massachusetts General Hospital (<a 
href="http://www.mgh.harvard.edu">MGH</a>), and the <a 
href="http://www.broad.mit.edu">Broad Institute</a> of Harvard & MIT,
with the <a href="credits.shtml">support of others</a>. 
&nbsp;
</p>

&nbsp;
</p>
<b><em>New in 1.07</em></b>: <a href="metaanal.shtml">meta-analysis</a>, <a href="annot.shtml">result annotation</a> 
and analysis of <a href="dosage.shtml">dosage data</a>.

&nbsp;
</p>

</td><td valign="top" align="center">
                                                                                                     
<div align="left"
style="
border-top:2px solid #225522;
border-bottom:2px solid #225522;
padding:5px;
margin:5px;
background:  #CCDDFF;
background:  #f0f5f0;
width:150px;">

<b><em><font color="darkgreen">Quick links</font></em></b></p>
<a href="tutorial.shtml"><tt>PLINK</tt> tutorial</a> </p>
<!-- <a href="gplink.shtml"><tt>gPLINK</tt></a> </p> -->
<a href="http://amber.mgh.harvard.edu/mailman/listinfo/plink-list">Join e-mail list</p></a>
<a href="res.shtml">Resources</a></p>
<a href="faq.shtml">FAQs</a> | <a href="pdf.shtml">PDF</a></p>
<a href="contact.shtml#cite">Citing <tt>PLINK</tt></a></p>
<a href="contact.shtml#probs">Bugs, questions?</a> </p>
</div>

</td></tr></table>

<h1> Data management</h1>
<ul>
	<li> Read data in a variety of formats
	<li> Recode and reorder files
	<li> Merge two or more files
	<li> Extracts subsets (SNPs or individuals) 
	<li> Flip strand of SNPs
	<li> Compress data in a binary file format
</ul>

<h1>Summary statistics for quality control</h1>
<ul>
  <li> Allele, genotypes frequencies, HWE tests
  <li> Missing genotype rates
  <li> Inbreeding, IBS and IBD statistics for individuals and pairs of individuals
  <li> non-Mendelian transmission in family data
  <li> Sex checks based on X chromosome SNPs
  <li> Tests of non-random genotyping failure
</ul>

<h1> Population stratification detection</h1>
<ul>
  <li> Complete linkage hierarchical clustering
  <li> Handles virtually unlimited numbers of SNPs
  <li> Multidimensional scaling analysis to visualise substructure
  <li> Significance test for whether two individuals belong to the same population
  <li> Constrain cluster solution by phenotype, cluster size and/or external matching criteria
  <li> Perform subsequent association analyses conditional on cluster solution 
</ul> 

<h1> Basic association testing</h1>
<ul>
  <li> Case/control
  	<ul>
			<li> Standard allelic test
			<li> Fisher's exact test
			<li> Cochran-Armitage trend test
			<li> Mantel-Haenszel and Breslow-Day tests for stratified samples
			<li> Dominant/recessive and general models
			<li> Model comparison tests (e.g. general versus multiplicative)
  	</ul>
  <li> Family-based association (TDT, sibship tests)
  <li> Quantitative traits, association and interaction
  <li> Association conditional on one or more SNPs
  <li> Asymptotic and empirical p-values
  <li> Flexible clustered permutation scheme
  <li> Analysis of genotype probability data and fractional allele coounts (post-imputation)
</ul>

 <h1> Multimarker predictors, haplotypic tests</h1>
<ul>
	<li> Suite of flexible, conditional haplotype tests
	<li> Case/control and TDT association on the probabilistic haplotype phase
	<li> A set of proxy associaiton" methods to study single SNP associations in their local haplotypic context
	<li> Imputation heuristic, to test untyped SNPs given a reference panel
</ul>

<h1> Copy number variant analysis</h1>
<ul>
	<li> Joint SNP and CNV tests for common copy number variants
	<li> Filtering and summary procedures for segmental (rare) CNV data
	<li> Case/control comparison tests for global CNV properties
	<li> Permutation-based association procedure for identifying specific loci
</ul>

<h1> Additional tests</h1>
<ul>
	<li> Gene-based tests of association
	<li> Screen for epistasis
	<li> Gene-environment interaction with continuous and dichotomous environments
</ul>

<h1>Meta-analysis</h1>
<ul>
	<li> Automatically combine several generically-formatted summary files, for millions of SNPs
	<li> Fixed and random effects models
</ul>

<h1>Result annotation and reporting</h1>
<ul>
	<li> Post-analysis annotation of result files
	<li> LD-based and region-based grouping of results across multiple studies
</ul>

<h1> Additional features</h1>
<ul>
	<li> Extensible with via R function plug-ins 
	<li> Web-based SNP and gene annotation lookup feature
	<li> Simple SNP simulation feature
	<li> ID helper tools, for tracking and working with project data
	<li> See the main documentation for full list of features
</ul>

</td>
<td width=5%>&nbsp;</td>
</tr>
</table>

<hr>
<em>
 This document last modified Friday, 29-Jun-2018 20:09:27 CDT
</em><

</body>

<HEAD>
<META HTTP-EQUIV="PRAGMA" CONTENT="NO-CACHE">
</HEAD>
</html>

