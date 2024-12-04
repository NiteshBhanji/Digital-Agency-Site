// Move Circle With Mouse Pointer
const cursorE = document.querySelector('.cursor-Hover');

document.addEventListener('mousemove', (e) => {
    cursorE.style.left = (e.screenX) + 'px';
    cursorE.style.top = (e.screenY - 72) + 'px';
})

// Hover Circle Scale Up Effect
const containerH = document.getElementById('cursor-Hoverid');
const visibleH = document.getElementById('visibleHid');
const curTextService = document.getElementById('expertiseCursor');
const curTextProject = document.getElementById('projectCursor');
const curTextUndercon = document.getElementById('underConCursor');

const scaleOne = document.querySelectorAll("#serviceHid");
scaleOne.forEach((linkH) => {
    linkH.addEventListener('mousemove', () => { containerH.style.transform = "scale(4)"; containerH.style.margin = "-15px 0 0 -15px"; visibleH.style.opacity = "1"; curTextService.style.display = "block"; curTextProject.style.display = "none"; curTextUndercon.style.display = "none" });
    linkH.addEventListener('mouseleave', () => { containerH.style.transform = "translate(-50%,-50%)"; containerH.style.margin = "0"; visibleH.style.opacity = "0"; curTextService.style.display = "none"; curTextProject.style.display = "none"; curTextUndercon.style.display = "none" });
});

const scaleTwo = document.querySelectorAll(".project-cm");
console.log(scaleTwo);
scaleTwo.forEach((linkH) => {
    linkH.addEventListener('mousemove', () => { containerH.style.transform = "scale(4)"; containerH.style.margin = "-15px 0 0 -15px"; visibleH.style.opacity = "1"; curTextProject.style.display = "block"; curTextService.style.display = "none"; curTextUndercon.style.display = "none"  });
    linkH.addEventListener('mouseleave', () => { containerH.style.transform = "translate(-50%,-50%)"; containerH.style.margin = "0"; visibleH.style.opacity = "0"; curTextProject.style.display = "none"; curTextService.style.display = "none"; curTextUndercon.style.display = "none" });
});

const scaleThree = document.querySelectorAll(".project-uc");
scaleThree.forEach((linkH) => {
    linkH.addEventListener('mousemove', () => { containerH.style.transform = "scale(4)"; containerH.style.margin = "-15px 0 0 -15px"; visibleH.style.opacity = "1"; curTextUndercon.style.display = "block"; curTextProject.style.display = "none"; curTextService.style.display = "none"  });
    linkH.addEventListener('mouseleave', () => { containerH.style.transform = "translate(-50%,-50%)"; containerH.style.margin = "0"; visibleH.style.opacity = "0"; curTextUndercon.style.display = "none"; curTextProject.style.display = "none"; curTextService.style.display = "none" });
});

/*const clickHereVar = document.querySelectorAll("");
clickHereVar.forEach((linkH) => {
    linkH.addEventListener('mousemove', () => { containerH.style.transform = "scale(4)"; containerH.style.mixBlendMode = "unset"; containerH.style.margin = "-15px 0 0 -15px"; visibleH.style.opacity = "1" });
    linkH.addEventListener('mouseleave', () => { containerH.style.transform = "translate(-50%,-50%)"; containerH.style.mixBlendMode = "exclusion"; containerH.style.margin = "0"; visibleH.style.opacity = "0" });
});*/