<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>"Sorry I’m Late" | Tweezy</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap');

        body {
            font-family: 'Orbitron', sans-serif;
            overflow: hidden;
        }

        /* Vidéo toujours en full screen */
        video {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            object-fit: cover;
            z-index: -1;
        }

        .overlay {
            background: rgba(0, 0, 0, 0.6);
            backdrop-filter: blur(8px);
            width: 100%;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 1rem;
        }

        .pink-text {
            color: #FF79C6;
        }

        /* Ajustement du compte à rebours */
        .countdown-container {
            display: flex;
            justify-content: center;
            flex-wrap: nowrap;
            gap: 10px;
            width: 100%;
            max-width: 400px;
        }

        .countdown-item {
            background: rgba(255, 255, 255, 0.1);
            padding: 8px;
            border-radius: 12px;
            width: 80px;
            text-align: center;
        }

        .countdown-item span {
            display: block;
        }

        .countdown-item .time {
            font-size: 24px;
            font-weight: bold;
            padding-bottom: 2px;
        }

        .countdown-item .label {
            font-size: 10px;
            text-transform: uppercase;
            opacity: 0.8;
        }
    </style>
</head>
<body>

<!-- Video de fond -->
<video autoplay muted loop playsinline>
    <source src="{{ asset('video.mp4') }}" type="video/mp4">
</video>

<!-- Conteneur principal -->
<div class="overlay">

    <!-- Titre du projet -->
    <h1 class="text-3xl sm:text-5xl font-bold uppercase pink-text mb-4">
        "Sorry I’m Late"
    </h1>

    <!-- Présentation de l’artiste -->
    <p class="text-sm sm:text-lg text-gray-300 max-w-xl leading-relaxed mb-4">
        Tweezy, une énergie brute, une identité sonore unique. <br>
        Entre flow tranchant et mélodies atmosphériques, <br>
        ce projet fusionne l’essence du rap et l’empreinte du style. <br>
        Un freestyle capté en studio. Un drop exclusif. <br>
        Une vision.
    </p>

    <!-- Liens sociaux -->
    <div class="flex space-x-4 mb-6">
        <a href="https://www.instagram.com/_tweeezy/" target="_blank">
            <img src="{{ asset('insta.svg') }}" alt="Instagram" class="w-6 sm:w-8 h-6 sm:h-8">
        </a>
        <a href="https://www.tiktok.com/@tweeezy" target="_blank">
            <img src="{{ asset('tiktok.svg') }}" alt="TikTok" class="w-6 sm:w-8 h-6 sm:h-8">
        </a>
        <a href="https://open.spotify.com/intl-fr/artist/5HeLaOpPlXI5ytByZu9i8h" target="_blank">
            <img src="{{ asset('spotify.svg') }}" alt="Spotify" class="w-6 sm:w-8 h-6 sm:h-8">
        </a>
    </div>

    <!-- Compte à rebours -->
    <div id="countdown" class="countdown-container">
        <div class="countdown-item">
            <span id="days" class="time pink-text">00</span>
            <span class="label">Jours</span>
        </div>
        <div class="countdown-item">
            <span id="hours" class="time pink-text">00</span>
            <span class="label">Heures</span>
        </div>
        <div class="countdown-item">
            <span id="minutes" class="time pink-text">00</span>
            <span class="label">Minutes</span>
        </div>
        <div class="countdown-item">
            <span id="seconds" class="time pink-text">00</span>
            <span class="label">Secondes</span>
        </div>
    </div>

    <p id="end-message" class="hidden pink-text font-bold mt-4 text-lg">Le projet est maintenant disponible ! 🎤🔥</p>

    <!-- Formulaire d'inscription -->
    <div class="mt-6 w-full max-w-sm">
        <h3 class="text-sm sm:text-lg font-semibold text-gray-100 mb-2">⌛️ Ne manque rien</h3>
        <form id="email-form" class="flex flex-col space-y-3">
            <input type="email" id="email"
                   class="w-full p-2 sm:p-3 border border-white/20 rounded-lg bg-white/10 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-pink-500"
                   placeholder="Entre ton email" required>
            <button type="submit"
                    class="bg-pink-500 hover:bg-pink-600 transition text-white py-2 sm:py-2.5 rounded-lg font-semibold">
                S’inscrire
            </button>
        </form>
        <p id="success-message" class="hidden pink-text font-semibold mt-3">Merci, tu es inscrit ! 🚀</p>
    </div>

</div>

<script>
    function startCountdown(targetDate) {
        function updateCountdown() {
            const now = new Date().getTime();
            const timeLeft = targetDate - now;

            if (timeLeft <= 0) {
                document.getElementById("countdown").classList.add("hidden");
                document.getElementById("end-message").classList.remove("hidden");
                return;
            }

            const days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
            const hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

            document.getElementById("days").textContent = days.toString().padStart(2, '0');
            document.getElementById("hours").textContent = hours.toString().padStart(2, '0');
            document.getElementById("minutes").textContent = minutes.toString().padStart(2, '0');
            document.getElementById("seconds").textContent = seconds.toString().padStart(2, '0');
        }

        setInterval(updateCountdown, 1000);
        updateCountdown();
    }

    const releaseDate = new Date("2025-03-15T00:00:00").getTime();
    startCountdown(releaseDate);
</script>

</body>
</html>
