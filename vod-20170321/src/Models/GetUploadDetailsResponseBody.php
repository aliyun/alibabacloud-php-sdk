<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetUploadDetailsResponseBody\uploadDetails;
use AlibabaCloud\Tea\Model;

class GetUploadDetailsResponseBody extends Model
{
    /**
     * @description The IDs of the media files that cannot be accessed.
     *
     * @var string[]
     */
    public $forbiddenMediaIds;

    /**
     * @description The IDs of the media files that do not exist.
     *
     * @var string[]
     */
    public $nonExistMediaIds;

    /**
     * @description The ID of the request.
     *
     * @example 9E290613-04F4-47F4-795D30732077****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The upload details.
     *
     * @var uploadDetails[]
     */
    public $uploadDetails;
    protected $_name = [
        'forbiddenMediaIds' => 'ForbiddenMediaIds',
        'nonExistMediaIds'  => 'NonExistMediaIds',
        'requestId'         => 'RequestId',
        'uploadDetails'     => 'UploadDetails',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->forbiddenMediaIds) {
            $res['ForbiddenMediaIds'] = $this->forbiddenMediaIds;
        }
        if (null !== $this->nonExistMediaIds) {
            $res['NonExistMediaIds'] = $this->nonExistMediaIds;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->uploadDetails) {
            $res['UploadDetails'] = [];
            if (null !== $this->uploadDetails && \is_array($this->uploadDetails)) {
                $n = 0;
                foreach ($this->uploadDetails as $item) {
                    $res['UploadDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUploadDetailsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ForbiddenMediaIds'])) {
            if (!empty($map['ForbiddenMediaIds'])) {
                $model->forbiddenMediaIds = $map['ForbiddenMediaIds'];
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
        if (isset($map['UploadDetails'])) {
            if (!empty($map['UploadDetails'])) {
                $model->uploadDetails = [];
                $n                    = 0;
                foreach ($map['UploadDetails'] as $item) {
                    $model->uploadDetails[$n++] = null !== $item ? uploadDetails::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
