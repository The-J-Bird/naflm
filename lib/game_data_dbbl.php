<?php

// Additional data for DBBL League
// Four Nations
define('T_RACE_FOUR_NATIONS', 100);

$DEA['Four Nations'] = array (
    'other'    => array (
        'rr_cost' => 50000,
        'icon'    => 'human.png',
        'race_id' => T_RACE_FOUR_NATIONS, 
    ),
    'players'    => array (
        'Lineman'   => array (
            'ma'        => 6,
            'st'        => 3,
            'ag'        => 3,
            'av'        => 8,
            'def'       => array (41, 44),
            'norm'      => array ('G'),
            'doub'      => array ('A', 'S', 'P'),
            'qty'       => 16,
            'cost'      => 60000,
            'icon'      => 'hlineman1',
            'pos_id'    => 10000,
        ),
        'Full Back'   => array (
            'ma'        => 6,
            'st'        => 3,
            'ag'        => 3,
            'av'        => 8,
            'def'       => array (41, 44, 20, 7),
            'norm'      => array ('G', 'P'),
            'doub'      => array ('A', 'S'),
            'qty'       => 1,
            'cost'      => 80000,
            'icon'      => 'hlineman1',
            'pos_id'    => 10001,
        ),
		'Half Back'   => array (
            'ma'        => 6,
            'st'        => 3,
            'ag'        => 3,
            'av'        => 8,
            'def'       => array (41, 44, 6, 42),
            'norm'      => array ('G', 'P'),
            'doub'      => array ('A', 'S'),
            'qty'       => 2,
            'cost'      => 80000,
            'icon'      => 'hlineman1',
            'pos_id'    => 10002,
        ),
		'Forwards'   => array (
            'ma'        => 6,
            'st'        => 3,
            'ag'        => 3,
            'av'        => 8,
            'def'       => array (41, 44, 22, 4),
            'norm'      => array ('G', 'S'),
            'doub'      => array ('A', 'P'),
            'qty'       => 4,
            'cost'      => 80000,
            'icon'      => 'hlineman1',
            'pos_id'    => 10003,
        ),
		'Wings'   => array (
            'ma'        => 6,
            'st'        => 3,
            'ag'        => 3,
            'av'        => 8,
            'def'       => array (41, 44, 20),
            'norm'      => array ('G', 'A'),
            'doub'      => array ('S', 'P'),
            'qty'       => 2,
            'cost'      => 80000,
            'icon'      => 'hlineman1',
            'pos_id'    => 10004,
        ),
        
    )
);


foreach (array('Frank N Stein', 'Griff Oberwald', 'Helmut Wulf', 'Kari Coldsteel', 'Mighty Zug', 'Karla von Kill', 'Morg \'n\' Thorg', 'Puggy Baconbreath', 'Zara the Slayer', 'Bob Bifford') as $s) {
    array_push($stars[$s]['races'], T_RACE_FOUR_NATIONS);
}


// Tilea

define('T_RACE_TILEA', 101);

