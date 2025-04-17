<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetImageInfoResponseBody\imageInfo;

class GetImageInfoResponseBody extends Model
{
    /**
     * @var imageInfo
     */
    public $imageInfo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'imageInfo' => 'ImageInfo',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->imageInfo) {
            $this->imageInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageInfo) {
            $res['ImageInfo'] = null !== $this->imageInfo ? $this->imageInfo->toArray($noStream) : $this->imageInfo;
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
        if (isset($map['ImageInfo'])) {
            $model->imageInfo = imageInfo::fromMap($map['ImageInfo']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
