<doctype html>
<html>
    <head>
        <title> formulaire d'inscription </title>
        
        <link rel="stylesheet" href="loewe.css"/>
        <link rel="icon" href="louis_louis.ico" type="louis_louis">

    </head>
    <body>
        <!-- Navigation Section -->

<div class="navbar navbar-default navbar-fixed-top">
	<div class="container">

		<div class="navbar-header">
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
			</button>
		</div>
    <br>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#home" class="smoothScroll">Home</a></li>
				<li><a href="#about" class="smoothScroll">About</a></li>
                <li><a href="#localisation" class="smoothScroll">localisation</a></li>
        		<li><a href="#" data-toggle="modal" data-target="#modal1">Contacter</a></li>
			</ul>
		</div>
</br>
	</div>
</div>
    <form action="fichier.php" method="post">
    <label for="nom"> nom</label>
       <input type="text" name="nom" id="nom" required/>
       </p>
       <p>
      <label for="prenom"> prenom </label>
      <input type="text" name="prenom" id="prenom" required />
      <p>
      <label for="age"> age</label>
      <input type="numbers" name="age" id="age" required />
      </p>
      <p>
      <label for="mot de passe"> mot de passe  </label>
      <input type="chars" name="motdepasse" id="motdepasse" required/>
      </p>
      <p>
      <label for="email"> e-mail  </label>
      <input type="email" name="email" id="email" required/>
      </p>
      <ul>
</form>

							<li class="select-opt" required>
								<select name="pays" id="pays">

									<option value="CAMEROUN">+237

    <option value="GUINÉE ÉQUATORIALE">+240</option>
    
    <option value="FRANCE">+33</option>
    
    <option value="ROYAUME UNIS">+44</option>
    
    <option value="BÉNIN">+236</option>
    
									<option value="GABON">+238</option>
 
									<option value="ITALIE">+39</option>
									
									<option value="MAROC">+245</option>

								</select>
            <input type="number of phone" name="number of phone"id="</option>number of phone"/>
      <p>
      <input type="submit" value="S'INSCRIRE" />
      </p>
      <?php
 if(isset($_GET['erreur'])){
 $err = $_GET['erreur'];
 if($err==1 || $err==2)
 echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
 }
 ?>
    </body>
    </html>