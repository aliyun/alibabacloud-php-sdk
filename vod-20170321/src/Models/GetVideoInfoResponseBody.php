<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetVideoInfoResponseBody\video;

class GetVideoInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var video
     */
    public $video;
    protected $_name = [
        'requestId' => 'RequestId',
        'video' => 'Video',
    ];

    public function validate()
    {
        if (null !== $this->video) {
            $this->video->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->video) {
            $res['Video'] = null !== $this->video ? $this->video->toArray($noStream) : $this->video;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Video'])) {
            $model->video = video::fromMap($map['Video']);
        }

        return $model;
    }
}
