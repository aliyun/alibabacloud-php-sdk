<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeSchedulerRulesResponseBody;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeSchedulerRulesResponseBody\schedulerRules\param;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeSchedulerRulesResponseBody\schedulerRules\rules;
use AlibabaCloud\Tea\Model;

class schedulerRules extends Model
{
    /**
     * @example 4eru5229a843****.aliyunddos0001.com
     *
     * @var string
     */
    public $cname;

    /**
     * @var param
     */
    public $param;

    /**
     * @example doctest
     *
     * @var string
     */
    public $ruleName;

    /**
     * @var string
     */
    public $ruleType;

    /**
     * @var rules[]
     */
    public $rules;
    protected $_name = [
        'cname'    => 'Cname',
        'param'    => 'Param',
        'ruleName' => 'RuleName',
        'ruleType' => 'RuleType',
        'rules'    => 'Rules',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cname) {
            $res['Cname'] = $this->cname;
        }
        if (null !== $this->param) {
            $res['Param'] = null !== $this->param ? $this->param->toMap() : null;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return schedulerRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cname'])) {
            $model->cname = $map['Cname'];
        }
        if (isset($map['Param'])) {
            $model->param = param::fromMap($map['Param']);
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
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

        return $model;
    }
}
