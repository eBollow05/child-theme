# Child Theme

## What's a Child Theme and Why Do I Need One?

Basically, a child theme is a theme that inherits the functionality and styling of the parent theme.

Creating a child theme allows you to modify the parent theme without losing your customizations. Without a child theme, you'd have to modify the parent theme's files directly whenever you wanted to make a change. This means that whenever you update the parent theme, all of your changes would be overwritten.

Overall, it is recommended to use a child theme if you want to add any custom functionality to your website.

## How Can I Create a Child Theme?

1. Create a folder under `/wp-content/themes/` called like your new theme, for example: `edg-child` (only ASCII lowercase letters, use hyphens instead of spaces)
2. Create a `style.css` file in that folder with the [header comment](https://github.com/eBollow05/child-theme/blob/main/style.css) at the very top.
The following information is required:
- `Theme Name` - Needs to be unique to your theme, for example: `edgChild`
- `Template` - The name of the parent theme directory, for example: `hello-elementor`
3. Create a `functions.php` file in that folder and [enqueue](https://github.com/eBollow05/child-theme/blob/main/functions.php#L13-L27) the `style.css` stylesheet
4. To create a thumbnail for your child theme, which you can see in the backend, upload an image called `screenshot.${FILE_EXTENSION}` in that folder where `${FILE_EXTENSION}` represents any image type (I recommend `webp`). The ideal dimensions are `1200x900`
5. Open `yourdomain.com/wp-admin/themes.php` and activate your theme

## How Can I Include JavaScript Files in My Child Theme?



## How Can I Load Dynamic PHP Variables Into My JavaScript Files?



## How Can I Translate Strings in My PHP Files?

