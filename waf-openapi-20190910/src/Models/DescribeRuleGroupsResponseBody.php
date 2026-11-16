<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20190910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeRuleGroupsResponseBody\ruleGroups;

class DescribeRuleGroupsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var ruleGroups[]
     */
    public $ruleGroups;

    /**
     * @var int
     */
    public $taskStatus;

    /**
     * @var int
     */
    public $total;

    /**
     * @var string
     */
    public $wafTaskId;
    protected $_name = [
        'requestId' => 'RequestId',
        'ruleGroups' => 'RuleGroups',
        'taskStatus' => 'TaskStatus',
        'total' => 'Total',
        'wafTaskId' => 'WafTaskId',
    ];

    public function validate()
    {
        if (\is_array($this->ruleGroups)) {
            Model::validateArray($this->ruleGroups);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->ruleGroups) {
            if (\is_array($this->ruleGroups)) {
                $res['RuleGroups'] = [];
                $n1 = 0;
                foreach ($this->ruleGroups as $item1) {
                    $res['RuleGroups'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RuleGroups'])) {
            if (!empty($map['RuleGroups'])) {
                $model->ruleGroups = [];
                $n1 = 0;
                foreach ($map['RuleGroups'] as $item1) {
                    $model->ruleGroups[$n1] = ruleGroups::fromMap($item1);
                    ++$n1;
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