$DEA['Tilea'] = array (
    'other'    => array (
        'rr_cost' => 70000,
        'icon'    => 'human.png',
        'race_id' => T_RACE_TILEA, 
    ),
    'players'    => array (
        'Lineman'   => array (
            'ma'        => 6,
            'st'        => 3,
            'ag'        => 3,
            'av'        => 7,
            'def'       => array (),
            'norm'      => array ('G'),
            'doub'      => array ('A', 'S', 'P'),
            'qty'       => 16,
            'cost'      => 40000,
            'icon'      => 'hlineman1',
            'pos_id'    => 10100,
        ),
        'Human Lineman'    => array (
                'ma'            => 6,
                 'st'            => 3,
                 'ag'            => 3,
                 'av'            => 8,
                 'def'        => array (113),
                 'norm'        => array ('G'),
                 'doub'        => array ('A', 'S', 'P'),
                 'qty'            => 1,
                'cost'            => 50000,
                'icon'            => 'hlineman1',
                'pos_id'        => 10101,
            ),
            'Human Catcher'    => array (
                'ma'            => 8,
                 'st'            => 2,
                 'ag'            => 3,
                 'av'            => 7,
                 'def'        => array (20, 23, 113),
                 'norm'        => array ('G', 'A'),
                 'doub'        => array ('S', 'P'),
                 'qty'            => 1,
                'cost'            => 60000,
                'icon'            => 'hcatcher1',
                'pos_id'        => 10102,
            ),
            'Human Thrower'    => array (
                'ma'            => 6,
                 'st'            => 3,
                 'ag'            => 3,
                 'av'            => 8,
                 'def'        => array (12, 45, 113),
                 'norm'        => array ('G', 'P'),
                 'doub'        => array ('A', 'S'),
                 'qty'            => 1,
                'cost'            => 70000,
                'icon'            => 'hthrower1',
                'pos_id'        => 10103,
            ),
            'Human Blitzer'    => array (
                'ma'            => 7,
                 'st'            => 3,
                 'ag'            => 3,
                 'av'            => 8,
                 'def'        => array (1, 113),
                 'norm'        => array ('G', 'S'),
                 'doub'        => array ('A', 'P'),
                 'qty'            => 1,
                'cost'            => 90000,
                'icon'            => 'hblitzer1',
                'pos_id'        => 10104,
            ),
            'Human Ogre'    => array (
                'ma'            => 5,
                 'st'            => 5,
                 'ag'            => 2,
                 'av'            => 9,
                 'def'        => array (99, 94, 54, 59, 110, 113),
                 'norm'        => array ('S'),
                 'doub'        => array ('G','A', 'P'),
                 'qty'            => 1,
                'cost'            => 140000,
                'icon'            => 'ogre1',
                'pos_id'        => 10105,
            ),
			//Dwarf
			'Dwarf Blocker'    => array (
                'ma'            => 4,
                 'st'            => 3,
                 'ag'            => 2,
                 'av'            => 9,
                 'def'        => array (1, 13, 59, 113),
                 'norm'        => array ('G', 'S'),
                 'doub'        => array ('A', 'P'),
                 'qty'            => 1,
                'cost'            => 70000,
                'icon'            => 'dlongbeard1',
                'pos_id'        => 10106,
            ),
            'Dwarf Runner'    => array (
                'ma'            => 6,
                 'st'            => 3,
                 'ag'            => 3,
                 'av'            => 8,
                 'def'        => array (12, 59, 113),
                 'norm'        => array ('G', 'P'),
                 'doub'        => array ('A', 'S'),
                 'qty'            => 1,
                'cost'            => 80000,
                'icon'            => 'drunner1',
                'pos_id'        => 10107,
            ),
            'Dwarf Blitzer'    => array (
                'ma'            => 5,
                 'st'            => 3,
                 'ag'            => 3,
                 'av'            => 9,
                 'def'        => array (1, 59, 113),
                 'norm'        => array ('G', 'S'),
                 'doub'        => array ('A', 'P'),
                 'qty'            => 1,
                'cost'            => 80000,
                'icon'            => 'dblitzer1',
                'pos_id'        => 10108,
            ),
            'Dwarf Troll Slayer'    => array (
                'ma'            => 5,
                 'st'            => 3,
                 'ag'            => 2,
                 'av'            => 8,
                 'def'        => array (1, 2, 5, 59, 113),
                 'norm'        => array ('G', 'S'),
                 'doub'        => array ('A', 'P'),
                 'qty'            => 1,
                'cost'            => 90000,
                'icon'            => 'dslayer1',
                'pos_id'        => 10109,
            ),
            'Dwarf Deathroller'    => array (
                'ma'            => 4,
                 'st'            => 7,
                 'ag'            => 1,
                 'av'            => 10,
                 'def'        => array (99, 50, 3, 53, 54, 100, 105, 57, 113),
                 'norm'        => array ('S'),
                 'doub'        => array ('G', 'A', 'P'),
                 'qty'            => 1,
                'cost'            => 160000,
                'icon'            => 'ddeathroller1an',
                'pos_id'        => 10110,
            ),
			//High Elf
			'High Elf Lineman'    => array (
                'ma'            => 6,
                 'st'            => 3,
                 'ag'            => 4,
                 'av'            => 8,
                 'def'        => array (113),
                 'norm'        => array ('G', 'A'),
                 'doub'        => array ('S', 'P'),
                 'qty'            => 1,
                'cost'            => 70000,
                'icon'            => 'helineman1',
                'pos_id'        => 10111,
            ),
            'High Elf Thrower'    => array (
                'ma'            => 6,
                 'st'            => 3,
                 'ag'            => 4,
                 'av'            => 8,
                 'def'        => array (45, 46, 113),
                 'norm'        => array ('G', 'A', 'P'),
                 'doub'        => array ('S'),
                 'qty'            => 1,
                'cost'            => 90000,
                'icon'            => 'hethrower1',
                'pos_id'        => 10112,
            ),
            'High Elf Catcher'    => array (
                'ma'            => 8,
                 'st'            => 3,
                 'ag'            => 4,
                 'av'            => 7,
                 'def'        => array (20, 113),
                 'norm'        => array ('G', 'A'),
                 'doub'        => array ('S', 'P'),
                 'qty'            => 1,
                'cost'            => 90000,
                'icon'            => 'hecatcher1',
                'pos_id'        => 10113,
            ),
            'High Elf Blitzer'    => array (
                'ma'            => 7,
                 'st'            => 3,
                 'ag'            => 4,
                 'av'            => 8,
                 'def'        => array (1, 113),
                 'norm'        => array ('G', 'A'),
                 'doub'        => array ('S', 'P'),
                 'qty'            => 2,
                'cost'            => 100000,
                'icon'            => 'heblitzer1',
                'pos_id'        => 10114,
            ),
			//Amazon
			'Amazon Linewoman'    => array (
                'ma'            => 6,
                'st'            => 3,
                'ag'            => 3,
                'av'            => 7,
                'def'        => array (23, 113),
                'norm'        => array ('G'),
                'doub'        => array ('A', 'S', 'P'),
                'qty'            => 1,
                'cost'            => 50000,
                'icon'            => 'amlineman1',
                'pos_id'        => 10115,
            ),
            'Amazon Thrower'    => array (
                'ma'            => 6,
                'st'            => 3,
                'ag'            => 3,
                'av'            => 7,
                'def'        => array (23, 45, 113),
                'norm'        => array ('G', 'P'),
                'doub'        => array ('A', 'S'),
                'qty'            => 1,
                'cost'            => 70000,
                'icon'            => 'amthrower1',
                'pos_id'        => 10116,
            ),
            'Amazon Catcher'    => array (
                'ma'            => 6,
                 'st'            => 3,
                 'ag'            => 3,
                 'av'            => 7,
                 'def'        => array (23, 20, 113),
                 'norm'        => array ('G', 'A'),
                 'doub'        => array ('S', 'P'),
                 'qty'            => 1,
                'cost'            => 70000,
                'icon'            => 'amcatcher1',
                'pos_id'        => 10117,
            ),
            'Amazon Blitzer'    => array (
                'ma'            => 6,
                 'st'            => 3,
                 'ag'            => 3,
                 'av'            => 7,
                 'def'        => array (23, 1, 113),
                 'norm'        => array ('G', 'S'),
                 'doub'        => array ('A', 'P'),
                 'qty'            => 1,
                'cost'            => 90000,
                'icon'            => 'amblitzer1',
                'pos_id'        => 10118,
            ),
			//Norse
			'Norse Lineman'    => array (
                'ma'            => 6,
                 'st'            => 3,
                 'ag'            => 3,
                 'av'            => 7,
                 'def'        => array (1, 113),
                 'norm'        => array ('G'),
                 'doub'        => array ('A', 'S', 'P'),
                 'qty'            => 1,
                'cost'            => 50000,
                'icon'            => 'nlineman1',
                'pos_id'        => 10119,
            ),
            'Norse Thrower'    => array (
                'ma'            => 6,
                 'st'            => 3,
                 'ag'            => 3,
                 'av'            => 7,
                 'def'        => array (1, 45, 113),
                 'norm'        => array ('G', 'P'),
                 'doub'        => array ('A', 'S'),
                 'qty'            => 1,
                'cost'            => 70000,
                'icon'            => 'nthrower1',
                'pos_id'        => 10120,
            ),
            'Norse Catcher'    => array (
                'ma'            => 7,
                 'st'            => 3,
                 'ag'            => 3,
                 'av'            => 7,
                 'def'        => array (1, 2, 113),
                 'norm'        => array ('G', 'A'),
                 'doub'        => array ('S', 'P'),
                 'qty'            => 1,
                'cost'            => 90000,
                'icon'            => 'norunner2',
                'pos_id'        => 10121,
            ),
            'Norse Blitzer'    => array (
                'ma'            => 6,
                 'st'            => 3,
                 'ag'            => 3,
                 'av'            => 7,
                 'def'        => array (1, 5, 24, 113),
                 'norm'        => array ('G', 'S'),
                 'doub'        => array ('A', 'P'),
                 'qty'            => 1,
                'cost'            => 90000,
                'icon'            => 'noberserker1',
                'pos_id'        => 10122,
            ),
            'Norse Werewolf' => array (
                'ma'            => 6,
                 'st'            => 4,
                 'ag'            => 2,
                 'av'            => 8,
                 'def'        => array (5, 113),
                 'norm'        => array ('G', 'S'),
                 'doub'        => array ('A', 'P'),
                 'qty'            => 1,
                'cost'            => 110000,
                'icon'            => 'noulfwerener1',
                'pos_id'        => 10123,
            ),
            'Norse Yhetee'    => array (
                'ma'            => 5,
                 'st'            => 5,
                 'ag'            => 1,
                 'av'            => 8,
                 'def'        => array (99, 71, 72, 5, 112, 113),
                 'norm'        => array ('S'),
                 'doub'        => array ('G', 'A', 'P'),
                 'qty'            => 1,
                'cost'            => 140000,
                'icon'            => 'snowtroll1',
                'pos_id'        => 10124,
            ),
			//Halfling
			'Halfling Hopeful'    => array (
                'ma'            => 5,
                 'st'            => 2,
                 'ag'            => 3,
                 'av'            => 6,
                 'def'        => array (23, 104, 108, 113),
                 'norm'        => array ('A'),
                 'doub'        => array ('G', 'S', 'P'),
                 'qty'            => 1,
                'cost'            => 30000,
                'icon'            => 'halfling1',
                'pos_id'        => 10125,
            ),
            'Halfling Treeman'    => array (
                'ma'            => 2,
                 'st'            => 6,
                 'ag'            => 1,
                 'av'            => 10,
                 'def'        => array (54, 57, 58, 109, 59, 110, 115, 99, 113),
                 'norm'        => array ('S'),
                 'doub'        => array ('G', 'A', 'P'),
                 'qty'            => 1,
                'cost'            => 120000,
                'icon'            => 'treeman1',
                'pos_id'        => 10126,
            ),
            'Halfling Catcher'    => array (
                'ma'            => 5,
                 'st'            => 2,
                 'ag'            => 3,
                 'av'            => 6,
                 'def'        => array (20, 23, 104, 28, 108, 113),
                 'norm'        => array ('A'),
                 'doub'        => array ('G', 'S', 'P'),
                 'qty'            => 1,
                'cost'            => 50000,
                'icon'            => 'halfling1',
                'pos_id'        => 10127,
            ),
            'Halfling Hefty'    => array (
                'ma'            => 5,
                 'st'            => 2,
                 'ag'            => 3,
                 'av'            => 7,
                 'def'        => array (23, 4, 108, 113),
                 'norm'        => array ('A', 'P'),
                 'doub'        => array ('G', 'S'),
                 'qty'            => 1,
                'cost'            => 50000,
                'icon'            => 'halfling1',
                'pos_id'        => 10128,
            ),
    )
);


