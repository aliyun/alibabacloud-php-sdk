<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeRuleGroupsResponseBody;

use AlibabaCloud\Dara\Model;

class ruleGroups extends Model
{
    /**
     * @var string
     */
    public $desc;

    /**
     * @var string[]
     */
    public $domainList;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $policyId;

    /**
     * @var int
     */
    public $ruleCnt;

    /**
     * @var string
     */
    public $ruleGroupTemplateName;

    /**
     * @var int
     */
    public $ruleGroupUpdateTime;

    /**
     * @var int
     */
    public $templatePolicyId;

    /**
     * @var int
     */
    public $type;

    /**
     * @var int
     */
    public $wafVersion;
    protected $_name = [
        'desc' => 'Desc',
        'domainList' => 'DomainList',
        'name' => 'Name',
        'policyId' => 'PolicyId',
        'ruleCnt' => 'RuleCnt',
        'ruleGroupTemplateName' => 'RuleGroupTemplateName',
        'ruleGroupUpdateTime' => 'RuleGroupUpdateTime',
        'templatePolicyId' => 'TemplatePolicyId',
        'type' => 'Type',
        'wafVersion' => 'WafVersion',
    ];

    public function validate()
    {
        if (\is_array($this->domainList)) {
            Model::validateArray($this->domainList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }

        if (null !== $this->domainList) {
            if (\is_array($this->domainList)) {
                $res['DomainList'] = [];
                $n1 = 0;
                foreach ($this->domainList as $item1) {
                    $res['DomainList'][$n1] = $item1;
                    ++$n1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }

        if (isset($map['DomainList'])) {
            if (!empty($map['DomainList'])) {
                $model->domainList = [];
                $n1 = 0;
                foreach ($map['DomainList'] as $item1) {
                    $model->domainList[$n1] = $item1;
                    ++$n1;
                }
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
