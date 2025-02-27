<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compte à Rebours | Sorry I'm Late</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex flex-col items-center justify-center min-h-screen p-6">

<!-- Présentation du projet -->
<div class="bg-white shadow-xl rounded-lg p-6 text-center w-full max-w-2xl mb-6">
    <h1 class="text-3xl font-bold text-gray-800 mb-4">SORRY I’M LATE</h1>
    <p class="text-gray-600 leading-relaxed">
        Une maison qui réunit **design, mode et musique**.
        Un espace où **l’art rencontre la culture**, sans barrières ni frontières.
        Nous mettons les **artistes au cœur du projet**, célébrant leur créativité brute.
        Invités de tous horizons, **notre ambition est de construire une identité forte**,
        une marque qui inspire et rassemble à travers le monde.
    </p>
    <p class="mt-4 text-gray-700 font-semibold">🚀 **Freestyle exclusif en studio + drop capsule**</p>
    <p class="text-gray-900 font-bold">Artiste : <span class="text-blue-500">Tweezy</span></p>
    <p class="text-gray-900 font-bold">Drop : <span class="text-red-500">Sorry I’m Late</span></p>
</div>

<!-- Compte à Rebours -->
<div class="bg-white shadow-xl rounded-lg p-6 text-center w-full max-w-md">
    <h2 class="text-2xl font-bold text-gray-800 mb-2">Lancement dans :</h2>
    <div id="countdown" class="flex justify-center space-x-4 text-2xl font-semibold text-gray-900">
        <div class="flex flex-col items-center">
            <span id="days" class="text-4xl text-blue-500">00</span>
            <span class="text-sm text-gray-600">Jours</span>
        </div>
        <div class="flex flex-col items-center">
            <span id="hours" class="text-4xl text-blue-500">00</span>
            <span class="text-sm text-gray-600">Heures</span>
        </div>
        <div class="flex flex-col items-center">
            <span id="minutes" class="text-4xl text-blue-500">00</span>
            <span class="text-sm text-gray-600">Minutes</span>
        </div>
        <div class="flex flex-col items-center">
            <span id="seconds" class="text-4xl text-blue-500">00</span>
            <span class="text-sm text-gray-600">Secondes</span>
        </div>
    </div>
    <p id="end-message" class="hidden text-green-600 font-bold mt-4">Le projet est maintenant disponible ! 🎉</p>
</div>

<!-- Formulaire d'inscription -->
<div class="bg-white shadow-xl rounded-lg p-6 text-center w-full max-w-md mt-6">
    <h3 class="text-lg font-semibold text-gray-800 mb-2">🔥 Sois le premier informé du drop</h3>
    <p class="text-gray-600 text-sm mb-4">Reçois des infos exclusives sur la capsule & le freestyle.</p>
    <form id="email-form" class="flex flex-col space-y-3">
        <input type="email" id="email" class="w-full p-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Ton adresse email" required>
        <button type="submit" class="bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600 transition">S'inscrire</button>
    </form>
    <p id="success-message" class="hidden text-green-600 font-semibold mt-3">Merci, tu es inscrit ! 🎤</p>
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
