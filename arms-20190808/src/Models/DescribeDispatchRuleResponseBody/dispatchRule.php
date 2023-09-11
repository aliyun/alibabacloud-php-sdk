<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeDispatchRuleResponseBody;

use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeDispatchRuleResponseBody\dispatchRule\groupRules;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeDispatchRuleResponseBody\dispatchRule\labelMatchExpressionGrid;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeDispatchRuleResponseBody\dispatchRule\notifyRules;
use AlibabaCloud\Tea\Model;

class dispatchRule extends Model
{
    /**
     * @description Alarm handling method.
     *
     * DISCARD_ALERT: Discard the alarm event, that is, no alarm.
     * @example CREATE_ALERT
     *
     * @var string
     */
    public $dispatchType;

    /**
     * @description The information about groups.
     *
     * @var groupRules[]
     */
    public $groupRules;

    /**
     * @description Whether to send recovered alerts.
     * false: do not send.
     * @example true
     *
     * @var bool
     */
    public $isRecover;

    /**
     * @description The information about the dispatch rule.
     *
     * @var labelMatchExpressionGrid
     */
    public $labelMatchExpressionGrid;

    /**
     * @description The name of the dispatch policy.
     *
     * @example Prometheus Alert
     *
     * @var string
     */
    public $name;

    /**
     * @description The collection of notification methods.
     *
     * @var notifyRules[]
     */
    public $notifyRules;

    /**
     * @description The ID of the dispatch rule.
     *
     * @example 10282
     *
     * @var int
     */
    public $ruleId;

    /**
     * @description Indicates whether the dispatch policy is enabled. Valid values:
     *
     * - `false`: disabled
     * @example true
     *
     * @var string
     */
    public $state;
    protected $_name = [
        'dispatchType'             => 'DispatchType',
        'groupRules'               => 'GroupRules',
        'isRecover'                => 'IsRecover',
        'labelMatchExpressionGrid' => 'LabelMatchExpressionGrid',
        'name'                     => 'Name',
        'notifyRules'              => 'NotifyRules',
        'ruleId'                   => 'RuleId',
        'state'                    => 'State',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dispatchType) {
            $res['DispatchType'] = $this->dispatchType;
        }
        if (null !== $this->groupRules) {
            $res['GroupRules'] = [];
            if (null !== $this->groupRules && \is_array($this->groupRules)) {
                $n = 0;
                foreach ($this->groupRules as $item) {
                    $res['GroupRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->isRecover) {
            $res['IsRecover'] = $this->isRecover;
        }
        if (null !== $this->labelMatchExpressionGrid) {
            $res['LabelMatchExpressionGrid'] = null !== $this->labelMatchExpressionGrid ? $this->labelMatchExpressionGrid->toMap() : null;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->notifyRules) {
            $res['NotifyRules'] = [];
            if (null !== $this->notifyRules && \is_array($this->notifyRules)) {
                $n = 0;
                foreach ($this->notifyRules as $item) {
                    $res['NotifyRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dispatchRule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DispatchType'])) {
            $model->dispatchType = $map['DispatchType'];
        }
        if (isset($map['GroupRules'])) {
            if (!empty($map['GroupRules'])) {
                $model->groupRules = [];
                $n                 = 0;
                foreach ($map['GroupRules'] as $item) {
                    $model->groupRules[$n++] = null !== $item ? groupRules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['IsRecover'])) {
            $model->isRecover = $map['IsRecover'];
        }
        if (isset($map['LabelMatchExpressionGrid'])) {
            $model->labelMatchExpressionGrid = labelMatchExpressionGrid::fromMap($map['LabelMatchExpressionGrid']);
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NotifyRules'])) {
            if (!empty($map['NotifyRules'])) {
                $model->notifyRules = [];
                $n                  = 0;
                foreach ($map['NotifyRules'] as $item) {
                    $model->notifyRules[$n++] = null !== $item ? notifyRules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
