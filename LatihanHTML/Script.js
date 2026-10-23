 //Letak Javascript
        console.log("Latihan Javascript");
        
        function masukkan_nama(){
            let nama = prompt("Masukkan Nama anda");
            console.log("Halooooo" + nama);
            document.getElementById("jawaban").innerHTML = "Haiii " + nama;
        }
        
        document.getElementById("pertanyaan").onclick = function (){
            //ini isinya
            let jawab = confirm("Apa sudah sarapan?");
            if(jawab == true){
            console.log("Alhamdulillah sudah sarapan");
            document.getElementById("jawaban").innerHTML = "Alhamdulillah sudah sarapan";
        }else{
            console.log("sebentar lagi istirahat bisa sarapan");
            document.getElementById("jawaban").innerHTML="Sebentar lagi istirahat bisa sarapan";
        }
    }

let gelap = false; //putih
document.getElementById("tema").onclick = function(){
    if(gelap == true){
        document.body.style.backgroundColor = "white";
        document.body.style.color = "black";
        gelap = false;
    }else{
        document.body.style.backgroundColor = "black";
        document.body.style.color = "white";
        gelap = true;
    }
}