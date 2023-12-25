<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingRulesResponseBody\scalingRules\alarms;

use AlibabaCloud\Tea\Model;

class dimensions extends Model
{
    /**
     * @description The key of the dimension that is associated with the metric. Valid values:
     *
     *   scaling_group: the ID of the scaling group
     *   userId: the ID of the Alibaba Cloud account
     *
     * @example scaling_group
     *
     * @var string
     */
    public $dimensionKey;

    /**
     * @description The value of the dimension that is associated with the metric.
     *
     * @example asg-bp18p2yfxow2dloq****
     *
     * @var string
     */
    public $dimensionValue;
    protected $_name = [
        'dimensionKey'   => 'DimensionKey',
        'dimensionValue' => 'DimensionValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dimensionKey) {
            $res['DimensionKey'] = $this->dimensionKey;
        }
        if (null !== $this->dimensionValue) {
            $res['DimensionValue'] = $this->dimensionValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dimensions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DimensionKey'])) {
            $model->dimensionKey = $map['DimensionKey'];
        }
        if (isset($map['DimensionValue'])) {
            $model->dimensionValue = $map['DimensionValue'];
        }

        return $model;
    }
}