foreach (array('Boomer Eziasson', 'Helmut Wulf', 'Icepelt Hammerblow', 'Kari Coldsteel', 'Karla von Kill', 'Morg \'n\' Thorg', 'Scyla Anfingrimm', 'Wilhelm Chaney','Zara the Slayer', 'Bob Bifford') as $s) {
    array_push($stars[$s]['races'], T_RACE_TILEA);
}

// Gnome

define('T_RACE_GNOME', 102);

$DEA['Gnome'] = array (
    'other'    => array (
        'rr_cost' => 60000,
        'icon'    => 'halfling.png',
        'race_id' => T_RACE_GNOME, 
    ),
    'players'    => array (
        'Lineman'   => array (
            'ma'        => 6,
            'st'        => 3,
            'ag'        => 3,
            'av'        => 7,
            'def'       => array (108),
            'norm'      => array ('G'),
            'doub'      => array ('A', 'S', 'P'),
            'qty'       => 16,
            'cost'      => 40000,
            'icon'      => 'hlineman1',
            'pos_id'    => 10200,
        ),
        'Runner'    => array (
                'ma'            => 7,
                 'st'            => 2,
                 'ag'            => 3,
                 'av'            => 6,
                 'def'        => array (12,23,108),
                 'norm'        => array ('G','A'),
                 'doub'        => array ( 'S', 'P'),
                 'qty'            => 2,
                'cost'            => 60000,
                'icon'            => 'hlineman1',
                'pos_id'        => 10201,
            ),
            'Blitzer'    => array (
                'ma'            => 6,
                 'st'            => 3,
                 'ag'            => 3,
                 'av'            => 8,
                 'def'        => array (108, 1),
                 'norm'        => array ('G', 'S'),
                 'doub'        => array ('A', 'P'),
                 'qty'            => 2,
                'cost'            => 70000,
                'icon'            => 'hblitzer1',
                'pos_id'        => 10202,
            ),
            'Bombardier'    => array (
                'ma'            => 6,
                 'st'            => 3,
                 'ag'            => 3,
                 'av'            => 7,
                 'def'        => array (108, 93, 105),
                 'norm'        => array ('G'),
                 'doub'        => array ('A', 'S', 'P'),
                 'qty'            => 1,
                'cost'            => 40000,
                'icon'            => 'hthrower1',
                'pos_id'        => 10203,
            ),
            'Gnomish Contraption'    => array (
                'ma'            => 3,
                 'st'            => 6,
                 'ag'            => 2,
                 'av'            => 10,
                 'def'        => array (54, 57, 94),
                 'norm'        => array ('S'),
                 'doub'        => array ('G','A','P'),
                 'qty'            => 2,
                'cost'            => 140000,
                'icon'            => 'hblitzer1',
                'pos_id'        => 10204,
            )
    )
);

