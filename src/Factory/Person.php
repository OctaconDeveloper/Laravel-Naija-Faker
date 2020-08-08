<?php

namespace OctaconDeveloper\LaravelNaijaFaker\Factory;

class Person extends \OctaconDeveloper\LaravelNaijaFaker\Load
{

    protected static $allowedTribe = array(
        'Igbo','Yoruba','Hausa'
    );

    protected static $firstName = array(
        'MaleName','FemaleName'
    );

    protected static $lastName = array(
        'Adamu','Balarabe','Dandauda','Dauda','Gado','Gagare','Giwa','Hadadangi','Hamidu',
        'Hankali','Haruna','Husaini','Ibiro','Ibrahimu','Idirisu','Iliyasu','Isiyaka','Isiyaku','Ismailu','ISUFU','Jibirila','Jibirilu','Jibrila','Jibrilu','Kallamu','Karmani','Kyaun','Maikarifi','Mailafia','Malami','Mamuda','Mika\'ila','Moctar','Malado','Nuhu','Sa\'idu','Sallan','Sanusi','Shadari','Shibkan','Sulaimanu','Sulemanu','Tanko','Tijani','Tsofo','Usuman','Yahaya','Yohance',
        'Abayomi',
        'Abimbola',
        'Abiola',
        'Adebayo',
        'Adebisi',
        'Adebowale',
        'Adeboye',
        'Adeboyejo',
        'Adedapo',
        'Adedayo',
        'Adegoke',
        'Adekoya',
        'Adekunle',
        'Ademola',
        'Adeniyi',
        'Adenuga',
        'Adeola',
        'Adepoju',
        'Adesanya',
        'Adesina',
        'Adetokunbo',
        'Adewole',
        'Adeyanju',
        'Adeyemi',
        'Adeyemo',
        'Adigun',
        'Afolabi',
        'Agboola',
        'Ajayi',
        'Ajibade',
        'Akande',
        'Akindele',
        'Akingbade',
        'Akinwande',
        'Akinwunmi',
        'Alabi',
        'Alakija',
        'Awojobi',
        'Awoniyi',
        'Ayodele',
        'Babalola',
        'Babatunde',
        'Balogun',
        'Bankole',
        'Falola',
        'Folorunsho',
        'Ilesanmi',
        'Ladipo',
        'Layeni',
        'Odegbami',
        'Oduwole',
        'Ogunleye',
        'Ojo',
        'Oladapo',
        'Oladele',
        'Oladipo',
        'Olajumoke',
        'Olajuwon',
        'Olatunji',
        'Olawale',
        'Olufunke',
        'Olumide',
        'Olumuyiwa',
        'Oluwole',
        'Otedola',
        'Oyedepo',
        'Oyekan',
        'Oyeyemi',
        'Rotimi',
        'Seyi',
        'Sowande',
        'Soyinka',
        'Taiwo',
        'Tejuosho',
        'Yemisi',
        'Abara','Achebe','Acholonu','Adichie','Agughalam','Aguta','Agwuegbo','Aku','Alaneme','Ama','Amadi','Amaike','Aniefuna','Anokwuru','Anosike','Anuoru','Asiegbu','Asika','Asinobi','Atuche','Atuegbu','Atusiemobi','Awachie','Awujo','Azuka','Azunna','Chidozie','Chike','Chukwumerije','Chukwunyelu','Diri','Dozie','Duru','Duruaku','Duruji','Ebujo','Edochie','Edolasim','Edozie','Edoziem','Eguminyo','Ehioma','Ejike','Ejikeme','Ejiofor','Ejofor','Ekezie','Emenike','Eregbu','Esiokwu','Ezejiofor','Ezemonye','Ezenwa','Ezeogba','Ibe','Ibekwe','Ibem','Idozuka','Igweze','Iheme','Ihemelu','Ike','Ikeji','Ikwuakolam','Isiguzo','Iwuoha','Kalu','Kanu','Mbanefo','Mborie','Metu','Mgbodile','Mmeremikwu','Monye','Ndukwe','Ndunesokwu','Nkwo','Nnadi','Nnadozie','Nnamdi','Nnebe','Nnodim','Nwabara','Nwabeke','Nwachukwu','Nwadibia','Nwadike','Nwaeze','Nwaigbo','Nwaigwe','Nwaike','Nwakali','Nwakuba','Nwamadioha','Nwamdi','Nwaneri','Nwaogu','Nwaokocha','Nwaokoha','Nwaokolo','Nwaokpara','Nwodoh','Nwogu','Nwokeabia','Nwokeoha','Nwokoye','Nwosu','Nwozuzu','Obah','Obasi','Obi','Obiajunwa','Obiajurumobi','Obiaka','Obiakaeze','Obiakaraije','Obiako','Obiakolam','Obiakpani','Obialom','Obialor','Obianagha','Obilaso','Obimma','Obinna','Obioma','Obiyo','Odigwe','Odinlo','Odoemena','Ofoegbu','Ofor','Ogbonna','Ogbonnaya','Ogeri','Ogu','Oha','Ohuruogu','Ojukwu','Okafor','Okoroafor','Okorafor','Okeke','Okoreke','Okonkwo','Okonma','Okoro','Okorocha','Okoronkwo','Okoye','Okwelume','Okwuosa','Omezi','Onwumere','Onyeachu','Onyeji','Onyekwere','Onyema','Onyemachi','Onyeme','Onyeneme','Onyenewere','Onyewelu','Onyewkwere','Okpara','Orendu','Orji','Osakwe','Osondu','Ovuworie','Ozoemena','Uche','Uchelue','Uchenna','Uderede','Udochukwu','Uduike','Ugochukwu','Ugwuana','Ugwunauwa','Ukachukwu','Ukah','Ukegbu','Ukpabi','Umeh','Umunakwe','Umunna','Unigwe','Uzoegbu','Wabaranta'
    );

