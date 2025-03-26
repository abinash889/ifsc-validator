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
```sh
php artisan vendor:publish --tag=ifsc-validator-config
```

## 🔧 Usage
### **Using the Facade**
```php
use Abinash\IFSCValidator\Facades\IFSCValidator;

$ifscDetails = IFSCValidator::get('SBIN0007500');
print_r($ifscDetails);
```

### **Using Dependency Injection**
```php
use Abinash\IFSCValidator\IFSCService;

class BankController {
    public function getIFSC(IFSCService $ifscService) {
        return $ifscService->get('SBIN0007500');
    }
}
```

## 🔗 API Source
This package uses the free [Razorpay IFSC API](https://ifsc.razorpay.com/) to fetch bank details.

## 🛠 Configuration
You can customize the API base URL in the `config/ifsc_validator.php` file:
```php
return [
    'api_url' => 'https://ifsc.razorpay.com/',
];
```

## 🏷 License
This package is open-source software licensed under the [MIT license](LICENSE).

## 👤 Author
**Abinash Bhatta**  
📧 [abinash889@gmail.com](mailto:abinash889@gmail.com)  
📞 +91 7978995314  
🚀 Follow me on GitHub: [Abinash](https://github.com/abinash889)

---

### **⭐ Contribute & Support**
If you find this package helpful, please ⭐ **star the repository** and contribute via pull requests! 🙌
