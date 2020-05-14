<?php

class TikTok
{
    public $url;

    public function __construct($url = null)
    {
        $this->url = $url;
    }

    public function url($url) {
        $this->url = $url;
        return $this;
    }

    private function getVideoWithOutWatermark($url)
    {
        $binary = file_get_contents($url);
        preg_match_all('/vid:(.+?)\%/', $binary, $matches);
        return 'https://api2.musical.ly/aweme/v1/playwm/?video_id=' . $matches[1][0];
    }

    private function getVideoWithWatermark()
    {
        $html = $this->get($this->url);
        preg_match_all('/"contentUrl":"(.+?)"/', $html, $matches);
        return $matches[1][0];
    }

    public function getData()
    {
        $videoWithWatermark = $this->getVideoWithWatermark();
        $videoWithOutWatermark = $this->getVideoWithOutWatermark($videoWithWatermark);

        return [
            'videoWithWatermark' => $videoWithWatermark,
            'videoWithOutWatermark' => $videoWithOutWatermark,
        ];
    }

    private function get($url)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => $url,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 60,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_USERAGENT => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.135 Safari/537.36 Edge/12.10240',
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return $response;
    }
}
