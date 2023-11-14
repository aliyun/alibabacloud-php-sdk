<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class AddContainerPluginRuleRequest extends Model
{
    /**
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @example 1
     *
     * @var int
     */
    public $mode;

    /**
     * @example tyest111
     *
     * @var string
     */
    public $ruleName;

    /**
     * @example 86863
     *
     * @var int
     */
    public $ruleTemplateId;

    /**
     * @example 0
     *
     * @var int
     */
    public $ruleType;

    /**
     * @var string[]
     */
    public $selectedPolicy;

    /**
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
