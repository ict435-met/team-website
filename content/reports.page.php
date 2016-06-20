<?php
echo<<<'EOD'
<!-- Main -->
				<div id="main-wrapper">
					<div class="container">
						<div id="content">

							<!-- Content -->
								<article>

								<ul>
                                <li>
                                <?php if($page == 'reports.20160612.page.php') {echo 'class="current"';}?><a href="?p=reports/20160612">Report for week of 6/5 through 6/12</a></li>
                                
                                <li>
                                <?php if($page == 'reports.20160619.page.php') {echo 'class="current"';}?><a href="?p=reports/20160619">Report for week of 6/12 through 6/19</a></li>
                                
                                </ul>
                                
                         
                                
                                </article>

						</div>
					</div>
				</div>
EOD;
?>
