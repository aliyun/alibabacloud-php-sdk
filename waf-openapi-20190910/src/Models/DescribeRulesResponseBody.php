<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20190910\Models;

use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeRulesResponseBody\rules;
use AlibabaCloud\Tea\Model;

class DescribeRulesResponseBody extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $isSubscribe;

    /**
     * @example D7861F61-5B61-46CE-A47C-*
     *
     * @var string
     */
    public $requestId;

    /**
     * @example test111
     *
     * @var string
     */
    public $ruleGroupName;

    /**
     * @example 1012
     *
     * @var string
     */
    public $ruleGroupTemplateId;

    /**
     * @example rule_group_test
     *
     * @var string
     */
    public $ruleGroupTemplateName;

    /**
     * @var rules[]
     */
    public $rules;

    /**
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'isSubscribe'           => 'IsSubscribe',
        'requestId'             => 'RequestId',
        'ruleGroupName'         => 'RuleGroupName',
        'ruleGroupTemplateId'   => 'RuleGroupTemplateId',
        'ruleGroupTemplateName' => 'RuleGroupTemplateName',
        'rules'                 => 'Rules',
        'totalCount'            => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['Rules'] = [];
            if (null !== $this->rules && \is_array($this->rules)) {
                $n = 0;
                foreach ($this->rules as $item) {
                    $res['Rules'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeRulesResponseBody
     */
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
                $n            = 0;
                foreach ($map['Rules'] as $item) {
                    $model->rules[$n++] = null !== $item ? rules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
