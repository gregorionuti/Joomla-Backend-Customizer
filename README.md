# Backend Customizer
### Add custom CSS and JS code to Joomla backend.

This **Joomla plugin** allows to add custom CSS and JavaScript code in the backend of a Joomla website in a simple way.

In the settings there are two input fields: one contains custom CSS code and one contains custom JavaScript code.

It may be helpful to modify or **hide elements in Joomla backend**.

![GitHub Release](https://img.shields.io/github/v/release/gregorionuti/Joomla-Backend-Customizer)
![GitHub last commit (branch)](https://img.shields.io/github/last-commit/gregorionuti/Joomla-Backend-Customizer/main)
![GitHub License](https://img.shields.io/github/license/gregorionuti/Joomla-Backend-Customizer)
![Static Badge](https://img.shields.io/badge/joomla-cadetblue?label=platform)
![Static Badge](https://img.shields.io/badge/4.0%2B-blue?logo=joomla&logoColor=white&label=joomla)
![Static Badge](https://img.shields.io/badge/plugin-darkviolet?logo=joomla&logoColor=white&label=type)
![Static Badge](https://img.shields.io/badge/7.0%2B%20%7C%208.0%2B-purple?logo=php&logoColor=white&label=php)

---

#### Usage
Example CSS code to hide the left sidebar in Joomla 4 backend login screen. It works with the default Joomla 4 admin template, Atum.

You can copy and paste this code into Custom CSS field of this plugin.
```
body.com_login.view-login #header,
body.com_login.view-login #sidebar-wrapper,
body.com_login.view-login #form-login + div.text-center,
body.com_login.view-login .form-group > label[for="lang"],
body.com_login.view-login .form-group > select {
  display: none !important;
}
body.com_login.view-login {
  background-image: linear-gradient(130deg,#0700dd 0%,#00F2FF 89%);
}
body.com_login.view-login main .login {
  box-shadow: 0 0 20px 0 rgba(0,0,0,.15);
  background-color: #fff;
  border-radius: 15px 15px 15px 15px;
  padding: 50px;
}
```

---

#### Links
- :speech_balloon: [Discord server](https://discord.gg/VCtqbgjERH)

---

#### Support
:coffee: Did you find it useful? You might consider buying me a coffee :blush:

[![ko-fi](https://ko-fi.com/img/githubbutton_sm.svg)](https://ko-fi.com/Z8Z4U0RY9)

Thanks for all the caffeine :coffee: :coffee: :coffee:

---

#### Contributing
Pull requests with bugfixes and implementations are much appreciated. I'll be happy to review them and merge them once they're ready.
