<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetImageInfosResponseBody\imageInfo;
use AlibabaCloud\Tea\Model;

class GetImageInfosResponseBody extends Model
{
    /**
     * @description The image information.
     *
     * @var imageInfo[]
     */
    public $imageInfo;

    /**
     * @description The IDs of the images that do not exist.
     *
     * @var string[]
     */
    public $nonExistImageIds;

    /**
     * @description The ID of the request.
     *
     * @example 25818875-5F78-4AF6-D7393642CA58*****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'imageInfo'        => 'ImageInfo',
        'nonExistImageIds' => 'NonExistImageIds',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageInfo) {
            $res['ImageInfo'] = [];
            if (null !== $this->imageInfo && \is_array($this->imageInfo)) {
                $n = 0;
                foreach ($this->imageInfo as $item) {
                    $res['ImageInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nonExistImageIds) {
            $res['NonExistImageIds'] = $this->nonExistImageIds;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetImageInfosResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageInfo'])) {
            if (!empty($map['ImageInfo'])) {
                $model->imageInfo = [];
                $n                = 0;
                foreach ($map['ImageInfo'] as $item) {
                    $model->imageInfo[$n++] = null !== $item ? imageInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NonExistImageIds'])) {
            if (!empty($map['NonExistImageIds'])) {
                $model->nonExistImageIds = $map['NonExistImageIds'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
