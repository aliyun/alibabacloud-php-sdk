<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetQuotaScheduleResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetQuotaScheduleResponseBody\data\condition;

class data extends Model
{
    /**
     * @var condition
     */
    public $condition;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $operator;

    /**
     * @var string
     */
    public $plan;

    /**
     * @var string
     */
    public $timezone;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'condition' => 'condition',
        'id' => 'id',
        'operator' => 'operator',
        'plan' => 'plan',
        'timezone' => 'timezone',
        'type' => 'type',
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
