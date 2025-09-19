<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetAegisContainerPluginRuleResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $mode;

    /**
     * @var string
     */
    public $ruleDescription;

    /**
     * @var int
     */
    public $ruleId;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var string
     */
    public $ruleTemplateId;

    /**
     * @var string
     */
    public $ruleTemplateName;

    /**
     * @var string[]
     */
    public $selectedPolicy;

    /**
     * @var string
     */
    public $switchId;

    /**
     * @var string[]
     */
    public $whiteImages;
    protected $_name = [
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'mode' => 'Mode',
        'ruleDescription' => 'RuleDescription',
        'ruleId' => 'RuleId',
        'ruleName' => 'RuleName',
        'ruleTemplateId' => 'RuleTemplateId',
        'ruleTemplateName' => 'RuleTemplateName',
        'selectedPolicy' => 'SelectedPolicy',
        'switchId' => 'SwitchId',
        'whiteImages' => 'WhiteImages',
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
            if (\is_array($this->selectedPolicy)) {
                $res['SelectedPolicy'] = [];
                $n1 = 0;
                foreach ($this->selectedPolicy as $item1) {
                    $res['SelectedPolicy'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->switchId) {
            $res['SwitchId'] = $this->switchId;
        }

        if (null !== $this->whiteImages) {
            if (\is_array($this->whiteImages)) {
                $res['WhiteImages'] = [];
                $n1 = 0;
                foreach ($this->whiteImages as $item1) {
                    $res['WhiteImages'][$n1] = $item1;
                    ++$n1;
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
                $model->selectedPolicy = [];
                $n1 = 0;
                foreach ($map['SelectedPolicy'] as $item1) {
                    $model->selectedPolicy[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SwitchId'])) {
            $model->switchId = $map['SwitchId'];
        }

        if (isset($map['WhiteImages'])) {
            if (!empty($map['WhiteImages'])) {
                $model->whiteImages = [];
                $n1 = 0;
                foreach ($map['WhiteImages'] as $item1) {
                    $model->whiteImages[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
