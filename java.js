  /*menyembuyikan atau melihat password */
function lihat()
    {
//variabel yang digunakan
        var password = document.getElementById('password'),
            button = document.getElementsByTagName('button')[0];
 //perintah menyembunyikan password
        if(button.textContent === 'Lihat Password'){
          password.setAttribute('type', 'text');
          button.textContent = 'Sembunyikan';
        }
//perintah menampilkan password
        else{
          password.setAttribute('type', 'password');
          button.textContent = 'Lihat Password';
        }
        return false;
    }
  /*fungsi untuk menghitung nilai konvensi*/
    function hitungnilai() {
//varabel yang digunakan 
    var UAS =  (document.name_from.in_UAS.value);
    var UK =  (document.name_from.in_UTS.value);
    var UTS =  (document.name_from.in_UK.value);
    var TP =  (document.name_from.in_TP.value);

    var uas = (35/100)*UAS;
    var uts = (25/100)*UTS;
    var uk = (15/100)*UK;
    var tp = (25/100)*TP;
//untuk mencari hasil nilai akhir
    var Hasil = uas + uts + uk + tp;
//jika hasil yang di inputkan lebih dari 80 
    if(Hasil>80){
      document.name_from.index.value=(Hasil);
      document.name_from.ket.value=('A');
      
      alert("LULUS(Sangat Bagus)"+Hasil);
        }
//jika hasil yang di inputkan lebih dari lebih dari 61 dan kurang dari 80
    else if (Hasil>=61 && Hasil<=80 ){
      document.name_from.index.value=(Hasil);
      document.name_from.ket.value=('B');

      alert('LULUS (BAGUS)' +Hasil);
 //jika hasil yang di inputkan lebih dari 55 dan kurang dari 60     
        }
    else if (Hasil<=60 && Hasil>=55){
      document.name_from.index.value=(Hasil);
      document.name_from.ket.value=('C');
      alert('LULUS (KURANG BAGUS)' +Hasil);
      
        }
//jika hasil yang di inputkan 0
    else{
      document.name_from.index.value=(Hasil);
      document.name_from.ket.value=('D');

      alert("GAGAL" +Hasil);
      
        }
      }
  //fungsi untuk memanggil mesin pencarian google
function cari(){
  var kata = document.formcari.keyword.value;
  var hasil ="http://www.google.com/search?q="+kata;
  window.open(hasil,'google',config='height=500, width=700,scrollbars=yes location=yes')
}