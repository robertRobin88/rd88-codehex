const path = require('path');
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const webpack = require('webpack');
module.exports = {
    
    entry: {
        index: './src/index.js'
    },
    output: {
        path: path.resolve(__dirname, './assets'),
        filename: '../assets/js/app.js',
        clean: true,
    },
    module: {
        rules: [
        
            {
                test: /\.s[ac]ss$/i,
                use: [
                  MiniCssExtractPlugin.loader,
                  "css-loader",
                  {
                    loader: "sass-loader",
                    options: {
                      sourceMap: false,
                      sassOptions: {
                        outputStyle: "compressed",
                      },
                    },
                  },
                ],
              }
        ],
    },
    plugins: [
        new MiniCssExtractPlugin({
          filename: "css/app.css",
        }),
      ],
  };