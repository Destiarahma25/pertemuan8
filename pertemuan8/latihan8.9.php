<?php
// Interface Hewan
interface Hewan {
    public function Makan();
    public function Bergerak();
    public function Beranak();
}

// Class Burung Implements Hewan
class Burung implements Hewan {
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

// Class Kambing Implements Hewan
class Kambing implements Hewan {
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