    protected static $maleName = array(
        'Adamu','Balarabe','Dandauda','Dauda','Gado','Gagare','Giwa','Hadadangi','Hamidu',
        'Hankali','Haruna','Husaini','Ibiro','Ibrahimu','Idirisu','Iliyasu','Isiyaka','Isiyaku','Ismailu','ISUFU','Jibirila','Jibirilu','Jibrila','Jibrilu','Kallamu','Karmani','Kyaun','Maikarifi','Mailafia','Malami','Mamuda','Mika\'ila','Moctar','Malado','Nuhu','Sa\'idu','Sallan','Sanusi','Shadari','Shibkan','Sulaimanu','Sulemanu','Tanko','Tijani','Tsofo','Usuman','Yahaya','Yohance',
        'Abayomrunkoje','Abegunde','Abiade','Abidugun','Abiodun','Abiola','Abioye','Adebamgbe','Adebiyi','Adedayo','Ademola','Adeniyi','Adepero','Adesanya','Adeshola','Adesola','Adetayo','Adetokunbo','Adetola','Adetope','Adetosoye','Adisa','Akin','Ayinde','Ayodele','Ayotomiwa','Babasolaf','Banjoko','Bankole','Bayode','Bayowa','Damola','Durojaiye','Durosinmi','Esupofo','Farayioluwa','Fiyifolu','Folarin','Folu','Gbadebo','Idogbe','Ifelewa','Inioluwa','Iranola','Isamotu','Olalekan','Iseoluwa','Iyanu-Oluwa','Jesutosin','Jimoh','Kaseko','Mabayoje','Majekodunmi','Mayowa','Mobo','Mobolaji','Modadeola','Modurodoluwa','Modurolorilerioluwa','Mofetoluwa','Mofihinfoluwa','Mofolorunso','Naade','Numilekunoluwa','Obafemi','Obaloluwa','Obasolape','Obatotosinloluwa','Odunayo','Ogooluwa','Olabamiji','Olabisi','Olabode','Oladayo','Olamilekan','Oson','Pamilekunayo','Remilekun','Rereloluwa','Ropo','Sangodele','Sareola','Seriki','Seye','Shakale','Shoyebi','Sijuwade','Similoluwa','Sunkanmi','Sunmoluwa','Tadenikawo','Tanimola','Tantoluwa','Tayo','Teleayo','Teleola','Temidayo','Temiloluwa','Temitope','Teniayo','Tifeoluwa','Tiwalade','Tolulola','Tolulope','Toluwalase','Toluwalogo','Toluwalope','Toluwanimi','Tomori','Tosin','Yele',
        'Abaeze','Afamefuna','Akachukwu','Akunna','Amaechi','Amobi','Anozie','Arinzechukwu','Azubuike','Bunkechukwu','Chetachi','Chetachukwu','Chibuike','Chibundu','Chibunna','Chibuzor','Chidiadi','Chidiebere','Chidiebube','Chidozie','Chiekezie','Chiemeka','Chiemelie','Chiemezie','Chikanma','Chikezie','Chimankpa','Chimaobi','Chimezie','Chinaka','Chinecherem','Chioke',
        'Chukwudumaga','Chukwuemerie','Chukwuma','Chuwudubem','Debare','Diarachukwundu','Ebubechukwu','Echezonanna','Ejikeme','Ekenedilichukwu','Emeka','Emenike','Enyinnaya','Esomchi','Ewelike','Ezesinachi','Ezeudo','Ganiru','Golibe','Gosifechukwu','Hanyechukwu','Iben','Ifeanyichukwu','Ifechi','Ifechukwude','Ifemyolunna','Igwebuike','Iheanacho','Ikechukwu','Ikemba','Ilozumba','Isinachi','Jachike','Jayamma','Jideofor','Kachisicho','Kachiside','Kaetochukwu','Kainyechukwuekene','Kalu','Kambili','Kamdilichukwu','Kamfeechi','Kanayochukwu','Kaodinakachi','Kelechi','Kristibueze','Lotachukwu','Lotanna','Maduka','Munachimso','Nchedochukwu','Nwabueze','Obiajulu','Obiefune','Okorie'
    );

