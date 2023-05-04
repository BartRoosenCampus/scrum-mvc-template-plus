# Basic plus version

----
*Deze versie is gebaseerd op de "basic" versie. Met dat verschil dat deze "plus"
versie twig gebruikt. Hiervoor bestaat er een TwigService als tussenlaag om de 
pagina's gemakkelijker te renderen en te voorzien van data. Verder geen 
voorgeprogrammeerde features*

## Folders

------------------

### Root folder

- hier komen de controllers
- index.php: dient om de user naar de homepagina te sturen, heeft verder geen functie [info](index.php)
- database.sql: hierin kan het script voor het maken van de database worden bewaard [info](database.sql)
- .gitignore [info](.gitignore)

### App

- .htaccess : App folder mag niet publiek toegankelijk zijn [info](App/.htaccess)

### App/Data 

- Lege folder [info](App/Data/readme.md)

### App/Entities

- Lege folder [info](App/Entities/readme.md)

### App/Exceptions

- Lege folder [info](App/Exceptions/readme.md)

### App/Services

- [TwigService.php](App/Services/TwigService.php)
- [Readme.md](App/Services/readme.md)

### App/Views

- [base.twig](App/Views/base.twig): deze file bevat de structuur van elke pagina die deze "template" extend
- App/Views/components/: deze folder bevat enkele componenten die gemeenschappelijk zijn voor alle webpagina's
  - [head.twig](App/Views/components/head.twig): de head van de webpages
  - [navbar.twig](App/Views/components/navbar.twig): de navbar

Het spreekt voor zich dat het hier om een voorbeeld gaat en dat de structuur van 
de pagina's en hun inhoud (componenten) kan worden aangepast naar believen.

### public

Deze folder bevat JavaScript, css en img (afbeeldingen) en moet publiek toegankelijk zijn. 
[info](public/readme.md)

- [css](public/css/readme.md)
- [js](public/js/readme.md)
- [img](public/img/readme.md)
