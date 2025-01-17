<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class AddContainerPluginRuleRequest extends Model
{
    /**
     * @var string
     */
    public $lang;
    /**
     * @var int
     */
    public $mode;
    /**
     * @var string
     */
    public $ruleName;
    /**
     * @var int
     */
    public $ruleTemplateId;
    /**
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
        if (\is_array($this->selectedPolicy)) {
            Model::validateArray($this->selectedPolicy);
        }
        if (\is_array($this->whiteImages)) {
            Model::validateArray($this->whiteImages);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->selectedPolicy)) {
                $res['SelectedPolicy'] = [];
                $n1                    = 0;
                foreach ($this->selectedPolicy as $item1) {
                    $res['SelectedPolicy'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->whiteImages) {
            if (\is_array($this->whiteImages)) {
                $res['WhiteImages'] = [];
                $n1                 = 0;
                foreach ($this->whiteImages as $item1) {
                    $res['WhiteImages'][$n1++] = $item1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->selectedPolicy = [];
                $n1                    = 0;
                foreach ($map['SelectedPolicy'] as $item1) {
                    $model->selectedPolicy[$n1++] = $item1;
                }
            }
        }

        if (isset($map['WhiteImages'])) {
            if (!empty($map['WhiteImages'])) {
                $model->whiteImages = [];
                $n1                 = 0;
                foreach ($map['WhiteImages'] as $item1) {
                    $model->whiteImages[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
