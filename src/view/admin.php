<div class="wrap" xmlns:style="http://www.w3.org/1999/xhtml">
    <h1 style="padding-bottom:20px;">Enam Plugin</h1>
    <?php settings_errors(); ?>

    <div class="tab">
        <button class="tablinks" onclick="openTab(event, 'settings')" id="defaultOpen">Settings</button>
        <button class="tablinks" onclick="openTab(event, 'update')">Update</button>
        <button class="tablinks" onclick="openTab(event, 'about')">About</button>
    </div>

    <div id="settings" class="tabcontent">
        <form method="post" action="options.php">
            <?php
            settings_fields( 'enamPluginSettings' );
            do_settings_sections( 'enamPlugin' );
            submit_button();
            ?>
        </form>
    </div>

    <div id="update" class="tabcontent">
        <h3>Update</h3>
        <p>This is the update tab.</p>
    </div>

    <div id="about" class="tabcontent">
        <h3>About</h3>
        <p>This is the about tab.</p>
    </div>

    <script>
        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>
</div>