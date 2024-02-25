<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <title>Monohead</title>
</head>

<body>
    <h2><a href="../index"><i class="fa-solid fa-arrow-left"></i></a> Email Generator.</h2>
    <small>Created with insperation from <a href="https://marketing-gen.wombos.xyz/">Marketing Email Generator by Jacub</a>.<br><i class="fa-solid fa-user"></i> Created by Jet.<br><i class="fa-solid fa-code"></i> Updated on <?= date('m/d/Y h:i a', filemtime('EmailGenerator.php')) ?><br><i class="fa-brands fa-github"></i> Source Code: <a href="https://github.com/Jetaime-Alexandria/monohead.dev/tree/main/tools/outreach">https://github.com/Jetaime-Alexandria/monohead.dev/tree/main/tools/outreach</a></small>
    <hr>
    <br>

    <form>
        <label for="ContentCreator">Content Creator Name: <span style="color: red;">*</span><br>
            <small style="color: gray;">The person you'll be sending the email to.</small>
            <input type="text" name="ContentCreator" id="ContentCreator">
        </label>
        <br>
        <label for="YourName">Your Name: <span style="color: red;">*</span><br>
            <small style="color: gray;">The name of the person who is sending the email, your steam name or discord name.</small>
            <input type="text" name="YourName" id="YourName">
        </label>
        <br>
        <label for="Output">Generated Message Output:<br>
            <small style="color: gray;">The generated message will be displayed here, copy and paste it into your email.</small>
            <textarea name="Output" id="Output" cols="100" rows="10" readonly></textarea>
        </label>
        <br>
         
        <button type="button" name="Generate" onclick="SubmitForm()">Generate Message <i class="fa-solid fa-arrow-right"></i></button>
        <button type="button" name="Preview" id="preview" onclick="ShowPreview()">Preview HTML Template <i class="fa-solid fa-eye"></i></button>
        <button type="button" name="Lock" id="lock" onclick="toggleEditor()"><i class="fa-solid fa-lock"></i></button>
    </form>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script src="./plugins/submit.js?v=<?= filemtime('plugins/submit.js') ?>"></script>
</body>

</html>