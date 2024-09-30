<?php


// Interface Hewan (abstract class) didefinisikan sebagai class yang tidak bisa diinstansiasi menjadi object.
// Semua method dalam class abstrak wajib memiliki kata kunci abstract sebelum nama method.
// Sebuah class abstrak setidaknya harus memiliki satu method abstrak.
// Untuk menggunakan sebuah class abstrak, kita harus membuat class turunan dari class abstrak tersebut.
// Tujuan dibuat class abstrak adalah agar setiap class turunan menggunakan method abstrak pada class induk secara fleksibel.
// Jadi pada method abstrak di class induk hanya terdapat signature saja (tipe yang akan dikembalikan)

abstract class Hewan {
    abstract public function Makan();
    abstract public function Bergerak();
    abstract public function Beranak();
}

class Burung extends Hewan {
    public function Makan() {
        return "Burung makan biji-bijian";
    }

    public function Bergerak() {
        return "Burung bergerak dengan berjalan, terbang dan melompat";
    }

    public function Beranak() {
        return "Burung beranak dengan bertelur";
    }
}

class Kambing extends Hewan {
    public function Makan() {
        return "Kambing makan rumput";
    }

    public function Bergerak() {
        return "Kambing bergerak dengan berjalan dan berlari";
    }

    public function Beranak() {
        return "Kambing beranak dengan melahirkan";
    }
}

// Membuat objek Burung dan Kambing
$burung = new Burung;
$kambing = new Kambing;

// Perilaku Burung
echo "<b>Perilaku Burung</b><br/>";
echo $burung->Makan() . "<br/>";
echo $burung->Bergerak() . "<br/>";
echo $burung->Beranak() . "<br/>";

// Perilaku Kambing
echo "<b>Perilaku Kambing</b><br/>";
echo $kambing->Makan() . "<br/>";
echo $kambing->Bergerak() . "<br/>";
echo $kambing->Beranak() . "<br/>";
?>