<?php

session_start();

$Message = $_SESSION['preview']['Output'];

if(isset($Message)) {
    unset($_SESSION['preview']);
} else {
    header('Location: /tools/outreach/EmailGenerator');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <title>Template</title>
</head>

<body>

    <button id="copy"><i class="fa-solid fa-copy"></i> Copy to Clipboard</button>
    <button id="return"><i class="fa-solid fa-arrow-left"></i> Return</button>

    <div id="template">
        <table cellspacing="0" cellpadding="0" width="100%" style="font-family: Arial, Helvetica, sans-serif;">
            <tr>
                <td>
                    <table align="center" cellpadding="0" cellspacing="0" width="600" style="border: 3px solid rgb(48, 48, 48);">
                        <tr>
                            <td align="center" bgcolor="#303030" width="600" height="100" style="padding: 50px 0px;"><img src="https://cdn.discordapp.com/attachments/618479678235082770/621116161207304202/MonolithWordmark4x.png" alt="Monolith Logo" width="500" height="100" style="display: block;"></td>
                        </tr>
                        <tr>
                            <td style="padding: 40px 30px 20px 50px;">
                                <table cellpadding="0" cellspacing="0" width="100%">
                                    <tr>
                                        <td style="font-weight: bold; font-size: 20px;">
                                            Invitation to become a part of our community
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 30px 20px 20px 0px; white-space: pre-line;">
                                            <?= $Message ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: bold; padding: 40px 20px 20px 0px; font-size: 20px;">
                                            What makes us different
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 10px 20px 20px 0px;">
                                            Ground up, coded from scratch, we've created a brand new
                                            unique, interactive and extensive City RP experience in
                                            Garry's Mod. Our vision is about replacing the status
                                            quo of outdated, messy and stale RP gamemodes with a
                                            game experience that is more coherent, dynamic and
                                            purposeful.
                                            <br> <br>
                                            Featuring VCmod vehicles, drug and gun making, bank
                                            robberies, and a PvP system where you can team up with
                                            your friends and raid the bases of others to seize their
                                            loot.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: bold; padding: 40px 20px 20px 0px; font-size: 20px;">
                                            Monoford
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 10px 20px 20px 0px;">
                                            MonoFord is our custom made map built by Statua that
                                            will be exclusive to our server. Having been built for
                                            over a year, it features 2 layers; the 1st layer
                                            containing a downtown area connected to a suburban
                                            community, the 2nd layer is a rural county. For a tour
                                            of the map, watch this
                                            <a href="https://youtu.be/twoewrblmjU">video</a>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center" style="font-weight: bold; padding: 20px 20px 20px 0px;"><a href="https://youtu.be/Af-4hT73JLY"><button style="background-color: rgb(42, 65, 65); padding: 15px 40px; font-weight: 400; color: white; font-size: 18px; border: none; cursor: pointer;">
                                                    MONOFORD TRAILER
                                                </button></a></td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: bold; padding: 40px 20px 20px 0px; font-size: 20px;">
                                            Previous Partnerships
                                        </td>
                                    </tr>
                                    <tr align="center" style="font-weight: bold;">
                                        <td align="center" style="padding: 10px 20px 20px 0px; display: inline-block;"><a href="https://www.youtube.com/watch?v=TOmKLSTd-y0"><img src="https://yt3.ggpht.com/ytc/AKedOLT5EyFRTqcYakcu72LM_RMRNdWgINnh9l2Z_rKD1g=s88-c-k-c0x00ffffff-no-rj" width="100" height="100" style="display: block;"></a> <br>
                                            Plexiate
                                        </td>
                                        <td align="center" style="padding: 10px 20px 20px 0px; display: inline-block;"><a href="https://www.youtube.com/watch?v=kw8K2xHExFk"><img src="https://yt3.ggpht.com/ytc/AKedOLSaU19iLBd_xt5NNViKDdahCtdYzdALrGULloTWCg=s88-c-k-c0x00ffffff-no-rj" width="100" height="100" style="display: block;"></a> <br>
                                            RoboKast
                                        </td>
                                        <td align="center" style="padding: 10px 20px 20px 0px; display: inline-block;"><a href="https://www.youtube.com/watch?v=7c04xr_4AQo"><img src="https://yt3.ggpht.com/ytc/AKedOLS9YIsWnKxEofoQrQKCmKg1xr1CgIXx_JmEOAjKNQ=s88-c-k-c0x00ffffff-no-rj" width="100" height="100" style="display: block;"></a> <br>
                                            Dacoobers
                                        </td>
                                        <td align="center" style="padding: 10px 20px 20px 0px; display: inline-block;"><a href="https://www.youtube.com/watch?v=74u4mxBbN4g"><img src="https://yt3.ggpht.com/ytc/AKedOLS0E-xp6SHdc_nmHWjBmrjH8FtBm6a7-PGwi4UD7w=s88-c-k-c0x00ffffff-no-rj" width="100" height="100" style="display: block;"></a> <br>
                                            Pixelcat
                                        </td>
                                        <td align="center" style="padding: 10px 20px 20px 0px; display: inline-block;"><a href="https://www.youtube.com/watch?v=Mk2C-sCKci0"><img src="https://yt3.ggpht.com/a/AGF-l78enrxZK9Zm9mb4z8Jn7o5fr4tAPGN91um2wg=s288-c-k-c0xffffffff-no-rj-mo" width="100" height="100" style="display: block;"></a> <br>
                                            jmwFilms
                                        </td>
                                        <td align="center" style="padding: 10px 20px 20px 0px; display: inline-block;"><a href="https://www.youtube.com/watch?v=UEvMMHTAnoU&amp;feature=youtu.be"><img src="https://yt3.ggpht.com/a/AGF-l7-gtR5ebP4gz2zf3TWRLjb3oTJjEQmE717bGw=s288-c-k-c0xffffffff-no-rj-mo" width="100" height="100" style="display: block;"></a> <br>
                                            Elitelupus
                                        </td>
                                        <td align="center" style="padding: 10px 20px 20px 0px; display: inline-block;"><a href="https://www.youtube.com/watch?v=ZCdkr_e90k4"><img src="https://yt3.ggpht.com/0bopaZ5Wdvk7WNODx2TUySNrq2FGWhksBLdj0zIAkUA-7ZPACQhmc4fgdwsdcugGHMWfFFTI=s88-c-k-c0x00ffffff-no-rj" width="100" height="100" style="display: block;"></a> <br>
                                            Zuthar13
                                        </td>
                                        <td align="center" style="padding: 10px 20px 20px 0px; display: inline-block;"><a href="https://www.youtube.com/watch?v=kWDq35rObV4"><img src="https://yt3.ggpht.com/JNDsftJZeIcVdjYjB_Gq9FMxVN1ACmQLK7xkUNC8Ib0NOy7beLY2j6qcaaXGI4KlL_NdjgyPCw=s88-c-k-c0x00ffffff-no-rj" width="100" height="100" style="display: block;"></a> <br>
                                            DNSL
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 40px 20px 20px 0px;"><b>If you are interested in taking part of this
                                                adventure, please reply to this email.</b>
                                            We understand you may have questions about how we
                                            operate. Check the FAQ attached to this email and visit
                                            our website:
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center" style="font-weight: bold; padding: 20px 20px 20px 0px;"><a href="https://monolithservers.com"><button style="background-color: rgb(42, 65, 65); padding: 15px 40px; font-weight: 400; color: white; font-size: 18px; border: none; cursor: pointer;">
                                                    MONOLITH WEBSITE
                                                </button></a></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr style="background-color: rgb(48, 48, 48);">
                            <td align="center" style="padding: 5px 0px; color: white; font-size: 12px;"><b>Monolith Servers - Thriving Ventures AB</b></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script src="./plugins/submit.js?v=<?= filemtime('plugins/submit.js') ?>"></script>
    <script>
        $('#copy').click(function(){
            let html = document.getElementById('template').innerHTML;

            navigator.clipboard.writeText(html);
            notify('Copied to clipboard!');
        });

        $('#return').click(function(){
            window.history.back();
        });
    </script>
</body>

</html>


