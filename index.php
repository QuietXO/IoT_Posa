<html>
  <head>
    <meta charset="utf-8">
    <title>Main Page</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700"
    rel="stylesheet">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <main>
			<div id="header">
      	<h1>Support Page</h1>
			</div>
			<form class="support-page" action="contact.php" method="post">
				<p>Your Name:</p>
				<input type="text" name="name1" placeholder="First Name">
				<input type="text" name="nameL" placeholder="Last Name">
				<p>Your Email:</p>
				<input type="text" name="mail" placeholder="Your e-mail">
				<div class="elem-group">
	    		<label for="department-selection">What seems to be the problem:</label>
	    		<select id="department-selection" name="concerned_department" required>
		        <option value="">Select a Department</option>
		        <option value="billing">Billing</option>
		        <option value="marketing">Marketing</option>
		        <option value="technical support">Technical Support</option>
	    		</select>
  			</div>
				<p>Message Subject:</p>
				<input type="text" name="subject" placeholder="Subject">
				<p>Message:</p>
				<textarea name="message" placeholder="Your Message"></textarea>
				<button type="submit" name="submit">SEND MAIL</button>
			</form>
    </main>
  </body>
</html>
