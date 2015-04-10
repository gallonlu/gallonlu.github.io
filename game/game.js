// Create the canvas
var canvas = document.createElement("canvas");
var ctx = canvas.getContext("2d");
canvas.width = 512;
canvas.height = 480;
document.body.appendChild(canvas);

// Background image
var bgReady = false;
var bgImage = new Image();
bgImage.onload = function () {
	bgReady = true;
};
bgImage.src = "img/bg.png";

//  player image
var playerReady = false;
var playerImage = new Image();
playerImage.onload = function () {
	playerReady = true;
};
playerImage.src = "img/mario.png";

//  item image
var itemReady = false;
var itemImage = new Image();
itemImage.onload = function () {
	itemReady = true;
};
itemImage.src = "img/mushroom.png";

// Game objects
var player = {
	speed: 200 // movement in pixels per second
};
var item = {};
var itemsCaught = 0;

// keyboard controls
var keysDown = {};

addEventListener("keydown", function (e) {
	keysDown[e.keyCode] = true;
}, false);

addEventListener("keyup", function (e) {
	delete keysDown[e.keyCode];
}, false);

// Reset the game when the player catches item
var reset = function () {
	player.x = canvas.width / 2;
	player.y = canvas.height / 2;

	// Throw the item somewhere on the screen randomly
	item.x = 32 + (Math.random() * (canvas.width - 64));
	item.y = 32 + (Math.random() * (canvas.height - 64));
};

// Update game objects
var update = function (modifier) {
	if (38 in keysDown) { //up
		player.y -= player.speed * modifier;
	}
	if (40 in keysDown) { //down
		player.y += player.speed * modifier;
	}
	if (37 in keysDown) { //left
		player.x -= player.speed * modifier;
	}
	if (39 in keysDown) { //right
		player.x += player.speed * modifier;
	}

	//touch detect
	if (
		player.x <= (item.x + 32)
		&& item.x <= (player.x + 32)
		&& player.y <= (item.y + 32)
		&& item.y <= (player.y + 32)
	) {
		++itemsCaught;
		reset();
	}
};

// Draw everything
var render = function () {
	if (bgReady) {
		ctx.drawImage(bgImage, 0, 0);
	}

	if (playerReady) {
		ctx.drawImage(playerImage, player.x, player.y);
	}

	if (itemReady) {
		ctx.drawImage(itemImage, item.x, item.y);
	}

	// Score
	ctx.fillStyle = "rgb(250, 250, 250)";
	ctx.font = "24px Helvetica";
	ctx.textAlign = "left";
	ctx.textBaseline = "top";
	ctx.fillText("Mushroom : " + itemsCaught, 32, 32);
};

// The main game loop
var main = function () {
	var now = Date.now();
	var delta = now - then;

	update(delta / 1000);
	render();

	then = now;

	// Request to do this again ASAP
	requestAnimationFrame(main);
};

//play this game
var then = Date.now();
reset();
main();