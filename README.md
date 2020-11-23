# kasztanapi
API, ktore podaje cenę i wagę kasztanów<br>
Dostępne na https://kasztanapi.herokuapp.com/ <br><br>
### Przykłady użycia
Cena 4 kasztanów
```
GET https://kasztanapi.herokuapp.com/api/price.php?v=4
```
Output:
```
[
    {
        "price": "2.4"
    },
    {
        "thanks": "Dziękujemy za korzystanie z KasztanAPI",
        "waluta": "Dane podane w złotówkach"
    }
]
```
<br><br>
Waga 4 kasztanów
```
GET https://kasztanapi.herokuapp.com/api/weight.php?v=4&ag=false
```
Output:
```json
[
    {
        "weight": "60"
    },
    {
        "thanks": "Dziękujemy za korzystanie z KasztanAPI"
    }
]
```
Dane podane w gramach
<br><br>
Waga 4 kasztanów, przetłumaczona na angielski
```
GET https://kasztanapi.herokuapp.com/api/weight.php?v=4&ag=true
```
Output:
```json
[
    {
        "weight": "0.12 pounds of raindrops would be enough to slightly annoy each member of Il Divo 194.4 times."
    },
    {
        "thanks": "Dziękujemy za korzystanie z KasztanAPI"
    }
]
```
<br><br>
Typy kasztanów
```
GET https://kasztanapi.herokuapp.com/api/types.php
```
