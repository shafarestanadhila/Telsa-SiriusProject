$(document).on('click', 'nav-link', function(){
  $(this).addClass('active').siblings().removeClass('active')
})
$(document).ready(function(){
    const fotoArray = ['foto1', 'foto2', 'foto3', 'foto4', 'foto5', 'foto6'];

    fotoArray.forEach((foto) => {
        $(`.${foto}`).hover(() => {
            $(`.${foto}`).css({
                "-webkit-filter": "brightness(100%)",
                "-webkit-transition": "all 0.5s ease",
                "-moz-transition": "all 0.5s ease",
                "-o-transition": "all 0.5s ease",
                "-ms-transition": "all 0.5s ease",
                "transition": "all 0.2s ease"
            });
        }, function() {
            $(`.${foto}`).css({
                "border": "5px solid white",
                "-webkit-filter": "brightness(65%)"
            });
        });
    });

    // Teks yang akan dianimasikan
    var text = "I'm website developer based in Depok, and I'm very passionate and dedicated to my work.";
    var speed = 30; // Kecepatan ketikan (ms per karakter)
    
    // Inisialisasi animasi
    var i = 0;
    function typeWriter() {
      if (i < text.length) {
        // Menambahkan karakter ke teks secara berurutan
        $(".typing").text(text.substring(0, i+1));
        i++;
        setTimeout(typeWriter, speed);
      }
    }
    
    // Memulai animasi ketikan saat halaman dimuat
    typeWriter();

    $(".img-fluid1").hover(
      function() {
        // Mengganti gambar saat dihover
        $(this).attr("src", "image/chart-menu2.png");
      },
      function() {
        // Mengembalikan gambar ke gambar awal saat hover dihentikan
        $(this).attr("src", "image/chart-menu.png");
      }
    );
    $(".img-fluid2").hover(
      function() {
        // Mengganti gambar saat dihover
        $(this).attr("src", "image/contact-menu2.png");
      },
      function() {
        // Mengembalikan gambar ke gambar awal saat hover dihentikan
        $(this).attr("src", "image/contact-menu.png");
      }
    );
    $(".img-fluid3").hover(
      function() {
        // Mengganti gambar saat dihover
        $(this).attr("src", "image/signin-menu2.png");
      },
      function() {
        // Mengembalikan gambar ke gambar awal saat hover dihentikan
        $(this).attr("src", "image/signin-menu.png");
      }
    );
    $(".img-fluid4").hover(
      function() {
        // Mengganti gambar saat dihover
        $(this).attr("src", "image/signup-menu2.png");
      },
      function() {
        // Mengembalikan gambar ke gambar awal saat hover dihentikan
        $(this).attr("src", "image/signup-menu.png");
      }
    );
});

