<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetVideoPlayInfoResponseBody\playInfo;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetVideoPlayInfoResponseBody\videoInfo;

class GetVideoPlayInfoResponseBody extends Model
{
    /**
     * @var playInfo
     */
    public $playInfo;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var videoInfo
     */
    public $videoInfo;
    protected $_name = [
        'playInfo' => 'PlayInfo',
        'requestId' => 'RequestId',
        'videoInfo' => 'VideoInfo',
    ];

    public function validate()
    {
        if (null !== $this->playInfo) {
            $this->playInfo->validate();
        }
        if (null !== $this->videoInfo) {
            $this->videoInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->playInfo) {
            $res['PlayInfo'] = null !== $this->playInfo ? $this->playInfo->toArray($noStream) : $this->playInfo;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->videoInfo) {
            $res['VideoInfo'] = null !== $this->videoInfo ? $this->videoInfo->toArray($noStream) : $this->videoInfo;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PlayInfo'])) {
            $model->playInfo = playInfo::fromMap($map['PlayInfo']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['VideoInfo'])) {
            $model->videoInfo = videoInfo::fromMap($map['VideoInfo']);
        }

        return $model;
    }
}
