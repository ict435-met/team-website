<?php
echo <<<'EOD'
<!-- Main -->
				<div id="main-wrapper">
					<div class="container">
						<div id="content">
						<div class="row 200%">
							<div class="4u 12u$(medium)">
								<div id="sidebar">
									<!-- Sidebar -->
										<section>
											<ul>
                             								   <li><?php if($report == 'reports.20160612.page.php') {echo 'class="current"';}?><a href="?p=reports/20160612">Report for week of 6/5 through 6/12</a></li>
                               								   <li><?php if($report == 'reports.20160619.page.php') {echo 'class="current"';}?><a href="?p=reports/20160619">Report for week of 6/12 through 6/19</a></li>
                                       							</ul>
										</section>
								</div>
							</div>
							<div class="8u 12u$(medium) important(medium)">
								<div id="content">

							<!-- Content -->
								<article>

EOD;
								
								if (isset($report)) {
									include($report);
								}
echo <<<'EOD'
                                				</article>

						</div>
					</div>
				</div>
EOD;
?>
