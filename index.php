<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Exercice 5</title>
</head>
<body>
    <p>
        Créer un tableau associatif contenant comme clés des numéros de département et comme valeurs les départements correspondants.</br>
        Afficher les départements et leurs clés respectives :
    </p>
    <div class="col-3 mx-auto mt-5 text-center" style="border: burlywood 2px solid;">
        <?php
            $counties = [];

            $counties['01'] = 'Ain'; 
            $counties['02'] = 'Aisne'; 
            $counties['03'] = 'Allier'; 
            $counties['04'] = 'Alpes de Haute Provence'; 
            $counties['05'] = 'Hautes Alpes'; 
            $counties['06'] = 'Alpes Maritimes'; 
            $counties['07'] = 'Ardèche'; 
            $counties['08'] = 'Ardennes'; 
            $counties['09'] = 'Ariège'; 
            $counties['10'] = 'Aube'; 
            $counties['11'] = 'Aude'; 
            $counties['12'] = 'Aveyron'; 
            $counties['13'] = 'Bouches du Rhône'; 
            $counties['14'] = 'Calvados'; 
            $counties['15'] = 'Cantal'; 
            $counties['16'] = 'Charente'; 
            $counties['17'] = 'Charente Maritime'; 
            $counties['18'] = 'Cher'; 
            $counties['19'] = 'Corrèze'; 
            $counties['2A'] = 'Corse du Sud'; 
            $counties['2B'] = 'Haute Corse'; 
            $counties['21'] = 'Côte d\'Or'; 
            $counties['22'] = 'Côtes d\'Armor'; 
            $counties['23'] = 'Creuse'; 
            $counties['24'] = 'Dordogne'; 
            $counties['25'] = 'Doubs';
            $counties['26'] = 'Drôme'; 
            $counties['27'] = 'Eure'; 
            $counties['28'] = 'Eure et Loir'; 
            $counties['29'] = 'Finistère'; 
            $counties['30'] = 'Gard'; 
            $counties['31'] = 'Haute Garonne'; 
            $counties['32'] = 'Gers'; 
            $counties['33'] = 'Gironde'; 
            $counties['34'] = 'Hérault'; 
            $counties['35'] = 'Ille et Vilaine'; 
            $counties['36'] = 'Indre'; 
            $counties['37'] = 'Indre et Loire'; 
            $counties['38'] = 'Isère'; 
            $counties['39'] = 'Jura'; 
            $counties['40'] = 'Landes'; 
            $counties['41'] = 'Loir et Cher'; 
            $counties['42'] = 'Loire'; 
            $counties['43'] = 'Haute Loire'; 
            $counties['44'] = 'Loire Atlantique'; 
            $counties['45'] = 'Loiret'; 
            $counties['46'] = 'Lot'; 
            $counties['47'] = 'Lot et Garonne'; 
            $counties['48'] = 'Lozère'; 
            $counties['49'] = 'Maine et Loire'; 
            $counties['50'] = 'Manche'; 
            $counties['51'] = 'Marne'; 
            $counties['52'] = 'Haute Marne'; 
            $counties['53'] = 'Mayenne'; 
            $counties['54'] = 'Meurthe et Moselle'; 
            $counties['55'] = 'Meuse'; 
            $counties['56'] = 'Morbihan'; 
            $counties['57'] = 'Moselle'; 
            $counties['58'] = 'Nièvre'; 
            $counties['59'] = 'Nord'; 
            $counties['60'] = 'Oise'; 
            $counties['61'] = 'Orne'; 
            $counties['62'] = 'Pas de Calais'; 
            $counties['63'] = 'Puy de Dôme'; 
            $counties['64'] = 'Pyrénées Atlantiques'; 
            $counties['65'] = 'Hautes Pyrénées'; 
            $counties['66'] = 'Pyrénées Orientales'; 
            $counties['67'] = 'Bas Rhin'; 
            $counties['68'] = 'Haut Rhin'; 
            $counties['69'] = 'Rhône-Alpes'; 
            $counties['70'] = 'Haute Saône'; 
            $counties['71'] = 'Saône et Loire'; 
            $counties['72'] = 'Sarthe'; 
            $counties['73'] = 'Savoie'; 
            $counties['74'] = 'Haute Savoie'; 
            $counties['75'] = 'Paris'; 
            $counties['76'] = 'Seine Maritime'; 
            $counties['77'] = 'Seine et Marne'; 
            $counties['78'] = 'Yvelines'; 
            $counties['79'] = 'Deux Sèvres'; 
            $counties['80'] = 'Somme'; 
            $counties['81'] = 'Tarn'; 
            $counties['82'] = 'Tarn et Garonne'; 
            $counties['83'] = 'Var'; 
            $counties['84'] = 'Vaucluse'; 
            $counties['85'] = 'Vendée'; 
            $counties['86'] = 'Vienne'; 
            $counties['87'] = 'Haute Vienne'; 
            $counties['88'] = 'Vosges'; 
            $counties['89'] = 'Yonne'; 
            $counties['90'] = 'Territoire de Belfort'; 
            $counties['91'] = 'Essonne'; 
            $counties['92'] = 'Hauts de Seine'; 
            $counties['93'] = 'Seine St Denis'; 
            $counties['94'] = 'Val de Marne'; 
            $counties['95'] = 'Val d\'Oise'; 
            $counties['97'] = 'DOM'; 
            $counties['971'] = 'Guadeloupe'; 
            $counties['972'] = 'Martinique'; 
            $counties['973'] = 'Guyane'; 
            $counties['974'] = 'Réunion'; 
            $counties['975'] = 'Saint Pierre et Miquelon'; 
            $counties['976'] = 'Mayotte'; 

            foreach($counties as $key => $value){
                echo $value. ' (' .$key. ')<br>';
            }
        ?>
    </div>
</body>
</html>