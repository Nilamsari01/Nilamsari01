// 1. Efek Mengetik (Typing Effect) untuk Hero Section
const heroText = document.querySelector(".hero p");
const text = heroText.innerHTML;
heroText.innerHTML = "";
let i = 0;

function typing() {
    if (i < text.length) {
        heroText.innerHTML += text.charAt(i);
        i++;
        setTimeout(typing, 50); // Kecepatan mengetik
    }
}

// 2. Animasi Muncul saat Scroll (Reveal Animation)
const observerOptions = {
    threshold: 0.1
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.opacity = "1";
            entry.target.style.transform = "translateY(0)";
        }
    });
}, observerOptions);

// Menjalankan fungsi saat halaman dimuat
window.onload = () => {
    typing();
    
    // Memberikan efek awal pada setiap section agar bisa di-animate
    document.querySelectorAll("section").forEach(section => {
        section.style.opacity = "1";
        section.style.transform = "translateY(30px)";
        section.style.transition = "all 0.8s ease-out";
        observer.observe(section);
    });
};