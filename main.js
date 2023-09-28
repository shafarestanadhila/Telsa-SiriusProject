$(document).ready(function () {
  // Menangani klik pada elemen dengan class "nav-link"
  $(".nav-link").click(function (event) {
    event.preventDefault(); // Untuk mencegah navigasi ke halaman "help.html"

    // Menghapus class 'active' dari semua elemen dengan class 'nav-link'
    $(".nav-link").removeClass("active");

    // Menambah class 'active' pada elemen yang di-klik
    $(this).addClass("active");
  });

  // Menangani klik pada elemen dengan class "nav-contact"
  $(".nav-contact").click(function (event) {
    event.preventDefault(); // Untuk mencegah navigasi ke halaman "help.html"

    // Menghapus class 'active' dari semua elemen dengan class 'nav-contact'
    $(".nav-contact").removeClass("active");

    // Menambah class 'active' pada elemen yang di-klik
    $(this).addClass("active");

    // Mengganti gambar saat elemen ini di-klik
    $(this).find(".img-fluid2").attr("src", "image/help-menu2.png");
  });

  // Menangani klik pada elemen dengan class "nav-chart"
  $(".nav-chart").click(function (event) {
    event.preventDefault(); // Untuk mencegah navigasi ke halaman "help.html"

    // Menghapus class 'active' dari semua elemen dengan class 'nav-contact'
    $(".nav-chart").removeClass("active");

    // Menambah class 'active' pada elemen yang di-klik
    $(this).addClass("active");

    // Mengganti gambar saat elemen ini di-klik
    $(this).find(".img-fluid1").attr("src", "image/cart-menu2.png");
  });

  // Menangani hover pada elemen dengan class "img-fluid1"
  $(".img-fluid1").hover(
    function () {
      // Mengganti gambar saat dihover
      $(this).attr("src", "image/cart-menu2.png");
    },
    function () {
      // Mengembalikan gambar ke gambar awal saat hover dihentikan
      $(this).attr("src", "image/cart-menu.png");
    }
  );

  // Menangani hover pada elemen dengan class "img-fluid2"
  $(".img-fluid2").hover(
    function () {
      // Mengganti gambar saat dihover
      $(this).attr("src", "image/help-menu2.png");
    },
    function () {
      // Mengembalikan gambar ke gambar awal saat hover dihentikan
      $(this).attr("src", "image/help-menu.png");
    }
  );

  // Menangani hover pada elemen dengan class "img-fluid3"
  $(".img-fluid3").hover(
    function () {
      // Mengganti gambar saat dihover
      $(this).attr("src", "image/sign-in-menu2.png");
    },
    function () {
      // Mengembalikan gambar ke gambar awal saat hover dihentikan
      $(this).attr("src", "image/sign-in-menu.png");
    }
  );

  // Menangani hover pada elemen dengan class "img-fluid4"
  $(".img-fluid4").hover(
    function () {
      // Mengganti gambar saat dihover
      $(this).attr("src", "image/sign-up-menu2.png");
    },
    function () {
      // Mengembalikan gambar ke gambar awal saat hover dihentikan
      $(this).attr("src", "image/sign-up-menu.png");
    }
  );
});
