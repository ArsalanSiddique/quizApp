	
	<div class="container-fluid result">
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-8">
					<div class="score">
						<p>YOUR SCORE</p>
						<p class="percent">96%</p>
						<p>7/10 (Pass)</p>
					</div>	
				</div>
			</div>
			<div class="col-md-12 mytabs">
				<ul class="nav nav-tabs">
					<li class="active"><a href="#result" data-toggle="tab">Result</a></li>
					<li><a href="#analysis" data-toggle="tab">Analysis</a></li>
					<li><a href="#b_rank" data-toggle="tab">Batch Ranking</a></li>
				</ul>
				
				<div class="tab-content">
					<div id="result" class="tab-pane fade in active">
						<div class="thumbnail">
							<div class="profile">
								<img src="./images/admin.png" alt="user">
								<span class="name">Arsalan Ahmed</span>
							</div>
							<table class="table" style="">
								<thead style="display: none;">
									<tr>
										<th></th>
										<th></th>
										<th></th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><b>Score</b></td>
										<td>96% (Pass)</td>
										<td><b>Started</b></td>
										<td>28 Feb 2018 02:22:04 AM</td>
									</tr>
									<tr>
										<td><b>Attempted</b</td>
										<td></td>
										<td><b>Completed</b></td>
										<td>28 Feb 2018 2:27:15 AM</td>
									</tr>
									<tr>
										<td><b>Correct</b</td>
										<td></td>
										<td><b>Questions</b></td>
										<td>10</td>
									</tr>
									<tr>
										<td><b>Incorrect</b></td>
										<td></td>
										<td><b>Total Points</b></td>
										<td>7</td>
									</tr>
									<tr>
										<td><b>Reports</b></td>
										<td>Download</td>
										<td><b>Passing Points</b></td>
										<td></td>
									</tr>
									<tr>
										<td></td>
										<td>Detailed Report</td>
										<td><b>Points Per Question</b></td>
										<td>1</td>
									</tr>
									<tr>
										<td></td>
										<td></td>
										<td><b>Duration</b></td>
										<td>05:49</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div id="analysis" class="tab-pane fade">
						<div class="thumbnail">
							<div class="row analysis-questions">
								<div class="col-md-12">
									<div class="question">
										<p class="qn">
											Q18: <span class="q">HTTPS stand for?</span>
										</p>
									</div>
									<form action="" class="form-group myform">
										<label class="container"> &nbsp&nbsp Hyper Text Transform Protocol Secure
										  <input type="radio" checked="checked" name="radio">
										  <span class="checkmark"></span>
										</label>
										<label class="container"> &nbsp&nbsp Hyper Text Transform Protocol Service
										  <input type="radio" name="radio">
										  <span class="checkmark"></span>
										</label>
										<label class="container"> &nbsp&nbsp Hyper Text Transfer Protocol Secure
										  <input type="radio" name="radio">
										  <span class="checkmark"></span>
										</label>
										<label class="container"> &nbsp&nbsp Hyper Type Transform Protocol Secure
										  <input type="radio" name="radio">
										  <span class="checkmark"></span>
										</label>
									</form>
									<div class="col-md-12">
										<form action=""><a href="#"><button type="button" class="btn btn-md btn-success pull-right next-btn" style="padding-left:20px;padding-right:20px;">PERIVIOUS</button></a><a href="#"><button type="button" class="btn btn-md btn-success pull-right next-btn" style="padding-left:20px;padding-right:20px;">NEXT</button></a></form>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div id="b_rank" class="tab-pane fade">
						<div class="thumbnail">
							<div class="row">
								<div class="col-md-12" style="">
									<div class="col-md-12 top-h1" style="border-bottom:1px solid lightgrey;">
										<h1>Your Batch Rank</h1>
									</div>
								</div>
								<div class="col-md-12" style="order-top:none;">
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
													
													$object->ranking('2');
												?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>