<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\CreateForwardingRulesRequest\forwardingRules;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateForwardingRulesRequest\forwardingRules\ruleConditions\hostConfig;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateForwardingRulesRequest\forwardingRules\ruleConditions\pathConfig;

class ruleConditions extends Model
{
    /**
     * @var hostConfig
     */
    public $hostConfig;

    /**
     * @var pathConfig
     */
    public $pathConfig;

    /**
     * @var string
     */
    public $ruleConditionType;

    /**
     * @var string
     */
    public $ruleConditionValue;
    protected $_name = [
        'hostConfig' => 'HostConfig',
        'pathConfig' => 'PathConfig',
        'ruleConditionType' => 'RuleConditionType',
        'ruleConditionValue' => 'RuleConditionValue',
    ];

    public function validate()
    {
        if (null !== $this->hostConfig) {
            $this->hostConfig->validate();
        }
        if (null !== $this->pathConfig) {
            $this->pathConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hostConfig) {
            $res['HostConfig'] = null !== $this->hostConfig ? $this->hostConfig->toArray($noStream) : $this->hostConfig;
        }

        if (null !== $this->pathConfig) {
            $res['PathConfig'] = null !== $this->pathConfig ? $this->pathConfig->toArray($noStream) : $this->pathConfig;
        }

        if (null !== $this->ruleConditionType) {
            $res['RuleConditionType'] = $this->ruleConditionType;
        }

        if (null !== $this->ruleConditionValue) {
            $res['RuleConditionValue'] = $this->ruleConditionValue;
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
        if (isset($map['HostConfig'])) {
            $model->hostConfig = hostConfig::fromMap($map['HostConfig']);
        }

        if (isset($map['PathConfig'])) {
            $model->pathConfig = pathConfig::fromMap($map['PathConfig']);
        }

        if (isset($map['RuleConditionType'])) {
            $model->ruleConditionType = $map['RuleConditionType'];
        }

        if (isset($map['RuleConditionValue'])) {
            $model->ruleConditionValue = $map['RuleConditionValue'];
        }

        return $model;
    }
}