    protected static $femaleName = array(
        'Albarka','Arziki','Balaraba','Fa\'idah','Fa\'iqah','Fa\'izah','Hadizatu','Hauwa','Hauwa\'u','Idara','Kauna','Lafiya','Laminde','Laraba','Lu\'u-lu\'u','Mairak','Mairama','Mairo','Mansurah','Narai','Rahama','Rahila','Sakinah','Saratu','Sharifiya','Tarana','Turai','Yakutu','Yarja','Yohanse','Zainabu',
        'Abebi','Abidemi','Abiona','Adefolake','Aderiyike','Adunni','Atinuke','Ayobami','Ayokunumi','Ayomisioluwakonitan','Ayoola','Ayotola','Ayotoluwafunmi','Ayotundun','Ayowonuola','Ayowunmi','Bere','Bidemi','Bimpe',
        'Bisi','Bamidele','Bodunde','Bolanle','Bolatito','Boluwaji','Boluwatife','Bosede','Bunmi','Busayo','Dideoluwakusidede','Diekololaoluwa','Diekololaoluwalayemi','Doyinsola','Ebunoluwa','Emilohi','Emiola','Eniafe','Eniiyi',
        'Enitan','Eriifeoluwa','Eromidola','Eyitope','Fadekunmi','Fehintola','Feyisayo','Feyisetan','Feyisola','Fiayosemi','Fibikemi','Fisayo','Folake','Folaoluwashade','Folasade','Folusho','Fowoke','Foyinsola','Funmilayo','Fiyinfoluwa',
        'Gbemisola','Gbohunmi','Gbolahun','Ibidolapo','Ibidun','Ibilola','Ibironke','Ibukun','Ibukunade','Ibukunoluwa','Idowu','Ifedayo','Ifede','Ifedolaoluwa','Ifedolapo','Ifejesukristi','Ifelayo','Ifeoluwadolapo','Ifesowapo','Ifetundun',
        'Ifeya','Ikeoluwa','Ileara','Ilerioluwa','Iretomiwa','Iyawa','Jadesola','Jadesolaoluwa','Jaiyeola','Jesulayotimoni','Jibola','Jolasun','Kehinde','Kikelomo','Kinfeosioluwa','Kolapo','Kolawole','Korede','Lanre','Latorunwa','Lolade',
        'Mofoluwakemi','Monife','Olamide','Oluwabusola','Oluwafunmi','Omolade','Omorinsola','Orisa','Oyinlola','Ronke','Shola','Tambara','Timilehin','Titilayo','Tinuke','Yejide',
        'Adaego','Adaeze','Adaku','Adanna','Adaobi','Adaolisa','Adaugo','Adaure','Ahunna','Akuada','Anwuli','Anwulichukwu','Anwulika','Apunanwu','Binyelum','Chiagozie','Chiasoka','Chiazokam','Chibarameze','Chibinobim','Chibundo','Chibuogu','Chichima','Chinechezirim','Chisimdi','Daberechi','Daluchi','Ekemma','Epkereamaka','Eziamaka','Ezichi','Ezinne','Ginika','Ginikanwa','Ifechiluru','Ifechukwu','Ifedimma','Ifeyinwa','Ifunanya','Ihuoma','Ihuomachukwu','Ijeawele','Ijeomma','Isioma','Kairaluchukwu','Kaisoluchukwu','Kamfeechukwu','Kamharida','Kamsiyonna','Kamtochukwu','Kanyinulia','Karaluchukwu','Kasarachukwu','Kasiemobi','Kesandu','Kosarachi','Lebechi','Lotachukwu','Makuachukwu','Mkpulunma','Mmasichukwu','Nchekwube','Ndidi','Obiageli','Ogechi','Ogechukwu','Ogechukwukama','Oluebube','Somtochukwu','Udumelue','Ugoulo','Uloaku','Zikoranachidinma','Zinachidinma'
    );

