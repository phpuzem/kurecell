# Laravel 5.1 Kurecell Sms Paketi

Bu paketin kullanılabilmesi için Netgsm ```https://www.netgsm.com.tr/``` firmasına üye olunup, php api desteği açtırılmalıdır.

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
