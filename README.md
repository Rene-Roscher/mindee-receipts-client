# mindee-receipts-client

[![Latest Version on Packagist](https://img.shields.io/packagist/v/rene-roscher/mindee-receipts-client.svg?style=flat-square)](https://packagist.org/packages/rene-roscher/mindee-receipts-client)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/rene-roscher/mindee-receipts-client/run-tests?label=tests)](https://github.com/rene-roscher/mindee-receipts-client/actions?query=workflow%3ATests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/rene-roscher/mindee-receipts-client.svg?style=flat-square)](https://packagist.org/packages/rene-roscher/mindee-receipts-client)


Mindee - Laravel API Wrapper - Receipts

## Installation

You can install the package via composer:

```bash
composer require rene-roscher/mindee-receipts-client
```

add this section to your config/services.php:

```php
'mindee' => [
    'api_key' => env('MINDEE_API_KEY')
]
```

add the MINDEE_API_KEY to your .env file:

```dotenv
MINDEE_API_KEY="YOUR-MINDEE-KEY"
```

## Usage

```php
$contents = 'your-file-contents';
$mindee = new \RServices\MindeeReceiptsClient();
$mindee->predict($contents);
```

## Credits

- [Rene Roscher](https://github.com/Rene-Roscher)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
