# Yunofav for YunoHost

[![Integration level](https://dash.yunohost.org/integration/yunofav.svg)](https://dash.yunohost.org/appci/app/yunofav) ![](https://ci-apps.yunohost.org/ci/badges/yunofav.status.svg) ![](https://ci-apps.yunohost.org/ci/badges/yunofav.maintain.svg)  
[![Install Yunofav with YunoHost](https://install-app.yunohost.org/install-with-yunohost.svg)](https://install-app.yunohost.org/?app=yunofav)

*[Lire ce readme en français.](./README_fr.md)*

> *This package allows you to install Yunofav quickly and simply on a YunoHost server.  
If you don't have YunoHost, please consult [the guide](https://yunohost.org/#/install) to learn how to install it.*

## Overview
Creates a page for your favorite links, using the Yunohost tiles look and feel

**Shipped version:** 1.0

## Screenshots

![](https://lh4.googleusercontent.com/-m1ZivTu8c5k/VJrfEab4-0I/AAAAAAAACG0/q55YVPMbiFk/s600/ScreenHunter_01%2520Dec.%252024%252016.37.gif)

## Demo

* [Official demo](Link to a demo site for this app.)

## Configuration

How to configure this app: From an admin panel, a plain file with SSH, or any other way.

## Documentation

 * Official documentation: Link to the official documentation of this app
 * YunoHost documentation: If specific documentation is needed, feel free to contribute.

## YunoHost specific features

#### Multi-user support

Are LDAP and HTTP auth supported?
Can the app be used by multiple users?

#### Supported architectures

* x86-64 - [![Build Status](https://ci-apps.yunohost.org/ci/logs/yunofav%20%28Apps%29.svg)](https://ci-apps.yunohost.org/ci/apps/yunofav/)
* ARMv8-A - [![Build Status](https://ci-apps-arm.yunohost.org/ci/logs/yunofav%20%28Apps%29.svg)](https://ci-apps-arm.yunohost.org/ci/apps/yunofav/)

## Limitations

* Any known limitations.

## Additional information

* Other info you would like to add about this app.

## Links

 * Report a bug: https://github.com/YunoHost-Apps/yunofav_ynh/issues
 * YunoHost website: https://yunohost.org/

---

## Developer info

Please send your pull request to the [testing branch](https://github.com/YunoHost-Apps/yunofav_ynh/tree/testing).

To try the testing branch, please proceed like that.
```
sudo yunohost app install https://github.com/YunoHost-Apps/yunofav_ynh/tree/testing --debug
or
sudo yunohost app upgrade yunofav -u https://github.com/YunoHost-Apps/yunofav_ynh/tree/testing --debug
```
