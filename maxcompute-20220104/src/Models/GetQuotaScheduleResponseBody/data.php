<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetQuotaScheduleResponseBody;

use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetQuotaScheduleResponseBody\data\condition;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The condition value.
     *
     * @var condition
     */
    public $condition;

    /**
     * @description The ID of the quota plan.
     *
     * @example 63
     *
     * @var string
     */
    public $id;

    /**
     * @description The name of the operator.
     *
     * @example userA
     *
     * @var string
     */
    public $operator;

    /**
     * @description The name of the quota plan.
     *
     * @example planA
     *
     * @var string
     */
    public $plan;

    /**
     * @var string
     */
    public $timezone;

    /**
     * @description The type of the quota plan.
     *
     * @example once
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'condition' => 'condition',
        'id'        => 'id',
        'operator'  => 'operator',
        'plan'      => 'plan',
        'timezone'  => 'timezone',
        'type'      => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->condition) {
            $res['condition'] = null !== $this->condition ? $this->condition->toMap() : null;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->operator) {
            $res['operator'] = $this->operator;
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
        if (isset($map['operator'])) {
            $model->operator = $map['operator'];
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
