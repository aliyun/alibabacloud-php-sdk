<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetImageInfoResponseBody\imageInfo;
use AlibabaCloud\Tea\Model;

class GetImageInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var imageInfo
     */
    public $imageInfo;
    protected $_name = [
        'requestId' => 'RequestId',
        'imageInfo' => 'ImageInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->imageInfo) {
            $res['ImageInfo'] = null !== $this->imageInfo ? $this->imageInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetImageInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ImageInfo'])) {
            $model->imageInfo = imageInfo::fromMap($map['ImageInfo']);
        }

        return $model;
    }
}
