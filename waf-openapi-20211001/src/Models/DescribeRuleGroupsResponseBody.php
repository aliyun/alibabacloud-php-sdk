<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeRuleGroupsResponseBody\ruleGroups;
use AlibabaCloud\Tea\Model;

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
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
