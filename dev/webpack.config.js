const ExtractTextPlugin = require('extract-text-webpack-plugin');
var WebpackPluginCopy = require('webpack-plugin-copy');

const path = require('path');

module.exports = {
    entry: './src/index.js',
    output: {
        path: path.resolve(__dirname, 'dist'),
        filename: 'bundle.js'
    },
    module: {
        rules: [{
            test: /\.scss$/,
            use: ExtractTextPlugin.extract({
                fallback: 'style-loader',
                use: ['css-loader', 'sass-loader']
            })
        }]
    },
    plugins: [
        new ExtractTextPlugin('style.css'),
        new WebpackPluginCopy([
            { from: './dist/style.css', to: '../../' }
        ])
    ]
};