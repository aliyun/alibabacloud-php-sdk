<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\CreateApplicationScalingRuleResponseBody\appScalingRule\behaviour\scaleDown;

use AlibabaCloud\Tea\Model;

class policies extends Model
{
    /**
     * @description 检查执行的周期，取值范围[0, 1800]，单位为秒。
     *
     * @example 15
     *
     * @var int
     */
    public $periodSeconds;

    /**
     * @description 策略类型，可为Pods或Percent。
     *
     * @example Pods
     *
     * @var string
     */
    public $type;

    /**
     * @description 弹性行为的策略值，大于零的整数。若策略类型为Pods，则该值表示Pods数量；若策略类型为Percent，则该值表示百分比，允许超过100%。
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
