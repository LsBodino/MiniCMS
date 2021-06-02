<head>
    <title>{$l_register} | {$title}</title>
</head>
<body>
   <div class="center">
      <div class="container">
         <div class="row">
            <h2>{$l_register}</h2>
            {if isset($error)}
                <div class="alert alert-danger" role="alert"><strong>{$error}!</strong></div>
            {/if}
            {if isset($success)}
                <div class="alert alert-success" role="alert"><strong>{$success}!</strong></div>
            {/if}
            <div class="form-group">
               <form method="POST" action="">
               <div class="form-floating">
                  <input type="text" class="form-control" id="username" name="username" required />
                  <label for="username">{$l_username} :</label>
               </div>
                <br>
               <div class="form-floating">
                  <input type="email" class="form-control" id="mail" name="mail" required />
                  <label for="mail">{$l_email} :</label>
               </div>
                <br>
               <div class="form-floating">
                  <input type="password" class="form-control" id="pw" required name="pw" />
                  <label for="pw">{$l_pw} :</label>
               </div>
                <br>
               <div class="form-floating">
                  <input type="password" class="form-control" id="pw2" required name="pw2" />
                  <label for="pw2">{$l_pw2} :</label>
               </div>
                <br>
                <input type="submit" class="btn btn-danger btn-lg" name="register" value="{$l_lg}!" />
               </form>
            </div>
         </div>
      </div>
   </div>
</body>