<?php

declare(strict_types=1);

# Extract DreamHost project root: /home/username/domain.com
preg_match('#^(/home/[^/]+/[^/]+)#', __DIR__, $matches);
include_once $matches[1] . '/prepend.php';

/**
 * Set up by prepend.php.
 *
 * @var \Config\Config $config
 * @var \Security\CSRFProtectaroo $csrfProtect
 * @var \Auth\IsLoggedIn $is_logged_in
 */

# A Config.php written before $site_title existed should still render a page.
// @phpstan-ignore nullCoalesce.property (an older Config.php may not declare it)
$site_title = $config->site_title ?? 'Site';

$logged_in = $is_logged_in->isLoggedIn();

$inner_page = new \View\Template(config: $config, csrf: $csrfProtect);
$inner_page->setTemplate("privacy.tpl.php");

$page = new \View\Template(config: $config, csrf: $csrfProtect);
$page->setTemplate("layout/base.tpl.php");
$page->set("page_title", "Privacy Policy — " . $site_title);
$page->set(
    "meta_description",
    "TSWA's privacy policy: the app collects nothing. No account, no ads, " .
    "no analytics; weather comes from Open-Meteo."
);
$page->set("username", $logged_in ? $is_logged_in->getLoggedInUsername() : "");
$page->set("is_admin", $logged_in && $is_logged_in->isAdmin());
$page->set("page_content", $inner_page->grabTheGoods());
$page->echoToScreen();
