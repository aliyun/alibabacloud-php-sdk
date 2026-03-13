<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pai\V20240521\Models;

use AlibabaCloud\Dara\Model;

class Rules extends Model
{
    /**
     * @var SchedulingRule
     */
    public $schedulingRule;
    protected $_name = [
        'schedulingRule' => 'SchedulingRule',
    ];

    public function validate()
    {
        if (null !== $this->schedulingRule) {
            $this->schedulingRule->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->schedulingRule) {
            $res['SchedulingRule'] = null !== $this->schedulingRule ? $this->schedulingRule->toArray($noStream) : $this->schedulingRule;
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
        if (isset($map['SchedulingRule'])) {
            $model->schedulingRule = SchedulingRule::fromMap($map['SchedulingRule']);
        }

        return $model;
    }
}
