let skor_com = 0;
let skor_user = 0;
let skor_seri = 0;

function main(pilihan_user){
    //alert(pilihan_user);

    //set pilihan komputer random
    const komputer = ['Batu', 'Gunting', 'Kertas'];
    const random = Math.floor(Math.random() * komputer.length);
    let pilihan_komputer = komputer[random];
    //alert(pilihan_komputer);
    document.getElementById("pil_com").src = "img.Suit/" + pilihan_komputer + ".png";
    document.getElementById("pil_user").src = "img.Suit/" + pilihan_user + ".png";

    //seri, menang, kalah
    //kertas vs batu > menang,
    //batu vs gunting > menang,
    //gunting vc kertas > menang
    if(pilihan_user === pilihan_komputer){
        document.getElementById("hasil").innerHTML = "SERI";
        skor_seri++;
        document.getElementById("skor_seri").innerHTML = skor_seri;
    }else if (
        (pilihan_user === 'Kertas' && pilihan_komputer === 'Batu')||
        (pilihan_user === 'Batu' && pilihan_komputer === 'Gunting')||
        (pilihan_user === 'Gunting' && pilihan_komputer === 'Kertas')){
            document.getElementById("hasil").innerHTML = "MENANG";
            skor_user++;
            document.getElementById("skor_user").innerHTML = skor_user;
        }else{
            document.getElementById("hasil").innerHTML = "KALAH";
            skor_com++;
            document.getElementById("skor_com").innerHTML = skor_com;
        }
        document.getElementById("skor").innerHTML = "Menang: " + skor_user + " | Kalah: " + skor_com + " |Seri: " + skor_seri;
}