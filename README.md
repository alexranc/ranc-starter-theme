# Ranc WordPress Starter Theme

> Forked from https://labs.tonik.pl/theme/

## Changes:
- Eslint now extends from eslint-config-airbnb-base
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

## Quick Start

1) Install required npm dependences for building a theme.
```bash
$ npm install
```

2) Build a theme for development.
```bash
$ npm run dev
```

## Documentation

Comprehensive documentation of the starter is available at http://labs.tonik.pl/theme/
