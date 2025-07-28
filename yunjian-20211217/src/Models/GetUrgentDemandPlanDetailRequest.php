<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yunjian\V20211217\Models;

use AlibabaCloud\Tea\Model;

class GetUrgentDemandPlanDetailRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 111223
     *
     * @var string
     */
    public $planId;
    protected $_name = [
        'planId' => 'planId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->planId) {
            $res['planId'] = $this->planId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUrgentDemandPlanDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['planId'])) {
            $model->planId = $map['planId'];
        }

        return $model;
    }
}
