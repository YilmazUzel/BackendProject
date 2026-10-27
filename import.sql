DROP DATABASE IF EXISTS `Bloodies Candle`;

CREATE DATABASE `Bloodies Candle`;

USE `Bloodies Candle`;

CREATE TABLE IF NOT EXISTS gebruikers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

INSERT INTO gebruikers (username, password) VALUES ('test-user', 'w@chtw00rd');

CREATE TABLE IF NOT EXISTS producten (
    id INT AUTO_INCREMENT PRIMARY KEY,
    naam VARCHAR(100) NOT NULL,
    beschrijving TEXT NOT NULL,
    afbeelding VARCHAR(255) NOT NULL DEFAULT '#',
    populair TINYINT(1) NOT NULL DEFAULT 0
);

INSERT INTO producten (naam, beschrijving, afbeelding, populair) VALUES
('Lavendelmaan', 'Kalmerende lavendel met een zweem van vanille', 'Images/Homepaginafoto2.png', 1),
('Sterrenhars', 'Dennenhars en nachtbloem, mysterieus en diep', 'Images/Homepaginafoto3.png', 1),
('Zondoorstoofd Linnen', 'Fris gewassen katoen met zonovergoten citrus', 'Images/Homepaginafoto2.png', 1),
('Zand & Salie', 'Een frisse combinatie van zachte salie en warme zandtonen.', 'Images/Homepaginafoto3.png', 0),
('Aarde & Amber', 'Warme amber met een rustige geur van natuurlijke aarde.', 'Images/Homepaginafoto2.png', 0),
('Berkenhart', 'Een zachte houtgeur met een lichte en frisse berkennoot.', 'Images/Homepaginafoto3.png', 0),
('Cederwind', 'Krachtige cederhoutgeur met een frisse bosachtige ondertoon.', 'Images/Homepaginafoto2.png', 0),
('Pumpkin Ember', 'Zoete pompoen met kruidige tonen voor een gezellige avond.', 'Images/Homepaginafoto3.png', 0),
('Kaneelstorm', 'Warme kaneelgeur met een klein vleugje kruidigheid.', 'Images/Homepaginafoto2.png', 0),
('Kopje Herfst', 'Een knusse geur van koffie, karamel en gevallen bladeren.', 'Images/Homepaginafoto3.png', 0),
('Warme Wikkel', 'Zachte vanille en amber die je huis een warm gevoel geven.', 'Images/Homepaginafoto2.png', 0),
('Goudblad', 'Een elegante geur van herfstbladeren met een frisse citrusnoot.', 'Images/Homepaginafoto3.png', 0),
('Zachte Gloed', 'Een rustige mix van vanille en zachte bloemen voor een kalm moment.', 'Images/Homepaginafoto2.png', 0),
('Maanlicht', 'Rustige jasmijn met een zachte geur van witte musk.', 'Images/Homepaginafoto3.png', 0),
('Rozenvlam', 'Romantische rozengeur met een warme en licht zoete basis.', 'Images/Homepaginafoto2.png', 0),
('Vanillewolk', 'Zachte vanillegeur die zorgt voor een rustig en vertrouwd gevoel.', 'Images/Homepaginafoto3.png', 0),
('Regen op Mos', 'Frisse regendruppels gecombineerd met groene mosgeuren.', 'Images/Homepaginafoto2.png', 0),
('Zonnegloed', 'Een vrolijke mix van sinaasappel, honing en zachte bloemen.', 'Images/Homepaginafoto3.png', 0),
('Nachtbloesem', 'Diepe bloemengeur met een mysterieuze en ontspannende uitstraling.', 'Images/Homepaginafoto2.png', 0),
('Hout & Honing', 'Warme houttonen met de zachte zoetheid van honing.', 'Images/Homepaginafoto3.png', 0),
('Ochtendmist', 'Een lichte, frisse geur van eucalyptus en ochtenddauw.', 'Images/Homepaginafoto2.png', 0),
('Karamelvuur', 'Romige karamel met een warme geur van geroosterde suiker.', 'Images/Homepaginafoto3.png', 0),
('Lavendelrust', 'Ontspannende lavendel voor een rustig moment aan het einde van de dag.', 'Images/Homepaginafoto2.png', 0),
('Citrusbries', 'Frisse citroen en sinaasappel met een lichte kruidige ondertoon.', 'Images/Homepaginafoto3.png', 0),
('Boswandeling', 'Een natuurlijke geur van dennen, bladeren en vochtige aarde.', 'Images/Homepaginafoto2.png', 0),
('Kustlicht', 'Frisse zeelucht met zachte tonen van katoen en mineralen.', 'Images/Homepaginafoto3.png', 0),
('Appel & Kaneel', 'Zoete appel met warme kaneel voor een huiselijke sfeer.', 'Images/Homepaginafoto2.png', 0);
