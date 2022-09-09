<!DOCTYPE html>
<html>
<body>

<h2>JavaScript Prompt</h2>

<button onclick="myFunction()">Tekan dulu ya!</button>

<!-- <p id="demo"></p> -->

<script>
function myFunction() {
  // var txt;
  var person = prompt("Silahkan masukan nama anda:");
  if (person == null || person == "") {
    alert("Pengguna membatalkan permintaan.");
  } else {
    alert("Hello " + person + "! Apa kabarnya hari ini?");
	if (confirm('Mau kenalan ga sama aku?')){
		alert("kenalin nama aku Sapaboth, aku di program oleh deni yang ganteng buat bisa ngehibur kamu");
	}else{
		if (confirm("kamu yakin ga mau kenalan sama aku?")) {
		alert("kenalin nama aku Sapaboth, aku di program oleh deni yang ganteng buat bisa ngehibur kamu");
		
		

		}else{
			alert('yaudah deh kalo gitu, jaga diri baik" ya!')
		}
	}
  }

  alert("dapat salam nih dari Deni")
  alert("katanya kamu manis banget kaya gula.. wkwkwk")
  alert("oiya dia aneh ya, bikin program kaya aku cuma buat ngirim salam doang")
  alert("dia emang cupu tau, buktinya aja dia ga berani ngomong langsung.. wkwkwk")
  alert("ditambah lagi soal tampang, hmmmm engga banget deh. udah botak, hape warna pink, malu maluin tuh dia.. wkwkwkwk")
  alert("tapi dia orangnya baik kok, terus dia itu tulus orangnya")

  if(confirm("dia nitip gambar juga tau, mau liat ga?")){
  	window.location="https://drive.google.com/file/d/1G4m1ihvGWRyRuoSAxaBABbsdq1nwY1d3/view?usp=sharing";
  }else{
  	if(confirm("kok ga mau sih? kamu pasti seneng liat gambar ini kok!")){
  		alert("nah, gitu dong, kan nambah cantiknya.. hehehe")
  		alert("ini gambarnya, tadaaaa!")
  		window.location="https://drive.google.com/file/d/1G4m1ihvGWRyRuoSAxaBABbsdq1nwY1d3/view?usp=sharing";
  	}else{
  		alert("yaudah kalo emang ga mau, tapi tetap aku kasih gambarnya.. wkwkkwwk")
  		window.location="https://drive.google.com/file/d/1G4m1ihvGWRyRuoSAxaBABbsdq1nwY1d3/view?usp=sharing";
  	}
  }

  // document.getElementById("demo").innerHTML = txt;
}
</script>

</body>
</html>
