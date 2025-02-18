<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\UpdateComputeQuotaScheduleRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\UpdateComputeQuotaScheduleRequest\body\condition;

class body extends Model
{
    /**
     * @var condition
     */
    public $condition;
    /**
     * @var string
     */
    public $plan;
    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'condition' => 'condition',
        'plan'      => 'plan',
        'type'      => 'type',
    ];

    public function validate()
    {
        if (null !== $this->condition) {
            $this->condition->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->condition) {
            $res['condition'] = null !== $this->condition ? $this->condition->toArray($noStream) : $this->condition;
        }

        if (null !== $this->plan) {
            $res['plan'] = $this->plan;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
