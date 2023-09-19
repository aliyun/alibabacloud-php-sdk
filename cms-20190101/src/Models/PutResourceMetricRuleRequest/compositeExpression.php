<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\PutResourceMetricRuleRequest;

use AlibabaCloud\SDK\Cms\V20190101\Models\PutResourceMetricRuleRequest\compositeExpression\expressionList;
use AlibabaCloud\Tea\Model;

class compositeExpression extends Model
{
    /**
     * @description The trigger conditions that are created in standard mode.
     *
     * @var expressionList[]
     */
    public $expressionList;

    /**
     * @description The relationship between the trigger conditions for multiple metrics. Valid values:
     *
     *   `&&`: An alert is triggered only if all metrics meet the trigger conditions. An alert is triggered only if the results of all expressions specified in the ExpressionList parameter are `true`.
     *   `||`: If one of the metrics meets the trigger conditions, an alert is triggered.
     *
     * @example ||
     *
     * @var string
     */
    public $expressionListJoin;

    /**
     * @description The trigger conditions that are created by using expressions. You can use expressions to create trigger conditions in the following scenarios:
     *
     *   Set an alert blacklist for specific resources. For example, if you specify ` $instanceId != \"i-io8kfvcpp7x5****\"  ``&&``  $Average > 50 `, no alert is generated even when the `average metric value` of the `i-io8kfvcpp7x5****` instance exceeds 50.
     *   Set a special alert threshold for a specified instance in the rule. For example, if you specify `$Average > ($instanceId == \"i-io8kfvcpp7x5****\"? 80: 50)`, an alert is triggered when the `average metric value` of the `i-io8kfvcpp7x5****` instance exceeds 80 or the `average metric value` of other instances exceeds 50.
     *   Limits the number of instances whose metric values exceed the threshold. For example, if you specify `count($Average > 20) > 3`, an alert is triggered only when the number of instances whose `average metric value` exceeds 20 exceeds three.
     *
     * @example $Average > ($instanceId == \"i-io8kfvcpp7x5****\"? 80: 50)
     *
     * @var string
     */
    public $expressionRaw;

    /**
     * @description The level of the alert. Valid values:
     *
     *   Critical
     *   Warn
     *   Info
     *
     * @example Critical
     *
     * @var string
     */
    public $level;

    /**
     * @description The number of consecutive triggers. If the number of times that the metric values meet the trigger conditions reaches the value of this parameter, CloudMonitor sends alert notifications.
     *
     * @example 3
     *
     * @var int
     */
    public $times;
    protected $_name = [
        'expressionList'     => 'ExpressionList',
        'expressionListJoin' => 'ExpressionListJoin',
        'expressionRaw'      => 'ExpressionRaw',
        'level'              => 'Level',
        'times'              => 'Times',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expressionList) {
            $res['ExpressionList'] = [];
            if (null !== $this->expressionList && \is_array($this->expressionList)) {
                $n = 0;
                foreach ($this->expressionList as $item) {
                    $res['ExpressionList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->expressionListJoin) {
            $res['ExpressionListJoin'] = $this->expressionListJoin;
        }
        if (null !== $this->expressionRaw) {
            $res['ExpressionRaw'] = $this->expressionRaw;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->times) {
            $res['Times'] = $this->times;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return compositeExpression
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExpressionList'])) {
            if (!empty($map['ExpressionList'])) {
                $model->expressionList = [];
                $n                     = 0;
                foreach ($map['ExpressionList'] as $item) {
                    $model->expressionList[$n++] = null !== $item ? expressionList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ExpressionListJoin'])) {
            $model->expressionListJoin = $map['ExpressionListJoin'];
        }
        if (isset($map['ExpressionRaw'])) {
            $model->expressionRaw = $map['ExpressionRaw'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['Times'])) {
            $model->times = $map['Times'];
        }

        return $model;
    }
}
