# tiktok-downloader
PHP Download TikTok video without watermark or with watermark. 

## Example
```php
$res = (new TikTok())->url('https://vm.tiktok.com/3Ejte5/')->getData();
print_r($res);
```

**Output:**
```
Array
(
    [videoWithWatermark] => https://v16.muscdn.com/6712349be67460d17ab5282fa7699087/5ebde5aa/video/tos/useast2a/tos-useast2a-pve-0068/73710ac84aaa45128dc10889e21ea896/?a=1233&br=2050&bt=1025&cr=0&cs=0&dr=0&ds=3&er=&l=202005141843070101890720341F83E289&lr=tiktok_m&qs=0&rc=amxteWkzaTN3dDMzNTczM0ApM2k5ZWRoNGU5NzZoOWg6ZGdhbDVvYTZrMGRfLS1gMTZzc19gXzQxYWIwYzM0NS5eY2I6Yw%3D%3D&vl=&vr=
    [videoWithOutWatermark] => https://api2.musical.ly/aweme/v1/playwm/?video_id=v09044c20000bqgt30nf90dfrv8joidg
)

```
