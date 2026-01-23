<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListQualityRulesResponseBody\pageResult;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListQualityRulesResponseBody\pageResult\qualityRuleList\attributeWithValueList;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListQualityRulesResponseBody\pageResult\qualityRuleList\formPropertyList;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListQualityRulesResponseBody\pageResult\qualityRuleList\scheduleBindList;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListQualityRulesResponseBody\pageResult\qualityRuleList\validateConditionList;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListQualityRulesResponseBody\pageResult\qualityRuleList\validateObject;

class qualityRuleList extends Model
{
    /**
     * @var attributeWithValueList[]
     */
    public $attributeWithValueList;

    /**
     * @var string[]
     */
    public $catalogList;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $creatorName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $enableErrorArchive;

    /**
     * @var formPropertyList[]
     */
    public $formPropertyList;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $modifier;

    /**
     * @var string
     */
    public $modifierName;

    /**
     * @var string
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var scheduleBindList[]
     */
    public $scheduleBindList;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $strength;

    /**
     * @var int
     */
    public $templateId;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var string
     */
    public $templateScope;

    /**
     * @var string
     */
    public $templateType;

    /**
     * @var int
     */
    public $testRunRuleTaskId;

    /**
     * @var string
     */
    public $testRunRuleTaskStatus;

    /**
     * @var bool
     */
    public $testRunRuleValidateResult;

    /**
     * @var validateConditionList[]
     */
    public $validateConditionList;

    /**
     * @var validateObject
     */
    public $validateObject;

    /**
     * @var int
     */
    public $watchId;
    protected $_name = [
        'attributeWithValueList' => 'AttributeWithValueList',
        'catalogList' => 'CatalogList',
        'createTime' => 'CreateTime',
        'creator' => 'Creator',
        'creatorName' => 'CreatorName',
        'description' => 'Description',
        'enableErrorArchive' => 'EnableErrorArchive',
        'formPropertyList' => 'FormPropertyList',
        'id' => 'Id',
        'modifier' => 'Modifier',
        'modifierName' => 'ModifierName',
        'modifyTime' => 'ModifyTime',
        'name' => 'Name',
        'scheduleBindList' => 'ScheduleBindList',
        'status' => 'Status',
        'strength' => 'Strength',
        'templateId' => 'TemplateId',
        'templateName' => 'TemplateName',
        'templateScope' => 'TemplateScope',
        'templateType' => 'TemplateType',
        'testRunRuleTaskId' => 'TestRunRuleTaskId',
        'testRunRuleTaskStatus' => 'TestRunRuleTaskStatus',
        'testRunRuleValidateResult' => 'TestRunRuleValidateResult',
        'validateConditionList' => 'ValidateConditionList',
        'validateObject' => 'ValidateObject',
        'watchId' => 'WatchId',
    ];

