<?php
/**
 * Created by PhpStorm.
 * User: Jaeger
 * Date: 16-9-8
 * Time: 上午12:36
 */

namespace Jaeger;


class Drive extends Client
{
    const UPLOAD_IMAGE_API = '/drive/image';

    public function uploadImage($url)
    {
        $response = $this->http->request('POST',self::UPLOAD_IMAGE_API,[
            'headers' => [
                'Accept' => 'application/json',
                'Authorization' => 'Bearer '.getenv('API_TOKEN'),
            ],
            'query' => [
                'url' => $url
            ]
        ]);
        return json_decode($response->getBody(),true);
    }
}