    protected static $hausaLastName = array(
        'Adamu','Balarabe','Dandauda','Dauda','Gado','Gagare','Giwa','Hadadangi','Hamidu',
         'Hankali','Haruna','Husaini','Ibiro','Ibrahimu','Idirisu','Iliyasu','Isiyaka','Isiyaku','Ismailu','ISUFU','Jibirila','Jibirilu','Jibrila','Jibrilu','Kallamu','Karmani','Kyaun','Maikarifi','Mailafia','Malami','Mamuda','Mika\'ila','Moctar','Malado','Nuhu','Sa\'idu','Sallan','Sanusi','Shadari','Shibkan','Sulaimanu','Sulemanu','Tanko','Tijani','Tsofo','Usuman','Yahaya','Yohance'
    );

    protected static $hausaMaleName = array(
        'Adamu','Balarabe','Dandauda','Dauda','Gado','Gagare','Giwa','Hadadangi','Hamidu',
         'Hankali','Haruna','Husaini','Ibiro','Ibrahimu','Idirisu','Iliyasu','Isiyaka','Isiyaku','Ismailu','ISUFU','Jibirila','Jibirilu','Jibrila','Jibrilu','Kallamu','Karmani','Kyaun','Maikarifi','Mailafia','Malami','Mamuda','Mika\'ila','Moctar','Malado','Nuhu','Sa\'idu','Sallan','Sanusi','Shadari','Shibkan','Sulaimanu','Sulemanu','Tanko','Tijani','Tsofo','Usuman','Yahaya','Yohance'
    );

    protected static $hausaFemaleName = array(
        'Albarka','Arziki','Balaraba','Fa\'idah','Fa\'iqah','Fa\'izah','Hadizatu','Hauwa','Hauwa\'u','Idara','Kauna','Lafiya','Laminde','Laraba','Lu\'u-lu\'u','Mairak','Mairama','Mairo','Mansurah','Narai','Rahama','Rahila','Sakinah','Saratu','Sharifiya','Tarana','Turai','Yakutu','Yarja','Yohanse','Zainabu'
    );

