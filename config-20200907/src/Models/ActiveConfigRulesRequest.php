<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class ActiveConfigRulesRequest extends Model
{
    /**
     * @description The rule IDs. Separate multiple rule IDs with commas (,). You can specify a maximum of 20 rule IDs at a time.
     *
     * @example cr-2da35180a8d1008e****,cr-2da35180a8d1008e****
     *
     * @var string
     */
    public $configRuleIds;
    protected $_name = [
        'configRuleIds' => 'ConfigRuleIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configRuleIds) {
            $res['ConfigRuleIds'] = $this->configRuleIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ActiveConfigRulesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigRuleIds'])) {
            $model->configRuleIds = $map['ConfigRuleIds'];
        }

        return $model;
    }
}
