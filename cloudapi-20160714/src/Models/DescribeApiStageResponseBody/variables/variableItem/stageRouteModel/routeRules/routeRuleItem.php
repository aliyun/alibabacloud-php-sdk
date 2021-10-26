<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiStageResponseBody\variables\variableItem\stageRouteModel\routeRules;

use AlibabaCloud\Tea\Model;

class routeRuleItem extends Model
{
    /**
     * @var string
     */
    public $resultValue;

    /**
     * @var int
     */
    public $minValue;

    /**
     * @var string
     */
    public $conditionValue;

    /**
     * @var int
     */
    public $maxValue;
    protected $_name = [
        'resultValue'    => 'ResultValue',
        'minValue'       => 'MinValue',
        'conditionValue' => 'ConditionValue',
        'maxValue'       => 'MaxValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resultValue) {
            $res['ResultValue'] = $this->resultValue;
        }
        if (null !== $this->minValue) {
            $res['MinValue'] = $this->minValue;
        }
        if (null !== $this->conditionValue) {
            $res['ConditionValue'] = $this->conditionValue;
        }
        if (null !== $this->maxValue) {
            $res['MaxValue'] = $this->maxValue;
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
        if (isset($map['ResultValue'])) {
            $model->resultValue = $map['ResultValue'];
        }
        if (isset($map['MinValue'])) {
            $model->minValue = $map['MinValue'];
        }
        if (isset($map['ConditionValue'])) {
            $model->conditionValue = $map['ConditionValue'];
        }
        if (isset($map['MaxValue'])) {
            $model->maxValue = $map['MaxValue'];
        }

        return $model;
    }
}
