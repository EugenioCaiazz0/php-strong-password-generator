<?php
require_once __DIR__ . '/data/functions.php';
include_once __DIR__ . '/components/head.php';
?>

<body>

<div class="card text-center  d-flex w-50 my-5 mx-auto border-primary  ">
    <form action="index.php" method="GET" class=""> 
    <div class="mb-3 card-body ">
        <label class="form-label">Scegliere lunghezza password</label>
        <input type="number" class="form-control justify-self-center" name="passwordLengthInput"  id="" placeholder="" min="5" max="20">
        <button type="submit" class="btn btn-primary my-3 ">Submit</button>
    </div>
    </form>

    
    
</div>

</body>

</html>