
var val1, val2;

function konversi() {
    val1 = parseInt(document.kirim.T1.value) || 0; 
    val2 = parseInt(document.kirim.T2.value) || 0;
}

function tambah() {
    konversi();
    document.kirim.T3.value = val1 + val2; 
}
function kurang() {
    konversi(); 
    document.kirim.T3.value = val1 - val2; 
}
function bagi() {
    konversi(); 
    document.kirim.T3.value = val1 / val2; 
}