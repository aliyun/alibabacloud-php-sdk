<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class StartRemediationRequest extends Model
{
    /**
     * @description The ID of the rule.
     *
     * You can call the [ListConfigRules](~~169607~~) operation to obtain the rule ID.
     * @example cr-8a973ac2e2be00a2****
     *
     * @var string
     */
    public $configRuleId;
    protected $_name = [
        'configRuleId' => 'ConfigRuleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configRuleId) {
            $res['ConfigRuleId'] = $this->configRuleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartRemediationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigRuleId'])) {
            $model->configRuleId = $map['ConfigRuleId'];
        }

        return $model;
    }
}
