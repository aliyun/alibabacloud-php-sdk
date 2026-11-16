<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20190910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeRulesResponseBody\rules;

class DescribeRulesResponseBody extends Model
{
    /**
     * @var int
     */
    public $isSubscribe;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $ruleGroupName;

    /**
     * @var string
     */
    public $ruleGroupTemplateId;

    /**
     * @var string
     */
    public $ruleGroupTemplateName;

    /**
     * @var rules[]
     */
    public $rules;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'isSubscribe' => 'IsSubscribe',
        'requestId' => 'RequestId',
        'ruleGroupName' => 'RuleGroupName',
        'ruleGroupTemplateId' => 'RuleGroupTemplateId',
        'ruleGroupTemplateName' => 'RuleGroupTemplateName',
        'rules' => 'Rules',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->rules)) {
            Model::validateArray($this->rules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isSubscribe) {
            $res['IsSubscribe'] = $this->isSubscribe;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->ruleGroupName) {
            $res['RuleGroupName'] = $this->ruleGroupName;
        }

        if (null !== $this->ruleGroupTemplateId) {
            $res['RuleGroupTemplateId'] = $this->ruleGroupTemplateId;
        }

        if (null !== $this->ruleGroupTemplateName) {
            $res['RuleGroupTemplateName'] = $this->ruleGroupTemplateName;
        }

        if (null !== $this->rules) {
            if (\is_array($this->rules)) {
                $res['Rules'] = [];
                $n1 = 0;
                foreach ($this->rules as $item1) {
                    $res['Rules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['IsSubscribe'])) {
            $model->isSubscribe = $map['IsSubscribe'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RuleGroupName'])) {
            $model->ruleGroupName = $map['RuleGroupName'];
        }

        if (isset($map['RuleGroupTemplateId'])) {
            $model->ruleGroupTemplateId = $map['RuleGroupTemplateId'];
        }

        if (isset($map['RuleGroupTemplateName'])) {
            $model->ruleGroupTemplateName = $map['RuleGroupTemplateName'];
        }

        if (isset($map['Rules'])) {
            if (!empty($map['Rules'])) {
                $model->rules = [];
                $n1 = 0;
                foreach ($map['Rules'] as $item1) {
                    $model->rules[$n1] = rules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
