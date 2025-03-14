<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class SetBuildRiskDefineRuleConfigRequest extends Model
{
    /**
     * @description The configuration item for scanning image build command risks. Valid values:
     *
     *   **classKey**: Set the value to a valid value of the ClassKey parameter in RuleTree.
     *   **ruleList**: Set the value to a valid value of the RuleKey parameter in RuleList.
     *
     * >  You can call the [GetBuildRiskDefineRuleConfig](~~GetBuildRiskDefineRuleConfig~~) operation to query the valid values.
     *
     * @example [
     * {
     * "classKey": "other",
     * "ruleList": [
     * "add",
     * "apk"
     * ]
     * }
     * ]
     *
     * @var string
     */
    public $config;
    protected $_name = [
        'config' => 'Config',
    ];

    public function validate() {}

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
     * @return SetBuildRiskDefineRuleConfigRequest
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
