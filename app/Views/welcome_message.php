<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Citi Plumb</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="<?= base_url('favicon.ico') ?>">

    <!-- Bootstrap -->
    <link href="<?= base_url('css/bootstrap.min.css') ?>" rel="stylesheet">
    <style>
        /* Style for hero section */
        .hero {
            background-image: url('<?= base_url('images/slider-bg12.jpg') ?>');
            background-size: cover; /* Make sure the image covers the entire element */
            background-position: center; /* Center the image */
            background-repeat: no-repeat; /* Prevent image from repeating */
            color: white; /* Text color for better contrast */
            min-height: 100vh; /* Ensure the hero section takes up the full viewport height */
            display: flex; /* Use flexbox for alignment */
            align-items: center; /* Vertically center the content */
            justify-content: center; /* Horizontally center the content */
        }

        .hero-content {
            z-index: 1; /* Ensure the content is above the background image */
        }
    </style>
</head>
<body>
    <div class="hero">
        <div class="hero-content flex-col lg:flex-row-reverse">
            <img
                src="https://github.com/redhocode.png"
                class="max-w-sm rounded-lg shadow-2xl" />
            <div>
                <h1 class="text-5xl font-bold">Box Office News!</h1>
                <p class="py-6">
                    Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem
                    quasi. In deleniti eaque aut repudiandae et a id nisi.
                </p>
                <button class="btn btn-primary">Get Started</button>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="<?= base_url('js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>
