<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class DeleteVideoResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $forbiddenVideoIds;

    /**
     * @var string[]
     */
    public $nonExistVideoIds;
    protected $_name = [
        'requestId'         => 'RequestId',
        'forbiddenVideoIds' => 'ForbiddenVideoIds',
        'nonExistVideoIds'  => 'NonExistVideoIds',
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
        if (null !== $this->forbiddenVideoIds) {
            $res['ForbiddenVideoIds'] = $this->forbiddenVideoIds;
        }
        if (null !== $this->nonExistVideoIds) {
            $res['NonExistVideoIds'] = $this->nonExistVideoIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteVideoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
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

        return $model;
    }
}
