<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20140828\Models\DescribeScalingRulesResponseBody\scalingRules\scalingRule;

use AlibabaCloud\SDK\Ess\V20140828\Models\DescribeScalingRulesResponseBody\scalingRules\scalingRule\stepAdjustments\stepAdjustment;
use AlibabaCloud\Tea\Model;

class stepAdjustments extends Model
{
    /**
     * @var stepAdjustment[]
     */
    public $stepAdjustment;
    protected $_name = [
        'stepAdjustment' => 'StepAdjustment',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->stepAdjustment) {
            $res['StepAdjustment'] = [];
            if (null !== $this->stepAdjustment && \is_array($this->stepAdjustment)) {
                $n = 0;
                foreach ($this->stepAdjustment as $item) {
                    $res['StepAdjustment'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stepAdjustments
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StepAdjustment'])) {
            if (!empty($map['StepAdjustment'])) {
                $model->stepAdjustment = [];
                $n                     = 0;
                foreach ($map['StepAdjustment'] as $item) {
                    $model->stepAdjustment[$n++] = null !== $item ? stepAdjustment::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
