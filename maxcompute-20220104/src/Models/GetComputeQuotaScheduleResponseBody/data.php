<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetComputeQuotaScheduleResponseBody;

use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetComputeQuotaScheduleResponseBody\data\condition;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The value of effective condition.
     *
     * @var condition
     */
    public $condition;

    /**
     * @description The ID of the quota plan.
     *
     * @example 89b54db44d384f26964951ea457f64a5
     *
     * @var string
     */
    public $id;

    /**
     * @description The name of the quota plan.
     *
     * @example planA
     *
     * @var string
     */
    public $plan;

    /**
     * @description The time zone property.
     *
     * @example UTC+8
     *
     * @var string
     */
    public $timezone;

    /**
     * @description The type of the quota plan.
     *
     * @example daily
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'condition' => 'condition',
        'id' => 'id',
        'plan' => 'plan',
        'timezone' => 'timezone',
        'type' => 'type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->condition) {
            $res['condition'] = null !== $this->condition ? $this->condition->toMap() : null;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->plan) {
            $res['plan'] = $this->plan;
        }
        if (null !== $this->timezone) {
            $res['timezone'] = $this->timezone;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['condition'])) {
            $model->condition = condition::fromMap($map['condition']);
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['plan'])) {
            $model->plan = $map['plan'];
        }
        if (isset($map['timezone'])) {
            $model->timezone = $map['timezone'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
