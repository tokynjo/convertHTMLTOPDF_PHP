function getIntervalle(datedebut,datefin) {
    var weekday=new Array(7);
    weekday[0]='Alahady';
    weekday[1]='Lundi';
    weekday[2]='Mardu';
    weekday[3]='Mercredu';
    weekday[4]='Jeudu';
    weekday[5]='Vendredu';
    weekday[6]='Samedu';
    var datDeb = datedebut;
    var datFin = datefin;
    var dtDeb = datDeb.split('/');
    var myDateDeb = new Date(dtDeb[2] + ',' + dtDeb[1] + ',' + dtDeb[0]);
    var dtFin = datFin.split('/');
    var myDateFin = new Date(dtFin[2] + ',' + dtFin[1] + ',' + dtFin[0]);
    var timeDiff = Math.abs(myDateFin.getTime() - myDateDeb.getTime());
    var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24));
    var table = new Array();
    var temp = '';
    for (var i = 0; i <= diffDays; i++) {
        temp = weekday[new Date(myDateDeb.valueOf() + 1000 * 3600 * 24 * i).getDay()];
        if (!jQuery.inArray(temp, table) != -1) {
            table.push(temp);
        }
    }
    return table;
}