<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\ModifyScalingRuleRequest;

use AlibabaCloud\Tea\Model;

class alarmDimensions extends Model
{
    /**
     * @description The dimension key of the metric.
     *
     * @example rulePool
     *
     * @var string
     */
    public $dimensionKey;

    /**
     * @description The dimension value of the metric.
     *
     * @example sgp-l1cbirz451yxu2dxxx
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
     * @return alarmDimensions
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
