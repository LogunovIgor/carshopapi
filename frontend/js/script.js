let colorKey = 'themeColor';

onload = function() {
    updateContent();

    let color = localStorage.getItem(colorKey);

    let body = document.getElementsByTagName('body')[0];

    if (color == null)
        return;

    body.style.background = '';
    if (color == 'dark') {
        body.style.background = '#000000';
    } else if (color == 'light') {
        body.style.background = '#ffffff';
    } 
}

function updateContent() {
    let request = new XMLHttpRequest();

    request.open("GET", "https://0qd0ku94.ddns.net/api/index.php", true);
    request.onload = function() {
        let data = JSON.parse(request.responseText);

        for(let index in data) {
            let photo = './images/noimage.png';

            if (data[index].photos != null && data[index].photos.length > 0)
                photo = data[index].photos[0];

            let template = `<div class="card">
                                <div class="card-left-block">
                                    <div class="card-image-block"><img class="card-image" src="${photo}"></div>
                                    <div class="card-description">
                                        <span class="card-car-header">${data[index].brand} ${data[index].model}</span>
                                        <span class="card-car-year card-car-description">Год: ${data[index].year}</span>
                                        <span class="card-car-engine card-car-description">Двигатель: ${data[index].engine}</span>
                                        <span class="card-car-transmission card-car-description">Коробка передач: ${data[index].transmission}</span>
                                    </div>
                                </div>
                                <div class="card-right-block">
                                    <div class="card-action">
                                        <div class="card-action-buy">
                                            <a href="#">Купить</a>
                                        </div>
                                    </div>
                                </div>
                            </div>`;

            document.getElementById('card-board').innerHTML += template;
        }
    };

    request.send();
}

function setBackgroundColor(color) {
    localStorage.setItem(colorKey, color);

    let body = document.getElementsByTagName('body')[0];

    if (color == null)
        return;

    body.style.background = '';
    if (color == 'dark') {
        body.style.background = '#000000';
    } else if (color == 'light') {
        body.style.background = '#ffffff';
    } 
}