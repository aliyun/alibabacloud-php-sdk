<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class GetVideoPlayAuthRequest extends Model
{
    /**
     * @var string
     */
    public $videoId;

    /**
     * @var int
     */
    public $authInfoTimeout;
    protected $_name = [
        'videoId'         => 'VideoId',
        'authInfoTimeout' => 'AuthInfoTimeout',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->videoId) {
            $res['VideoId'] = $this->videoId;
        }
        if (null !== $this->authInfoTimeout) {
            $res['AuthInfoTimeout'] = $this->authInfoTimeout;
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
        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }
        if (isset($map['AuthInfoTimeout'])) {
            $model->authInfoTimeout = $map['AuthInfoTimeout'];
        }

        return $model;
    }
}