foreach (array('Barik Farblast', 'Boomer Eziasson','Flint Churnblade', 'Grim Ironjaw', 'Kari Coldsteel', 'Morg \'n\' Thorg', 'Zara the Slayer', 'Bob Bifford') as $s) {
    array_push($stars[$s]['races'], T_RACE_GNOME);
}

// Daemons of Nurgle

define('T_RACE_DAEMONSOFNURGLE', 103);

$DEA['Daemons of Nurgle'] = array (
    'other'    => array (
        'rr_cost' => 70000,
        'icon'    => 'nurgle.png',
        'race_id' => T_RACE_DAEMONSOFNURGLE, 
    ),
    'players'    => array (
        'Nurgling'   => array (
            'ma'        => 5,
            'st'        => 1,
            'ag'        => 2,
            'av'        => 6,
            'def'       => array (104,111,108,101,74,23,52),
            'norm'      => array ('A'),
            'doub'      => array ('G', 'S', 'P'),
            'qty'       => 16,
            'cost'      => 20000,
            'icon'      => 'hlineman1',
            'pos_id'    => 10300,
        ),
        'Plaguebearer'    => array (
                'ma'            => 5,
                 'st'            => 4,
                 'ag'            => 2,
                 'av'            => 9,
                 'def'        => array (59,103,74,72,101),
                 'norm'        => array ('G','S'),
                 'doub'        => array ( 'A', 'P'),
                 'qty'            => 6,
                'cost'            => 120000,
                'icon'            => 'hlineman1',
                'pos_id'        => 10301,
            ),
            'Great Unclean One'    => array (
                'ma'            => 3,
                 'st'            => 6,
                 'ag'            => 1,
                 'av'            => 10,
                 'def'        => array (99,94,103,59,72,74,54,101,57,114,110),
                 'norm'        => array ('S'),
                 'doub'        => array ('G','A', 'P'),
                 'qty'            => 1,
                'cost'            => 200000,
                'icon'            => 'hblitzer1',
                'pos_id'        => 10302,
            )
    )
);



