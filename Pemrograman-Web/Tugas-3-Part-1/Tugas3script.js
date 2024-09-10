function test() {
    var val1 = document.kirim.T1.value;
    val1 = parseInt(val1); 
    if (val1 >= 0 && val1 <= 40) {
        document.kirim.T2.value = "E";
    } else if (val1 >= 41 && val1 <= 55) {
        document.kirim.T2.value = "D";
    } else if (val1 >= 56 && val1 <= 60) {
        document.kirim.T2.value = "C";
    } else if (val1 >= 61 && val1 <= 65) {
        document.kirim.T2.value = "BC";
    } else if (val1 >= 66 && val1 <= 70) {
        document.kirim.T2.value = "B";
    } else if (val1 >= 71 && val1 <= 80) {
        document.kirim.T2.value = "AB";
    } else if (val1 >= 81 && val1 <= 100) {
        document.kirim.T2.value = "A";
    } else {
        document.kirim.T2.value = "Input Tidak Valid";
    }
}
