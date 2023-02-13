<?php
$URI = new URI();
$url = explode("/", $_SERVER['REQUEST_URI']);
$url_site = $url[1];

$stmt = $DB_con->prepare("SELECT * FROM heads");
$stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
	extract($row);
}
?>
<title><?php echo $title; ?></title>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="<?php echo $keywords; ?>" name="keywords">
<meta content="<?php echo $description; ?>" name="description">
<meta name="author" content="Cairo Felipe Developer">

<meta property="og:title" content="<?php echo $title; ?>" />
<meta property="og:url" content="https://www.ittnet.net.br/" />
<meta property="og:image" content="https://www.ittnet.net.br/assets/img/imgog.jpg" />
<meta property="og:description" content="<?php echo $description; ?>" />

<link rel="stylesheet" href="<?php echo $URI->base("./assets/css/style.css"); ?>">
<link href="<?php echo $URI->base("/assets/img/logo.png"); ?>" rel="icon">
<link href="<?php echo $URI->base("/assets/img/logo.png"); ?>" rel="apple-touch-icon">
<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<script>
	tailwind.config = {
		theme: {
			extend: {
				colors: {
					color1: '#013589',
					color2: '#E96708',
					color3: '#ED1B24',
				}
			}
		}
	}
</script>