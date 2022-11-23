# laravel-bankid

Laravel handler to identify user through BankID

## Installation

Require this package with composer.

```bash
$ composer require ansjabar/laravel-bankid
```

## Integration

```bash
$ php artisan vendor:publish --provider="AnsJabar\LaravelBankId\BankIdServiceProvider"
```

Add `BANKID_CERTIFICATE_PATH`, `BANKID_CERTIFICATE_PASSWORD` and '`BANKID_RESPONSE_WAIT` to your `.env` file.

## Usage

```php
(new \AnsJabar\LaravelBankId\BankId)->identify($person_no);
```
## License

This laravel-teams-logger package is available under the MIT license. See the LICENSE file for more info.
