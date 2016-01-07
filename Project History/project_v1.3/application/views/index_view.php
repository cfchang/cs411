
<?php echo $map['js'];?>
<?php echo $map['html'];?>

<!-- hero area (the grey one with a slider -->
<section id="hero" class="clearfix">    


<!-- main content area -->   
<div class="wrapper" id="main"> 

	<!-- content area -->    
	<section id="content" class="wide-content">
		<h1>Napmaps project covers</h1>
		<ul>
			<li>user authentication (BU student or guest)</li>
			<li>user management (login, register)</li>
			<li>adding Locations and comments in flow (Location -> Add comment -> update map info -> display)</li>
			<li>action log (who?, when?, what?)</li>

		</ul>
		<h1>Upcoming changes</h1>
		<ul>
			<li>restriction of + values in some forms</li>
            <li>multi language translation (translating one file translates whole Napmaps)</li>
		</ul>
	</section><!-- #end content area -->
</div>



<div class="wrapper" id="demo"> 

	<!-- content area -->    
	<section id="content" class="wide-content">
		<h1>Demo</h1>
		<p>To signin please use following administrator's data.</p>
		<ul>
			<li>login: <b>root</b></li>
			<li>password: <b>root</b></li>
		</ul>
        <p>You can also sign up with your own infomation.</p>
	</section><!-- #end content area -->
</div><!-- #end div #main .wrapper -->

<?php $this->load->view('template/footer_view.php'); ?>