<?php
    style("drawiowhiteboard", "settings");
    script("drawiowhiteboard", "settings");
?>
<div id="drawiowhiteboard" class="section section-drawio">
    <h2>draw.io Whiteboard</h2>

    <p class="drawio-header"><?php p($l->t("draw.io URL")) ?></p>
    <input id="drawioUrl" value="<?php p($_["drawioUrl"]) ?>" placeholder="https://<drawio-url>" type="text">

    <p class="drawio-header">
    <label for='lang'><?php p($l->t("Language")) ?></label>
    <input id="lang" value="<?php p($_["drawioLang"]) ?>" placeholder="<<?php p($l->t("auto or en,fr,de,es,ru,pl,zh,jp...")) ?>>" type="text">
    </p>

    <p class="drawio-header">
    <label for='offlineMode'><?php p($l->t("Activate offline mode in draw.io Whiteboard?")) ?>
    <select id="offlineMode">
      <option value="yes"<?php if ($_["drawioOfflineMode"] === "yes") echo ' selected'; ?>><?php p($l->t("Yes")) ?></option>
      <option value="no"<?php if ($_["drawioOfflineMode"] === "no") echo ' selected'; ?>><?php p($l->t("No")) ?></option>
    </select>
    </p>

    <p><?php p($l->t("When the \"offline mode\" is active, this disables all remote operations and features to protect the users privacy. draw.io Whiteboard will then also only be in English, even if you set a different language manually.")) ?></p>

    <p class="drawio-header">
        <label for='drawioAutosave'><?php p($l->t("Activate autosave?")) ?>
            <select id="drawioAutosave">
                <option value="yes"<?php if ($_["drawioAutosave"] === "yes") echo ' selected'; ?>><?php p($l->t("Yes")) ?></option>
                <option value="no"<?php if ($_["drawioAutosave"] === "no") echo ' selected'; ?>><?php p($l->t("No")) ?></option>
            </select>
    </p>

    <p class="drawio-header">
        <label for='drawioLibraries'><?php p($l->t("Enable libraries?")) ?>
            <select id="drawioLibraries">
                <option value="yes"<?php if ($_["drawioLibraries"] === "yes") echo ' selected'; ?>><?php p($l->t("Yes")) ?></option>
                <option value="no"<?php if ($_["drawioLibraries"] === "no") echo ' selected'; ?>><?php p($l->t("No")) ?></option>
            </select>
    </p>

    <br />
    <a id="drawioSave" class="button"><?php p($l->t("Save")) ?></a>
</div>
