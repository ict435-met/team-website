<!-- Main -->
				<div id="main-wrapper">
					<div class="container">
						<div id="content">
						<div class="row 200%">
							<div class="4u 12u$(medium)">
								<div id="sidebar">
									<!-- Sidebar -->
										<section>
<?php
/* Make li for report links more sensible
 * Whenever a report is added an an element to this array
 */
$links = array( '20160612' => 'Week of 6/05 - 6/12', '20160619' => 'Week of 6/12 - 6/19',
		'20160626' => 'Week of 6/19 - 6/26', '20160703' => 'Week of 6/26 - 7/03',
		'20160710' => 'Week of 7/03 - 7/10');
foreach ($links as $r_file => $r_title) {
	echo '<p><a class="button '.(($report == 'reports.'.$r_file.'.page.php')?'':'alt').'" href="?p=reports/'.$r_file.'">'.$r_title.'</a></p>';
}
?>
										</section>
								</div>
							</div>
							<div class="8u 12u$(medium) important(medium)">
								<div id="content">

							<!-- Content -->
								<article>

<?php
if (isset($report)) {
	include($report);
};
?>
                                				</article>

						</div>
					</div>
				</div>
