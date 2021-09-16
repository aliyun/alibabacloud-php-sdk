<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetVideoPlayAuthResponseBody\videoMeta;
use AlibabaCloud\Tea\Model;

class GetVideoPlayAuthResponseBody extends Model
{
    /**
     * @var string
     */
    public $playAuth;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var videoMeta
     */
    public $videoMeta;
    protected $_name = [
        'playAuth'  => 'PlayAuth',
        'requestId' => 'RequestId',
        'videoMeta' => 'VideoMeta',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->playAuth) {
            $res['PlayAuth'] = $this->playAuth;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->videoMeta) {
            $res['VideoMeta'] = null !== $this->videoMeta ? $this->videoMeta->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetVideoPlayAuthResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PlayAuth'])) {
            $model->playAuth = $map['PlayAuth'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['VideoMeta'])) {
            $model->videoMeta = videoMeta::fromMap($map['VideoMeta']);
        }

        return $model;
    }
}
