<?php
include('config/db_connect.php');
// write query for all pizzas
$sql = 'SELECT title, ingredients, id FROM pizzas ORDER BY created_at';
// get the result set (set of rows)
$result = mysqli_query($conn, $sql);
// fetch the resulting rows as an array
$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);
// free the $result from memory (good practise)
mysqli_free_result($result);
// close connection
mysqli_close($conn);
// print_r($pizzas);
// print_r(explode(',',$pizzas[0][ingredients]));

?>
<!DOCTYPE html>
<html>

<?php include('templates/header.php');?>
<h4 class="center grey-text">Add Your Favourite Pizzas Here!</h4>

	<div class="container">
		<div class="row">

			<?php foreach($pizzas as $pizza){ ?>

				<div class="col s12 m6">
					<div class="card z-depth-0">
					<img src="img/pizza.svg" class="pizza">
						<div class="card-content center">
						<a href="details.php?id=<?php echo $pizza['id']?>"><h6 class="phead"><?php echo htmlspecialchars($pizza['title']); ?></h6></a>
							<ul class="grey-text">
								<?php foreach(explode(',', $pizza['ingredients']) as $ing){ ?>
									<li><?php echo htmlspecialchars($ing); ?></li>
								<?php } ?>
							</ul>
						</div>
						<div class="card-action right-align">
							<a class="brand-text" href="details.php?id=<?php echo $pizza['id']?>">more info</a>
	
						</div>
					</div>
				</div>

			<?php } ?>

		</div>
	</div>


<?php include('templates/footer.php');?>
</html>