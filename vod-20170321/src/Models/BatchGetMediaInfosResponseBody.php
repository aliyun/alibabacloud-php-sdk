<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\BatchGetMediaInfosResponseBody\mediaInfos;
use AlibabaCloud\Tea\Model;

class BatchGetMediaInfosResponseBody extends Model
{
    /**
     * @description The IDs of the media assets that do not support the operation typically because you are not authorized to perform the operation. For more information, see [Overview](https://help.aliyun.com/document_detail/113600.html).
     *
     * @var string[]
     */
    public $forbiddenMediaIds;

    /**
     * @description Details about media assets.
     *
     * @var mediaInfos[]
     */
    public $mediaInfos;

    /**
     * @description The IDs of the media assets that do not exist.
     *
     * @var string[]
     */
    public $nonExistMediaIds;

    /**
     * @description The request ID.
     *
     * @example 9E290613-04F4-47F4-795D30732077****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'forbiddenMediaIds' => 'ForbiddenMediaIds',
        'mediaInfos' => 'MediaInfos',
        'nonExistMediaIds' => 'NonExistMediaIds',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->forbiddenMediaIds) {
            $res['ForbiddenMediaIds'] = $this->forbiddenMediaIds;
        }
        if (null !== $this->mediaInfos) {
            $res['MediaInfos'] = [];
            if (null !== $this->mediaInfos && \is_array($this->mediaInfos)) {
                $n = 0;
                foreach ($this->mediaInfos as $item) {
                    $res['MediaInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nonExistMediaIds) {
            $res['NonExistMediaIds'] = $this->nonExistMediaIds;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchGetMediaInfosResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ForbiddenMediaIds'])) {
            if (!empty($map['ForbiddenMediaIds'])) {
                $model->forbiddenMediaIds = $map['ForbiddenMediaIds'];
            }
        }
        if (isset($map['MediaInfos'])) {
            if (!empty($map['MediaInfos'])) {
                $model->mediaInfos = [];
                $n = 0;
                foreach ($map['MediaInfos'] as $item) {
                    $model->mediaInfos[$n++] = null !== $item ? mediaInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NonExistMediaIds'])) {
            if (!empty($map['NonExistMediaIds'])) {
                $model->nonExistMediaIds = $map['NonExistMediaIds'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
