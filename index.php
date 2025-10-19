<?php

$FirstName = '';
$LastName = '';
$Email = '';
$errors = [
    'FirstNameError' => '',
    'LastNameError' => '',
    'EmailError' => ''
];

include_once 'Include/db.php';
include_once 'Include/form.php';
include_once 'Include/select.php';
include_once 'Include/db_close.php';


?>

<?php include_once 'parts\header.php' ?>


<div id="winner-gif" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; z-index: 10000; display: none;">
    <img id="confetti-gif" src="images/84223.gif" alt="Celebration GIF" style="width: 100%; height: 100%; object-fit: cover;">
</div>


<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ -->



<div id="main-text" class="position-relative text-center">
  <div class="col-md-5 p-lg-5 mx-auto ">
<img src="/ProjectOne/images/gift.png" alt="">

    <p class="lead fw-normal">باقي على فتح التسجيل</p>
    <h3 id="countdown"></h3>
    <p class="lead fw-normal"> مرحبا انا مستر بيست  </p>


    
<div class="d-grid gap-2 col-6 mx-auto my-5"> 
<button id="winner" type="button" class="btn btn-primary d-none my-3 mx auto">
   الرابح
</button>
</div>


  </div>
  <div class="container">
    <h3>للدخول بالسحب يرجى اتباع ما الخطوات:</h3>
   
    <ul class="list-group list-group-flush">
      <li class="list-group-item"><a href="https://www.youtube.com/channel/UCX6OQ3DkcsbYNE6H8uQQuVA" target="_self">لازم تتبع مستر بيست في اليوتيوب</a></li>
      <li class="list-group-item"><a href="https://www.instagram.com/mrbeast/?hl=ar-">لازم تتابع مستر بيست في الاستقرام</a></li>
      <li class="list-group-item"><a href="https://www.tiktok.com/@mrbeast?lang=en"> لازم تتابع مستر بيست في التكتوك</a></li>
      <li class="list-group-item"><a href="https://www.instagram.com/p/DPEzvkikXoh/?hl=ar">لازم تعلق لي اخر مقطع في الاستقرام</a></li>
      <li class="list-group-item"><a href="https://www.instagram.com/p/DPEzvkikXoh/?hl=ar"> لازم تمنشن لي ثلاثة المقطع</a></li>
    </ul>
  </div>
</div>

<!-- ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

 <div class="container">    
  <div class="position-relative text-right">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
<form  action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
  <div class="mb-3">
    <h3>الرجاء ادخل معلوماتك</h3>
    <label for="FirstName" class="form-label">الاسم الاول</label>
    <input type="text" name="FirstName" class="form-control" id="FirstName" value="<?php echo $FirstName ?>">
    <div class="form-text error"><?php echo $errors['FirstNameError'] ?></div>
  </div>
    <div class="mb-3">
      <label for="LastName" class="form-label">الاسم الاخير</label>
    <input type="text" name="LastName" class="form-control" id="LastName" value="<?php echo $LastName; ?>">
    <div class="form-text error"><?php echo $errors['LastNameError'] ?></div>
  </div>
  <div class="mb-3">
      <label for="Email" class="form-label">البريد الإليكتروني</label>
    <input type="text" name="Email" class="form-control" id="Email" value="<?php echo $Email; ?>">
   <div class="form-text error"><?php echo $errors['EmailError'] ?></div>


  <button type="submit" name="submit" class="btn btn-primary">ارسال المعلومات</button>
 </form>
     </div>
 </div>

<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

<div class="loader-con">
  <div id="loader">
    <canvas id="circularLoader" width="200" height="200"></canvas>
  </div>
</div>



<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel">الرابح في المسابقة!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
      <?php foreach($users as $user): ?>
        <h1 class="display-3 text-center modal-title" id="modalLabel"><?php echo htmlspecialchars($user['FirstName']) . ' ' . htmlspecialchars($user['LastName']); ?></h1>
      <?php endforeach; ?> 
      </div>

    </div>
  </div>
</div>

<!-- -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

<div id="cards" class="row mb-5 pb-5">
  
    
        <div class="col-sm-4 mb-3">
            <div class="card my-2 bg-light">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text"><?php echo htmlspecialchars($user['Email']); ?></p>
                </div>
            </div>
        </div>
     
</div>


<?php include_once 'parts\footer.php' ?>