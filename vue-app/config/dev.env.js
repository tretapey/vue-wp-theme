'use strict'
const merge = require('webpack-merge')
const prodEnv = require('./prod.env')

module.exports = merge(prodEnv, {
  NODE_ENV: '"development"',
  WP_API_URL: '"http://localhost:8888/vue-theme-dev/wp-json/wp/v2/"'
})
