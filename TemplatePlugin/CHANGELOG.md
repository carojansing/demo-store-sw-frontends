# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## Unreleased
### Changed
- Use `bash -c` for command input in Makefile
- Remove `composer show` check, because it was returning errors

### Fixed
- Fixed issue with prettier linting (it was only linting `.js` files)

### Removed
- Removed deprecated composer option `--no-suggest`

## [2.1.0] - 2022-06-14
### Added
- Added functional testsuite and example test
- Added `DOCKWARE_CI` variable to gitlab jobs
- Added custom test bootstrapper, to install required plugins in the correct order
- `make test-coverage` runs all tests and calculates the coverage

### Changed
- Update `.gitignore` to include more paths
- Update gitlab pipeline and docker images to php 8.1
- Update gitlab pipeline and dockware images to shopware 6.4.11.1 
- Make plugin name configurable as a variable in the `.gitlab-ci.yml` file
- Exclude migrations from PHPUnit tests
- Updated all dependencies
- `make test` does not calculate the coverage anymore

### Fixed
- Fixed issue with newer dockware versions, where the pipeline would throw permission errors

### Removed
- Removed `infection/infection` for now

## [2.0.0] - 2022-03-02
### Added
- Added phpunit configuration and example tests
- Added prettier for JS, SCSS, YAML, MD and JSON validation
- Added local dockware instance to directly test out the plugin

### Changed
- Gitlab Pipeline is now using dockware images
- Matrix builds (run tests for multiple PHP versions and SW versions)
- Updated README

### Removed
- Removed eslint
- Removed phpspec

## [1.1.7] - 2021-06-23
### Changed
- Updated to shopware 6.4

## [1.1.6] - 2021-04-22
### Fixed
- Fixed code coverage reporting (min variable missing)

## [1.1.5] - 2021-03-06
### Added
- Makefile commands (like `make lint`) can now be executed from withing the container

### Changed
- Cleaned up some Makefile commands
- Updated all linting and testing tools
- Instead of `shopware/platform` we are now requiring: `shopware/core`, `shopware/administration` and `shopware/storefront`
- Increase phpstan level to 8

## [1.1.4] - 2021-02-22
### Fixed
- Fixed code coverage reporting script

## [1.1.3] - 2020-10-25
### Fixed
- Fixed code coverage artifact generation
- Fixed code coverage reporting script

## [1.1.2] - 2020-09-18
### Fixed
- Fixed gitlab.com urls

## [1.1.1] - 2020-08-28
### Changed
- Updated to shopware 6.3
- Updated infection and other dev dependencies

## [1.1.0] - 2020-07-30
### Fixed
- Fixed `make help` command

### Added
- Added default phpstan configuration

### Changed
- Renamed base class from `TemplatePlugin` to `BasecomTemplatePlugin` to follow shopware standards
- Updated shopware to 6.2.3
- Added composer cache volume to makefile commands
- Added role description to composer author block

## 1.0.0
### Added
- Added default `.eslintignore`

### Changed
- Switch from xml to yaml config files
- Updated eslint configuration to use babel-eslint parser
- Using new global docker registry

[2.1.0]: https://gitlab.com/basecom-gmbh/shopware/v6/plugins/templates/TemplatePlugin/-/compare/2.0.0...2.1.0
[2.0.0]: https://gitlab.com/basecom-gmbh/shopware/v6/plugins/templates/TemplatePlugin/-/compare/1.1.7...2.0.0
[1.1.7]: https://gitlab.com/basecom-gmbh/shopware/v6/plugins/templates/TemplatePlugin/-/compare/1.1.6...1.1.7
[1.1.6]: https://gitlab.com/basecom-gmbh/shopware/v6/plugins/templates/TemplatePlugin/-/compare/1.1.5...1.1.6
[1.1.5]: https://gitlab.com/basecom-gmbh/shopware/v6/plugins/templates/TemplatePlugin/-/compare/1.1.4...1.1.5
[1.1.4]: https://gitlab.com/basecom-gmbh/shopware/v6/plugins/templates/TemplatePlugin/-/compare/1.1.3...1.1.4
[1.1.3]: https://gitlab.com/basecom-gmbh/shopware/v6/plugins/templates/TemplatePlugin/-/compare/1.1.2...1.1.3
[1.1.2]: https://gitlab.com/basecom-gmbh/shopware/v6/plugins/templates/TemplatePlugin/-/compare/1.1.1...1.1.2
[1.1.1]: https://gitlab.com/basecom-gmbh/shopware/v6/plugins/templates/TemplatePlugin/-/compare/1.1.0...1.1.1
[1.1.0]: https://gitlab.com/basecom-gmbh/shopware/v6/plugins/templates/TemplatePlugin/-/compare/1.0.0...1.1.0
