<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class UpdateVideoInfosResponseBody extends Model
{
    /**
     * @description The IDs of the videos that cannot be modified. Generally, videos cannot be modified if you do not have required [permissions](https://help.aliyun.com/document_detail/113600.html).
     *
     * @var string[]
     */
    public $forbiddenVideoIds;

    /**
     * @description The IDs of the videos that do not exist.
     *
     * @var string[]
     */
    public $nonExistVideoIds;

    /**
     * @description The ID of the request.
     *
     * @example 25818875-5F78-4AF6-D7393642CA58****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'forbiddenVideoIds' => 'ForbiddenVideoIds',
        'nonExistVideoIds'  => 'NonExistVideoIds',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->forbiddenVideoIds) {
            $res['ForbiddenVideoIds'] = $this->forbiddenVideoIds;
        }
        if (null !== $this->nonExistVideoIds) {
            $res['NonExistVideoIds'] = $this->nonExistVideoIds;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateVideoInfosResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ForbiddenVideoIds'])) {
            if (!empty($map['ForbiddenVideoIds'])) {
                $model->forbiddenVideoIds = $map['ForbiddenVideoIds'];
            }
        }
        if (isset($map['NonExistVideoIds'])) {
            if (!empty($map['NonExistVideoIds'])) {
                $model->nonExistVideoIds = $map['NonExistVideoIds'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
