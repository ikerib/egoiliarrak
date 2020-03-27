var Encore = require('@symfony/webpack-encore');
var fs = require("fs");
if (!Encore.isRuntimeEnvironmentConfigured()) {
    Encore.configureRuntimeEnvironment(process.env.NODE_ENV || 'dev');
}

Encore
    .setOutputPath('public/build/')
    .setPublicPath('/build')

    .addEntry('jsApp', './assets/js/app.js')
    .addStyleEntry('cssGlobal', './assets/css/global.scss')
    .addStyleEntry('cssApp', './assets/css/app.scss')

    .splitEntryChunks()
    .enableSingleRuntimeChunk()
    .cleanupOutputBeforeBuild()
    .enableBuildNotifications()
    .enableSourceMaps(!Encore.isProduction())
    .enableVersioning(Encore.isProduction())

    .configureBabelPresetEnv((config) => {
        config.useBuiltIns = 'usage';
        config.corejs = 3;
    })

    .enableSassLoader()
    .enableVueLoader()
    .autoProvidejQuery()
    .copyFiles([
        {from: './node_modules/ckeditor/', to: 'ckeditor/[path][name].[ext]', pattern: /\.(js|css)$/, includeSubdirectories: false},
        {from: './node_modules/ckeditor/adapters', to: 'ckeditor/adapters/[path][name].[ext]'},
        {from: './node_modules/ckeditor/lang', to: 'ckeditor/lang/[path][name].[ext]'},
        {from: './node_modules/ckeditor/plugins', to: 'ckeditor/plugins/[path][name].[ext]'},
        {from: './node_modules/ckeditor/skins', to: 'ckeditor/skins/[path][name].[ext]'},
        // {from: './assets/js/libs/datatables/locales/', to: 'datatables/[path][name].[ext]'},
    ])
;

let config = Encore.getWebpackConfig();

config.module.rules.unshift({
    parser: {
        amd: false,
    }
});
if(!Encore.isProduction()) {
    fs.writeFile("fakewebpack.config.js", "module.exports = "+JSON.stringify(config), function(err) {
        if(err) {
            return console.log(err);
        }
        console.log("fakewebpack.config.js written");
    });
}

module.exports = Encore.getWebpackConfig();
