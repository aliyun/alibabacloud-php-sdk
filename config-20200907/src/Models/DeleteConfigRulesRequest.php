<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class DeleteConfigRulesRequest extends Model
{
    /**
     * @description The rule IDs. Separate multiple rule IDs with commas (,).
     *
     * For more information about how to obtain the ID of a rule, see ListConfigRules.
     * @example cr-9908626622af0035****
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
     * @return DeleteConfigRulesRequest
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
