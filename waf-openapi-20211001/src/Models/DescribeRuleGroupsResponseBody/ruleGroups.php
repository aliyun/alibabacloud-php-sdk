<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeRuleGroupsResponseBody;

use AlibabaCloud\Tea\Model;

class ruleGroups extends Model
{
    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $ruleGroupId;

    /**
     * @var string
     */
    public $ruleGroupName;

    /**
     * @var int
     */
    public $ruleTotalCount;
    protected $_name = [
        'gmtModified'    => 'GmtModified',
        'ruleGroupId'    => 'RuleGroupId',
        'ruleGroupName'  => 'RuleGroupName',
        'ruleTotalCount' => 'RuleTotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->ruleGroupId) {
            $res['RuleGroupId'] = $this->ruleGroupId;
        }
        if (null !== $this->ruleGroupName) {
            $res['RuleGroupName'] = $this->ruleGroupName;
        }
        if (null !== $this->ruleTotalCount) {
            $res['RuleTotalCount'] = $this->ruleTotalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ruleGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['RuleGroupId'])) {
            $model->ruleGroupId = $map['RuleGroupId'];
        }
        if (isset($map['RuleGroupName'])) {
            $model->ruleGroupName = $map['RuleGroupName'];
        }
        if (isset($map['RuleTotalCount'])) {
            $model->ruleTotalCount = $map['RuleTotalCount'];
        }

        return $model;
    }
}
