<?
sleep(5);
$push = 'CREATE TABLE "User"
(
    document text NOT NULL,
    prenom text  NOT NULL,
    nom text  NOT NULL,
    numero_securite_sociale text  NOT NULL,
    mdp text NOT NULL,
    mail text NOT NULL,
    CONSTRAINT "User_pkey" PRIMARY KEY (numero_securite_sociale)
);

INSERT INTO "User" (document,prenom,nom,numero_securite_sociale,mdp,mail)
VALUES
(\'ceciestundocument\',\'Richard\',\'Bouchard\',\'2010115580073\',\'ee2b50f713372225ca06f441d1b8a513\',\'tratorak@gmailvn.net\'),
(\'zndjnsdnfjzjnzj\',\'Kelly\',\'Becker\',\'2601149808260\',\'6fdb2cf5d98b8986a80755302e497203\',\'fedorfedor@gmailvn.net\'),
(\'consectetuer\',\'Kessie\',\'Petty\',\'2601149808214\',\'72b9f681b4c71ee33132113a98b81184\',\'quis.pede@yahoo.ca\'),
(\'bvdfdjf\',\'Dawud\',\'Webster\',\'2291129780470\',\'8481146c25bcf534d9f45a73b7fa3596\',\'auctor.mauris.vel@google.com\'),
(\'nd,nedjd\',\'Reagan\',\'Phillips\',\'1231193881303\',\'f9fb9beb83e9f8a40a84862f26d0ada6\',\'whden07@mamasuna.com\'),
(\'oiuytfvbn,j\',\'Dyer\',\'Jones\',\'2641125311290\',\'5bc4c5383c3a13d536bae4daec24f2f7\',\'gimpclop@eelraodo.com\'),
(\'jsbjefbfej\',\'Ronlard\',\'Damas\',\'1501174823328\',\'f4f572f461d277bd973cb36a8e309a69\',\'edvinasedzas16@omdiaco.com\'),
(\'efnjfjdje\',\'Mamien\',\'Babrou\',\'1484450102210\',\'ee18cd644ce29b9c652e5050a250306c\',\'iljinaelena@24hinbox.com\'),
(\'nsjdlsjek\',\'Mario\',\'Gagnant\',\'1898357398201\',\'4c9d6af7fed8eb7ac5d910a3e51c480d\',\'hectordanielt@isluntvia.com\'),
(\'nbxnnc\',\'Marianne\',\'Francesca\',\'175473472175\',\'8a6df51e74c647ac8e353cf25ef64ebc\',\'zizazu@techholic.in\');';

pg_connect("host=db dbname=principal user=user password=password")
or die('Connexion impossible : ' . pg_last_error());
pg_query($push) or die('Échec de la requête : ' . pg_last_error());

$push2 = "CREATE TABLE \"User\"
(
    document text NOT NULL,
    prenom text  NOT NULL,
    nom text  NOT NULL,
    numero_securite_sociale text  NOT NULL,
    mdp text NOT NULL,
    mail text NOT NULL,
    CONSTRAINT \"User_pkey\" PRIMARY KEY (numero_securite_sociale)
);

INSERT INTO \"User\"(document,prenom,nom,numero_securite_sociale,mdp,mail)
VALUES ('azertyuio', 'Jean', 'Dupont','2601149808214', '5a74395dfe3ff5be837d393a242e77ed', 'treasurykz@usbvap.com'),
('nbubjjlbui', 'Jean', 'Hacker','2291129780470', '10b0bfb89560d54482afdf3448c1ffda', 'djcgbyybrjdf@eeuasi.com'),
('bnsjdksusod', 'Jean', 'Bon','1231193881303', 'ed4fe809ca8dc304237db4ea37cece55', 'dalanysergey@eelraodo.com'),
('mpooiwwwnbj', 'Jean', 'Nemar','1980470943880', '25c12b4f5a80e2903400b6adb348e869', 'balaeffgosha@asifboot.com'),
('nxbvsusnsoos', 'Jean', 'Peuplu','1491266829132', '43fd15103db2d20d0dc4b42c9aa9ac75', '4gif23sn@btcmod.com'),
('qclsndlsb', 'Jean', 'Charles','2871239129991', 'd8e9f6be5770cdee28be76cac1a46381', 'denisbdg@jagomail.com'),
('nsxksnbjk', 'Jean', 'nemaclaque','1759473472175', '52c5f046b0e7167179e07e8ef370f385', 'soccermegan10@masjoco.com'),
('nsxksnbjk', 'Jean', 'Banbois','2757464107960', 'eab3e1bf83da8eef53b53a68daa16a9b', 'firo2@lbthomu.com'),
('nbvjkliuytf', 'Jean', 'Cerien','1970864567238', '9d8790aae3611c3b370030a98990f2bb', 'sverrekn@hearkn.com'),
('mpapoiukdj', 'Jean', 'Tanrien','183092962902', 'ebe284f39c503c1dde0d82031cd917b9', 'lmt96mhc@crpotu.com');
";

pg_connect("host=db_catch dbname=principal user=user password=password")
  or die('Connexion impossible : ' . pg_last_error());
pg_query($push2) or die('Échec de la requête : ' . pg_last_error());