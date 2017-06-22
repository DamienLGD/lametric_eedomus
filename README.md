
1. Se rendre à l’adresse : https://developer.lametric.com
2. Créer une "INDICATOR APP" :
3. Configurer une icone, un nom et sélectionner Push dans "Communication type" :
4. Donner un nom et une description à votre app et cocher "Private app" puis cliquer sur "Save" :
5. Publier l’application puis installer là sur votre LaMetric grâce à l’application mobile.
6. Modifier le script pour y ajouter l'URL local que vous avez récupéré sur le site de LaMetric ainsi que votre token
7. Mettre ce script sur un serveur web (autre que la Eedomus) 
8. Ajouter un actionneur http et ajouter les URL comme ceci: http://url_nas/lametric.php?valeur=youpi&icon=i135 ou si cela ne fonctionne pas sur votre navigateur comme ceci:
http://url_nas/lametric.php?valeur=youpi?icon=i135

Explication:

Youpi sera affiché sur votre Eedomus et utilisera l'icone 135 de ce site https://developer.lametric.com/icons (Ne pas oublier le i avant le chiffre de l'icône)

Si vous souhaitez mettre une phrase avec des espaces, merci d'utiliser des %20 à la place des espaces comme ceci: http://url_nas/lametric.php&valeur=coucou%20je%20suis%20la&icon=i135
