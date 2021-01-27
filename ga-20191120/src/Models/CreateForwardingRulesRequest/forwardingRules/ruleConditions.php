<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\CreateForwardingRulesRequest\forwardingRules;

use AlibabaCloud\SDK\Ga\V20191120\Models\CreateForwardingRulesRequest\forwardingRules\ruleConditions\hostConfig;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateForwardingRulesRequest\forwardingRules\ruleConditions\pathConfig;
use AlibabaCloud\Tea\Model;

class ruleConditions extends Model
{
    /**
     * @var string
     */
    public $ruleConditionType;

    /**
     * @var pathConfig
     */
    public $pathConfig;

    /**
     * @var hostConfig
     */
    public $hostConfig;
    protected $_name = [
        'ruleConditionType' => 'RuleConditionType',
        'pathConfig'        => 'PathConfig',
        'hostConfig'        => 'HostConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ruleConditionType) {
            $res['RuleConditionType'] = $this->ruleConditionType;
        }
        if (null !== $this->pathConfig) {
            $res['PathConfig'] = null !== $this->pathConfig ? $this->pathConfig->toMap() : null;
        }
        if (null !== $this->hostConfig) {
            $res['HostConfig'] = null !== $this->hostConfig ? $this->hostConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ruleConditions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RuleConditionType'])) {
            $model->ruleConditionType = $map['RuleConditionType'];
        }
        if (isset($map['PathConfig'])) {
            $model->pathConfig = pathConfig::fromMap($map['PathConfig']);
        }
        if (isset($map['HostConfig'])) {
            $model->hostConfig = hostConfig::fromMap($map['HostConfig']);
        }

        return $model;
    }
}
