<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yunjian\V20211217\Models;

use AlibabaCloud\Tea\Model;

class GetUrgentDemandPlanListRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $current;

    /**
     * @description This parameter is required.
     *
     * @example FY2022
     *
     * @var string
     */
    public $period;

    /**
     * @description This parameter is required.
     *
     * @example 0
     *
     * @var int
     */
    public $planType;

    /**
     * @description This parameter is required.
     *
     * @example 10
     *
     * @var int
     */
    public $size;

    /**
     * @description This parameter is required.
     *
     * @example 111222
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'current' => 'current',
        'period' => 'period',
        'planType' => 'planType',
        'size' => 'size',
        'userId' => 'userId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->current) {
            $res['current'] = $this->current;
        }
        if (null !== $this->period) {
            $res['period'] = $this->period;
        }
        if (null !== $this->planType) {
            $res['planType'] = $this->planType;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUrgentDemandPlanListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['current'])) {
            $model->current = $map['current'];
        }
        if (isset($map['period'])) {
            $model->period = $map['period'];
        }
        if (isset($map['planType'])) {
            $model->planType = $map['planType'];
        }
        if (isset($map['size'])) {
            $model->size = $map['size'];
        }
        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
