# Laravel IFSC Validator

[![Latest Version](https://img.shields.io/packagist/v/abinash/ifsc-validator.svg?style=flat-square)](https://packagist.org/packages/abinash/ifsc-validator)
[![License](https://img.shields.io/github/license/abinash889/ifsc-validator.svg?style=flat-square)](LICENSE)


## 📌 Introduction
**Laravel IFSC Validator** is a simple package that allows you to fetch details of an Indian bank IFSC code using Razorpay's IFSC API. 

## 🚀 Installation
You can install the package via Composer:

```sh
composer require abinash/ifsc-validator
```

### **📌 Publish Configuration (Optional)**
Edit your app/config/app.php and add the Service Provider
```sh
'providers' => [
    // Other service providers...
    Abinash\IFSCValidator\IFSCValidatorServiceProvider::class,
],
```
```sh
 'aliases' => [
    'IFSC' => Abinash\IFSCValidator\Facades\IFSC::class,
]
```


## 🔧 Usage
### **Using the Facade**
```php
use IFSC;

$ifscDetails = IFSC::getBankDetails('SBIN0007500');
print_r($ifscDetails);
```

### **Using Dependency Injection**
```php
use Abinash\IFSCValidator\Services\IFSCService;

class BankController {
    public function getIFSC(IFSCService $ifscService) {
        return $ifscService->getBankDetails('SBIN0007500');
    }
}
```

## 🔗 API Source
This package uses the free [Razorpay IFSC API](https://ifsc.razorpay.com/) to fetch bank details.


## 🏷 License
This package is open-source software licensed under the [MIT license](LICENSE).

## 👤 Author
**Abinash Bhatta**  
📧 [abinash889@gmail.com](mailto:abinash889@gmail.com)  
🚀 Follow me on GitHub: [Abinash](https://github.com/abinash889)

---

### **⭐ Contribute & Support**
If you find this package helpful, please ⭐ **star the repository** and contribute via pull requests! 🙌
