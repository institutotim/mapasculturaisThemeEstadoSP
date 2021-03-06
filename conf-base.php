<?php

return [
//    // latitude,longitude do centro do mapa da busca e do mapa da criação de agentes e espaços
    'maps.center' => [-22.603868842895686, -49.2022705078125],

//    // a cada quantos pixels se deve criar um cluster no mapa da busca
    'maps.maxClusterRadius' => 40,
//
//    // simplificação do shapefile
//    'maps.geometryFieldQuery' => "ST_SimplifyPreserveTopology(geom, 0.001)",
//
//    // zoom padrão do mapa da busca
    'maps.zoom.default' => 7,
//
//    // zoom do mapa da single do agente quando este define a posição como aproximada
    'maps.zoom.approximate' => 14,
//
//    // zoom do mapa da single do agente quando este define a posição como precisa
    'maps.zoom.precise' => 16,
//
//    // zoom máximo do mapa da busca
    'maps.zoom.max' => 18,
//
//    // zom mínimo do mapa da busca
    'maps.zoom.min' => 5,
//    // incluir no mapa as camadas do google?
    'maps.includeGoogleLayers' => false,
//    // descomente para definir quais fivisões geográficas são utilizadas no tema
//    // devem ser as mesmas dos shapefiles
   'app.geoDivisionsHierarchy' => [
       // 'pais'          => 'País',
       // 'regiao'        => 'Região',
       // 'estado'        => 'Estado',
       // 'mesorregiao'   => 'Mesorregião',
       // 'microrregiao'  => 'Microrregião',
      'adm_reg'         => 'Regiões Administrativas',
       'municipio'      => 'Município',
       // 'zona'          => 'Zona',
       // 'subprefeitura' => 'Subprefeitura',
       // 'distrito'      => 'Distrito'
   ],
];
