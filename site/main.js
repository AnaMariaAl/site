const clock = document.querySelector(".clock-time");

function updateTime() {
  const date = new Date();
  const hours = date.getHours();
  let minutes = date.getMinutes();
  let seconds = date.getSeconds();

  const amPM = hours >= 12 ? "PM" : "AM";

  if (seconds >= 0 && seconds < 10) {
    seconds = `0${seconds}`;
  }

  if (minutes >= 0 && minutes < 10) {
    minutes = `0${minutes}`;
  }

  clock.innerHTML = `${hours} : ${minutes} : ${seconds} : ${amPM}`;
}

function startTimer() {
  setInterval(() => {
    this.updateTime();
  }, 1000);
}

startTimer();
