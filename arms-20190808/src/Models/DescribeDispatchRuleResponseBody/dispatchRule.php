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
     * @example CREATE_ALERT
     *
     * @var string
     */
    public $dispatchType;

    /**
     * @description The ID of the region.
     *
     * @var groupRules[]
     */
    public $groupRules;

    /**
     * @example true
     *
     * @var bool
     */
    public $isRecover;

    /**
     * @var labelMatchExpressionGrid
     */
    public $labelMatchExpressionGrid;

    /**
     * @description The grouping interval.
     *
     * @example Prometheus Alert
     *
     * @var string
     */
    public $name;

    /**
     * @var notifyRules[]
     */
    public $notifyRules;

    /**
     * @description The waiting time for grouping.
     *
     * @example 10282
     *
     * @var int
     */
    public $ruleId;

    /**
     * @description The grouping fields.
     *
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
