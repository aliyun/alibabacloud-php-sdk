<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetAegisContainerPluginRuleResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The timestamp when the rule was created. Unit: milliseconds.
     *
     * @example 1671607025000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @description The timestamp when the rule was modified. Unit: milliseconds.
     *
     * @example 1671607025000
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @description The action mode of the rule. Valid values:
     *
     *   **0**: allows escape behavior.
     *   **1**: triggers alerts.
     *   **2**: blocks escape behavior.
     *
     * @example 1
     *
     * @var int
     */
    public $mode;

    /**
     * @description The description of the rule.
     *
     * @example autoTest
     *
     * @var string
     */
    public $ruleDescription;

    /**
     * @description The ID of the rule.
     *
     * @example 21**
     *
     * @var int
     */
    public $ruleId;

    /**
     * @description The name of the rule.
     *
     * @example auto_test_rule-EmzIXZ
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The template ID of the rule.
     *
     * @example 100**
     *
     * @var string
     */
    public $ruleTemplateId;

    /**
     * @description The template name of the rule.
     *
     * @example template01
     *
     * @var string
     */
    public $ruleTemplateName;

    /**
     * @description The rule items.
     *
     * @var string[]
     */
    public $selectedPolicy;

    /**
     * @description The ID of the switch.
     *
     * @example USER-CONTAINER-RULE-SWITCH-TYPE_***
     *
     * @var string
     */
    public $switchId;

    /**
     * @description The images that are added to the whitelist.
     *
     * @var string[]
     */
    public $whiteImages;
    protected $_name = [
        'gmtCreate'        => 'GmtCreate',
        'gmtModified'      => 'GmtModified',
        'mode'             => 'Mode',
        'ruleDescription'  => 'RuleDescription',
        'ruleId'           => 'RuleId',
        'ruleName'         => 'RuleName',
        'ruleTemplateId'   => 'RuleTemplateId',
        'ruleTemplateName' => 'RuleTemplateName',
        'selectedPolicy'   => 'SelectedPolicy',
        'switchId'         => 'SwitchId',
        'whiteImages'      => 'WhiteImages',
    ];

    public function validate()
    {
    }

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
     * @return data
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
