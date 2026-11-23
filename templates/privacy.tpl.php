<div class="tswa-public">
    <p class="TswaEyebrow">TSWA · Two Skies Weather App</p>
    <h1>Privacy Policy</h1>
    <p class="TswaMuted">For the TSWA Android app (com.robnugen.tswa)
       and this website. Effective 22 November 2026.</p>

    <div class="TswaPanel">
        <h2>The short version</h2>
        <p><strong>TSWA collects nothing.</strong> There is no account, no advertising,
           no analytics, and no TSWA server receiving your data. The app talks to
           Open-Meteo to fetch weather, and that is the whole story. The details below
           exist because app stores like details.</p>
    </div>

    <h2>What the app sends, and to whom</h2>
    <p>To show a forecast, TSWA sends the latitude and longitude of the place you
       chose to Open-Meteo's forecast API (api.open-meteo.com) over HTTPS. If you
       search for a place by name, the text you type goes to Open-Meteo's geocoding
       API so it can find the place. Open-Meteo is a free, open weather service;
       their handling of requests is covered by
       <a href="https://open-meteo.com/en/terms">Open-Meteo's terms</a>.</p>
    <p>Nothing is sent to the developer. TSWA has no backend server of its own.</p>

    <h2>Location</h2>
    <p>Location is optional. If you use the current-location feature and grant
       permission, Android gives the app your approximate (coarse) location, and the
       app uses those coordinates only to request your local forecast from
       Open-Meteo. The app does not record, store, or send your location anywhere
       else. If you deny the permission, everything else still works — pick a place
       by search instead.</p>

    <h2>What stays on your phone</h2>
    <p>Your chosen temperature scale, the last place you viewed, and which page you
       left open are stored locally on your device, so the app reopens the way you
       left it. Uninstalling the app removes this. The developer never sees it.</p>

    <h2>This website</h2>
    <p>The converter demo on this site's home page can use your location the
       same way the app does. If you tap "Use my location", your browser asks
       your permission and gives the page your approximate coordinates; the
       page sends them to Open-Meteo to fetch your local temperature, exactly
       as the app does. If you would rather not, you can choose a place by
       name instead. Whichever place you choose is stored in your browser
       (local storage) so the demo starts there next time. This website's
       server receives and stores none of it.</p>

    <h2>What we collect</h2>
    <p>Nothing. No personal information is collected, stored, sold, or shared by the
       developer. The app contains no third-party software development kits, no
       trackers, and no advertising libraries.</p>

    <h2>Children</h2>
    <p>TSWA is a general-audience weather app. It collects no data from anyone,
       including children.</p>

    <h2>Changes</h2>
    <p>If a future version of TSWA ever changes any of this, this page will be
       updated first, with a new effective date, before that version ships.</p>

    <h2>Contact</h2>
    <p>Questions about this policy or the app: open an issue at
       <a href="https://github.com/thunderrabbit/TSWA/issues">github.com/thunderrabbit/TSWA/issues</a>.
       Developer: Rob Nugen, Australia.</p>

    <?php include __DIR__ . '/partials/tswa_footer.tpl.php'; ?>
</div>
