<?php
$user = $data["user"];
$lowongan = $data["lowongan"];
$applicants = $data["applicants"];
?>

<div class="container" style="align:center; margin-top: 50px;">
  
<h6 style="color:#A4A4A4 text-align:left; margin-left:100px;">Detail Applicant</h6>
<h4 style="text-align:left; margin-left:100px;"><b><?= $lowongan["judul"]; ?> - <?= $user["namaPerush"]; ?></b></h4>
<br><br>

<div class="container">
  <div class="row row-centered">

    <div class="col-sm-8 border shadow-sm p-3 mb-5 bg-body rounded">
        <div class="container">
        
          <?php
          foreach ($applicants as $applicant) { ?>

            <div class="card p-4">
              <div class="row">
                  <div class="col d-flex align-items-center mr-3">
                  <?= '<img src="data:image/jpeg;base64,' . base64_encode($applicant["photo"]) . '" alt="Logo" style="width:120px;">' ?>
                </div>
 
                <div class="col-6">
                  <h4 style="text-align:left;  margin-top:30px;"><b><?= $applicant["nama"]; ?></b></h4>
                  <h8 style="color:#676767;">Skill : <?= $applicant["kompetensi"];; ?></h8><br>
                  <h8 style="color:#676767;">Prodi : <?= $applicant["programStudi"];; ?></h8><br>
                  <h8 style="color:#676767;">IPK : <?= $applicant["ipk"];; ?></h8><br>
                </div>
               
                <div class="col my-5">
                    <h6 style="text-align:right; color:#8A8A8A; font-size:12px; margin-right:150px">Contact:</h6><br>
                    <h8 style="text-align:right; font-size:12px; color:#1F5938; margin-right:25px"><?= $applicant["hp_skrg"];; ?></h8><br>
                    <h8 style="text-align:right; font-size:12px; color:#1F5938; margin-right:25px"><?= $applicant["email"];; ?></h8>
                </div>
                <a href="<?= BASE_URL ?>perusahaan/history/<?= $applicant["idLowongan"]; ?>" class="stretched-link"></a>

              </div>
            </div><br> 
          <?php } ?>   
       
      </div>
    </div>
    </div>
   </div>
</div>