    protected static $yorubaLastName = array(
        'Abayomi',
        'Abimbola',
        'Abiola',
        'Adebayo',
        'Adebisi',
        'Adebowale',
        'Adeboye',
        'Adeboyejo',
        'Adedapo',
        'Adedayo',
        'Adegoke',
        'Adekoya',
        'Adekunle',
        'Ademola',
        'Adeniyi',
        'Adenuga',
        'Adeola',
        'Adepoju',
        'Adesanya',
        'Adesina',
        'Adetokunbo',
        'Adewole',
        'Adeyanju',
        'Adeyemi',
        'Adeyemo',
        'Adigun',
        'Afolabi',
        'Agboola',
        'Ajayi',
        'Ajibade',
        'Akande',
        'Akindele',
        'Akingbade',
        'Akinwande',
        'Akinwunmi',
        'Alabi',
        'Alakija',
        'Awojobi',
        'Awoniyi',
        'Ayodele',
        'Babalola',
        'Babatunde',
        'Balogun',
        'Bankole',
        'Falola',
        'Folorunsho',
        'Ilesanmi',
        'Ladipo',
        'Layeni',
        'Odegbami',
        'Oduwole',
        'Ogunleye',
        'Ojo',
        'Oladapo',
        'Oladele',
        'Oladipo',
        'Olajumoke',
        'Olajuwon',
        'Olatunji',
        'Olawale',
        'Olufunke',
        'Olumide',
        'Olumuyiwa',
        'Oluwole',
        'Otedola',
        'Oyedepo',
        'Oyekan',
        'Oyeyemi',
        'Rotimi',
        'Seyi',
        'Sowande',
        'Soyinka',
        'Taiwo',
        'Tejuosho',
        'Yemisi'
    );

    protected static $yorubaMaleName = array(
        'Abayomrunkoje','Abegunde','Abiade','Abidugun','Abiodun','Abiola','Abioye','Adebamgbe','Adebiyi','Adedayo','Ademola','Adeniyi','Adepero','Adesanya','Adeshola','Adesola','Adetayo','Adetokunbo','Adetola','Adetope','Adetosoye','Adisa','Akin','Ayinde','Ayodele','Ayotomiwa','Babasolaf','Banjoko','Bankole','Bayode','Bayowa','Damola','Durojaiye','Durosinmi','Esupofo','Farayioluwa','Fiyifolu','Folarin','Folu','Gbadebo','Idogbe','Ifelewa','Inioluwa','Iranola','Isamotu','Olalekan','Iseoluwa','Iyanu-Oluwa','Jesutosin','Jimoh','Kaseko','Mabayoje','Majekodunmi','Mayowa','Mobo','Mobolaji','Modadeola','Modurodoluwa','Modurolorilerioluwa','Mofetoluwa','Mofihinfoluwa','Mofolorunso','Naade','Numilekunoluwa','Obafemi','Obaloluwa','Obasolape','Obatotosinloluwa','Odunayo','Ogooluwa','Olabamiji','Olabisi','Olabode','Oladayo','Olamilekan','Oson','Pamilekunayo','Remilekun','Rereloluwa','Ropo','Sangodele','Sareola','Seriki','Seye','Shakale','Shoyebi','Sijuwade','Similoluwa','Sunkanmi','Sunmoluwa','Tadenikawo','Tanimola','Tantoluwa','Tayo','Teleayo','Teleola','Temidayo','Temiloluwa','Temitope','Teniayo','Tifeoluwa','Tiwalade','Tolulola','Tolulope','Toluwalase','Toluwalogo','Toluwalope','Toluwanimi','Tomori','Tosin','Yele'
    );

