let processScroll = () =>{
    let docElem = document.documentElement,
        docBody = document.body,
        scrollTop = docElem['scrollTop'] || docBody['scrollTop'],
        scrollBottom = (docElem['scrollHeight']) ||
        docBody['scrollHeight'] - window.innerHeight,
        scrollPorcent = scrollTop / scrollBottom * 107 + '%';
        document.getElementById('progress-bar').style.setProperty('--scrollAmount', scrollPorcent);
}

document.addEventListener('scroll', processScroll)