foreach (array('Bilerot Vomitflesh', 'Brick Far\'th (+ Grotty)','Gobbler Grimlich','Grashnak Blackhoof','Grotty (included in Brick Far\'th)','Guffle Pusmaw','Lord Borak the Despoiler','Max Spleenripper','Morg \'n\' Thorg', 'Scyla Anfingrimm','Withergrasp Doubledrool', 'Bob Bifford') as $s) {
    array_push($stars[$s]['races'], T_RACE_DAEMONSOFNURGLE);
}

//Skink

define('T_RACE_SKINK', 104);

$DEA['Skink'] = array (
    'other'    => array (
        'rr_cost' => 50000,
        'icon'    => 'lizardmen.png',
        'race_id' => T_RACE_SKINK, 
    ),
    'players'    => array (
        'Skink'   => array (
            'ma'        => 8,
            'st'        => 2,
            'ag'        => 3,
            'av'        => 7,
            'def'       => array (108,23),
            'norm'      => array ('A'),
            'doub'      => array ('G', 'S', 'P'),
            'qty'       => 16,
            'cost'      => 60000,
            'icon'      => 'hlineman1',
            'pos_id'    => 10400,
        ),
        'Chameleon Skink'    => array (
                'ma'            => 8,
                 'st'            => 1,
                 'ag'            => 3,
                 'av'            => 6,
                 'def'        => array (108,111,23,14,10),
                 'norm'        => array ('A'),
                 'doub'        => array ('G','A', 'P'),
                 'qty'            => 4,
                'cost'            => 70000,
                'icon'            => 'hlineman1',
                'pos_id'        => 10401,
            ),
            'Kroxigor'    => array (
                'ma'            => 6,
                 'st'            => 5,
                 'ag'            => 1,
                 'av'            => 9,
                 'def'        => array (94,59,54,76),
                 'norm'        => array ('S'),
                 'doub'        => array ('G','A', 'P'),
                 'qty'            => 4,
                'cost'            => 140000,
                'icon'            => 'hblitzer1',
                'pos_id'        => 10402,
            )
    )
);


foreach (array('Helmut Wulf', 'Hemlock','Lottabottol','Morg \'n\' Thorg', 'Quetzal Leap','Slibli', 'Bob Bifford') as $s) {
    array_push($stars[$s]['races'], T_RACE_SKINK);
}

//Clan Moulder

define('T_RACE_CLAN_MOULDER', 105);

$DEA['Clan Moulder'] = array (
    'other'    => array (
        'rr_cost' => 60000,
        'icon'    => 'skaven.png',
        'race_id' => T_RACE_CLAN_MOULDER, 
    ),
    'players'    => array (
        'Slaves'   => array (
            'ma'        => 7,
            'st'        => 2,
            'ag'        => 3,
            'av'        => 6,
            'def'       => array (108,23),
            'norm'      => array ('A','M'),
            'doub'      => array ('G', 'S', 'P'),
            'qty'       => 16,
            'cost'      => 40000,
            'icon'      => 'hlineman1',
            'pos_id'    => 10500,
        ),
        'Rat Ogres'    => array (
                'ma'            => 6,
                 'st'            => 5,
                 'ag'            => 2,
                 'av'            => 8,
                 'def'        => array (112,54,5,76),
                 'norm'        => array ('S','M'),
                 'doub'        => array ('G','A', 'P'),
                 'qty'            => 6,
                'cost'            => 150000,
                'icon'            => 'hlineman1',
                'pos_id'        => 10501,
            )
    )
);


