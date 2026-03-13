<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeBaseRuleChangeLogResponseBody;

use AlibabaCloud\Dara\Model;

class rules extends Model
{
    /**
     * @var string
     */
    public $cveId;

    /**
     * @var string
     */
    public $operation;

    /**
     * @var int
     */
    public $ruleId;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'cveId' => 'CveId',
        'operation' => 'Operation',
        'ruleId' => 'RuleId',
        'ruleName' => 'RuleName',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cveId) {
            $res['CveId'] = $this->cveId;
        }

        if (null !== $this->operation) {
            $res['Operation'] = $this->operation;
        }

        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['CveId'])) {
            $model->cveId = $map['CveId'];
        }

        if (isset($map['Operation'])) {
            $model->operation = $map['Operation'];
        }

        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
