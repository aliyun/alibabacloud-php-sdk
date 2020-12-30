<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\DescribeScalingGroupInstanceV2ResponseBody;

use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeScalingGroupInstanceV2ResponseBody\scalingRuleList\scalingRule;
use AlibabaCloud\Tea\Model;

class scalingRuleList extends Model
{
    /**
     * @var scalingRule[]
     */
    public $scalingRule;
    protected $_name = [
        'scalingRule' => 'ScalingRule',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->scalingRule) {
            $res['ScalingRule'] = [];
            if (null !== $this->scalingRule && \is_array($this->scalingRule)) {
                $n = 0;
                foreach ($this->scalingRule as $item) {
                    $res['ScalingRule'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scalingRuleList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ScalingRule'])) {
            if (!empty($map['ScalingRule'])) {
                $model->scalingRule = [];
                $n                  = 0;
                foreach ($map['ScalingRule'] as $item) {
                    $model->scalingRule[$n++] = null !== $item ? scalingRule::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
