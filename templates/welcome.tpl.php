<div class="tswa-public">
    <p class="TswaEyebrow">TSWA · Tri-Scale Weather App</p>
    <h1>Weather in °C, °F and K.<br>One tap apart.</h1>
    <p class="TswaLead">Google's weather app takes <strong>four taps</strong> to change
       temperature scale. TSWA takes <strong>one</strong>. When family in the US asks how
       hot Adelaide is, &ldquo;30 degrees&rdquo; should not need a follow-up question —
       tap the number, and answer in their language.</p>

    <p class="TswaNow" id="tswaNow" hidden></p>

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
            <a class="TswaBtn" href="/testing/">Join the Google Play test</a>
            <a class="TswaBtn ghost" href="https://github.com/thunderrabbit/TSWA/releases">Download the APK from GitHub</a>
        </p>
        <p class="TswaMuted">Both routes install the same app, signed with the same
           key. The APK works today; the Play test is what sets TSWA free.</p>
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
        scale = (scale + 1) % SCALES.length;
        render();
    });
    slider.addEventListener("input", function () {
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
            baseC = chip[1];
            slider.value = "0";
            jog = 0;
            render();
        });
        chipsEl.appendChild(b);
    });
    render();

    // Adelaide right now, from the same free feed the app uses.
    fetch("https://api.open-meteo.com/v1/forecast?latitude=-34.9285&longitude=138.6007" +
          "&current=temperature_2m&timezone=Australia%2FAdelaide")
        .then(function (r) { return r.json(); })
        .then(function (data) {
            var t = data && data.current && data.current.temperature_2m;
            if (typeof t !== "number") { return; }
            baseC = t;
            jog = 0;
            slider.value = "0";
            render();
            var f = (t * 9 / 5 + 32).toFixed(1);
            var el = document.getElementById("tswaNow");
            if (el) {
                el.textContent = "Adelaide right now: " + t.toFixed(1) + "°C — that is " +
                                 f + "°F in American. The demo below is set to it.";
                el.hidden = false;
            }
        })
        .catch(function () { /* stay with the now-ish default */ });
})();
</script>
