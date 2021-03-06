<?php 
$config->urls->templates;
include("_header.php");
?>

				<!-- Hero Section -->
				<section class="hero">

					<div class="wrap">

						<h1><?php echo $page->welcome_message; ?></h1>

						<ul class="flex-container main-image-wrapper">

						<?php 

							$images = $page->carousel_images;

							if (count($images) > 0) {

								foreach ($images as $image) {

									echo "<li class='flex-item'>";

										echo "<img class='main-image' src='{$image->url}' alt='{$image->description}'>";

										echo "<div class='description'>";

													echo "<p class='description-content'>$image->description</p>";

										echo "</div>";

									echo "</li>";

								}

							}


							$images = $page->images;

							if (count($images) > 0) {

								foreach ($images as $image) {

									echo "<li class='flex-item'>";

										echo "<a href='$image->url' target='_blank'>";

											echo "<img class='main-image' src='{$image->width(450)->url}' alt='{$image->description}'>";

										echo "</a>";

									echo "</li>";

								}

							}									  
								
						?>

						</ul>

					</div>

				</section>

				<!-- Main Section -->
				<section class="main">

					<div class="wrap">

						<h1>Services</h1>

						<ul class="flex-container image-container">

							<?php

							$images = $page->services_images;

							$menus = array("Vehicle Maintenance and Repairs", "Welding and Fabrication Work", "Machine Installation");

							$links = array("#first", "#second", "#third");

							if (count($images) > 0) {

								$i = 0;

								foreach ($images as $image) {

									echo "<li class='flex-container_2'>";

										$url = $pages->get(1015)->url;

										$url .= $links[$i];

										echo "<img class='main-icons flex-item' src='{$image->size(210,210)->url}' alt='{$image->description}'>";

										echo "<a class='button flex-item' href='$url'>$menus[$i]</a>";

										$i++;

									echo "</li>";


								}

							}

							?>

						</ul>


						<ul class="credits">

							<li><p>Credits</p></li>
							<li><p><span>Wrench Icon:</span> made by <a href="http://www.flaticon.com/authors/gregor-cresnar">Gregor Cresnar</a> from <a href="http://www.flaticon.com">www.flaticon.com</a></p></li>
							<li><p><span>Welding Mask Icon:</span> made by <a href="http://www.flaticon.com/authors/freepik">Freepik</a> from <a href="http://www.flaticon.com">www.flaticon.com</a></p></li>
							<li><p><span>Drill Icon:</span> made by <a href="http://www.flaticon.com/authors/freepik">Freepik</a> from <a href="http://www.flaticon.com">www.flaticon.com</a></p></li>

						</ul>

					</div>

				</section>

<?php 
$config->urls->templates;
include("_footer.php");
?>