foreach (array('Fezglitch', 'Glart Smashrip Jr.', 'Glart Smashrip Sr', 'Hakflem Skuttlespike', 'Headsplitter', 'Kreek Rustgouger', 'Morg \'n\' Thorg', 'Rasta Tailspike', 'Skitter Stab-Stab', 'Bob Bifford') as $s) {
    array_push($stars[$s]['races'], T_RACE_CLAN_MOULDER);
}


//Pygmy

define('T_RACE_PYGMY', 106);

$DEA['Pygmy'] = array (
    'other'    => array (
        'rr_cost' => 60000,
        'icon'    => 'halfling.png',
        'race_id' => T_RACE_PYGMY, 
    ),
    'players'    => array (
        'Pygmy'   => array (
            'ma'        => 6,
            'st'        => 2,
            'ag'        => 4,
            'av'        => 7,
            'def'       => array (108,23),
            'norm'      => array ('A'),
            'doub'      => array ('G', 'S', 'P'),
            'qty'       => 16,
            'cost'      => 50000,
            'icon'      => 'hlineman1',
            'pos_id'    => 10600,
        ),
        'Thrower'   => array (
            'ma'        => 6,
            'st'        => 2,
            'ag'        => 4,
            'av'        => 7,
            'def'       => array (108,23,45,12),
            'norm'      => array ('A', 'P'),
            'doub'      => array ('G', 'S'),
            'qty'       => 2,
            'cost'      => 80000,
            'icon'      => 'hthrower1',
            'pos_id'    => 10601,
        ),
        'Catcher'   => array (
            'ma'        => 7,
            'st'        => 2,
            'ag'        => 4,
            'av'        => 7,
            'def'       => array (108,23,10,20),
            'norm'      => array ('A'),
            'doub'      => array ('G', 'S', 'P'),
            'qty'       => 2,
            'cost'      => 80000,
            'icon'      => 'hcatcher1',
            'pos_id'    => 10602,
        ),
        'Blitzer'   => array (
            'ma'        => 6,
            'st'        => 2,
            'ag'        => 4,
            'av'        => 7,
            'def'       => array (108,23,71,2),
            'norm'      => array ('A','S'),
            'doub'      => array ('G', 'P'),
            'qty'       => 4,
            'cost'      => 90000,
            'icon'      => 'hblitzer1',
            'pos_id'    => 10603,
        )
    )
);


foreach (array('Bertha Bigfist', 'Big Jobo Hairyfoot', 'Captain Colander', 'Cindy Pewhistle', 'Deeproot Strongbranch', 'Karla von Kill', 'Morg \'n\' Thorg', 'Neddley Verruca', 'Puggy Baconbreath' , 'Rumbelow Sheepskin', 'Willow Rosebark', 'Zara the Slayer', 'Bob Bifford') as $s) {
    array_push($stars[$s]['races'], T_RACE_PYGMY);
}

//Pirate

define('T_RACE_PIRATE', 107);

$DEA['Pirate'] = array (
    'other'    => array (
        'rr_cost' => 70000,
        'icon'    => 'norse.png',
        'race_id' => T_RACE_PIRATE, 
    ),
    'players'    => array (
        'Pirates'   => array (
            'ma'        => 6,
            'st'        => 3,
            'ag'        => 3,
            'av'        => 7,
            'def'       => array (),
            'norm'      => array ('G'),
            'doub'      => array ('A', 'S', 'P'),
            'qty'       => 16,
            'cost'      => 40000,
            'icon'      => 'hlineman1',
            'pos_id'    => 10700,
        ),
        'Long Drongs Slayer'   => array (
            'ma'        => 5,
            'st'        => 3,
            'ag'        => 3,
            'av'        => 8,
            'def'       => array (11,59,2,113),
            'norm'      => array ('G', 'S'),
            'doub'      => array ('A', 'P'),
            'qty'       => 2,
            'cost'      => 80000,
            'icon'      => 'hthrower1',
            'pos_id'    => 10701,
        ),
        'Black Ark Corsair'   => array (
            'ma'        => 7,
            'st'        => 3,
            'ag'        => 4,
            'av'        => 7,
            'def'       => array (113),
            'norm'      => array ('G','A'),
            'doub'      => array ( 'S', 'P'),
            'qty'       => 2,
            'cost'      => 70000,
            'icon'      => 'hcatcher1',
            'pos_id'    => 10702,
        ),
        'Ogres'   => array (
            'ma'        => 5,
            'st'        => 5,
            'ag'        => 2,
            'av'        => 9,
            'def'       => array (94,99,54,59,110),
            'norm'      => array ('S'),
            'doub'      => array ('G','A', 'P'),
            'qty'       => 2,
            'cost'      => 140000,
            'icon'      => 'hblitzer1',
            'pos_id'    => 10703,
        ),
        'Captain'   => array (
            'ma'        => 6,
            'st'        => 4,
            'ag'        => 3,
            'av'        => 8,
            'def'       => array (43),
            'norm'      => array ('G','S'),
            'doub'      => array ('A', 'P'),
            'qty'       => 1,
            'cost'      => 100000,
            'icon'      => 'hblitzer1',
            'pos_id'    => 10704,
        )
    )
);

