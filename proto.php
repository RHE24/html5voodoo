<!doctype html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>HTML5 Voodoo &raquo; 2D JavaScript Gaming</title>
</head>

<body>

	<script src="js/out/hvdoo.js"></script><script>
var e = new HVdoo.entities.Entity(2, 3);
var h = new HVdoo.entities.HeroEntity(23, 42, 32, 32, "img/elements-icons.png");

var c = new HVdoo.components.Component();
c.exec = function(){ console.log("in gen comp func"); };

var cm = new HVdoo.components.ComponentManager();
cm.set("gen", c);

document.body.appendChild(h.getSprite().img);
</script>

</body>
</html>

