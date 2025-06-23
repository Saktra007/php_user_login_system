🚀 គម្រោង: ប្រព័ន្ធចូល និងចុះឈ្មោះ (Login/Register System)
ភាសា: PHP, MySQL

📁 រចនាសម្ព័ន្ធ Folder:
├── index.php              => ផ្លូវចូលគេបង្អស់ (Redirect ទៅ Login ឬ Dashboard)
├── dashboard.php          => ទំព័រផ្ទាំងខាងក្នុងបន្ទាប់ពី Login
├── include/
│   └── db.php             => ឯកសារតភ្ជាប់ទៅ Database
├── auth/
│   ├── login.php          => ទំព័រចូលគណនី
│   ├── register.php       => ទំព័រចុះឈ្មោះ
│   └── logout.php         => ចេញពីប្រព័ន្ធ
└── README_KH.txt          => សេចក្ដីណែនាំជាភាសាខ្មែរ

🔧 ការតំឡើង:
1. បង្កើត Database ឈ្មោះ `userdb`
2. បង្កើត Table `user` ដូចខាងក្រោម៖

   CREATE TABLE user (
       ID INT AUTO_INCREMENT PRIMARY KEY,
       Name VARCHAR(100) NOT NULL,
       Password VARCHAR(255) NOT NULL
   );

3. កែប្រែឯកសារ `include/db.php` ប្រសិនបើអ្នកមាន username/password database ខុស

4. បើក project តាម `http://localhost/php_user_login_system/`

📌 ចំណាំ:
- ពាក្យសម្ងាត់ត្រូវបាន Hash ដោយ `password_hash()` ហើយធៀបដោយ `password_verify()`
- បន្ទាប់ពី Login ជោគជ័យ អ្នកប្រើនឹងត្រូវបញ្ជូនទៅ `dashboard.php`
- អ្នកប្រើត្រូវបានរក្សា session ដោយ PHP (`$_SESSION["username"]`)

🎯 ប្រើសម្រាប់ការសិក្សា និងអនុវត្តលើប្រព័ន្ធ Login/Register
