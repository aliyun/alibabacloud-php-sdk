<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20190910\Models;

use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeRuleGroupsResponseBody\ruleGroups;
use AlibabaCloud\Tea\Model;

class DescribeRuleGroupsResponseBody extends Model
{
    /**
     * @example 02E9A4B8-90FB-5F41-A049-C82277EB82FB
     *
     * @var string
     */
    public $requestId;

    /**
     * @var ruleGroups[]
     */
    public $ruleGroups;

    /**
     * @example 2
     *
     * @var int
     */
    public $taskStatus;

    /**
     * @example 1
     *
     * @var int
     */
    public $total;

    /**
     * @example 123
     *
     * @var string
     */
    public $wafTaskId;
    protected $_name = [
        'requestId'  => 'RequestId',
        'ruleGroups' => 'RuleGroups',
        'taskStatus' => 'TaskStatus',
        'total'      => 'Total',
        'wafTaskId'  => 'WafTaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->ruleGroups) {
            $res['RuleGroups'] = [];
            if (null !== $this->ruleGroups && \is_array($this->ruleGroups)) {
                $n = 0;
                foreach ($this->ruleGroups as $item) {
                    $res['RuleGroups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->wafTaskId) {
            $res['WafTaskId'] = $this->wafTaskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRuleGroupsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RuleGroups'])) {
            if (!empty($map['RuleGroups'])) {
                $model->ruleGroups = [];
                $n                 = 0;
                foreach ($map['RuleGroups'] as $item) {
                    $model->ruleGroups[$n++] = null !== $item ? ruleGroups::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['WafTaskId'])) {
            $model->wafTaskId = $map['WafTaskId'];
        }

        return $model;
    }
}
