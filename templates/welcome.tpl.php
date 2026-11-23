<div class="tswa-public">
    <p class="TswaEyebrow">TSWA · Two Skies Weather App</p>
    <h1>Weather in °C, °F and K.<br>One tap apart.</h1>
    <p class="TswaLead">Google's weather app takes <strong>four taps</strong> to change
       temperature scale. TSWA takes <strong>one</strong>. When family in the US asks how
       hot Adelaide is, &ldquo;30 degrees&rdquo; should not need a follow-up question —
       tap the number, and answer in their language.</p>

    <p class="TswaNow" id="tswaNow" hidden></p>

    <div class="TswaLoc" id="tswaLoc" hidden>
        <p class="TswaLocMsg" id="tswaLocMsg" aria-live="polite">The demo starts with
           Adelaide's temperature, because that is where TSWA is made. Somewhere else?</p>
        <p class="TswaLocBtns">
            <button class="TswaLocBtn" id="tswaGeoBtn" type="button">Use my location</button>
            <button class="TswaLocBtn" id="tswaPickBtn" type="button">Choose a place</button>
        </p>
        <div id="tswaLocPick" hidden>
            <input class="TswaLocInput" id="tswaLocInput" type="text"
                   placeholder="Search for a city or town" autocomplete="off"
                   aria-label="Search for a city or town">
            <div class="TswaLocResults" id="tswaLocResults"></div>
        </div>
        <p class="TswaLocNote">Your place is remembered in this browser only. Its
           coordinates go to Open-Meteo to fetch the weather. This website's server
           receives and stores none of it.</p>
    </div>

    <div class="TswaPanel">
        <h2>Try it — this is the app's converter, live in your browser</h2>
        <button class="TswaDemoTemp" id="demoTemp" type="button"
                aria-label="Temperature. Activate to switch temperature scale."></button>
        <div class="TswaVerdict">
            <div class="title" id="demoVerdictTitle"></div>
            <div class="desc" id="demoVerdictDesc"></div>
        </div>
        <div class="TswaSliderWrap">
            <input class="TswaSlider" id="demoSlider" type="range" min="-50" max="50"
                   value="0" step="1" aria-label="Nudge the temperature">
        </div>
        <p class="TswaHint">Tap the number to step °C → °F → K. Slide to nudge the
           temperature; the slider springs back to the middle, just like the app.</p>
        <div class="TswaChips" id="demoChips"></div>
        <p class="TswaHint">F = C × 9/5 + 32 · K = C + 273.15</p>
    </div>

    <h2>Why does this app exist?</h2>
    <p>TSWA's author lives in Australia, where weather is Celsius. His friends and
       family in the USA think in Fahrenheit. Every weather conversation crossed the
       scales twice — once in his head, once in theirs — and the biggest weather app
       on his phone buried the scale switch four taps deep. (Development codename:
       <em>Wdgwar4ctcts</em>, &ldquo;why does Google's weather app require four clicks
       to change temperature scale?&rdquo;)</p>
    <p>So TSWA shows one scale at a time, everywhere, and <strong>every temperature on
       screen is a tap target</strong>: the big number, the feels-like, the hourly
       strip, the 10-day highs and lows, even the dew point. One tap and the whole
       app steps to the next scale, in sync.</p>

    <figure class="TswaShot">
        <img src="/images/tswa-weather.jpg" alt="TSWA's weather page for Adelaide:
             current temperature, hourly forecast and the start of the 10-day list
             on one screen" loading="lazy">
        <figcaption>The whole forecast on one screen — current conditions, hourly,
            and the 10-day list. Google's app needs two screenshots to show the same
            thing. (Adelaide, 21 November 2026.)</figcaption>
    </figure>

    <div class="TswaGrid">
        <div class="TswaFeature">
            <h3>One tap, every temperature</h3>
            <p>Scales step °C → °F → K and stay in sync across both pages, dew point
               included. No settings page, no hunting.</p>
        </div>
        <div class="TswaFeature">
            <h3>The layout you already know</h3>
            <p>The weather page follows the familiar order — hero, hourly strip,
               10-day list with range bars, details grid — minus the four taps.</p>
        </div>
        <div class="TswaFeature">
            <h3>Metric first, American underneath</h3>
            <p>Wind in km/h with mph beneath, visibility in km with miles, pressure
               in hPa with inHg. Translations, not conversions you must do.</p>
        </div>
        <div class="TswaFeature">
            <h3>Free data, no account</h3>
            <p>Forecasts come from Open-Meteo, a free and open weather service.
               TSWA itself has no server, no sign-up and nothing to sell you.</p>
        </div>
        <div class="TswaFeature">
            <h3>No ads, no tracking</h3>
            <p>No analytics, no adverts, no third-party trackers. The
               <a href="/privacy/">privacy policy</a> fits on one page because there
               is almost nothing to say.</p>
        </div>
        <div class="TswaFeature">
            <h3>Free and open source</h3>
            <p>GPL-3.0, like its sibling projects. Read the code, file an issue, or
               build it yourself from
               <a href="https://github.com/thunderrabbit/TSWA">GitHub</a>.</p>
        </div>
    </div>

    <div class="TswaPanel">
        <h2>Get the app</h2>
        <p>TSWA is on its way to the Google Play Store. Google asks brand-new
           developers to run a <strong>closed test with at least 12 testers for
           14 days</strong> before the public listing unlocks — so the first
           testers quite literally open the store. Android 8 or newer.</p>
        <p>
            <a class="TswaBtn" href="https://github.com/thunderrabbit/TSWA/releases">Download the APK from GitHub</a>
        </p>
        <p class="TswaMuted">The APK is the real app, signed with the same key the
           Play version will use, and it works today. When the Play test opens,
           its join link will appear here; that test is what sets TSWA free.</p>
    </div>

    <?php include __DIR__ . '/partials/tswa_footer.tpl.php'; ?>
