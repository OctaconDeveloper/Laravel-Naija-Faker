# NaijaFaker
A PHP library that generates fake data for user to use in the project. A local version of Fzaninotto's faker for Nigerian developers  quick data that they can relate to. It generates random data with nigerian relatives.

 
# Installation 
```sh
composer require octacondeveloper/naija-faker
```

```
require_once 'vendor/autoload.php';
```

```
use NaijaFaker\Generator;
$faker = new Generator();
```
### `Parameters`
  $network =  ['MTN','AIRTEL','GLO','ETISALAT','STARCOMMS', 'VISAFONE']
  
  $zone = ['SW','SS','SE','NE','NC', 'NW']
  
  $tribe = ['Igbo','Yoruba','Hausa']
  

### `Phone Numbers`
      phoneNumber($network = 'null')  // 081185642346
      
      landLine($state = 'Lagos')); // (01) 5406290

### `State`
     state($zone = 'null') //  Sokoto 
     stateFull($zone = null) // Zamfara (NG-ZA)
     
### `Local Government Area`
     //list of local governments in a state
      lgas($state = null)  //  ["Aiyedade","Aiyedire","Atakumosa East","Atakumosa West","Boluwaduro","Boripe","Ede North","Ede South","Egbedore","Ejigbo","Ife Central","Ife                                   East","Ife North","Ife South","Ifedayo","Ifelodun","Ila","Ilesha East","Ilesha West","Irepodun","Irewole","Isokan","Iwo","Obokun","Odo-Otin","Ola-                               Oluwa","Olorunda","Oriade","Orolu","Oshogbo"]
     randomLga($state = null)  // Kanam 
     randomZoneLga($zone = null) //Bende
     
 
### `Persons`
     firstName($tribe=null) // Anuoru
     lastName($tribe=null)  // Kauna
     maleName($tribe=null)  // Sulaimanu
     femaleName($tribe='Igbo')  // Ihuomachukwu
     fullName($tribe=null) // Mailafia Lafiya
     nameAbbr($tribe=null) // R. A. Hankali

    
## License

    Released under the MIT License. See the bundled LICENSE file for details.

## Contributions
   
   Open to contributions from anyone, PR's can be made and would be accepted. Thanks
