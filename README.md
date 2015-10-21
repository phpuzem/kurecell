# Laravel 5.1 Kurecell Sms Paketi

www.kurecell.com.tr

Komut satırından bu kodu çalıştırınız:
```
composer require phpuzem/kurecell dev-master
```

```config/app.php``` dosyasına aşağıda bulunan satırları ekliyoruz.
```php
return array(
    // ...

    'providers' => array(
        // ...

        Phpuzem\Kurecell\KurecellSmsProvider::class
    ),

    // ...

    'aliases' => array(
        // ...

        'Kurecell'  => Phpuzem\Kurecell\Facades\KurecellFacade::class
    ),
);
```
# Ayarlar

```code
php artisan vendor:publish
```
komutunu kullanarak ``` config/kurecell.php``` dosyasını yayınlıyoruz.

### sms.php

```code
return [
    'user' => 'Kullanıcı Adınız',
    'pass' => 'Şifreniz'
];

```

Kullanıma hazır!

#Kullanımı
```php
public function index()
	{
		return \Kurecell::setnumbers(['05325087092'])->setmessage($sms)->sethead($smsbaslik)->send();
	}
```
