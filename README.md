Djanoa
======

Client PHP pour la plateforme [Djanoa](http://www.djanoa.com).

Installation
------------
Pour l'installer il faut télécharger le projet et le décompresser dans votre projet.

Utilisation
-----------
Il faut d'abord créer un compte sur [le site de djanoa](http://www.djanoa.com).

Ensuite vous faites les configurations
```php
require 'djanoa_php/src/djanoa.class.php';

$client = new Djanoa(VOTRE_NUMERO_COURT, CODE_DE_VOTRE_COMPTE, MOT_DE_PASSE);
```

ensuite pour envoyer un SMS il suffit de faire :

```php
$client->send_sms('221777777777', 'juste pour tester mon client PHP');
```

Gestion des erreurs
-------------------

Si vous voulez allez plus loin vous pouvez récupérer la réponse et voir s'il n'y a pas d'erreur.

Le code suivant permet d'envoyer un SMS et, s'il y'a une erreur, affiche le code de l'erreur, le message d'erreur ainsi que l'adresse IP de l'envoyeur.
```php
$reponse = $sms->send_sms('221777777777', 'juste pour tester mon client PHP');

if $reponse->sent() {
  echo "le sms est envoyé";
} else {
  echo $reponse->getError()->getCode();
  echo $reponse->getError()->getMessage();
  echo $reponse->getError()->getIp();
}
```

Copyright
---------
Copyright 2013 Cheikh Sidya CAMARA. Voir la [LICENSE](https://github.com/scicasoft/djanoa_php/blob/master/LICENSE.md) pour plus de détails.