<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class AddDesensitizationRuleRequest extends Model
{
    /**
     * @description The parameters of the algorithm.
     *
     * @var string[][]
     */
    public $functionParams;

    /**
     * @description The type of the masking algorithm.
     *
     * Valid values:
     *
     *   FIX_POS : masks characters in the specified position.
     *   DATE_ROUNDING: rounds the date.
     *   PLAINTEXT: does not mask data.
     *   SHA1: masks characters by using the secure hash algorithm 1 (SHA-1)
     *   HMAC: masks characters by using the hash-based message authentication code (HMAC).
     *   STRING_TRANSFORM: shift characters.
     *   NUMBER_ROUNDING: rounds numbers.
     *   AES: masks characters by using the advanced encryption standard (AES) algorithm.
     *   SHA256: masks characters by using SHA-256 algorithm.
     *   DES: masks characters by using the data encryption standard (DES) algorithm.
     *   MAP_REPLACE: masks the mapped data.
     *   FIX_CHAR: masks fixed characters.
     *   DEFAULT: masks all characters.
     *   RANDOM_REPLACE: randomly replaces characters.
     *   MD5: masks characters by using the MD5 algorithm.
     *
     * @example MD5
     *
     * @var string
     */
    public $functionType;

    /**
     * @description The description of the rule.
     *
     * @example hash algorithm
     *
     * @var string
     */
    public $ruleDescription;

    /**
     * @description The name of the rule.
     *
     * @example desensitization algorithm test
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The masking algorithm.
     *
     * Valid values:
     *
     *   PLAINTEXT
     *
     * <!-- -->
     *
     *   TRANSFORM
     *
     * <!-- -->
     *
     *   ENCRYPT
     *
     * <!-- -->
     *
     *   REPLACE
     *
     * <!-- -->
     *
     *   HASH
     *
     * <!-- -->
     *
     *   MASK
     *
     * <!-- -->
     * @example HASH
     *
     * @var string
     */
    public $ruleType;

    /**
     * @description The tenant ID.
     *
     * >  To view the ID of the tenant, move the pointer over the profile picture in the upper-right corner of the Data Management (DMS) console. For more information, see the [View information about the current tenant](~~181330~~) section of the "Manage DMS tenants" topic.
     * @example 3***
     *
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
