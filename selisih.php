<html>
  <head>
    <title>Mencari selisih dari 2 tanggal</title>
  </head>
  <body>
    <h2>Contoh program mencari selisih dari 2 tanggal</h2>
    <?php 
    $tanggal = "06/19/2015 - 06/26/2015";
    $tgl_ = explode(' - ',$tanggal);
		$tgl_mulai_ =$tgl_[0];
		$tgl_selesai_ =$tgl_[1];
		
		
		$tgl_M = explode('/',$tgl_mulai_);
		$YY_mulai_ =$tgl_M[2];
		$MM_mulai_ =$tgl_M[0];
		$DD_mulai_ =$tgl_M[1];
		 
		$tgl_S = explode('/',$tgl_selesai_);
		$YY_selesai_ =$tgl_S[2];
		$MM_selesai_ =$tgl_S[0];
		$DD_selesai_ =$tgl_S[1];

	
		// mencari selisih hari dari tanggal awal dan akhir
		$jd1 = GregorianToJD($MM_mulai_, $DD_mulai_, $YY_mulai_);
		$jd2 = GregorianToJD($MM_selesai_, $DD_selesai_, $YY_selesai_);

		$selisih = $jd2 - $jd1;
		echo $selisih;
		?>				
  </body>
</html>
