### pugback

**Usage:** 
 
 app/router.pug
 
 
     //Pug page router
     case path
	    when '/'
		include pages/home
	    when 'contact'
		include pages/contact
	    default
		 include pages/404
		 
		 
 app/pages/home.pug
	 
	extends ../templates/main
	block title
	   ='Home page'
	
	block content
	   .container
		p Domain: #{domain}
		p Sub folder: #{subFolder}
		p Full site path: #{sitePath}
		p Path to do resource folder: #{resPath}
		p Route path: #{path}
		p GET params: !{GET}
		
		
Result: 

		<html>
			<head>
				<meta charset="utf-8">
				<title>
					Home page 
					 - Example 
				</title>
							<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>      <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
				<link rel="stylesheet" href="https://bootswatch.com/paper/bootstrap.min.css">
				<link rel="stylesheet" href="http://localhost/pugback/app/static/css/styles.css">
							<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>      <body>
					<div class="container">
						<div class="content">
							<div class="container">
								<p>
									domain:
									localhost 
								</p>
								<p>
									subFolder:
									/pugback 
								</p>
								<p>sitePath: http://localhost/pugback</p>
								<p>resPath: http://localhost/pugback/app/static</p>
								<p>Path: /</p>
								<p>GET: []</p>
							</div>
						</div>
					</div>
				</body>
			</head>
		</html>
   