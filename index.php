<?php
$servico1 = [
    'nome'=>'Manicure',
    'preco'=> '28,00',
];

$servico2 = [
  'nome' => 'Pedicure',
  'preco' => '32,00',
];

$servico3 = [
  'nome' => 'Mão e Pé',
  'preco' => '54,00',
];

$servico4 = [
  'nome' => 'Banho de Gel',
  'preco' => '80,00',  
];

$servico5 = [
  'nome' => 'Spa das Mãos',
  'preco' => '30,00',  
];

$servico6 = [
  'nome' => 'Spa dos Pés',
  'preco' => '40,00',  
];

$servico7 = [
  'nome' => 'Blindagem',
  'preco' => '80,00',  
];

$servicos = [$servico1, $servico2, $servico3, $servico4, $servico5, $servico6, $servico7];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Cardápio de Serviços</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

<!--navbar-->
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: turquoise;">
  <a class="navbar-brand" href="#">  <img src="images/fairy.png" width="60px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<!--end of navbar-->
<br><br>
<p><h1>Cardápio de Serviços</h1></p>

<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver1 m-b-110">
					<div class="table100-head">
						<table>
							<thead>
								<tr class="row100 head">
									<th class="cell100 column1">Serviço </th>
									<th class="cell100 column2">Preço (R$)</th>
								</tr>
							</thead>
						</table>
          </div>
          
          <div class="table100-body js-pscroll">
						<table>
							<tbody>
								<tr class="row100 body" ><?php foreach ($servicos as $servico) { ?> 
									<td class="cell100 column1"><?php echo $servico['nome']; ?></td>
                  <td class="cell100 column2"> <?php echo $servico['preco']; ?></td>
                </tr>
                <?php } ?>
              </tbody>
						</table>
					</div>
        </div>
        


<!--===============================================================================================-->	
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			var ps = new PerfectScrollbar(this);

			$(window).on('resize', function(){
				ps.update();
			})
		});
			
		
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
</body>
</html>