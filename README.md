# Courses

Teorija (Laravel README.md failā):

    • Kas ir API? 
      Atbilde:Api (Application Programming interface) -programmatūras starpnieks, kas ļauj divām lietojumprogrammām sarunāties savā starpā.
      
    • Kā deklarēt mainīgo PHP valodā?
      Atbilde:$mainigo=”mainigo”
      
    • Kādu arhitektūru izmanto Laravel, paskaidro kā tā strādā:
      Atbilde: Laravel izmanto MVC(Model-View-Contoller) Tas mijiedarbojas ar modeli, lai iegūtu vai atjauninātu datus. Modelis apstrādā datu bāzes mijiedarbības, piemēram, vaicājumu vai ierakstu atjaunināšanu, pamatojoties uz kontroliera norādījumiem.
      
    • Kas ir ORM, kāpēc to izmanto tīra SQL vietā?
      Atbilde: Orm(Object Relational mapping) To izmanto, lai pārveidotu informāciju starp datu bāzi un objektorientētas programmēšanas valodu. ORM izmanto vairak, tapec kā ORM atvieglo mijiedarbību ar datu bāzēm.
      
    • Uzraksti Eloquent ORM pieprasījumu modelim User, kur nepieciešams iegūt visus lietotājus kuriem reitings ir lielāks par 4. Lietotāju tabulas struktūra:
      Atbilde: $User=User::where(‘rating’,’>’,4);
