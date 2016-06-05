<!-- Nav -->
							<nav id="nav">
								<ul>
									<li <?php if($page == 'index.page.php') {echo 'class="current"';}?>><a href="index.php">Welcome</a></li>
									<li <?php if(substr($page, 0, 4) == 'team') {echo 'class="current"';}?>>
										<a href="#">Team Members</a>
										<ul>
											<li <?php if($page == 'team.aaron.page.php') {echo 'class="current"';}?>><a href="?p=team/aaron">Aaron Wood</a></li>
											<li <?php if($page == 'team.brian.page.php') {echo 'class="current"';}?>><a href="?p=team/brian">Brian Campbell</a></li>
											<li <?php if($page == 'team.felipe.page.php') {echo 'class="current"';}?>><a href="?p=team/felipe">Felipe Parra</a></li>
											<li <?php if($page == 'team.louis.page.php') {echo 'class="current"';}?>><a href="?p=team/louis">Louis Bear Eagle</a></li>
											<li <?php if($page == 'team.rockson.page.php') {echo 'class="current"';}?>><a href="?p=team/rockson">Rockson Opoku</a></li>
										</ul>
									</li>
									<li <?php if($page == 'timeline.page.php') {echo 'class="current"';}?>><a href="?p=timeline">Timeline</a></li>
									<li <?php if($page == 'reports.page.php') {echo 'class="current"';}?>><a href="?p=reports">Reports</a></li>
								</ul>
							</nav>