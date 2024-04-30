<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeMaskingRulesResponseBody\data;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeMaskingRulesResponseBody\data\rules\ruleConfig;
use AlibabaCloud\Tea\Model;

class rules extends Model
{
    /**
     * @var string
     */
    public $defaultAlgo;

    /**
     * @var string
     */
    public $enabled;

    /**
     * @var string
     */
    public $maskingAlgo;

    /**
     * @var ruleConfig
     */
    public $ruleConfig;

    /**
     * @var string
     */
    public $ruleName;
    protected $_name = [
        'defaultAlgo' => 'DefaultAlgo',
        'enabled'     => 'Enabled',
        'maskingAlgo' => 'MaskingAlgo',
        'ruleConfig'  => 'RuleConfig',
        'ruleName'    => 'RuleName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->defaultAlgo) {
            $res['DefaultAlgo'] = $this->defaultAlgo;
        }
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->maskingAlgo) {
            $res['MaskingAlgo'] = $this->maskingAlgo;
        }
        if (null !== $this->ruleConfig) {
            $res['RuleConfig'] = null !== $this->ruleConfig ? $this->ruleConfig->toMap() : null;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
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
        if (isset($map['DefaultAlgo'])) {
            $model->defaultAlgo = $map['DefaultAlgo'];
        }
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['MaskingAlgo'])) {
            $model->maskingAlgo = $map['MaskingAlgo'];
        }
        if (isset($map['RuleConfig'])) {
            $model->ruleConfig = ruleConfig::fromMap($map['RuleConfig']);
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        return $model;
    }
}
