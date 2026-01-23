<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpsertQualityRuleRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpsertQualityRuleRequest\upsertCommand\attributeWithValueList;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpsertQualityRuleRequest\upsertCommand\formPropertyList;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpsertQualityRuleRequest\upsertCommand\validateConditionList;

class upsertCommand extends Model
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
    public $name;

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
    public $templateType;

    /**
     * @var validateConditionList[]
     */
    public $validateConditionList;

    /**
     * @var int
     */
    public $watchId;
    protected $_name = [
        'attributeWithValueList' => 'AttributeWithValueList',
        'catalogList' => 'CatalogList',
        'description' => 'Description',
        'enableErrorArchive' => 'EnableErrorArchive',
        'formPropertyList' => 'FormPropertyList',
        'id' => 'Id',
        'name' => 'Name',
        'strength' => 'Strength',
        'templateId' => 'TemplateId',
        'templateType' => 'TemplateType',
        'validateConditionList' => 'ValidateConditionList',
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
        if (\is_array($this->validateConditionList)) {
            Model::validateArray($this->validateConditionList);
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

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->strength) {
            $res['Strength'] = $this->strength;
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
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

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Strength'])) {
            $model->strength = $map['Strength'];
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
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

        if (isset($map['WatchId'])) {
            $model->watchId = $map['WatchId'];
        }

        return $model;
    }
}
