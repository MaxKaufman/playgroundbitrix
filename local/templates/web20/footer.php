<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>
<!-- Footer -->
<div id="footer">


	<div class="container">
		<div class="row">
			<section class="col-3 col-6-narrower col-12-mobilep">
				<h3>Links to Stuff</h3>
				<ul class="links">
					<?$APPLICATION->IncludeComponent(
						"bitrix:menu",
						"",
						Array(
							"ALLOW_MULTI_SELECT" => "N",
							"CHILD_MENU_TYPE" => "left",
							"DELAY" => "N",
							"MAX_LEVEL" => "1",
							"MENU_CACHE_GET_VARS" => array(""),
							"MENU_CACHE_TIME" => "3600",
							"MENU_CACHE_TYPE" => "N",
							"MENU_CACHE_USE_GROUPS" => "Y",
							"ROOT_MENU_TYPE" => "bottom",
							"USE_EXT" => "N"
						)
					);?>'
				</ul>
			</section>
			<section class="col-3 col-6-narrower col-12-mobilep">
				<h3>More Links to Stuff</h3>
				<ul class="links">
					<li><a href="#">Duis neque nisi dapibus</a></li>
					<li><a href="#">Sed et dapibus quis</a></li>
					<li><a href="#">Rutrum accumsan sed</a></li>
					<li><a href="#">Mattis et sed accumsan</a></li>
					<li><a href="#">Duis neque nisi sed</a></li>
					<li><a href="#">Sed et dapibus quis</a></li>
					<li><a href="#">Rutrum amet varius</a></li>
				</ul>
			</section>
			<section class="col-6 col-12-narrower">
				<h3>Get In Touch</h3>
				<form>
					<div class="row gtr-50">
						<div class="col-6 col-12-mobilep">
							<input type="text" name="name" id="name" placeholder="Name" />
						</div>
						<div class="col-6 col-12-mobilep">
							<input type="email" name="email" id="email" placeholder="Email" />
						</div>
						<div class="col-12">
							<textarea name="message" id="message" placeholder="Message" rows="5"></textarea>
						</div>
						<div class="col-12">
							<ul class="actions">
								<li><input type="submit" class="button alt" value="Send Message" /></li>
							</ul>
						</div>
					</div>
				</form>
			</section>
		</div>
	</div>

	<!-- Icons -->
	<ul class="icons">
		<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
		<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
		<li><a href="#" class="icon fa-github"><span class="label">GitHub</span></a></li>
		<li><a href="#" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
		<li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
	</ul>

	<!-- Copyright -->
	<div class="copyright">
		<ul class="menu">
			<li>&copy; Untitled. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
		</ul>
	</div>

</div>

</div>

<!-- Scripts -->
<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/jquery.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/jquery.dropotron.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/browser.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/breakpoints.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/util.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/main.js"></script>

</body>
</html>