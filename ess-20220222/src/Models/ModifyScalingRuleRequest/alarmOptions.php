<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\ModifyScalingRuleRequest;

use AlibabaCloud\Tea\Model;

class alarmOptions extends Model
{
    /**
     * @description The statistical period of the metric data in the target tracking scaling rule. Unit: seconds. Valid values:
     *
     *   15
     *   60
     *   120
     *   300
     *   900
     *
     * >  Default value: 60.
     *
     * @example 60
     *
     * @var int
     */
    public $period;
    protected $_name = [
        'period' => 'Period',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alarmOptions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }

        return $model;
    }
}
