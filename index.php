<?php
  require("request.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CRUD приложение на PHP</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
</head>
<body>
<div class="container">
		<a href="#Modal" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#Modal" title="Добавить"><i class="fa fa-user-plus"></i></a> 
		<div class="row">
			<div class="col mt-1">
				<table class="table shadow ">
					<thead class="thead-dark">
						<tr>
							<th>№</th>
							<th>Имя</th>
							<th>E-mail</th>
							<th>Телефон</th>
							<th>Действие</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($result as $res) { ?>
						<tr>
							<td><?php echo $res->id; ?></td>
							<td><?php echo $res->name; ?></td>
							<td><?php echo $res->email; ?></td>
							<td><?php echo $res->tel; ?></td>
							<td>
								<a href="?info=<?php echo $res->id;?>" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#ModalInfo<?php echo $res->id; ?>" title="Карточка"><i class="fa fa-user"></i></a> 
								<a href="?edit=<?php echo $res->id;?>" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#editModal<?php echo $res->id; ?>" title="Редактировать"><i class="fa fa-edit"></i></a> 
								<a href="?delete=<?php echo $res->id;?>" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal<?php echo $res->id; ?>" title="Удалить"><i class="fa fa-trash"></i></a>
							</td>
						</tr>
						<?php require 'add_modal.php'; ?>
						<?php } ?>	
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<!-- Modal create -->
	<div class="modal fade" tabindex="-1" role="dialog" id="Modal">
	  <div class="modal-dialog modal-dialog-centered" role="document">
	    <div class="modal-content shadow">
	      <div class="modal-header">
	        <h5 class="modal-title">Добавить пользователя</h5>
	        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form action="request.php" method="post">
	        	<div class="form-group">
	        		<input type="text" class="form-control" name="name" value="" placeholder="Имя" required>
              <br>
	        		<input type="email" class="form-control" name="email" value="" placeholder="Почта" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
              <br>
	        		<input type="tel" class="form-control" name="tel" value="" placeholder="Телефон" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
	        	</div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Отмена</button>
	        <button type="submit" name="create" class="btn btn-primary">Добавить</button>
	      </div>
	  		</form>
	    </div>
	  </div>
	</div>
  <!-- Modal create -->



	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</body>
</html>