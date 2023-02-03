# Child Theme

## What's a Child Theme and Why Do I Need One?

Basically, a child theme is a theme that inherits the functionality and styling of the parent theme.

Creating a child theme allows you to modify the parent theme without losing your customizations. Without a child theme, you'd have to modify the parent theme's files directly whenever you wanted to make a change. This means that whenever you update the parent theme, all of your changes would be overwritten.

Overall, it is recommended to use a child theme if you want to add any custom functionality to your website.

## How Can I Create a Child Theme?

1. Log into your website via FTP
2. Create a folder under `/wp-content/themes/` called like your new theme, for example: `edg-child` (only ASCII lowercase letters, use hyphens instead of spaces)
3. Create a `style.css` file in that folder with the [header comment](https://github.com/eBollow05/child-theme/blob/main/style.css) at the very top.
The following information is required:
- `Theme Name` - Needs to be unique to your theme, in our case: `edgChild`
- `Template` - The name of the parent theme directory, in our case: `hello-elementor`
4. Create a `functions.php` file in that folder and [enqueue](https://github.com/eBollow05/child-theme/blob/main/functions.php#L13-L27) the `style.css` stylesheet
5. To create a thumbnail for your child theme, which you can see in the backend, upload an image called `screenshot.${FILE_EXTENSION}` in that folder where `${FILE_EXTENSION}` represents any image type (I recommend `webp`). The ideal dimensions are `1200x900` px.
6. Open `yourdomain.com/wp-admin/themes.php` and activate your theme

## How Can I Include JavaScript Files in My Child Theme?



## How Can I Load Dynamic PHP Variables Into My JavaScript Files?



## How Can I Translate Strings in My PHP Files?

1. Assign a [text domain](https://github.com/eBollow05/child-theme/blob/main/style.css#L7) to your child theme in your `style.css` header (only ASCII lowercase letters, use hyphens instead of spaces).
The text domain is a unique identifier, allowing WordPress to distinguish between all of the loaded translations.
2. [Load](https://github.com/eBollow05/child-theme/blob/main/functions.php#L4-L9) your theme's text domain into the `functions.php` file
3. Create a folder in your child theme, for example: `lang`
4. Create a `.pot` file in that folder, for example: `template.pot` ([visit file](https://github.com/eBollow05/child-theme/blob/main/lang/template.pot))
5. Change the default language for the strings in this file, for example: `de_DE` ([Locale codes](https://make.wordpress.org/polyglots/teams/))
6. [Add all strings](https://github.com/eBollow05/child-theme/blob/main/lang/template.pot#L14) beside `msgid` in the default language, in our case: `de_DE` into this file, which should be translated
7. Open your `.pot` file with [Poedit](https://poedit.net)
8. Click at the very bottom on "Create new translation" and choose a [locale code](https://make.wordpress.org/polyglots/teams/) to tell the system in which language the new translation file should be in
9. Now translate each string in the specified language and save the file as `${LOCALE_CODE}.po`, where ${LOCALE_CODE} represents the specified language code
10. After saving the `.po` file, Poedit automatically creates a corresponding `.mo` file. This is a binary data file, compressed and optimized for computer use. Now upload the .`pot`, .`po` and `.mo` file into the `lang` folder of your child theme.


- [__()](https://developer.wordpress.org/reference/functions/__/)
- [_n()](https://developer.wordpress.org/reference/functions/_n/)
- [sprintf()](https://www.php.net/manual/en/function.sprintf.php)
