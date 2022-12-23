<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class UpdateAttachedMediaInfosResponseBody extends Model
{
    /**
     * @description The IDs of the auxiliary media assets that do not exist.
     *
     * @var string[]
     */
    public $nonExistMediaIds;

    /**
     * @description The ID of the request.
     *
     * @example 25818875-5F78-4DF6-D7393642CA58****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'nonExistMediaIds' => 'NonExistMediaIds',
        'requestId'        => 'RequestId',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAttachedMediaInfosResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
