<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetUploadDetailsResponseBody\uploadDetails;
use AlibabaCloud\Tea\Model;

class GetUploadDetailsResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $nonExistMediaIds;

    /**
     * @var uploadDetails[]
     */
    public $uploadDetails;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $forbiddenMediaIds;
    protected $_name = [
        'nonExistMediaIds'  => 'NonExistMediaIds',
        'uploadDetails'     => 'UploadDetails',
        'requestId'         => 'RequestId',
        'forbiddenMediaIds' => 'ForbiddenMediaIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nonExistMediaIds) {
            $res['NonExistMediaIds'] = $this->nonExistMediaIds;
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->forbiddenMediaIds) {
            $res['ForbiddenMediaIds'] = $this->forbiddenMediaIds;
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
        if (isset($map['NonExistMediaIds'])) {
            if (!empty($map['NonExistMediaIds'])) {
                $model->nonExistMediaIds = $map['NonExistMediaIds'];
            }
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ForbiddenMediaIds'])) {
            if (!empty($map['ForbiddenMediaIds'])) {
                $model->forbiddenMediaIds = $map['ForbiddenMediaIds'];
            }
        }

        return $model;
    }
}
