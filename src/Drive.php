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

    /**
     * @param $url 待存储的图片链接
     * @param string $domin  自定义返回的资源域名
     * @return mixed
     */
    public function uploadImage($url,$domin = '')
    {
        $response = $this->http->request('POST',self::UPLOAD_IMAGE_API,[
            'headers' => [
                'Accept' => 'application/json',
                'Authorization' => 'Bearer '.getenv('API_TOKEN'),
            ],
            'query' => [
                'url' => $url,
                'domin' => $domin
            ]
        ]);
        return json_decode($response->getBody(),true);
    }
}