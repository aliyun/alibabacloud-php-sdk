<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class ModifyMaskingRulesRequest extends Model
{
    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $defaultAlgo;

    /**
     * @var string
     */
    public $enable;

    /**
     * @var string
     */
    public $interfaceVersion;

    /**
     * @var string
     */
    public $maskingAlgo;

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

    /**
     * @var string
     */
    public $ruleVersion;
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'defaultAlgo' => 'DefaultAlgo',
        'enable' => 'Enable',
        'interfaceVersion' => 'InterfaceVersion',
        'maskingAlgo' => 'MaskingAlgo',
        'ruleConfig' => 'RuleConfig',
        'ruleName' => 'RuleName',
        'ruleNameList' => 'RuleNameList',
        'ruleVersion' => 'RuleVersion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->defaultAlgo) {
            $res['DefaultAlgo'] = $this->defaultAlgo;
        }

        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }

        if (null !== $this->interfaceVersion) {
            $res['InterfaceVersion'] = $this->interfaceVersion;
        }

        if (null !== $this->maskingAlgo) {
            $res['MaskingAlgo'] = $this->maskingAlgo;
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

        if (null !== $this->ruleVersion) {
            $res['RuleVersion'] = $this->ruleVersion;
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
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['DefaultAlgo'])) {
            $model->defaultAlgo = $map['DefaultAlgo'];
        }

        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }

        if (isset($map['InterfaceVersion'])) {
            $model->interfaceVersion = $map['InterfaceVersion'];
        }

        if (isset($map['MaskingAlgo'])) {
            $model->maskingAlgo = $map['MaskingAlgo'];
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

        if (isset($map['RuleVersion'])) {
            $model->ruleVersion = $map['RuleVersion'];
        }

        return $model;
    }
}
