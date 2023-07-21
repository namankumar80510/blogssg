<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?= $site_description ?>">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@<?= $twitter_username ?>">
    <meta property="og:url" content="<?= sprintf("%s/%s", rtrim($site_url, '/'), ltrim($page_url, '/')) ?>">
    <meta property="og:title" content="<?= $site_title ?>">
    <meta property="og:description" content="<?= $site_description ?>">

    <base href="<?= $site_url ?>">

    <title><?= $site_title ?></title>

    <style>
        <?= $styles ?>
    </style>

    <link
        href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAABhGlDQ1BJQ0MgcHJvZmlsZQAAKJF9kT1Iw0AcxV9TRZGKQzuoCGaoThZERRy1CkWoEGqFVh1MLv2CJg1Jiouj4Fpw8GOx6uDirKuDqyAIfoC4ujgpukiJ/0sKLWI8OO7Hu3uPu3eAUC8zzeoYBzTdNlOJuJjJropdrwhiAGEMIyQzy5iTpCR8x9c9Any9i/Es/3N/jl41ZzEgIBLPMsO0iTeIpzdtg/M+cYQVZZX4nHjMpAsSP3Jd8fiNc8FlgWdGzHRqnjhCLBbaWGljVjQ14iniqKrplC9kPFY5b3HWylXWvCd/YSinryxzneYQEljEEiSIUFBFCWXYiNGqk2IhRftxH/+g65fIpZCrBEaOBVSgQXb94H/wu1srPznhJYXiQOeL43yMAF27QKPmON/HjtM4AYLPwJXe8lfqwMwn6bWWFj0C+raBi+uWpuwBlztA/5Mhm7IrBWkK+TzwfkbflAXCt0DPmtdbcx+nD0CaukreAAeHwGiBstd93t3d3tu/Z5r9/QBS3nKamEF+kgAAAAZiS0dEAP0AcAA7rB2u5wAAAAlwSFlzAAAuIwAALiMBeKU/dgAAAAd0SU1FB+cDGRUMGX8XZQgAAAAZdEVYdENvbW1lbnQAQ3JlYXRlZCB3aXRoIEdJTVBXgQ4XAAAC/0lEQVR42u3by2sTQRwH8O/MbJPYpm9bU6qJEm1BPbSCgiDqTWxFvGrFQ/8AsQcv/gFa8KQHqYgHwYuIePAgilI8ScG2qPVRsI0varQNTdMkbZKdGQ8VtbabrM86ye93HTbZ+ex35wXL5vrLNEq4OEq8CIAACIAACIAACIAACIAACKA0y/rvbmjLIMTqrcu2ZQd7oJMXKAEEQAAEQAAEQADFCqBliQPITJGtBEU7ROA4eN02sIomMKscYAw6l4LOxKFiQ1DRK9DZ218CMF88AGLNeYhwF1iZf0kb81aDeavBq0JAsBP2+HXIiW6wXLw4AKz1NyBCB1xKeWBt6gJWNUPNvoQwHUAE+tx3/vubWbsXMlpu9iDIPJ2wwod/A2+H2a8AD/UAlq/AVKeh0x+hs7OA8IBXBADhLYLzAL4ZVuP2/LPcpyHIsdPQ2VuLrwv1QgT3mQ3A67vzPn0ZHYA9untpg3oOO3IQWtyF1bzH3DGA1bQ5pz6Xhv3qZP50RE4BMmsuAPcHnTs3OQzIgQKrwEeQsWcGJ8BX55yA6UF3W4FkxFAAVr/siu9rx1LD7gDSY4YC8I0AY84dy7hLAHLTZgIwXpXnsSpAjbpLgG0ogLZH8ukA8Bf5gYj+kH8Ks9rcJcmqMXcW0Pac8x+V73T3I76QwQAZ5/eXVbe7S0Blq7kAasZ5CuMNLnZ5rAmiod3gBCScB0JeuQ4i0FfgEOUimNfgMUDFbwLKdu5gyzGI4DWA/xBzaxdE+I75u0HYDyGnnkI0OsSYCVgbDsEKdkClooCcB8oqFs4DmMBK1B8/EZJvLhU+2xce8KogeG0LuL95xTr/VwB0+jLku3u/dm0uBTn5xGwAALAjRyAnH/9kdHKwR85ARs4B0GYDAEnYL/ZDvr+/sA8oNHgm3iI7fAIqcRZ67ipUfNzQQXBRnmOwxzogJ46CN3WB17aC+erBhAdaZoDsLFTiNdTUA6hYL4DkN5BoP3hN+J8AMPpkpsSLAAiAAAiAAAiAAAiAAAigROszfw/sXyvnr2MAAAAASUVORK5CYII="
        rel="icon" type="image/x-icon">
    <link rel="alternate" type="application/rss+xml" href="<?= $feed ?>" title="<?= $site_title ?>">

    <!-- Matomo -->
    <script>
        var _paq = window._paq = window._paq || [];
        /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
        _paq.push(['trackPageView']);
        _paq.push(['enableLinkTracking']);
        (function() {
            var u="//matomo.1823.pl/";
            _paq.push(['setTrackerUrl', u+'matomo.php']);
            _paq.push(['setSiteId', '2']);
            var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
            g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
        })();
    </script>
    <!-- End Matomo Code -->
</head>
<body>

<header>
    <a href="/">
        <picture id="logo">
            <source media="(prefers-color-scheme: light) or (prefers-color-scheme: no-preference)" srcset="data:image/webp;base64,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">
            <img
                src="data:image/webp;base64,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"
                alt="d1823.pl logo">
        </picture>
    </a>

    <nav>
        <a href="/" <?= $page_url == '/' || str_starts_with($page_url, '/articles') ? 'class="link--current"' : '' ?>>Articles</a>
        <a href="https://github.com/<?= $github_username ?>">Projects</a>
        <a href="/about" <?= $page_url == '/about' ? 'class="link--current"' : '' ?>>About</a>
    </nav>
</header>

<?= $content ?>

<footer>
    <div>
        This site uses cookie-disabled, fully-anonymized, self-hosted Matomo for usage tracking.
    </div>

    <div>
        Copyright &copy; 2020-<?php
        echo date_format(new DateTime(), 'Y'); ?> 1823.pl&nbsp;&mdash;&nbsp;<a
            href="https://creativecommons.org/licenses/by-nc-sa/4.0/">CC BY-NC-SA 4.0</a><br>
    </div>
</footer>

</body>
</html>
