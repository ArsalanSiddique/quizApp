	<?php
		echo $c_id = $_REQUEST["category"];
	?>
	<div class="container">
		<div class="row">
			<div class="col-md-10" style="border:1px solid grey;margin-left:100px;margin-right:100px;margin-top:50px;">
				<div class="col-md-6 top-h1">
					<h1>Web Designing Quiz</h1>
				</div>
				<div class="col-md-6 quiz-btn">
					<a href="index.php?page=quiz&category=<?php echo $c_id; ?>"><button type="button" class="btn btn-md btn-primary pull-right">START QUIZ</button></a>
				</div>
			</div>
			<div class="col-md-10" style="border:1px solid grey;border-top:none;margin-left:100px;padding-top: 50px;margin-bottom: 50px;">
				<div class="col-md-6">
					<table class="table">
						<caption><h1 align="center" style="font-family:times new roman">Rankings</h1></caption>
						<thead>
							<tr>
								<th>#</th>
								<th>Player</th>
								<th>Marks</th>
							</tr>
						</thead>
						<tbody>
							<?php
								//$rankingObj->ranking($c_id);
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>