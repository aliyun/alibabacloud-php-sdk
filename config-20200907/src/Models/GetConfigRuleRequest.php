<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class GetConfigRuleRequest extends Model
{
    /**
     * @description The ID of the rule.
     *
     * For more information about how to query the ID of a rule, see [ListConfigRules](~~169607~~).
     * @example cr-7f7d626622af0041****
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
     * @return GetConfigRuleRequest
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
