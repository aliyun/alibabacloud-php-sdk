<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class GrantHonorResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $failedUserIds;

    /**
     * @description requestId
     *
     * @example 45b4d029-ab94-4672-aa0f-bd79590374cb
     *
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $successUserIds;
    protected $_name = [
        'failedUserIds'  => 'failedUserIds',
        'requestId'      => 'requestId',
        'successUserIds' => 'successUserIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failedUserIds) {
            $res['failedUserIds'] = $this->failedUserIds;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->successUserIds) {
            $res['successUserIds'] = $this->successUserIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GrantHonorResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['failedUserIds'])) {
            if (!empty($map['failedUserIds'])) {
                $model->failedUserIds = $map['failedUserIds'];
            }
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['successUserIds'])) {
            if (!empty($map['successUserIds'])) {
                $model->successUserIds = $map['successUserIds'];
            }
        }

        return $model;
    }
}
