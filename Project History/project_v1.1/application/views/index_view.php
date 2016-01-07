
<?php echo $map['js'];?>
<?php echo $map['html'];?>

<!-- hero area (the grey one with a slider -->
<section id="hero" class="clearfix">    


<!-- main content area -->   
<div class="wrapper" id="main"> 

	<!-- content area -->    
	<section id="content" class="wide-content">
		<h1>Warehouse project covers</h1>
		<ul>
			<li>user authentication (admin and worker level)</li>
			<li>user management (add, edit, delete)</li>
			<li>library of products (add, edit, delete)</li>
			<li>adding products and management in flow (production -> on way -> in warehouse -> sold)</li>
			<li>notes management </li>
			<li>notes reminder </li>
			<li>action log (who?, when?, what?)</li>
			<li>search products changes in selected time</li>
			<li>one click backup</li>
			<li>easy system clearing (one button to clear all numeric values)</li>
			<li>multi language translation (translating one file translates whole warehouse)</li>
		</ul>
		<h1>Upcoming changes</h1>
		<ul>
			<li>restriction of + values in some forms</li>
		</ul>
		If you would like to find out how flow in Warehouse works, please read this <a href="<?php base_url(); ?>flow.pdf" target="_blank">flow.pdf</a> document.
	</section><!-- #end content area -->
</div>



<div class="wrapper" id="demo"> 

	<!-- content area -->    
	<section id="content" class="wide-content">
		<h1>Demo</h1>
		<p>To signin please use following administrator's data. Please take in mind that editing admin data on this demo system is locked.</p>
		<ul>
			<li>login: <b>root</b></li>
			<li>password: <b>root</b></li>
		</ul>
	</section><!-- #end content area -->
</div><!-- #end div #main .wrapper -->

<?php $this->load->view('template/footer_view.php'); ?>