<HTML>
	<HEAD>
		<TITLE>이화푸드 매출 분석 - 7조</TITLE>
	</HEAD>

	<BODY bgcolor="#FAF5E4">
		<!-- 제목 -->
		<center>
			<br><h1 style="color: #125B50">이화푸드 매출 분석 보고서</h1>
			<h4 style="color: gray">데이터베이스 03분반 7조</h4>

			<!-- 연결 테스트 -->
			<?php
				$conn=mysqli_connect("localhost", "web", "web_admin", "company");
				if (!$conn) {
					echo "Database Connection Error!";
				} else {
					echo "Database Connection Success!";
				}

				if (mysqli_connect_errno()) {
					echo "Could not connect: " . mysqli_connect_errno();
					exit();
				}

				$query = "SELECT deptno, deptname, floor FROM department";
				$result = mysqli_query($conn, $query);
			?>



			<!-- 1번 질의 -->
			<br><br><hr><br>
			<h2 style="color: #FF6363">1. 성별과 나이 별 주문 건수와 매출 분석</h2>

			<!-- 테이블 작성 -->
			<form>
				<table border=1>
					<tr>
						<td>부서번호</td>
						<td>부서이름</td>
						<td>층		</td>
					</tr>
					<?php 
						while ($row = mysqli_fetch_array($result)) { ?>
						<tr>
							<td><?=$row['deptno']?></td>
							<td><?=$row['deptname']?></td>
							<td><?=$row['floor']?></td>
						</tr>
					<?php } ?>
				</table>
			</form>

			<!-- 임의 분석 결과 -->
			<h4>[ 매출 상승을 위한 솔루션 ]</h4>
			<div>
				나이가 많을수록 ㅇㅇ를 선호한다. 성별에는 유의미한 차이가 없으므로, ~~ 
			</div>
		
		
		
			<!-- 2번 질의 -->
			<br><br><hr><br>
			<h2 style="color: #FF6363">2. 요일별 코너별 주문 건수와 매출</h2>

			<!-- 테이블 작성 -->
			<form>
				<table border=1>
					<tr>
						<td>부서번호</td>
						<td>부서이름</td>
						<td>층		</td>
					</tr>
					<?php 
						while ($row = mysqli_fetch_array($result)) { ?>
						<tr>
							<td><?=$row['deptno']?></td>
							<td><?=$row['deptname']?></td>
							<td><?=$row['floor']?></td>
						</tr>
					<?php } ?>
				</table>
			</form>

			<!-- 임의 분석 결과 -->
			<h4>[ 매출 상승을 위한 솔루션 ]</h4>
			<div>
				금요일에 ㅇㅇ코너와 ㅇㅇ코너의 매출이 눈에 띄게 오르는 것으로 보아, 주말에 ㅇㅇ한 음식을 자주 먹는 경향이 있음을 알 수 있다. <br>
				따라서 금요일에는 물량을 다른 곳보다 ㅇㅇ코너에 집중함으로서 재료비 및 인건비 낭비를 줄인다.  
			</div>



			<!-- 3번 질의 -->
			<br><br><hr><br>
			<h2 style="color: #FF6363">3. 시간대별 코너별 주문 건수와 매출</h2>

			<!-- 테이블 작성 -->
			<form>
				<table border=1>
					<tr>
						<td>부서번호</td>
						<td>부서이름</td>
						<td>층		</td>
					</tr>
					<?php 
						while ($row = mysqli_fetch_array($result)) { ?>
						<tr>
							<td><?=$row['deptno']?></td>
							<td><?=$row['deptname']?></td>
							<td><?=$row['floor']?></td>
						</tr>
					<?php } ?>
				</table>
			</form>
			<?php 
				mysqli_free_result($result);
				mysqli_close($conn);
			?>

			<!-- 임의 분석 결과 -->
			<h4>[ 매출 상승을 위한 솔루션 ]</h4>
			<div>
				ㅇㅇ시부터 ㅇㅇ시까지 점심시간에 ㅁㅁ코너의 매출이 급격히 상승하는 것으로 보아,
				식당 주변 회사원들이 점심 메뉴로 식사가 빠르고 간편한 ㅁㅁ를 주로 선택함을 알 수 있다. <br>
				따라서 비슷한 메뉴로 런치 세트나, 곁들이기 좋은 사이드메뉴를 개발하면 매출이 오를 것이다. 
			</div>
		</center>
	</BODY>
</HTML>
