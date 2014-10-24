<!DOCTYPE html>
<html lang="en-GB">
<head>
	<meta charset="utf-8" />
	<title>Order Form for PHP</title>
	<meta name="author" content="Elliot J. Reed" />
	<meta name="description" content="A simple ordering system for PHP." />
	<link rel="stylesheet" href="css/tables.css" />
</head>

<body>

	<header role="banner">
		<h1>Order Form for PHP</h1>
		<p>A simple ordering system for PHP.</p>
	</header>

	<main role="main">

		<section>

			<h2>Order Form</h2>

			<table>
				<thead>
					<tr>
						<th>SKU</th><th>Name</th><th>Price</th><th>Quantity</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach $orders->getProducts() as $product { ?>
					<tr>
						<td><?php echo $product->sku; ?></td><td><?php echo $product->product_name; ?></td><td>£<?php echo $product->price; ?></td><td><input id="<?php echo $product->sku; ?>" type="number" /></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>

		</section>

	</main>

	<script src="js/responsive_tables.min.js"></script>

</body>
</html>
