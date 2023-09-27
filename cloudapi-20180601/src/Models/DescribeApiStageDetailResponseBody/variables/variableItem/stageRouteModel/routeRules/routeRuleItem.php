<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeApiStageDetailResponseBody\variables\variableItem\stageRouteModel\routeRules;

use AlibabaCloud\Tea\Model;

class routeRuleItem extends Model
{
    /**
     * @var string
     */
    public $conditionValue;

    /**
     * @var int
     */
    public $maxValue;

    /**
     * @var int
     */
    public $minValue;

    /**
     * @var string
     */
    public $resultValue;
    protected $_name = [
        'conditionValue' => 'ConditionValue',
        'maxValue'       => 'MaxValue',
        'minValue'       => 'MinValue',
        'resultValue'    => 'ResultValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->conditionValue) {
            $res['ConditionValue'] = $this->conditionValue;
        }
        if (null !== $this->maxValue) {
            $res['MaxValue'] = $this->maxValue;
        }
        if (null !== $this->minValue) {
            $res['MinValue'] = $this->minValue;
        }
        if (null !== $this->resultValue) {
            $res['ResultValue'] = $this->resultValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return routeRuleItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConditionValue'])) {
            $model->conditionValue = $map['ConditionValue'];
        }
        if (isset($map['MaxValue'])) {
            $model->maxValue = $map['MaxValue'];
        }
        if (isset($map['MinValue'])) {
            $model->minValue = $map['MinValue'];
        }
        if (isset($map['ResultValue'])) {
            $model->resultValue = $map['ResultValue'];
        }

        return $model;
    }
}
