<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yunjian\V20211217\Models;

use AlibabaCloud\Tea\Model;

class SubmitUrgentDemandPlanRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 111223
     *
     * @var string
     */
    public $planId;

    /**
     * @description This parameter is required.
     *
     * @example 262940
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'planId' => 'planId',
        'userId' => 'userId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->planId) {
            $res['planId'] = $this->planId;
        }
        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitUrgentDemandPlanRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['planId'])) {
            $model->planId = $map['planId'];
        }
        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
