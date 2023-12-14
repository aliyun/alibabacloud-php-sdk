<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class AddContainerPluginRuleRequest extends Model
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
     * @description The action that you want to specify for the rule. Valid values:
     *
     *   **1**: triggers alerts.
     *   **2**: blocks escapes.
     *
     * @example 1
     *
     * @var int
     */
    public $mode;

    /**
     * @description The name of the rule. The name must be 1 to 80 characters in length, and can contain letters, digits, hyphens (-), forward slashes (/), periods (.), and underscores (\_). The names of rules that are created for the same user must be unique.
     *
     * @example tyest111
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The ID of the rule template. You can call the ListSystemClientRules operation to query the ID of the rule template.
     *
     * @example 86863
     *
     * @var int
     */
    public $ruleTemplateId;

    /**
     * @description The type of the rule. Valid values:
     *
     *   **0**: custom rule
     *   **1**: system rule
     *
     * @example 0
     *
     * @var int
     */
    public $ruleType;

    /**
     * @description The check items that are enabled for the rule.
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
        'ruleName'       => 'RuleName',
        'ruleTemplateId' => 'RuleTemplateId',
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
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->ruleTemplateId) {
            $res['RuleTemplateId'] = $this->ruleTemplateId;
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
     * @return AddContainerPluginRuleRequest
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
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['RuleTemplateId'])) {
            $model->ruleTemplateId = $map['RuleTemplateId'];
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
