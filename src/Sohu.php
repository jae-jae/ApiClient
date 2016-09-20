<?php
/**
 * User: Jaeger
 * Date: 16-9-21
 * Time: 上午12:24
 * Email: JaegerCode@gmail.com
 */

namespace Jaeger;


class Sohu extends Client
{
    const UPLOAD_IMAGE_API = '/sohu/image';

    /**
     * @param $url 待存储的图片链接
     * @return mixed
     */
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