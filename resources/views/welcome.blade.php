<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compte à Rebours | Shopify</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

<div class="bg-white shadow-xl rounded-lg p-6 text-center w-full max-w-md">
    <h1 class="text-2xl font-bold text-gray-800 mb-2">Lancement du projet dans :</h1>
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

    // 🕒 Définir la date de sortie du projet (modifiez cette date)
    const releaseDate = new Date("2025-03-15T00:00:00").getTime();
    startCountdown(releaseDate);
</script>

</body>
</html>
