<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class ModifyMaskingRulesRequest extends Model
{
    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $enable;

    /**
     * @var string
     */
    public $ruleConfig;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var string
     */
    public $ruleNameList;
    protected $_name = [
        'DBClusterId'  => 'DBClusterId',
        'enable'       => 'Enable',
        'ruleConfig'   => 'RuleConfig',
        'ruleName'     => 'RuleName',
        'ruleNameList' => 'RuleNameList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->ruleConfig) {
            $res['RuleConfig'] = $this->ruleConfig;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->ruleNameList) {
            $res['RuleNameList'] = $this->ruleNameList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyMaskingRulesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['RuleConfig'])) {
            $model->ruleConfig = $map['RuleConfig'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['RuleNameList'])) {
            $model->ruleNameList = $map['RuleNameList'];
        }

        return $model;
    }
}
