# Ranc WordPress Starter Theme

> Forked from https://labs.tonik.pl/theme/

## Changes:
- New eslint config extending from eslint-config-airbnb-base
- New stylint config extending from stylelint-config-recommended
- Added csscomb config (can be used via VS Code extension)
- Added prettier
- Theme template actions are now automatically loaded from 'app/Support/Templates' directory (each action should be its own file).
- Removed vue-eslint-plugin
- Removed dummy custom post type and taxonomy
- Removed un-used templates, shortcodes, and actions
- Removed jQuery

## Features:

- [ES6](https://babeljs.io/learn-es2015/) for JavaScript
- [SASS](http://sass-lang.com/) preprocessor for CSS
- [Webpack](https://webpack.js.org/) for managing, compiling and optimizing theme's asset files
- Simple [CLI](https://github.com/tonik/cli) for quickly initializing a new project
- Ready to use front-end boilerplates for [Foundation](//foundation.zurb.com/sites.html), [Bootstrap](//getbootstrap.com/docs/3.3/), [Bulma](//bulma.io/) and [Vue](//vuejs.org/)
- Utilizes PHP [Namespaces](http://php.net/manual/pl/language.namespaces.php)
- Simple [Theme Service Container](http://symfony.com/doc/2.0/glossary.html#term-service-container)
- Child Theme friendly [Autoloader](https://en.wikipedia.org/wiki/Autoload)
- Readable and centralized Theme Configs
- Oriented for building with [Actions](https://codex.wordpress.org/Glossary#Action) and [Filters](https://codex.wordpress.org/Glossary#Filter)
- Enhanced [Templating](https://en.wikibooks.org/wiki/PHP_Programming/Why_Templating) with support for passing data

## Requirements

Make sure you have all these dependences installed before moving on:

- WordPress >= 4.7
- PHP >= 7.0
- [Composer](https://getcomposer.org)
- [Node.js](https://nodejs.org)

## Installation

Install composer dependencies.
```bash
$ composer install
```

Install node dependencies.
```bash
$ npm install
```
## Building

Compiles unminified and unoptimized theme assets with source maps.
```bash
$ npm run dev
```

Builds assets for development, runs watcher (recompiles on change)
```bash
$ npm run watch
```

Compiles minified and optimized theme assets without source maps.
```bash
$ npm run prod
```

## Prettier

Runs all project .js files through prettier.
```bash
$ npm run prettier
```

## Documentation

Comprehensive documentation of the starter is available at http://labs.tonik.pl/theme/
