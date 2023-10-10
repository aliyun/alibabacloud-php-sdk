<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\UpdateApplicationScalingRuleResponseBody\appScalingRule\behaviour\scaleUp;

use AlibabaCloud\Tea\Model;

class policies extends Model
{
    /**
     * @description The cycle of the policy check. Valid values: 0 to 1800. Unit: seconds.
     *
     * @example 15
     *
     * @var int
     */
    public $periodSeconds;

    /**
     * @description The type of the policy. Valid values: Pods and Percent.
     *
     * @example Pods
     *
     * @var string
     */
    public $type;

    /**
     * @description The policy value of auto scaling. Set the value to an integer greater than zero. If the policy type is Pods, the value of this parameter indicates the number of pods. If the policy type is Percent, the value of this parameter indicates a percentage, which can exceed 100%.
     *
     * @example 10
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'periodSeconds' => 'PeriodSeconds',
        'type'          => 'Type',
        'value'         => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->periodSeconds) {
            $res['PeriodSeconds'] = $this->periodSeconds;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return policies
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PeriodSeconds'])) {
            $model->periodSeconds = $map['PeriodSeconds'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
