document.addEventListener("DOMContentLoaded", function() {
    var loginButton = document.getElementById("loginButton");

    // Tambahkan event listener untuk tombol login
    loginButton.addEventListener("click", function() {
        // Cek apakah pengguna sudah login (gunakan localStorage untuk menyimpan status login)
        var isLoggedIn = localStorage.getItem("isLoggedIn") === "true";

        if (!isLoggedIn) {
            // Jika belum login, arahkan ke halaman login
            window.location.href = "/spa-html/login/login.html";
        } else {
            // Jika sudah login, lakukan proses logout
            // Hapus status login dari localStorage
            localStorage.removeItem("isLoggedIn");

            // Redirect ke halaman utama (index.html)
            window.location.href = "/spa-html/index.html";
        }
    });

    // Periksa status login saat halaman dimuat
    checkLoginStatus();

    function checkLoginStatus() {
        var isLoggedIn = localStorage.getItem("isLoggedIn") === "true";

        // Periksa status login dan ubah teks tombol sesuai dengan status
        if (isLoggedIn) {
            loginButton.textContent = "Logout";
        } else {
            loginButton.textContent = "Login";
        }
    }
});