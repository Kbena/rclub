var Encore = require('@symfony/webpack-encore');

Encore
    // directory where compiled assets will be stored
    .setOutputPath('public/build/')
    // public path used by the web server to access the output path
    .setPublicPath('/build')
    // only needed for CDN's or sub-directory deploy
    //.setManifestKeyPrefix('build/')

    /*
     * ENTRY CONFIG
     *
     * Add 1 entry for each "page" of your app
     * (including one that's included on every page - e.g. "app")
     *
     * Each entry will result in one JavaScript file (e.g. app.js)
     * and one CSS file (e.g. app.css) if you JavaScript imports CSS.
     */
    .addEntry('js/app', './assets/js/app.js')
    .addStyleEntry('css/app', './assets/scss/app.scss')
    
    .addEntry('js/jquery', './assets/js/jquery.min.js')
    //.addEntry('js/home', './assets/js/home.js')

    // .addEntry('js/flags', './assets/js/flags.js')
    .addStyleEntry('css/flags', './assets/scss/flags.min.scss')

    .addEntry('js/reset', './assets/js/reset.js')
    .addStyleEntry('css/reset' , './assets/scss/reset.scss')


    //Logo
    .addEntry('logo', './assets/img/ffflogo.jpg')
    // Image hotel accueil
    .addEntry('first', './assets/img/first.jpg')
    .addEntry('second', './assets/img/second.jpg')
    .addEntry('third', './assets/img/third.jpg')
    // Img Hotel miniature
    .addEntry('berlin1', './assets/img/berlin1.jpeg')

    // Photo Joueur
    .addEntry('areola', './assets/img/areola.png')
    .addEntry('dembele', './assets/img/dembele.png')
    .addEntry('fekir', './assets/img/fekir.png')
    .addEntry('giroud', './assets/img/giroud.png')
    .addEntry('griezmann', './assets/img/griezmann.png')
    .addEntry('hernandez', './assets/img/hernandez.png')
    .addEntry('kante', './assets/img/kante.png')
    .addEntry('kingpembe', './assets/img/kingpembe.png')
    .addEntry('lemar', './assets/img/lemar.png')
    .addEntry('lloris', './assets/img/lloris.png')
    .addEntry('mandanda', './assets/img/mandanda.png')
    .addEntry('matuidi', './assets/img/matuidi.png')
    .addEntry('mbappe', './assets/img/mbappe.png')
    .addEntry('mendy', './assets/img/mendy.png')
    .addEntry('nzonzi', './assets/img/nzonzi.png')
    .addEntry('pavard', './assets/img/pavard.png')
    .addEntry('pogba', './assets/img/pogba.png')
    .addEntry('sidibe', './assets/img/sidibe.png')
    .addEntry('tolisso', './assets/img/tolisso.png')
    .addEntry('umtiti', './assets/img/umtiti.png')
    .addEntry('varane', './assets/img/varane.png')

    //drapeau
    .addEntry('blank', './assets/img/blank.gif')

    /*
     * FEATURE CONFIG
     *
     * Enable & configure other features below. For a full
     * list of features, see:
     * https://symfony.com/doc/current/frontend.html#adding-more-features
     */
    .cleanupOutputBeforeBuild()
    .enableBuildNotifications()
    .enableSourceMaps(!Encore.isProduction())
    // enables hashed filenames (e.g. app.abc123.css)
    .enableVersioning(Encore.isProduction())

    // enables Sass/SCSS support
    .enableSassLoader()

    // uncomment if you use TypeScript
    //.enableTypeScriptLoader()

    // uncomment if you're having problems with a jQuery plugin
    //.autoProvidejQuery()


module.exports = Encore.getWebpackConfig();

                    // externals: {
                    //     jquery: 'jQuery'
                    //     }
                    // };


