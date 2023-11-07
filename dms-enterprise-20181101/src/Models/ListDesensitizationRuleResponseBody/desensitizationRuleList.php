<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDesensitizationRuleResponseBody;

use AlibabaCloud\Tea\Model;

class desensitizationRuleList extends Model
{
    /**
     * @description The parameter.
     *
     * @example {paramName: salt, paramValue: 1}
     *
     * @var string
     */
    public $funcParams;

    /**
     * @description The example.
     *
     * @example [{paramName: testStr, paramValue: 1}]
     *
     * @var string
     */
    public $funcSample;

    /**
     * @description The algorithm type.
     *
     * @example MD5
     *
     * @var string
     */
    public $functionType;

    /**
     * @description The ID of the user who last modified the masking rule.
     *
     * @example 2
     *
     * @var string
     */
    public $lastModifierId;

    /**
     * @description The name of the user who last modified the masking rule.
     *
     * @example test user
     *
     * @var string
     */
    public $lastModifierName;

    /**
     * @description The number of times that the masking was used.
     *
     * @example 1
     *
     * @var int
     */
    public $referenceCount;

    /**
     * @description The description of the rule.
     *
     * @example hash desensitization algorithm
     *
     * @var string
     */
    public $ruleDesc;

    /**
     * @description The ID of the masking rule.
     *
     * @example 23
     *
     * @var int
     */
    public $ruleId;

    /**
     * @description The name of the masking rule.
     *
     * @example default desensitization rule test
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The algorithm used for masking.
     *
     * @example HASH
     *
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
