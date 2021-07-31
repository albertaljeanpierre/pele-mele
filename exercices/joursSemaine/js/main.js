const submit = document.getElementById('submit');

submit.addEventListener('click', jourSemaine);

function jourSemaine(e) {
    e.preventDefault();
    let jourUser = document.getElementById('jour').value;

    let xhr = new XMLHttpRequest();
    let param = encodeURIComponent(jourUser);
    let url = "jours.php?jour=" + param;

    // Préparation de la requête 
    xhr.open('GET', url);

    //Envoi de la requête 
    xhr.send(null);

    // réception des données
    xhr.onreadystatechange = function () {
        switch (xhr.readyState) {
             
            case xhr.DONE:
                if (xhr.status === 200) {
                    let datas = JSON.parse(xhr.responseText);
                    let jourSemaine = datas.jour;
                    // console.log(jourSemaine); // OK 
                    let table = document.getElementById('donnee');
                    let tr = document.createElement("tr");
                    let td = document.createElement("td");
                    let texte = document.createTextNode(jourSemaine);
                    td.append(texte);
                    tr.append(td);
                    table.append(tr);
                } else {
                    console.log(xhr.statusText);
                }
                break;
        }
    };
}
