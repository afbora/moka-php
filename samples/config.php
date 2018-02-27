<?php

/*
 * Kütüphaneyi Composer ile yüklemediyseniz elle yüklemek için 
 * MokaBootstrap.php dosyasını çekin ve load() metodunu çağırarak kütüphaneyi yükleyin.
 * 
 * Eğer kütüphaneyi Composer ile yüklediyseniz aşağıdaki 2 satıra gerek yoktur, 
 * composer kütüphaneyi yükleme işlemlerini otomatik olarak yapmaktadır.
 *
 */
require_once('../MokaBootstrap.php');
MokaBootstrap::load();

// Moka sistemi tarafından verilen bayi kodu
\Moka\Options::setDealerCode('DEALER_CODE');

// Moka sistemi tarafından verilen kullanıcı adı
\Moka\Options::setUsername('USERNAME');

// Moka sistemi tarafından verilen şifre
\Moka\Options::setPassword('PASSWORD');

// Eğer canlı modda değil iseniz (test aşamasında iseniz) TRUE olarak işaretleyin. Canlı ortama geçtiğinizde FALSE işaretleyin yada bu satırı silin
\Moka\Options::setTestMode();

/*
* Alternative setting options
* Alternatif ayar yapılandırma
*
* $options = new \Moka\Options("DEALER_CODE", "USERNAME", "PASSWORD", true);
*
*/