</div>

<script>
(function () {
    "use strict";
    // The verdict tables below are the app's own (TSWA repo,
    // app/src/main/assets/www/index.html), so the demo speaks exactly like it.
    var VERDICTS = [
        [-273.15, "Absolute zero", "Nothing moves. Nothing can be colder; this is the floor of physics."],
        [-219,    "Oxygen liquefies", "Air itself turns to liquid down here. Not picnic weather."],
        [-196,    "Liquid nitrogen boils", "It boils at this temperature. Your drink would shatter, not freeze."],
        [-138.8,  "Colder than anywhere on Earth, ever", "No weather station on Earth has ever recorded anything close to this."],
        [-89.2,   "Vostok, Antarctica, 1983", "The coldest natural temperature ever measured on Earth."],
        [-78.5,   "Dry ice sublimates", "Solid carbon dioxide turns straight to gas here. Spooky fog included."],
        [-40,     "The crossover point", "-40 is the one temperature that is the same in Celsius and Fahrenheit."],
        [-39.9,   "Dangerously cold", "Exposed skin can freeze in minutes. Stay inside."],
        [-0.1,    "Below freezing", "Water is ice, roads are treacherous, pipes are nervous."],
        [0,       "Freezing point", "Water freezes at 0 C / 32 F. Exactly here."],
        [8,       "Cold", "Proper coat weather."],
        [15,      "Cool", "A jumper, maybe. Light jacket, definitely."],
        [22,      "Mild", "Perfectly pleasant nothing-to-complain-about weather."],
        [27,      "Pleasant", "T-shirt weather. Enjoy it."],
        [32,      "Warm", "Shorts weather for most humans."],
        [38,      "Hot", "Seek shade, drink water, slow down."],
        [45,      "Very hot", "Dangerous for exertion. Adelaide knows this one well."],
        [56.7,    "Extreme heat", "Approaching the hottest ever measured on Earth: 56.7 C / 134 F, Death Valley, 1913."],
        [100,     "Hotter than any weather on Earth", "No place on Earth gets this hot. From here on, it is kitchens and physics."],
        [1e9,     "Oven territory", "Roasts, pizzas and burning paper live up here. Not weather any more."]
    ];
    var LANDMARKS = [
        ["Absolute zero", -273.15, "Nothing moves. Nothing can be colder; this is the floor of physics."],
        ["Oxygen liquefies", -218.8, "Air itself turns to liquid at this temperature."],
        ["Liquid nitrogen boils", -195.8, "Liquid nitrogen boils here. Things dipped in it shatter like glass."],
        ["Vostok record - coldest ever on Earth", -89.2, "Vostok, Antarctica, 1983: the coldest natural temperature ever measured."],
        ["Dry ice sublimates", -78.5, "Solid carbon dioxide turns straight to gas. Spooky fog included."],
        ["F/C crossover - Celsius equals Fahrenheit", -40, "The one temperature that reads the same on both scales."],
        ["Freezing - water freezes", 0, "Water freezes at 0 C / 32 F. Exactly here."],
        ["Body temp", 37, "37 C / 98.6 F: human body temperature. You, right now."],
        ["Death Valley record - hottest ever on Earth", 56.7, "56.7 C / 134 F, Death Valley, 1913: the hottest ever reliably measured."],
        ["Boiling - water boils", 100, "100 C / 212 F. Kettle's done."],
        ["Oven temperature", 180, "A moderate oven. Cookies, not people."],
        ["Paper burns", 232.78, "451 F, famously. Books and pizza crusts beware."],
        ["Pizza oven", 260, "500 F territory. Ninety seconds to perfect leopard-spotting."]
    ];
    var CHIPS = [
        ["Absolute zero", -273.15], ["F/C crossover", -40], ["Freezing", 0],
        ["Body temp", 37], ["Death Valley record", 56.7], ["Boiling", 100],
        ["Paper burns", 232.78], ["Pizza oven", 260]
    ];
    var SCALES = ["C", "F", "K"];
    var baseC = 23.6;   // Adelaide now-ish, until the live fetch lands
    var scale = 0;
    var jog = 0;
    var userTouched = false;   // visitor is playing; stop reseeding under them

    var tempEl = document.getElementById("demoTemp");
    var titleEl = document.getElementById("demoVerdictTitle");
    var descEl = document.getElementById("demoVerdictDesc");
    var slider = document.getElementById("demoSlider");
    var chipsEl = document.getElementById("demoChips");
    if (!tempEl || !slider || !chipsEl) { return; }

    function verdict(c) {
        for (var i = 0; i < LANDMARKS.length; i++) {
            if (Math.abs(c - LANDMARKS[i][1]) < 0.005) {
                return { t: LANDMARKS[i][0], d: LANDMARKS[i][2] };
            }
        }
        for (var j = 0; j < VERDICTS.length; j++) {
            if (c <= VERDICTS[j][0]) { return { t: VERDICTS[j][1], d: VERDICTS[j][2] }; }
        }
        var last = VERDICTS[VERDICTS.length - 1];
        return { t: last[1], d: last[2] };
    }

    function render() {
        var c = Math.max(baseC + jog, -273.15);
        var s = SCALES[scale];
        var num, unit;
        if (s === "C")      { num = c.toFixed(1);                unit = "°C"; }
        else if (s === "F") { num = (c * 9 / 5 + 32).toFixed(1); unit = "°F"; }
        else                { num = (c + 273.15).toFixed(2);     unit = "K"; }
        tempEl.innerHTML = "";
        tempEl.appendChild(document.createTextNode(num));
        var u = document.createElement("span");
        u.className = "unit";
        u.textContent = unit;
        tempEl.appendChild(u);
        var v = verdict(c);
        titleEl.textContent = v.t;
        descEl.textContent = v.d;
    }

    tempEl.addEventListener("click", function () {
        userTouched = true;
        scale = (scale + 1) % SCALES.length;
        render();
    });
    slider.addEventListener("input", function () {
        userTouched = true;
        jog = Number(slider.value) * 0.2;
        render();
    });
    slider.addEventListener("change", function () {
        slider.value = "0";
        jog = 0;
        render();
    });
    CHIPS.forEach(function (chip) {
        var b = document.createElement("button");
        b.type = "button";
        b.className = "TswaChip";
        b.textContent = chip[0];
        b.addEventListener("click", function () {
            userTouched = true;
            baseC = chip[1];
            slider.value = "0";
            jog = 0;
            render();
        });
        chipsEl.appendChild(b);
    });
    render();

    // Where the demo's weather comes from. Adelaide is the default, because
    // it is TSWA's home; the location bar lets a visitor switch the demo to
    // their own sky, and the choice is remembered in this browser only.
    // Mirrors the app: geolocation if allowed, place search otherwise.
    var ADELAIDE = { name: "Adelaide", lat: -34.9285, lon: 138.6007, src: "default" };
    var place = ADELAIDE;
    var nowEl = document.getElementById("tswaNow");
    var locBar = document.getElementById("tswaLoc");
    var locMsg = document.getElementById("tswaLocMsg");
    var geoBtn = document.getElementById("tswaGeoBtn");
    var pickBtn = document.getElementById("tswaPickBtn");
    var pickBox = document.getElementById("tswaLocPick");
    var locInput = document.getElementById("tswaLocInput");
    var locResults = document.getElementById("tswaLocResults");
    if (locBar) { locBar.hidden = false; }

    function say(msg) {
        if (locMsg) { locMsg.textContent = msg; }
    }

    function savePlace() {
        try {
            localStorage.setItem("tswa.place", JSON.stringify(place));
        } catch (e) { /* private mode: the choice lasts for this visit */ }
    }

    function loadPlace() {
        try {
            var raw = localStorage.getItem("tswa.place");
            if (!raw) { return null; }
            var p = JSON.parse(raw);
            if (p && typeof p.lat === "number" && typeof p.lon === "number" &&
                typeof p.name === "string") {
                return p;
            }
        } catch (e) { /* fall through to Adelaide */ }
        return null;
    }

    function showWeather() {
        fetch("https://api.open-meteo.com/v1/forecast?latitude=" + place.lat +
              "&longitude=" + place.lon +
              "&current=temperature_2m&timezone=auto")
            .then(function (r) { return r.json(); })
            .then(function (data) {
                var t = data && data.current && data.current.temperature_2m;
                if (typeof t !== "number") { return; }
                if (place.src === "geo" && data.timezone) {
                    // Name the visitor's place from the timezone the feed
                    // reports for their exact coordinates.
                    var parts = String(data.timezone).split("/");
                    var city = parts.length > 1
                        ? parts[parts.length - 1].replace(/_/g, " ") : "";
                    place.name = city ? "Your location near " + city
                                      : "Your location";
                    savePlace();
                }
                var seeded = false;
                if (!userTouched) {
                    baseC = t;
                    jog = 0;
                    slider.value = "0";
                    render();
                    seeded = true;
                }
                if (nowEl) {
                    var f = (t * 9 / 5 + 32).toFixed(1);
                    nowEl.textContent = place.name + " right now: " +
                        t.toFixed(1) + "°C — that is " + f + "°F in American." +
                        (seeded ? " The demo below is set to it." : "");
                    nowEl.hidden = false;
                }
            })
            .catch(function () { /* stay with the now-ish default */ });
    }

    function choosePlace(p, msg) {
        place = p;
        userTouched = false;
        savePlace();
        if (pickBox) { pickBox.hidden = true; }
        if (pickBtn) { pickBtn.textContent = "Change place"; }
        say(msg);
        showWeather();
    }

    if (geoBtn) {
        if (!("geolocation" in navigator)) { geoBtn.hidden = true; }
        geoBtn.addEventListener("click", function () {
            say("Asking your browser where you are. It will check with " +
                "you first, and the answer stays between you and Open-Meteo.");
            navigator.geolocation.getCurrentPosition(function (pos) {
                choosePlace(
                    { name: "Your location", lat: pos.coords.latitude,
                      lon: pos.coords.longitude, src: "geo" },
                    "Demo set to your location, and remembered in this browser.");
            }, function () {
                say("No problem, your browser kept that private. Choose a " +
                    "place instead and we will remember it here:");
                if (pickBox) { pickBox.hidden = false; }
                if (locInput) { locInput.focus(); }
            }, { timeout: 10000, maximumAge: 600000 });
        });
    }

    if (pickBtn && pickBox) {
        pickBtn.addEventListener("click", function () {
            pickBox.hidden = !pickBox.hidden;
            if (!pickBox.hidden && locInput) { locInput.focus(); }
        });
    }

    var searchTimer = null;
    if (locInput && locResults) {
        locInput.addEventListener("input", function () {
            var q = locInput.value.trim();
            if (searchTimer) { clearTimeout(searchTimer); }
            if (q.length < 2) { locResults.innerHTML = ""; return; }
            searchTimer = setTimeout(function () { searchPlaces(q); }, 300);
        });
    }

    function searchPlaces(q) {
        fetch("https://geocoding-api.open-meteo.com/v1/search?name=" +
              encodeURIComponent(q) + "&count=5&language=en&format=json")
            .then(function (r) { return r.json(); })
            .then(function (data) {
                renderResults((data && data.results) || []);
            })
            .catch(function () { renderResults([]); });
    }

    function renderResults(results) {
        locResults.innerHTML = "";
        if (!results.length) {
            var none = document.createElement("p");
            none.className = "TswaLocNote";
            none.textContent = "No places matched that. Try a bigger nearby town.";
            locResults.appendChild(none);
            return;
        }
        results.forEach(function (r) {
            var label = r.name +
                (r.admin1 ? ", " + r.admin1 : "") +
                (r.country ? ", " + r.country : "");
            var b = document.createElement("button");
            b.type = "button";
            b.className = "TswaLocResult";
            b.textContent = label;
            b.addEventListener("click", function () {
                choosePlace(
                    { name: r.name + (r.country ? ", " + r.country : ""),
                      lat: r.latitude, lon: r.longitude, src: "search" },
                    "Demo set to " + label + ", and remembered in this browser.");
            });
            locResults.appendChild(b);
        });
    }

    var saved = loadPlace();
    if (saved) {
        place = saved;
        if (pickBtn) { pickBtn.textContent = "Change place"; }
        say("Your place: " + saved.name + ", remembered in this browser. " +
            "The demo starts there.");
    }
    showWeather();
})();
</script>