foreach (array('Boomer Eziasson', 'Helmut Wulf', 'Icepelt Hammerblow', 'Kari Coldsteel', 'Karla von Kill', 'Morg \'n\' Thorg', 'Scyla Anfingrimm', 'Wilhelm Chaney','Zara the Slayer', 'Bob Bifford') as $s) {
    array_push($stars[$s]['races'], T_RACE_PIRATE);
}

//Clan Skryre

define('T_RACE_CLAN_SKRYRE', 108);

$DEA['Clan Skryre'] = array (
    'other'    => array (
        'rr_cost' => 60000,
        'icon'    => 'skaven.png',
        'race_id' => T_RACE_CLAN_SKRYRE, 
    ),
    'players'    => array (
        'Clan Rats'   => array (
            'ma'        => 7,
            'st'        => 3,
            'ag'        => 3,
            'av'        => 7,
            'def'       => array (),
            'norm'      => array ('G'),
            'doub'      => array ('A', 'S', 'P','M'),
            'qty'       => 16,
            'cost'      => 50000,
            'icon'      => 'hlineman1',
            'pos_id'    => 10800,
        ),
        'Mecha Vermin'   => array (
            'ma'        => 5,
            'st'        => 4,
            'ag'        => 1,
            'av'        => 9,
            'def'       => array (59),
            'norm'      => array ('G', 'S'),
            'doub'      => array ('A', 'P','M'),
            'qty'       => 2,
            'cost'      => 80000,
            'icon'      => 'hthrower1',
            'pos_id'    => 10801,
        ),
        'Jezzail'   => array (
            'ma'        => 7,
            'st'        => 3,
            'ag'        => 3,
            'av'        => 7,
            'def'       => array (12,58,42),
            'norm'      => array ('G','P'),
            'doub'      => array ('A', 'S', 'M'),
            'qty'       => 2,
            'cost'      => 80000,
            'icon'      => 'hcatcher1',
            'pos_id'    => 10802,
        ),
        'Poison Wind Globadiers'   => array (
            'ma'        => 6,
            'st'        => 3,
            'ag'        => 3,
            'av'        => 8,
            'def'       => array (93,105),
            'norm'      => array ('G'),
            'doub'      => array ('A','S','M', 'P'),
            'qty'       => 2,
            'cost'      => 50000,
            'icon'      => 'hblitzer1',
            'pos_id'    => 10803,
        ),
        'Warp Grinder'   => array (
            'ma'        => 7,
            'st'        => 3,
            'ag'        => 3,
            'av'        => 7,
            'def'       => array (95,105),
            'norm'      => array ('G'),
            'doub'      => array ('A', 'S', 'M', 'P'),
            'qty'       => 1,
            'cost'      => 50000,
            'icon'      => 'hblitzer1',
            'pos_id'    => 10804,
        ),
        'Doom Flayers'   => array (
            'ma'        => 5,
            'st'        => 7,
            'ag'        => 1,
            'av'        => 9,
            'def'       => array (99,50,5,53,100,54,105,3),
            'norm'      => array ('S'),
            'doub'      => array ('G', 'A', 'M', 'P'),
            'qty'       => 1,
            'cost'      => 160000,
            'icon'      => 'hblitzer1',
            'pos_id'    => 10805,
        )
    )
);

foreach (array('Fezglitch', 'Glart Smashrip Jr.', 'Glart Smashrip Sr', 'Hakflem Skuttlespike', 'Headsplitter', 'Kreek Rustgouger', 'Morg \'n\' Thorg', 'Rasta Tailspike', 'Skitter Stab-Stab', 'Bob Bifford') as $s) {
    array_push($stars[$s]['races'], T_RACE_CLAN_SKRYRE);
}


// Beastmen

define('T_RACE_BEASTMEN', 109);

