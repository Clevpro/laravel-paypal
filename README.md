# This package is archived and is no longer maintained!

If you decide to maintain a fork, please contact me and I'll gladly share your repo here for people to use instead.

# Laravel Paypal / Laravel Cashier

This package adds several components to your Laravel Paypal Admin panel to help you with managing customer subscriptions, it works hand
in hand with [Laravel Cashier](https://github.com/laravel/cashier).



## How it works

This package adds a section in the billable resource details view with some information about the subscription:

<img src="https://github.com/themsaid/Paypal-cashier-tool/blob/master/resource-tool.jpg?raw=true">

If you want to display more details and be able to manage the subscription you may click the "Manage" link which will lead you
to a screen with full management capabilities.

<img src="https://github.com/themsaid/Paypal-cashier-tool/blob/master/billable-screen.jpg?raw=true">

Currently this package works only with laravel cashier for Stripe, Braintree is not supported yet.

## Installation and usage

You may require this package using composer:

```
composer require clevpro/laravel-paypal
```


## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
