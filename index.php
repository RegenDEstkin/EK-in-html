<!DOCTYPE html>
 <html lang="de">
 <head>
     <meta charset="UTF-8">
     <title>Landing Page</title>
     <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
     <link href="css/styles.css" rel="stylesheet">
     
     
 </head>

 <div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-4">EK zum Thema Web</span>
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item"><a href="index.php" class="nav-link active" aria-current="page">Home</a></li>
        
        <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
        <li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>
        <li class="nav-item"><a href="secret.php" class="nav-link">Secret</a></li>
      </ul>
    </header>
  </div>
 
 <body>
     <div class="container">
         <h1>Willkommen auf meiner persönlichen Website!</h1>
         <p>Kurs: Web Programmierung by Ali Khorsandfard</p>
         <p>Informatiker Winter 2024</p>
         <p>Name: Daniel Regen</p>
         <p>Standort: Dinslaken</p>
         <form>
             <div class="form-group">
                 <label for="email">Email:</label>
                 <input type="email" class="form-control" id="email" placeholder="Enter email">
             </div>
             <div class="form-group">
                 <label for="message">Nachricht:</label>
                 <textarea class="form-control" id="message" rows="3" placeholder="Enter your message"></textarea>
             </div>
             <button type="submit" class="btn btn-primary">Kontaktiere mich</button>
         </form>
     </div>
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
 </body>
 </html>
