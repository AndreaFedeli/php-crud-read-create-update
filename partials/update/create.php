<?php
include __DIR__ .'/partials/template/header.php';
 ?>

 <div class="container p-3">
   <form action="partials/create/server.php" method="post">
     <div class="form-group">
       <label for="roomNumber">Numero della stanza</label>
       <input type="number" placeholder="Inserisci il numero della stanza" value="" id="roomNumber">
     </div>

     <div class="form-group">
       <label for="floor">Floor</label>
       <input type="number"  placeholder="Inserisci il numero del piano" value="" id="floor">
     </div>

     <div class="form-group">
       <label for="beds">Numero di letti</label>
       <input type="number" placeholder="Inserisci il numero dei letti" value=""id="beds">
     </div>

     <div class="form-group">
    <input type="submit" class="form-control-bg-warning" name="roomNumber" value="modifica">
     </div>
 </form>
 </div>
