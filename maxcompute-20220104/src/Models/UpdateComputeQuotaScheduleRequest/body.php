<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\UpdateComputeQuotaScheduleRequest;

use AlibabaCloud\SDK\MaxCompute\V20220104\Models\UpdateComputeQuotaScheduleRequest\body\condition;
use AlibabaCloud\Tea\Model;

class body extends Model
{
    /**
     * @description The value of effective condition.
     *
     * @var condition
     */
    public $condition;

    /**
     * @description The name of the quota plan.
     *
     * This parameter is required.
     *
     * @example planA
     *
     * @var string
     */
    public $plan;

    /**
     * @description The type of the quota plan.
     *
     * >Notice: Currently, only daily is supported.</notice>
     *
     * This parameter is required.
     *
     * @example daily
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'condition' => 'condition',
        'plan' => 'plan',
        'type' => 'type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->condition) {
            $res['condition'] = null !== $this->condition ? $this->condition->toMap() : null;
        }
        if (null !== $this->plan) {
            $res['plan'] = $this->plan;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return body
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['condition'])) {
            $model->condition = condition::fromMap($map['condition']);
        }
        if (isset($map['plan'])) {
            $model->plan = $map['plan'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
