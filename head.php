		<div class="span12">
			<div class="header">
				<div class="pull-left">
					<img class="stilogo" src="LMS/nit.jpg" class="img-rounded">
				</div>
			</div>

			<div class="alert alert-info">Welcome to NIT Meghalaya Library &nbsp;
				<div class="pull-right">
					<i class="icon-calendar icon-small"></i>
					<?php
					$Today = date('y:m:d');
					$new = date('l, F d, Y', strtotime($Today));
					echo $new;
					?>
				</div>
			</div>		
		</div>