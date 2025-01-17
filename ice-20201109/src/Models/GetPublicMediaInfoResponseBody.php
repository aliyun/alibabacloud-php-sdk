<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetPublicMediaInfoResponseBody\mediaInfo;

class GetPublicMediaInfoResponseBody extends Model
{
    /**
     * @var mediaInfo
     */
    public $mediaInfo;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'mediaInfo' => 'MediaInfo',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->mediaInfo) {
            $this->mediaInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mediaInfo) {
            $res['MediaInfo'] = null !== $this->mediaInfo ? $this->mediaInfo->toArray($noStream) : $this->mediaInfo;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['MediaInfo'])) {
            $model->mediaInfo = mediaInfo::fromMap($map['MediaInfo']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