    public function validate()
    {
        if (\is_array($this->attributeWithValueList)) {
            Model::validateArray($this->attributeWithValueList);
        }
        if (\is_array($this->catalogList)) {
            Model::validateArray($this->catalogList);
        }
        if (\is_array($this->formPropertyList)) {
            Model::validateArray($this->formPropertyList);
        }
        if (\is_array($this->scheduleBindList)) {
            Model::validateArray($this->scheduleBindList);
        }
        if (\is_array($this->validateConditionList)) {
            Model::validateArray($this->validateConditionList);
        }
        if (null !== $this->validateObject) {
            $this->validateObject->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attributeWithValueList) {
            if (\is_array($this->attributeWithValueList)) {
                $res['AttributeWithValueList'] = [];
                $n1 = 0;
                foreach ($this->attributeWithValueList as $item1) {
                    $res['AttributeWithValueList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->catalogList) {
            if (\is_array($this->catalogList)) {
                $res['CatalogList'] = [];
                $n1 = 0;
                foreach ($this->catalogList as $item1) {
                    $res['CatalogList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }

        if (null !== $this->creatorName) {
            $res['CreatorName'] = $this->creatorName;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->enableErrorArchive) {
            $res['EnableErrorArchive'] = $this->enableErrorArchive;
        }

        if (null !== $this->formPropertyList) {
            if (\is_array($this->formPropertyList)) {
                $res['FormPropertyList'] = [];
                $n1 = 0;
                foreach ($this->formPropertyList as $item1) {
                    $res['FormPropertyList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->modifier) {
            $res['Modifier'] = $this->modifier;
        }

        if (null !== $this->modifierName) {
            $res['ModifierName'] = $this->modifierName;
        }

        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->scheduleBindList) {
            if (\is_array($this->scheduleBindList)) {
                $res['ScheduleBindList'] = [];
                $n1 = 0;
                foreach ($this->scheduleBindList as $item1) {
                    $res['ScheduleBindList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->strength) {
            $res['Strength'] = $this->strength;
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }

        if (null !== $this->templateScope) {
            $res['TemplateScope'] = $this->templateScope;
        }

        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
        }

        if (null !== $this->testRunRuleTaskId) {
            $res['TestRunRuleTaskId'] = $this->testRunRuleTaskId;
        }

        if (null !== $this->testRunRuleTaskStatus) {
            $res['TestRunRuleTaskStatus'] = $this->testRunRuleTaskStatus;
        }

        if (null !== $this->testRunRuleValidateResult) {
            $res['TestRunRuleValidateResult'] = $this->testRunRuleValidateResult;
        }

        if (null !== $this->validateConditionList) {
            if (\is_array($this->validateConditionList)) {
                $res['ValidateConditionList'] = [];
                $n1 = 0;
                foreach ($this->validateConditionList as $item1) {
                    $res['ValidateConditionList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->validateObject) {
            $res['ValidateObject'] = null !== $this->validateObject ? $this->validateObject->toArray($noStream) : $this->validateObject;
        }

        if (null !== $this->watchId) {
            $res['WatchId'] = $this->watchId;
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
        if (isset($map['AttributeWithValueList'])) {
            if (!empty($map['AttributeWithValueList'])) {
                $model->attributeWithValueList = [];
                $n1 = 0;
                foreach ($map['AttributeWithValueList'] as $item1) {
                    $model->attributeWithValueList[$n1] = attributeWithValueList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CatalogList'])) {
            if (!empty($map['CatalogList'])) {
                $model->catalogList = [];
                $n1 = 0;
                foreach ($map['CatalogList'] as $item1) {
                    $model->catalogList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }

        if (isset($map['CreatorName'])) {
            $model->creatorName = $map['CreatorName'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EnableErrorArchive'])) {
            $model->enableErrorArchive = $map['EnableErrorArchive'];
        }

        if (isset($map['FormPropertyList'])) {
            if (!empty($map['FormPropertyList'])) {
                $model->formPropertyList = [];
                $n1 = 0;
                foreach ($map['FormPropertyList'] as $item1) {
                    $model->formPropertyList[$n1] = formPropertyList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Modifier'])) {
            $model->modifier = $map['Modifier'];
        }

        if (isset($map['ModifierName'])) {
            $model->modifierName = $map['ModifierName'];
        }

        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ScheduleBindList'])) {
            if (!empty($map['ScheduleBindList'])) {
                $model->scheduleBindList = [];
                $n1 = 0;
                foreach ($map['ScheduleBindList'] as $item1) {
                    $model->scheduleBindList[$n1] = scheduleBindList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Strength'])) {
            $model->strength = $map['Strength'];
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        if (isset($map['TemplateScope'])) {
            $model->templateScope = $map['TemplateScope'];
        }

        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }

        if (isset($map['TestRunRuleTaskId'])) {
            $model->testRunRuleTaskId = $map['TestRunRuleTaskId'];
        }

        if (isset($map['TestRunRuleTaskStatus'])) {
            $model->testRunRuleTaskStatus = $map['TestRunRuleTaskStatus'];
        }

        if (isset($map['TestRunRuleValidateResult'])) {
            $model->testRunRuleValidateResult = $map['TestRunRuleValidateResult'];
        }

        if (isset($map['ValidateConditionList'])) {
            if (!empty($map['ValidateConditionList'])) {
                $model->validateConditionList = [];
                $n1 = 0;
                foreach ($map['ValidateConditionList'] as $item1) {
                    $model->validateConditionList[$n1] = validateConditionList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ValidateObject'])) {
            $model->validateObject = validateObject::fromMap($map['ValidateObject']);
        }

        if (isset($map['WatchId'])) {
            $model->watchId = $map['WatchId'];
        }

        return $model;
    }
}
