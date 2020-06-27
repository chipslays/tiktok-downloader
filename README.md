# tiktok-downloader
PHP Download TikTok video without watermark or with watermark. 

## Example
```php
require 'tiktok-downloader.php';

$res = (new TikTok())
  ->url('https://vm.tiktok.com/3Ejte5/')
  ->getData();

print_r($res);
```

> **NOTE** If you are redirected to the developers.tiktok.com page, then change the user-agent.

```php
require 'tiktok-downloader.php';

$res = (new TikTok())
  ->setUseragent('Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.97 Safari/537.36')
  ->url($url)
  ->getData();
  
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
            [avatar] => https://p16-va-tiktok.ibyteimg.com/img/musically-maliva-obj/1647217892347910~c5_100x100.jpeg
            [stats] => Array
                (
                    [followers] => 85500
                    [likes] => 971800
                )

        )

    [music] => Array
        (
            [title] => Eating Chips Type Beat by GTTC
            [author] => ybndev
            [cover] => https://p16-va-tiktok.ibyteimg.com/img/musically-maliva-obj/1664195675102213~c5_100x100.jpeg
            [page] => https://www.tiktok.com/music/Eating-Chips-Type-Beat-by-GTTC-6729442193162980102
            [link] => 
        )

    [video] => Array
        (
            [cover] => https://p16-tiktok-va.ibyteimg.com/obj/tos-maliva-p-0068/d5d16c5839cad4572e53660abbbcd5ca?x-expires=1592946000&x-signature=JQN1icZe7YSS7jBPbOA5fFKNPXE%3D
            [links] => Array
                (
                    [raw] => https://v19.tiktokcdn.com/a37f5db2746d48f539587249cb4d2f0f/5ef01fa3/video/tos/useast2a/tos-useast2a-pve-0068/73710ac84aaa45128dc10889e21ea896/?a=1233&br=2050&bt=1025&cr=0&cs=0&dr=0&ds=3&er=&l=202006212103480101890482105979C2A1&lr=tiktok_m&mime_type=video_mp4&qs=0&rc=amxteWkzaTN3dDMzNTczM0ApM2k5ZWRoNGU5NzZoOWg6ZGdhbDVvYTZrMGRfLS1gMTZzc19gXzQxYWIwYzM0NS5eY2I6Yw%3D%3D&vl=&vr=
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
