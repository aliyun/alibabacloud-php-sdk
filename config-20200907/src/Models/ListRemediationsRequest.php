<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class ListRemediationsRequest extends Model
{
    /**
     * @description The ID of the rule. If you want to specify multiple IDs, separate them with commas (,).
     *
     * You can call the [ListConfigRules](~~169607~~) operation to obtain the rule ID.
     * @example cr-6b7c626622af00b4****
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
     * @return ListRemediationsRequest
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
