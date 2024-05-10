<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifyContainerPluginRuleRequest extends Model
{
    /**
     * @description The language of the content within the request and response. Default value: **zh**. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The action mode of the rule. Valid values:
     *
     *   **1**: alerts
     *   **2**: block
     *
     * @example 1
     *
     * @var int
     */
    public $mode;

    /**
     * @description The ID of the rule.
     *
     * This parameter is required.
     * @example 100012
     *
     * @var int
     */
    public $ruleId;

    /**
     * @description The name of the rule.
     *
     * @example test
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The type of the rule. Valid values:
     *
     *   **0**: user-defined rule
     *   **1**: built-in rule
     *
     * @example 0
     *
     * @var int
     */
    public $ruleType;

    /**
     * @description The rule items.
     *
     * @var string[]
     */
    public $selectedPolicy;

    /**
     * @description The images that are added to the whitelist.
     *
     * @var string[]
     */
    public $whiteImages;
    protected $_name = [
        'lang'           => 'Lang',
        'mode'           => 'Mode',
        'ruleId'         => 'RuleId',
        'ruleName'       => 'RuleName',
        'ruleType'       => 'RuleType',
        'selectedPolicy' => 'SelectedPolicy',
        'whiteImages'    => 'WhiteImages',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }
        if (null !== $this->selectedPolicy) {
            $res['SelectedPolicy'] = $this->selectedPolicy;
        }
        if (null !== $this->whiteImages) {
            $res['WhiteImages'] = $this->whiteImages;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyContainerPluginRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }
        if (isset($map['SelectedPolicy'])) {
            if (!empty($map['SelectedPolicy'])) {
                $model->selectedPolicy = $map['SelectedPolicy'];
            }
        }
        if (isset($map['WhiteImages'])) {
            if (!empty($map['WhiteImages'])) {
                $model->whiteImages = $map['WhiteImages'];
            }
        }

        return $model;
    }
}