    protected static $yorubaFemaleName = array(
        'Abebi','Abidemi','Abiona','Adefolake','Aderiyike','Adunni','Atinuke','Ayobami','Ayokunumi','Ayomisioluwakonitan','Ayoola','Ayotola','Ayotoluwafunmi','Ayotundun','Ayowonuola','Ayowunmi','Bere','Bidemi','Bimpe',
        'Bisi','Bamidele','Bodunde','Bolanle','Bolatito','Boluwaji','Boluwatife','Bosede','Bunmi','Busayo','Dideoluwakusidede','Diekololaoluwa','Diekololaoluwalayemi','Doyinsola','Ebunoluwa','Emilohi','Emiola','Eniafe','Eniiyi',
        'Enitan','Eriifeoluwa','Eromidola','Eyitope','Fadekunmi','Fehintola','Feyisayo','Feyisetan','Feyisola','Fiayosemi','Fibikemi','Fisayo','Folake','Folaoluwashade','Folasade','Folusho','Fowoke','Foyinsola','Funmilayo','Fiyinfoluwa',
        'Gbemisola','Gbohunmi','Gbolahun','Ibidolapo','Ibidun','Ibilola','Ibironke','Ibukun','Ibukunade','Ibukunoluwa','Idowu','Ifedayo','Ifede','Ifedolaoluwa','Ifedolapo','Ifejesukristi','Ifelayo','Ifeoluwadolapo','Ifesowapo','Ifetundun',
        'Ifeya','Ikeoluwa','Ileara','Ilerioluwa','Iretomiwa','Iyawa','Jadesola','Jadesolaoluwa','Jaiyeola','Jesulayotimoni','Jibola','Jolasun','Kehinde','Kikelomo','Kinfeosioluwa','Kolapo','Kolawole','Korede','Lanre','Latorunwa','Lolade',
        'Mofoluwakemi','Monife','Olamide','Oluwabusola','Oluwafunmi','Omolade','Omorinsola','Orisa','Oyinlola','Ronke','Shola','Tambara','Timilehin','Titilayo','Tinuke','Yejide'
    );

    protected static $igboLastName = array(
        'Abara','Achebe','Acholonu','Adichie','Agughalam','Aguta','Agwuegbo','Aku','Alaneme','Ama','Amadi','Amaike','Aniefuna','Anokwuru','Anosike','Anuoru','Asiegbu','Asika','Asinobi','Atuche','Atuegbu','Atusiemobi','Awachie','Awujo','Azuka','Azunna','Chidozie','Chike','Chukwumerije','Chukwunyelu','Diri','Dozie','Duru','Duruaku','Duruji','Ebujo','Edochie','Edolasim','Edozie','Edoziem','Eguminyo','Ehioma','Ejike','Ejikeme','Ejiofor','Ejofor','Ekezie','Emenike','Eregbu','Esiokwu','Ezejiofor','Ezemonye','Ezenwa','Ezeogba','Ibe','Ibekwe','Ibem','Idozuka','Igweze','Iheme','Ihemelu','Ike','Ikeji','Ikwuakolam','Isiguzo','Iwuoha','Kalu','Kanu','Mbanefo','Mborie','Metu','Mgbodile','Mmeremikwu','Monye','Ndukwe','Ndunesokwu','Nkwo','Nnadi','Nnadozie','Nnamdi','Nnebe','Nnodim','Nwabara','Nwabeke','Nwachukwu','Nwadibia','Nwadike','Nwaeze','Nwaigbo','Nwaigwe','Nwaike','Nwakali','Nwakuba','Nwamadioha','Nwamdi','Nwaneri','Nwaogu','Nwaokocha','Nwaokoha','Nwaokolo','Nwaokpara','Nwodoh','Nwogu','Nwokeabia','Nwokeoha','Nwokoye','Nwosu','Nwozuzu','Obah','Obasi','Obi','Obiajunwa','Obiajurumobi','Obiaka','Obiakaeze','Obiakaraije','Obiako','Obiakolam','Obiakpani','Obialom','Obialor','Obianagha','Obilaso','Obimma','Obinna','Obioma','Obiyo','Odigwe','Odinlo','Odoemena','Ofoegbu','Ofor','Ogbonna','Ogbonnaya','Ogeri','Ogu','Oha','Ohuruogu','Ojukwu','Okafor','Okoroafor','Okorafor','Okeke','Okoreke','Okonkwo','Okonma','Okoro','Okorocha','Okoronkwo','Okoye','Okwelume','Okwuosa','Omezi','Onwumere','Onyeachu','Onyeji','Onyekwere','Onyema','Onyemachi','Onyeme','Onyeneme','Onyenewere','Onyewelu','Onyewkwere','Okpara','Orendu','Orji','Osakwe','Osondu','Ovuworie','Ozoemena','Uche','Uchelue','Uchenna','Uderede','Udochukwu','Uduike','Ugochukwu','Ugwuana','Ugwunauwa','Ukachukwu','Ukah','Ukegbu','Ukpabi','Umeh','Umunakwe','Umunna','Unigwe','Uzoegbu','Wabaranta'
    );

