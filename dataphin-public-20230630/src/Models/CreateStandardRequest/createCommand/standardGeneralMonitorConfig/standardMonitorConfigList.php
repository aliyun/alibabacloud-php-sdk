<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateStandardRequest\createCommand\standardGeneralMonitorConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateStandardRequest\createCommand\standardGeneralMonitorConfig\standardMonitorConfigList\attributeMonitorConfig;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateStandardRequest\createCommand\standardGeneralMonitorConfig\standardMonitorConfigList\qualityRuleTemplate;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateStandardRequest\createCommand\standardGeneralMonitorConfig\standardMonitorConfigList\ruleConfigList;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateStandardRequest\createCommand\standardGeneralMonitorConfig\standardMonitorConfigList\ruleValidateConfigList;

class standardMonitorConfigList extends Model
{
    /**
     * @var int
     */
    public $attributeId;

    /**
     * @var attributeMonitorConfig
     */
    public $attributeMonitorConfig;

    /**
     * @var string
     */
    public $attributeName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $monitorFrom;

    /**
     * @var qualityRuleTemplate
     */
    public $qualityRuleTemplate;

    /**
     * @var ruleConfigList[]
     */
    public $ruleConfigList;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var string
     */
    public $ruleSubType;

    /**
     * @var ruleValidateConfigList[]
     */
    public $ruleValidateConfigList;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'attributeId' => 'AttributeId',
        'attributeMonitorConfig' => 'AttributeMonitorConfig',
        'attributeName' => 'AttributeName',
        'description' => 'Description',
        'id' => 'Id',
        'monitorFrom' => 'MonitorFrom',
        'qualityRuleTemplate' => 'QualityRuleTemplate',
        'ruleConfigList' => 'RuleConfigList',
        'ruleName' => 'RuleName',
        'ruleSubType' => 'RuleSubType',
        'ruleValidateConfigList' => 'RuleValidateConfigList',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (null !== $this->attributeMonitorConfig) {
            $this->attributeMonitorConfig->validate();
        }
        if (null !== $this->qualityRuleTemplate) {
            $this->qualityRuleTemplate->validate();
        }
        if (\is_array($this->ruleConfigList)) {
            Model::validateArray($this->ruleConfigList);
        }
        if (\is_array($this->ruleValidateConfigList)) {
            Model::validateArray($this->ruleValidateConfigList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attributeId) {
            $res['AttributeId'] = $this->attributeId;
        }

        if (null !== $this->attributeMonitorConfig) {
            $res['AttributeMonitorConfig'] = null !== $this->attributeMonitorConfig ? $this->attributeMonitorConfig->toArray($noStream) : $this->attributeMonitorConfig;
        }

        if (null !== $this->attributeName) {
            $res['AttributeName'] = $this->attributeName;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->monitorFrom) {
            $res['MonitorFrom'] = $this->monitorFrom;
        }

        if (null !== $this->qualityRuleTemplate) {
            $res['QualityRuleTemplate'] = null !== $this->qualityRuleTemplate ? $this->qualityRuleTemplate->toArray($noStream) : $this->qualityRuleTemplate;
        }

        if (null !== $this->ruleConfigList) {
            if (\is_array($this->ruleConfigList)) {
                $res['RuleConfigList'] = [];
                $n1 = 0;
                foreach ($this->ruleConfigList as $item1) {
                    $res['RuleConfigList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }

        if (null !== $this->ruleSubType) {
            $res['RuleSubType'] = $this->ruleSubType;
        }

        if (null !== $this->ruleValidateConfigList) {
            if (\is_array($this->ruleValidateConfigList)) {
                $res['RuleValidateConfigList'] = [];
                $n1 = 0;
                foreach ($this->ruleValidateConfigList as $item1) {
                    $res['RuleValidateConfigList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['AttributeId'])) {
            $model->attributeId = $map['AttributeId'];
        }

        if (isset($map['AttributeMonitorConfig'])) {
            $model->attributeMonitorConfig = attributeMonitorConfig::fromMap($map['AttributeMonitorConfig']);
        }

        if (isset($map['AttributeName'])) {
            $model->attributeName = $map['AttributeName'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['MonitorFrom'])) {
            $model->monitorFrom = $map['MonitorFrom'];
        }

        if (isset($map['QualityRuleTemplate'])) {
            $model->qualityRuleTemplate = qualityRuleTemplate::fromMap($map['QualityRuleTemplate']);
        }

        if (isset($map['RuleConfigList'])) {
            if (!empty($map['RuleConfigList'])) {
                $model->ruleConfigList = [];
                $n1 = 0;
                foreach ($map['RuleConfigList'] as $item1) {
                    $model->ruleConfigList[$n1] = ruleConfigList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        if (isset($map['RuleSubType'])) {
            $model->ruleSubType = $map['RuleSubType'];
        }

        if (isset($map['RuleValidateConfigList'])) {
            if (!empty($map['RuleValidateConfigList'])) {
                $model->ruleValidateConfigList = [];
                $n1 = 0;
                foreach ($map['RuleValidateConfigList'] as $item1) {
                    $model->ruleValidateConfigList[$n1] = ruleValidateConfigList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
