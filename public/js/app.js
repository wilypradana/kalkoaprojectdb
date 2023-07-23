// Burger menus
document.addEventListener("DOMContentLoaded", function () {
  // open
  const burger = document.querySelectorAll(".navbar-burger");
  const menu = document.querySelectorAll(".navbar-menu");

  if (burger.length && menu.length) {
    for (var i = 0; i < burger.length; i++) {
      burger[i].addEventListener("click", function () {
        for (var j = 0; j < menu.length; j++) {
          menu[j].classList.toggle("hidden");
        }
      });
    }
  }

  // close
  const close = document.querySelectorAll(".navbar-close");
  const backdrop = document.querySelectorAll(".navbar-backdrop");

  if (close.length) {
    for (var i = 0; i < close.length; i++) {
      close[i].addEventListener("click", function () {
        for (var j = 0; j < menu.length; j++) {
          menu[j].classList.toggle("hidden");
        }
      });
    }
  }

  if (backdrop.length) {
    for (var i = 0; i < backdrop.length; i++) {
      backdrop[i].addEventListener("click", function () {
        for (var j = 0; j < menu.length; j++) {
          menu[j].classList.toggle("hidden");
        }
      });
    }
  }
});

const gameUrls = [];
const gameThumbnails = [];
const gameTitles = [];
// Fetch data from games.json
fetch("games.json")
  .then((response) => response.json())
  .then((data) => {
    data.forEach((game) => {
      gameUrls.push(game.urlgame);
      gameThumbnails.push(game.thumbnail);
      gameTitles.push(game.title);
    });
    populateGameElements();
  })
  .catch((error) => console.log(error));

// Khusus untuk tampilan mobile
function createGameElement(index) {
  const gameUrl = gameUrls[index];
  const gameThumbnail = gameThumbnails[index];
  const gameTitleText = gameTitles[index]; // Menggunakan nama variabel gameTitleText

  const gameElement = document.createElement("a");
  gameElement.href = gameUrl;
  gameElement.className =
    "w-full sm:w-1/2 md:w-1/4   relative block overflow-hidden rounded-xl bg-cover bg-center bg-no-repeat";
  gameElement.style.backgroundImage = `url(${gameThumbnail})`;
  const gameContent = document.createElement("div");
  gameContent.className =
    "relative flex items-start justify-between px-3 pt-16 pb-3 z-10";

  const gameTitle = document.createElement("h3");
  gameTitle.className = "md:text-xl md:font-bold hidden md:block text-white";
  gameTitle.textContent = `"${gameTitleText}"`; // Menggunakan gameTitleText sebagai nilai

  gameContent.appendChild(gameTitle);
  gameElement.appendChild(gameContent);

  return gameElement;
}

const container = document.querySelector(".contentGame");
let columnIndex = 0;
let rowIndex = 0;
let gameCounter = 0;

function populateGameElements() {
  while (gameCounter < gameUrls.length) {
    const gameElement = createGameElement(gameCounter);
    container.appendChild(gameElement);

    if (window.innerWidth >= 642) {
      // Medium and larger screens (4 columns per row)
      gameElement.classList.add("md:w-1/4", "sm:w-1/2", "w-full");
      columnIndex++;

      if (columnIndex === 4) {
        columnIndex = 0;
        rowIndex++;
      }
    } else {
      // Small screens (2 columns per row)
      gameElement.classList.add("sm:w-1/2", "w-full");
      columnIndex++;

      if (columnIndex === 2) {
        columnIndex = 0;
        rowIndex++;
      }
    }

    gameCounter++;
  }
}

const button = document.getElementById("buttonDownload");
const link = document.querySelector("a");
const arrow = document.getElementById("arrow");
const check = document.getElementById("check");

link.addEventListener("click", () => {
  link.classList.add("hidden");
  arrow.classList.add("animate-down");

  setTimeout(() => {
    arrow.classList.remove("animate-down");

    setTimeout(() => {
      check.classList.remove("w-0");
      check.classList.add("w-5");

      setTimeout(() => {
        check.classList.add("w-0");
        check.classList.remove("w-5");

        setTimeout(() => {
          reset();
        }, 1000);
      }, 1000);
    }, 500);
  }, 0);
});
button.addEventListener("click", () => {
  window.location.href = "<?= $wp['link'] ?>";
});

function reset() {
  link.classList.remove("hidden");
}
