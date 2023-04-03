<?php 
$klasor = glob("dosya/*");
foreach ($klasor as $dosya) {    
    $dosyalar = glob($dosya . "/*");
    foreach ($dosyalar as $dosya_ici) {
        $dosya_boyut = filesize($dosya_ici);
        echo $dosya_ici . "'nın boyutu; " . $dosya_boyut . " byte <br/> ";
    }
}
?>
