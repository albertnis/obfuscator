# Obfuscator

*Highlighting the potentially hilarious flaws of modern computer translators*

[![Obfuscator screenshot][screenshot]][project]

Obfuscator is a cyclic translator. By translating a phrase multiple times before conversion back to the original language, algorithmic quirks are emphasised in often quite drastic ways. 

## Installation Notes

After cloning, create a `config.php` file in the `php` subdirectory. This should follow the form of `config_TEMPLATE.php` but should include a Microsoft Translator API key, which can be obtained by following [the official guide][api].

## Useful Links
- Check out [my blog post][blog].
- [Go to the project][project].

[project]:      https://albertnis.com/obfuscator/
[screenshot]:   http://i.imgur.com/q8AI5vB.png
[api]:          https://www.microsoft.com/en-us/translator/getstarted.aspx
[blog]:         http://albertnis.com/posts/obfuscator/