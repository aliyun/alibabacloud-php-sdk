<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class SetSensitiveDefineRuleConfigRequest extends Model
{
    /**
     * @description The configurations of the custom check rule. The value is in the JSON format. Valid values of keys:
     *
     *   **classKey**: the category keyword of the check rule.
     *   **ruleList**: the keyword of the check rule.
     *
     * @example [{\"classKey\": \"password\", \"ruleList\": [\"huaweicloud_ak\", \"ak_leak\"]}]
     *
     * @var string
     */
    public $config;
    protected $_name = [
        'config' => 'Config',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetSensitiveDefineRuleConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }

        return $model;
    }
}
