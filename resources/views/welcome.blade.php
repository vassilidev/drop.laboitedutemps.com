<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorry I’m Late | Drop</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Dégradé d’arrière-plan dynamique */
        body {
            background: linear-gradient(135deg, #1E1E2E, #3A3A6D, #7158E2);
            background-size: 400% 400%;
            animation: gradientBG 8s ease infinite;
        }

        @keyframes gradientBG {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
    </style>
</head>
<body class="flex flex-col items-center justify-center min-h-screen text-white p-6">

<!-- Conteneur principal -->
<div class="max-w-3xl w-full bg-opacity-20 bg-white backdrop-blur-md rounded-2xl p-8 shadow-lg text-center border border-white/20">

    <!-- Logo ou titre -->
    <h1 class="text-4xl font-bold tracking-widest text-gray-100 uppercase mb-6">
        SORRY I’M LATE
    </h1>

    <!-- Description -->
    <p class="text-lg text-gray-300 leading-relaxed mb-6">
        Une maison qui fusionne **design, mode et musique**.
        Un mouvement culturel qui réunit les **artistes de tous horizons**,
        et qui s’affirme comme une signature intemporelle.
    </p>

    <!-- Compte à rebours -->
    <div id="countdown" class="grid grid-cols-4 gap-4 text-xl font-semibold">
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
    <p id="end-message" class="hidden text-green-400 font-bold mt-4">Le projet est maintenant disponible ! 🎉</p>

    <!-- Formulaire d'inscription -->
    <div class="mt-8">
        <h3 class="text-lg font-semibold text-gray-100 mb-2">🔥 Reçois les infos en avant-première</h3>
        <form id="email-form" class="flex flex-col space-y-3 w-full">
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

    // Définition de la date de sortie
    const releaseDate = new Date("2025-03-15T00:00:00").getTime();
    startCountdown(releaseDate);

    // Gestion du formulaire d'inscription
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
