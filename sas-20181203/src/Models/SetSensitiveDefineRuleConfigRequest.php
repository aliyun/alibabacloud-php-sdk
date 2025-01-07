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
     * @example [{\\"classKey\\": \\"password\\", \\"ruleList\\": [\\"huaweicloud_ak\\", \\"ak_leak\\"]}]
     *
     * @var string
     */
    public $config;

    /**
     * @var int
     */
    public $enableNewRule;

    /**
     * @var string
     */
    public $source;
    protected $_name = [
        'config'        => 'Config',
        'enableNewRule' => 'EnableNewRule',
        'source'        => 'Source',
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
        if (null !== $this->enableNewRule) {
            $res['EnableNewRule'] = $this->enableNewRule;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
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
        if (isset($map['EnableNewRule'])) {
            $model->enableNewRule = $map['EnableNewRule'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        return $model;
    }
}
