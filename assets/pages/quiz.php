	<?php if(isset($_REQUEST["category"]))
			$c_id = $_REQUEST["category"];
	?>
	<div class="container-fluid quizs" style="margin-top:3px;height:;">
		<div class="row quiz-questions">
			<div class="col-md-12" style="border:1px solid grey;">
				<div class="col-md-6">
					<p>Score: <span style="font-weight:bold;">120</span></p>
				</div>
				<div class="col-md-6">
					<p class="pull-right">Time: <span style="font-weight:bold;">1m 59s</span></p>
				</div>
			</div>
			<div class="col-md-12" style="border:1px solid grey;border-top:none;">
				<div class="question">
					<?php $object->question($c_id); ?>
				</div>
				
			</div>
		</div>
	</div>

