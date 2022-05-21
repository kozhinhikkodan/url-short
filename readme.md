# URL Shortner

URL Shortner powered by cleanuri.com

## Require the Package

```bash
composer require Kozhinhikkodan/UrlShort
```

## Usage

```php
# use the package
use Kozhinhikkodan\UrlShort\UrlShort;

# returns 'shortened URL'
 $UrlShort = new UrlShort();
 return $UrlShort->short_url($url);
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](https://choosealicense.com/licenses/mit/)