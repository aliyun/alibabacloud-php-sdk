<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeRuleGroupsResponseBody\ruleGroups;

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
    public $totalCount;
    protected $_name = [
        'requestId'  => 'RequestId',
        'ruleGroups' => 'RuleGroups',
        'totalCount' => 'TotalCount',
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
                $n1                = 0;
                foreach ($this->ruleGroups as $item1) {
                    $res['RuleGroups'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
                $n1                = 0;
                foreach ($map['RuleGroups'] as $item1) {
                    $model->ruleGroups[$n1++] = ruleGroups::fromMap($item1);
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