    protected static $igboMaleName = array(
        'Abaeze','Afamefuna','Akachukwu','Akunna','Amaechi','Amobi','Anozie','Arinzechukwu','Azubuike','Bunkechukwu','Chetachi','Chetachukwu','Chibuike','Chibundu','Chibunna','Chibuzor','Chidiadi','Chidiebere','Chidiebube','Chidozie','Chiekezie','Chiemeka','Chiemelie','Chiemezie','Chikanma','Chikezie','Chimankpa','Chimaobi','Chimezie','Chinaka','Chinecherem','Chioke',
        'Chukwudumaga','Chukwuemerie','Chukwuma','Chuwudubem','Debare','Diarachukwundu','Ebubechukwu','Echezonanna','Ejikeme','Ekenedilichukwu','Emeka','Emenike','Enyinnaya','Esomchi','Ewelike','Ezesinachi','Ezeudo','Ganiru','Golibe','Gosifechukwu','Hanyechukwu','Iben','Ifeanyichukwu','Ifechi','Ifechukwude','Ifemyolunna','Igwebuike','Iheanacho','Ikechukwu','Ikemba','Ilozumba','Isinachi','Jachike','Jayamma','Jideofor','Kachisicho','Kachiside','Kaetochukwu','Kainyechukwuekene','Kalu','Kambili','Kamdilichukwu','Kamfeechi','Kanayochukwu','Kaodinakachi','Kelechi','Kristibueze','Lotachukwu','Lotanna','Maduka','Munachimso','Nchedochukwu','Nwabueze','Obiajulu','Obiefune','Okorie'

    );

    protected static $igboFemaleName = array(
        'Adaego','Adaeze','Adaku','Adanna','Adaobi','Adaolisa','Adaugo','Adaure','Ahunna','Akuada','Anwuli','Anwulichukwu','Anwulika','Apunanwu','Binyelum','Chiagozie','Chiasoka','Chiazokam','Chibarameze','Chibinobim','Chibundo','Chibuogu','Chichima','Chinechezirim','Chisimdi','Daberechi','Daluchi','Ekemma','Epkereamaka','Eziamaka','Ezichi','Ezinne','Ginika','Ginikanwa','Ifechiluru','Ifechukwu','Ifedimma','Ifeyinwa','Ifunanya','Ihuoma','Ihuomachukwu','Ijeawele','Ijeomma','Isioma','Kairaluchukwu','Kaisoluchukwu','Kamfeechukwu','Kamharida','Kamsiyonna','Kamtochukwu','Kanyinulia','Karaluchukwu','Kasarachukwu','Kasiemobi','Kesandu','Kosarachi','Lebechi','Lotachukwu','Makuachukwu','Mkpulunma','Mmasichukwu','Nchekwube','Ndidi','Obiageli','Ogechi','Ogechukwu','Ogechukwukama','Oluebube','Somtochukwu','Udumelue','Ugoulo','Uloaku','Zikoranachidinma','Zinachidinma'
    );


}
