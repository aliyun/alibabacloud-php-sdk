<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCheckFixDetailsResponseBody\checkFixDetails;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCheckFixDetailsResponseBody\checkFixDetails\rules\paramList;
use AlibabaCloud\Tea\Model;

class rules extends Model
{
    /**
     * @description The ID of the risk item.
     *
     * @example 58
     *
     * @var int
     */
    public $checkId;

    /**
     * @description The default value of the rule.
     *
     * @example 1
     *
     * @var int
     */
    public $defaultValue;

    /**
     * @description Indicates whether the rule is optional. Valid values:
     *
     *   **1**: yes
     *   **0**: no
     *
     * @example 1
     *
     * @var int
     */
    public $optional;

    /**
     * @description An array that consists of the rule parameters.
     *
     * @var paramList[]
     */
    public $paramList;

    /**
     * @description The description of the rule.
     *
     * @example (/etc/system-auth)Force users not to reuse the number of recently used passwords between 5 and 24
     *
     * @var string
     */
    public $ruleDesc;

    /**
     * @description The ID of the rule.
     *
     * @example pwd_reuse.system_auth
     *
     * @var string
     */
    public $ruleId;

    /**
     * @description The specified value of the rule parameter.
     *
     * @example 5
     *
     * @var int
     */
    public $value;

    /**
     * @description The name of the variable.
     *
     * @example open
     *
     * @var string
     */
    public $varName;
    protected $_name = [
        'checkId'      => 'CheckId',
        'defaultValue' => 'DefaultValue',
        'optional'     => 'Optional',
        'paramList'    => 'ParamList',
        'ruleDesc'     => 'RuleDesc',
        'ruleId'       => 'RuleId',
        'value'        => 'Value',
        'varName'      => 'VarName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkId) {
            $res['CheckId'] = $this->checkId;
        }
        if (null !== $this->defaultValue) {
            $res['DefaultValue'] = $this->defaultValue;
        }
        if (null !== $this->optional) {
            $res['Optional'] = $this->optional;
        }
        if (null !== $this->paramList) {
            $res['ParamList'] = [];
            if (null !== $this->paramList && \is_array($this->paramList)) {
                $n = 0;
                foreach ($this->paramList as $item) {
                    $res['ParamList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ruleDesc) {
            $res['RuleDesc'] = $this->ruleDesc;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->varName) {
            $res['VarName'] = $this->varName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckId'])) {
            $model->checkId = $map['CheckId'];
        }
        if (isset($map['DefaultValue'])) {
            $model->defaultValue = $map['DefaultValue'];
        }
        if (isset($map['Optional'])) {
            $model->optional = $map['Optional'];
        }
        if (isset($map['ParamList'])) {
            if (!empty($map['ParamList'])) {
                $model->paramList = [];
                $n                = 0;
                foreach ($map['ParamList'] as $item) {
                    $model->paramList[$n++] = null !== $item ? paramList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RuleDesc'])) {
            $model->ruleDesc = $map['RuleDesc'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['VarName'])) {
            $model->varName = $map['VarName'];
        }

        return $model;
    }
}
