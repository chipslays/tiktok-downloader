# tiktok-downloader
PHP Download TikTok audio, video without watermark or with watermark. 

## Example
```php
$res = (new TikTok())->url('https://vm.tiktok.com/3Ejte5/')->getData();
print_r($res);
```

**Output:**
```
Array
(
    [user] => Array
        (
            [verified] => 1
            [username] => olima_omega
            [name] => Paul Olima
            [avatar] => https://p16-va-default.akamaized.net/img/musically-maliva-obj/1647217892347910~c5_100x100.jpeg
            [stats] => Array
                (
                    [followers] => 54833
                    [likes] => 611223
                )

        )

    [music] => Array
        (
            [title] => Eating Chips Type Beat by GTTC
            [author] => ybndev
            [cover] => https://p16-va-default.akamaized.net/img/musically-maliva-obj/1664195675102213~c5_100x100.jpeg
        )

    [video] => Array
        (
            [cover] => https://p16-musical-va.ibyteimg.com/obj/tos-maliva-p-0068/d5d16c5839cad4572e53660abbbcd5ca?x-expires=1589508000&x-signature=3RrCejC4WEmlNnFuBeXdX0YTkuo%3D
            [links] => Array
                (
                    [raw] => https://v16.muscdn.com/7b832188dc1f1f8a5732174c0e064d5f/5ebe012c/video/tos/useast2a/tos-useast2a-pve-0068/73710ac84aaa45128dc10889e21ea896/?a=1233&br=2050&bt=1025&cr=0&cs=0&dr=0&ds=3&er=&l=202005142040290101890360231A9B2280&lr=tiktok_m&qs=0&rc=amxteWkzaTN3dDMzNTczM0ApM2k5ZWRoNGU5NzZoOWg6ZGdhbDVvYTZrMGRfLS1gMTZzc19gXzQxYWIwYzM0NS5eY2I6Yw%3D%3D&vl=&vr=
                    [clean] => https://api2.musical.ly/aweme/v1/playwm/?video_id=v09044c20000bqgt30nf90dfrv8joidg
                )

            [meta] => Array
                (
                    [width] => 540
                    [height] => 960
                    [ratio] => 15
                    [duration] => 15
                )

            [text] => On that Chilli Heatwave Flow #beats #flow #fyp #foryou #viral #girlsinict
        )

)

```
