<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorry I’m Late | Tweezy</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap');

        body {
            font-family: 'Orbitron', sans-serif;
            overflow: hidden;
        }

        .overlay {
            background: rgba(0, 0, 0, 0.6);
            backdrop-filter: blur(8px);
        }
    </style>
</head>
<body class="relative flex items-center justify-center min-h-screen text-white">

<!-- Video de fond -->
<video autoplay muted loop class="absolute top-0 left-0 w-full h-full object-cover">
    <source src="{{ asset('video.mp4') }}" type="video/mp4">
</video>

<!-- Conteneur principal -->
<div class="overlay absolute inset-0 flex flex-col items-center justify-center text-center px-6">

    <!-- Titre du projet -->
    <h1 class="text-5xl font-bold tracking-widest uppercase text-white mb-6">
        Sorry I’m Late
    </h1>

    <!-- Présentation de l’artiste -->
    <p class="text-lg text-gray-300 max-w-xl leading-relaxed mb-8">
        Tweezy, une énergie brute, une identité sonore unique. <br>
        Entre flow tranchant et mélodies atmosphériques, <br>
        ce projet fusionne l’essence du rap et l’empreinte du style. <br>
        Un freestyle capté en studio. Un drop exclusif. <br>
        Une vision.
    </p>

    <!-- Compte à rebours -->
    <div id="countdown" class="flex space-x-6 text-2xl font-semibold">
        <div class="flex flex-col items-center p-4 bg-white/10 rounded-lg shadow-lg">
            <span id="days" class="text-5xl font-bold text-blue-400">00</span>
            <span class="text-sm">Jours</span>
        </div>
        <div class="flex flex-col items-center p-4 bg-white/10 rounded-lg shadow-lg">
            <span id="hours" class="text-5xl font-bold text-blue-400">00</span>
            <span class="text-sm">Heures</span>
        </div>
        <div class="flex flex-col items-center p-4 bg-white/10 rounded-lg shadow-lg">
            <span id="minutes" class="text-5xl font-bold text-blue-400">00</span>
            <span class="text-sm">Minutes</span>
        </div>
        <div class="flex flex-col items-center p-4 bg-white/10 rounded-lg shadow-lg">
            <span id="seconds" class="text-5xl font-bold text-blue-400">00</span>
            <span class="text-sm">Secondes</span>
        </div>
    </div>

    <p id="end-message" class="hidden text-green-400 font-bold mt-6 text-lg">Le projet est maintenant disponible ! 🎤🔥</p>

    <!-- Formulaire d'inscription -->
    <div class="mt-10 w-full max-w-sm">
        <h3 class="text-lg font-semibold text-gray-100 mb-2">🔥 Ne manque rien</h3>
        <form id="email-form" class="flex flex-col space-y-3">
            <input type="email" id="email" class="w-full p-3 border border-white/20 rounded-lg bg-white/10 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Entre ton email" required>
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 transition text-white py-2 rounded-lg font-semibold">
                S’inscrire
            </button>
        </form>
        <p id="success-message" class="hidden text-green-400 font-semibold mt-3">Merci, tu es inscrit ! 🚀</p>
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

    document.getElementById("email-form").addEventListener("submit", function(event) {
        event.preventDefault();
        document.getElementById("success-message").classList.remove("hidden");
        setTimeout(() => {
            document.getElementById("success-message").classList.add("hidden");
        }, 5000);
    });
</script>

</body>
</html>
