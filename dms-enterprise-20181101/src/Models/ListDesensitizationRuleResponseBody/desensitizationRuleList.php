<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDesensitizationRuleResponseBody;

use AlibabaCloud\Tea\Model;

class desensitizationRuleList extends Model
{
    /**
     * @var string
     */
    public $funcParams;

    /**
     * @var string
     */
    public $funcSample;

    /**
     * @var string
     */
    public $functionType;

    /**
     * @var string
     */
    public $lastModifierId;

    /**
     * @var string
     */
    public $lastModifierName;

    /**
     * @var int
     */
    public $referenceCount;

    /**
     * @var string
     */
    public $ruleDesc;

    /**
     * @var int
     */
    public $ruleId;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var string
     */
    public $ruleType;
    protected $_name = [
        'funcParams'       => 'FuncParams',
        'funcSample'       => 'FuncSample',
        'functionType'     => 'FunctionType',
        'lastModifierId'   => 'LastModifierId',
        'lastModifierName' => 'LastModifierName',
        'referenceCount'   => 'ReferenceCount',
        'ruleDesc'         => 'RuleDesc',
        'ruleId'           => 'RuleId',
        'ruleName'         => 'RuleName',
        'ruleType'         => 'RuleType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->funcParams) {
            $res['FuncParams'] = $this->funcParams;
        }
        if (null !== $this->funcSample) {
            $res['FuncSample'] = $this->funcSample;
        }
        if (null !== $this->functionType) {
            $res['FunctionType'] = $this->functionType;
        }
        if (null !== $this->lastModifierId) {
            $res['LastModifierId'] = $this->lastModifierId;
        }
        if (null !== $this->lastModifierName) {
            $res['LastModifierName'] = $this->lastModifierName;
        }
        if (null !== $this->referenceCount) {
            $res['ReferenceCount'] = $this->referenceCount;
        }
        if (null !== $this->ruleDesc) {
            $res['RuleDesc'] = $this->ruleDesc;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return desensitizationRuleList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FuncParams'])) {
            $model->funcParams = $map['FuncParams'];
        }
        if (isset($map['FuncSample'])) {
            $model->funcSample = $map['FuncSample'];
        }
        if (isset($map['FunctionType'])) {
            $model->functionType = $map['FunctionType'];
        }
        if (isset($map['LastModifierId'])) {
            $model->lastModifierId = $map['LastModifierId'];
        }
        if (isset($map['LastModifierName'])) {
            $model->lastModifierName = $map['LastModifierName'];
        }
        if (isset($map['ReferenceCount'])) {
            $model->referenceCount = $map['ReferenceCount'];
        }
        if (isset($map['RuleDesc'])) {
            $model->ruleDesc = $map['RuleDesc'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }

        return $model;
    }
}