$DEA['Beastmen'] = array (
    'other'    => array (
        'rr_cost' => 60000,
        'icon'    => 'nurgle.png',
        'race_id' => T_RACE_BEASTMEN, 
    ),
    'players'    => array (
        'Gor'   => array (
            'ma'        => 6,
            'st'        => 3,
            'ag'        => 3,
            'av'        => 8,
            'def'       => array (75),
            'norm'      => array ('G','S'),
            'doub'      => array ('A', 'M', 'P'),
            'qty'       => 16,
            'cost'      => 60000,
            'icon'      => 'hlineman1',
            'pos_id'    => 10900,
        ),
        'Ungor'    => array (
            'ma'            => 7,
            'st'            => 2,
            'ag'            => 3,
            'av'            => 7,
            'def'        => array (23),
            'norm'        => array ('G','A'),
            'doub'        => array ( 'S','P','M'),
            'qty'            => 4,
            'cost'            => 50000,
            'icon'            => 'hlineman1',
            'pos_id'        => 10901,
        ),
        'Bestigor'    => array (
            'ma'            => 6,
            'st'            => 4,
            'ag'            => 3,
            'av'            => 8,
            'def'        => array (75),
            'norm'        => array ('G','S'),
            'doub'        => array ('A','P', 'M'),
            'qty'            => 4,
            'cost'            => 110000,
            'icon'            => 'hblitzer1',
            'pos_id'        => 10902,
        ),
        'Minotaur'    => array (
            'ma'            => 5,
             'st'            => 5,
             'ag'            => 2,
             'av'            => 8,
             'def'        => array (99,75,5,54,112,59),
             'norm'        => array ('S'),
             'doub'        => array ('G','A','P', 'M'),
             'qty'            => 2,
            'cost'            => 150000,
            'icon'            => 'hblitzer1',
            'pos_id'        => 10903,
        )
)
);



foreach (array('Bilerot Vomitflesh', 'Brick Far\'th (+ Grotty)','Gobbler Grimlich','Grashnak Blackhoof','Grotty (included in Brick Far\'th)','Guffle Pusmaw','Lord Borak the Despoiler','Max Spleenripper','Morg \'n\' Thorg', 'Scyla Anfingrimm','Withergrasp Doubledrool', 'Bob Bifford') as $s) {
    array_push($stars[$s]['races'], T_RACE_BEASTMEN);
}


//Pygmy

define('T_RACE_TREEMEN', 110);

$DEA['Treemen'] = array (
    'other'    => array (
        'rr_cost' => 70000,
        'icon'    => 'halfling.png',
        'race_id' => T_RACE_TREEMEN, 
    ),
    'players'    => array (
        'Sprite'   => array (
            'ma'        => 6,
            'st'        => 1,
            'ag'        => 3,
            'av'        => 5,
            'def'       => array (23,108,111,104,26),
            'norm'      => array ('A'),
            'doub'      => array ('G', 'S', 'P'),
            'qty'       => 16,
            'cost'      => 20000,
            'icon'      => 'hlineman1',
            'pos_id'    => 11000,
        ),
        'Treeman'   => array (
            'ma'        => 2,
            'st'        => 6,
            'ag'        => 1,
            'av'        => 10,
            'def'       => array (115,109,54,59,58,110,57),
            'norm'      => array ('S'),
            'doub'      => array ('G', 'A', 'P'),
            'qty'       => 6,
            'cost'      => 120000,
            'icon'      => 'hthrower1',
            'pos_id'    => 11001,
        )
    )
);


foreach (array('Bertha Bigfist', 'Big Jobo Hairyfoot', 'Captain Colander', 'Cindy Pewhistle', 'Deeproot Strongbranch', 'Karla von Kill', 'Morg \'n\' Thorg', 'Neddley Verruca', 'Puggy Baconbreath' , 'Rumbelow Sheepskin', 'Willow Rosebark', 'Zara the Slayer', 'Bob Bifford') as $s) {
    array_push($stars[$s]['races'], T_RACE_TREEMEN);
}



//Stop Apoth / Nurgles Rot for Deamons of Nurgle
$dbblNoApothecary = array(T_RACE_DAEMONSOFNURGLE);
$racesNoApothecary = array_merge($racesNoApothecary, $dbblNoApothecary);

$dbblMayRaiseRotters = array(T_RACE_DAEMONSOFNURGLE);
$racesMayRaiseRotters = array_merge($racesMayRaiseRotters,$dbblMayRaiseRotters);


//Lets add the star players
$dbblstars = array(
    'Syble Sprite' => array (
        'id'     => -10000,
        'ma'     => 7,
        'st'     => 1,
        'ag'     => 3,
        'av'     => 6,
        'def'    => array (99, 108, 104, 23,111),
        'cost'   => 30000,
        'icon'   => 'star',
        'races'  => array(0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,100,101,102,103,104,105,106,107,108,109,110),
    )
    );

$stars = array_merge($stars,$dbblstars);