module.exports = {
  // disable hashes in filenames
  filenameHashing: true,
  // delete HTML related webpack plugins
  chainWebpack: (config) => {
    config.plugin('html').tap((options) => {
      options[0].inject = false;
      options[0].template = 'public/index.php';
      options[0].minify.collapseWhitespace = false;

      return options;
    });
  },
  configureWebpack: {
    output: {
      // filename: '[name].js',
      filename: '[name].[contenthash:8].js',
    },
    optimization: {
      moduleIds: 'hashed',
      runtimeChunk: 'single',
      splitChunks: {
        cacheGroups: {
          vendor: {
            test: /[\\/]node_modules[\\/]/,
            name: 'vendors',
            chunks: 'all',
          },
        },
      },
    },
  },
  indexPath: '../index.php',
  publicPath: '/wp-content/themes/Vue-WordPress-Theme/dist',
};
