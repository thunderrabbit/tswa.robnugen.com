<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= htmlspecialchars($meta_description ?? 'TSWA — Two Skies Weather App. Weather in four scales, one tap apart.') ?>"/>
    <title><?= htmlspecialchars($page_title ?? 'Site') ?></title>
    <link rel="stylesheet" href="/css/<?= \Version\Site::SEMVER ?>/theme.css">
    <link rel="stylesheet" href="/css/<?= \Version\Site::SEMVER ?>/styles.css">
    <link rel="stylesheet" href="/css/<?= \Version\Site::SEMVER ?>/menu.css">
    <link rel="stylesheet" href="/css/<?= \Version\Site::SEMVER ?>/tswa.css">
    <link rel="apple-touch-icon" href="/images/apple-touch-icon.png">
</head>
<body>
    <?php include __DIR__ . '/../partials/menu.tpl.php'; ?>
    <div class="PageWrapper">
        <?= $page_content ?>
    </div>
</body>
</html>
