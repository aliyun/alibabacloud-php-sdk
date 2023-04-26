<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class GetVideoPlayAuthRequest extends Model
{
    /**
     * @description The duration of the audio or video file. Unit: seconds.
     *
     * @example 1.0.0
     *
     * @var string
     */
    public $apiVersion;

    /**
     * @description The title of the audio or video file.
     *
     * @example 100
     *
     * @var int
     */
    public $authInfoTimeout;

    /**
     * @description The API version number. Set the value to **1.0.0**.
     *
     * @example dfde02284a5c46622a097adaf44a****
     *
     * @var string
     */
    public $videoId;
    protected $_name = [
        'apiVersion'      => 'ApiVersion',
        'authInfoTimeout' => 'AuthInfoTimeout',
        'videoId'         => 'VideoId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiVersion) {
            $res['ApiVersion'] = $this->apiVersion;
        }
        if (null !== $this->authInfoTimeout) {
            $res['AuthInfoTimeout'] = $this->authInfoTimeout;
        }
        if (null !== $this->videoId) {
            $res['VideoId'] = $this->videoId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetVideoPlayAuthRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiVersion'])) {
            $model->apiVersion = $map['ApiVersion'];
        }
        if (isset($map['AuthInfoTimeout'])) {
            $model->authInfoTimeout = $map['AuthInfoTimeout'];
        }
        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }

        return $model;
    }
}
