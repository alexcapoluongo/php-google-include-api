<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <!-- Axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- VueJs -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
</head>

<body>
    <header>
        <div class="container">
            <div class="header-top">
                <div class="header-top-image">
                    <img src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_74x24dp.png" alt="Google Logo">
                </div>
                <div class="header-top-text">
                    Privacy & Termini
                </div>
            </div>
            <div class="header-bottom">
                <ul>
                    <li>Introduzione</li>
                    <li>Norme sulla privacy</li>
                    <li>Termini di servizio</li>
                    <li>Tecnologie</li>
                    <li class="active">Domande frequenti</li>
                </ul>
            </div>
        </div>
    </header>

    <main id="root">
        <section class="container">
        <div v-for="faq in faqs">
            <h2>{{ faq.question }}</h2>
            <p v-html="faq.answer"></p>
        </div>
        </section>
    </main>


    <footer>


    </footer>


    <script src="./js/script.js"></script>

</body>

</html>