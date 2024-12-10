<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->schedulingRule) {
            $res['SchedulingRule'] = null !== $this->schedulingRule ? $this->schedulingRule->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Rules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SchedulingRule'])) {
            $model->schedulingRule = SchedulingRule::fromMap($map['SchedulingRule']);
        }

        return $model;
    }
}
