<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class AddDesensitizationRuleRequest extends Model
{
    /**
     * @var string[][]
     */
    public $functionParams;

    /**
     * @var string
     */
    public $functionType;

    /**
     * @var string
     */
    public $ruleDescription;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var string
     */
    public $ruleType;

    /**
     * @var int
     */
    public $tid;
    protected $_name = [
        'functionParams'  => 'FunctionParams',
        'functionType'    => 'FunctionType',
        'ruleDescription' => 'RuleDescription',
        'ruleName'        => 'RuleName',
        'ruleType'        => 'RuleType',
        'tid'             => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->functionParams) {
            $res['FunctionParams'] = $this->functionParams;
        }
        if (null !== $this->functionType) {
            $res['FunctionType'] = $this->functionType;
        }
        if (null !== $this->ruleDescription) {
            $res['RuleDescription'] = $this->ruleDescription;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddDesensitizationRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FunctionParams'])) {
            if (!empty($map['FunctionParams'])) {
                $model->functionParams = $map['FunctionParams'];
            }
        }
        if (isset($map['FunctionType'])) {
            $model->functionType = $map['FunctionType'];
        }
        if (isset($map['RuleDescription'])) {
            $model->ruleDescription = $map['RuleDescription'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
