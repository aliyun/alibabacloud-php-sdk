<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\UpdateApplicationScalingRuleResponseBody\appScalingRule\behaviour;

use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateApplicationScalingRuleResponseBody\appScalingRule\behaviour\scaleDown\policies;
use AlibabaCloud\Tea\Model;

class scaleDown extends Model
{
    /**
     * @description The configuration of the policy.
     *
     * @var policies[]
     */
    public $policies;

    /**
     * @description The step size policy for the scale-in. Valid values: Max, Min, and Disable.
     *
     * @example Max
     *
     * @var string
     */
    public $selectPolicy;

    /**
     * @description The cooldown time of the scale-in. Valid values: 0 to 3600. Unit: seconds. Default value: 300.
     *
     * @example 300
     *
     * @var int
     */
    public $stabilizationWindowSeconds;
    protected $_name = [
        'policies'                   => 'Policies',
        'selectPolicy'               => 'SelectPolicy',
        'stabilizationWindowSeconds' => 'StabilizationWindowSeconds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->policies) {
            $res['Policies'] = [];
            if (null !== $this->policies && \is_array($this->policies)) {
                $n = 0;
                foreach ($this->policies as $item) {
                    $res['Policies'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->selectPolicy) {
            $res['SelectPolicy'] = $this->selectPolicy;
        }
        if (null !== $this->stabilizationWindowSeconds) {
            $res['StabilizationWindowSeconds'] = $this->stabilizationWindowSeconds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scaleDown
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Policies'])) {
            if (!empty($map['Policies'])) {
                $model->policies = [];
                $n               = 0;
                foreach ($map['Policies'] as $item) {
                    $model->policies[$n++] = null !== $item ? policies::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SelectPolicy'])) {
            $model->selectPolicy = $map['SelectPolicy'];
        }
        if (isset($map['StabilizationWindowSeconds'])) {
            $model->stabilizationWindowSeconds = $map['StabilizationWindowSeconds'];
        }

        return $model;
    }
}
