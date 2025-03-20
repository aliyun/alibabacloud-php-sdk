<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetImageInfoResponseBody\imageInfo;
use AlibabaCloud\Tea\Model;

class GetImageInfoResponseBody extends Model
{
    /**
     * @description The information about the image.
     *
     * @var imageInfo
     */
    public $imageInfo;

    /**
     * @description The ID of the request.
     *
     * @example AB99D4DF-FAFA-49DC-9C548C1E261E****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'imageInfo' => 'ImageInfo',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageInfo) {
            $res['ImageInfo'] = null !== $this->imageInfo ? $this->imageInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ImageInfo'])) {
            $model->imageInfo = imageInfo::fromMap($map['ImageInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
