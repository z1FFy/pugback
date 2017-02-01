### pugback

**Usage:** 
 
  - app/config.pug
 
		- siteName = 'Example';
		- charset = 'utf-8';
	 
  - app/router.pug
 
		 //Pug page router
		 case path
			when '/'
				include pages/home
			when 'contact'
				include pages/contact
			default
		 		include pages/404
		 
		 
  - app/pages/home.pug
	 
		extends ../templates/main/template

		block title
		    ='Home page'

		block content
		    p Host (domain): #{host}
		    p Sub folder: #{basePath}
		    p Full site path: #{sitePath}
		    p Path to do resource folder: #{resPath}
		    p Route path: #{path}
		    p GET params: !{query}
		
		
- app/templates/main/main.php 
	
		include ../../config.pug
		include  ../../mixins

		html
		    head
			meta(charset=charset)
			title
			    block title
			    =' - '+siteName
			include resources
		    body
			.container
			    block content
- app/templates/main/resources.php 

		+js('http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js')
		+css('//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css')
		+css('https://bootswatch.com/paper/bootstrap.min.css')
		+css(resPath + '/css/styles.css')
		+js('//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js')

