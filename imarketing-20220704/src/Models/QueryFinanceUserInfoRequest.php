<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imarketing\V20220704\Models;

use AlibabaCloud\Tea\Model;

class QueryFinanceUserInfoRequest extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $activityId;

    /**
     * @example 1
     *
     * @var int
     */
    public $userId;
    protected $_name = [
        'activityId' => 'ActivityId',
        'userId'     => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activityId) {
            $res['ActivityId'] = $this->activityId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryFinanceUserInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActivityId'])) {
            $model->activityId = $map['ActivityId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
