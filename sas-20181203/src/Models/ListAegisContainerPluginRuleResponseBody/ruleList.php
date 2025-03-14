<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListAegisContainerPluginRuleResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListAegisContainerPluginRuleResponseBody\ruleList\policies;
use AlibabaCloud\Tea\Model;

class ruleList extends Model
{
    /**
     * @description The time when the rule was created. Unit: milliseconds.
     *
     * @example 1676355025000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @description The time when the rule was modified. Unit: milliseconds.
     *
     * @example 1681985833000
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @description The action of the rule. Valid values:
     *
     *   **1**: Alert
     *   **2**: Block
     *
     * @example 1
     *
     * @var int
     */
    public $mode;

    /**
     * @description An array that consists of policies.
     *
     * @var policies[]
     */
    public $policies;

    /**
     * @description The description of the rule.
     *
     * @example system_call
     *
     * @var string
     */
    public $ruleDescription;

    /**
     * @description The ID of the rule.
     *
     * @example 30****
     *
     * @var int
     */
    public $ruleId;

    /**
     * @description The name of the rule.
     *
     * @example test-18****
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The ID of the rule template. The ListSystemClientRules operation returns the ID of a rule template.
     *
     * @example 868**
     *
     * @var string
     */
    public $ruleTemplateId;

    /**
     * @description The name of the rule template.
     *
     * @example system_call
     *
     * @var string
     */
    public $ruleTemplateName;

    /**
     * @description The fields in the value of the rule subtype.
     *
     * @var string[]
     */
    public $selectedPolicy;

    /**
     * @description The switch ID of the rule.
     *
     * @example USER-ENABLE-SWITCH-TYPE_****
     *
     * @var string
     */
    public $switchId;

    /**
     * @description The images that are added to the whitelist of the rule.
     *
     * @var string[]
     */
    public $whiteImages;
    protected $_name = [
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'mode' => 'Mode',
        'policies' => 'Policies',
        'ruleDescription' => 'RuleDescription',
        'ruleId' => 'RuleId',
        'ruleName' => 'RuleName',
        'ruleTemplateId' => 'RuleTemplateId',
        'ruleTemplateName' => 'RuleTemplateName',
        'selectedPolicy' => 'SelectedPolicy',
        'switchId' => 'SwitchId',
        'whiteImages' => 'WhiteImages',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->policies) {
            $res['Policies'] = [];
            if (null !== $this->policies && \is_array($this->policies)) {
                $n = 0;
                foreach ($this->policies as $item) {
                    $res['Policies'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ruleDescription) {
            $res['RuleDescription'] = $this->ruleDescription;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->ruleTemplateId) {
            $res['RuleTemplateId'] = $this->ruleTemplateId;
        }
        if (null !== $this->ruleTemplateName) {
            $res['RuleTemplateName'] = $this->ruleTemplateName;
        }
        if (null !== $this->selectedPolicy) {
            $res['SelectedPolicy'] = $this->selectedPolicy;
        }
        if (null !== $this->switchId) {
            $res['SwitchId'] = $this->switchId;
        }
        if (null !== $this->whiteImages) {
            $res['WhiteImages'] = $this->whiteImages;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ruleList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['Policies'])) {
            if (!empty($map['Policies'])) {
                $model->policies = [];
                $n = 0;
                foreach ($map['Policies'] as $item) {
                    $model->policies[$n++] = null !== $item ? policies::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RuleDescription'])) {
            $model->ruleDescription = $map['RuleDescription'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['RuleTemplateId'])) {
            $model->ruleTemplateId = $map['RuleTemplateId'];
        }
        if (isset($map['RuleTemplateName'])) {
            $model->ruleTemplateName = $map['RuleTemplateName'];
        }
        if (isset($map['SelectedPolicy'])) {
            if (!empty($map['SelectedPolicy'])) {
                $model->selectedPolicy = $map['SelectedPolicy'];
            }
        }
        if (isset($map['SwitchId'])) {
            $model->switchId = $map['SwitchId'];
        }
        if (isset($map['WhiteImages'])) {
            if (!empty($map['WhiteImages'])) {
                $model->whiteImages = $map['WhiteImages'];
            }
        }

        return $model;
    }
}
