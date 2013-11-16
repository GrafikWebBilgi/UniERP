<?php

//Class ın harfleri İlk harf buyuk olur
class Kisi {
    public $isim;
    public $soyisim;
    public $dogumTarihi;
    
    public function getUzunisim()
            {
        return $this->isim . '' . $this->soyisim;
            }
    public function getYas() {
        return date( 'Y' ) - $this->dogumTarihi;
            }
}
