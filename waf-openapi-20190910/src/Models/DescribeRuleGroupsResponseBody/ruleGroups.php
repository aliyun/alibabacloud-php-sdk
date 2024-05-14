<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeRuleGroupsResponseBody;

use AlibabaCloud\Tea\Model;

class ruleGroups extends Model
{
    /**
     * @example desc
     *
     * @var string
     */
    public $desc;

    /**
     * @var string[]
     */
    public $domainList;

    /**
     * @example rule_group_test
     *
     * @var string
     */
    public $name;

    /**
     * @example 116562
     *
     * @var int
     */
    public $policyId;

    /**
     * @example 1
     *
     * @var int
     */
    public $ruleCnt;

    /**
     * @example rule_group_test
     *
     * @var string
     */
    public $ruleGroupTemplateName;

    /**
     * @example 1711445265
     *
     * @var int
     */
    public $ruleGroupUpdateTime;

    /**
     * @example 1102
     *
     * @var int
     */
    public $templatePolicyId;

    /**
     * @example 1
     *
     * @var int
     */
    public $type;

    /**
     * @example 11
     *
     * @var int
     */
    public $wafVersion;
    protected $_name = [
        'desc'                  => 'Desc',
        'domainList'            => 'DomainList',
        'name'                  => 'Name',
        'policyId'              => 'PolicyId',
        'ruleCnt'               => 'RuleCnt',
        'ruleGroupTemplateName' => 'RuleGroupTemplateName',
        'ruleGroupUpdateTime'   => 'RuleGroupUpdateTime',
        'templatePolicyId'      => 'TemplatePolicyId',
        'type'                  => 'Type',
        'wafVersion'            => 'WafVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }
        if (null !== $this->domainList) {
            $res['DomainList'] = $this->domainList;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }
        if (null !== $this->ruleCnt) {
            $res['RuleCnt'] = $this->ruleCnt;
        }
        if (null !== $this->ruleGroupTemplateName) {
            $res['RuleGroupTemplateName'] = $this->ruleGroupTemplateName;
        }
        if (null !== $this->ruleGroupUpdateTime) {
            $res['RuleGroupUpdateTime'] = $this->ruleGroupUpdateTime;
        }
        if (null !== $this->templatePolicyId) {
            $res['TemplatePolicyId'] = $this->templatePolicyId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->wafVersion) {
            $res['WafVersion'] = $this->wafVersion;
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
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }
        if (isset($map['DomainList'])) {
            if (!empty($map['DomainList'])) {
                $model->domainList = $map['DomainList'];
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }
        if (isset($map['RuleCnt'])) {
            $model->ruleCnt = $map['RuleCnt'];
        }
        if (isset($map['RuleGroupTemplateName'])) {
            $model->ruleGroupTemplateName = $map['RuleGroupTemplateName'];
        }
        if (isset($map['RuleGroupUpdateTime'])) {
            $model->ruleGroupUpdateTime = $map['RuleGroupUpdateTime'];
        }
        if (isset($map['TemplatePolicyId'])) {
            $model->templatePolicyId = $map['TemplatePolicyId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['WafVersion'])) {
            $model->wafVersion = $map['WafVersion'];
        }

        return $model;
    }
}
