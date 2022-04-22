<?php
function kelulusan($_nilai){
    if ($_nilai > 55){
        return 'Congratulations! Anda lulus, GOOD JOB!';
    }else{
        return 'Anda Tidak Lulus, Yu Semangat Yu Ngulang lagi:)';
    }
}
function grade($_nilai){
    if ($_nilai >= 85){
        return "A";
    }elseif ($_nilai >= 70){
        return "B";
    }elseif ($_nilai >= 56){
        return "C";
    }elseif ($_nilai >= 36){
        return "D";
    }elseif ($_nilai >= 10){
        return "E";
    }else{
        return "I(Tidak Ada nilai)";
    }
}
?>