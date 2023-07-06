# solid4
SOLID 4. Segregacion de interfaces
ejemplo 
clase Estanque (Pond), tiene un metodo sendToPlay.
Tengo dos clases, una pato y otra pato de madera. 
pato (Duck)
 - puede flotar
 - puede chillar
pato De Madera (WoddenDuck)
 -Solo puede flotar

Problematica, como puede la clase estanque (pond) aceptar instancias donde los patos puedan jugar.

Solucion, segregacion de interfaces, separar las responsabilidades flotar y chillar en interfaces, y crear una nueva interface jugar (Play)

run composite dump-autoload
