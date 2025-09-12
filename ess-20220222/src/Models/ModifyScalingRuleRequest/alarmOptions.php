<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\ModifyScalingRuleRequest;

use AlibabaCloud\Dara\Model;

class alarmOptions extends Model
{
    /**
     * @var int
     */
    public $period;
    protected $_name = [
        'period' => 'Period',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->period) {
            $res['Period'] = $this->period;
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
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }

        return $model;
    }
}
