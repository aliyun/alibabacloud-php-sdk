<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListQualityTemplatesResponseBody\pageResult;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListQualityTemplatesResponseBody\pageResult\qualityTemplateList\formPropertyList;

class qualityTemplateList extends Model
{
    /**
     * @var string
     */
    public $catalog;

    /**
     * @var string
     */
    public $catalogName;

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
     * @var formPropertyList[]
     */
    public $formPropertyList;

    /**
     * @var int
     */
    public $id;

    /**
     * @var bool
     */
    public $isSystemTemplate;

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
     * @var string
     */
    public $owner;

    /**
     * @var string
     */
    public $ownerName;

    /**
     * @var bool
     */
    public $supportAllDataSourceType;

    /**
     * @var string[]
     */
    public $supportDataSourceTypeList;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $typeName;
    protected $_name = [
        'catalog' => 'Catalog',
        'catalogName' => 'CatalogName',
        'createTime' => 'CreateTime',
        'creator' => 'Creator',
        'creatorName' => 'CreatorName',
        'description' => 'Description',
        'formPropertyList' => 'FormPropertyList',
        'id' => 'Id',
        'isSystemTemplate' => 'IsSystemTemplate',
        'modifier' => 'Modifier',
        'modifierName' => 'ModifierName',
        'modifyTime' => 'ModifyTime',
        'name' => 'Name',
        'owner' => 'Owner',
        'ownerName' => 'OwnerName',
        'supportAllDataSourceType' => 'SupportAllDataSourceType',
        'supportDataSourceTypeList' => 'SupportDataSourceTypeList',
        'type' => 'Type',
        'typeName' => 'TypeName',
    ];

    public function validate()
    {
        if (\is_array($this->formPropertyList)) {
            Model::validateArray($this->formPropertyList);
        }
        if (\is_array($this->supportDataSourceTypeList)) {
            Model::validateArray($this->supportDataSourceTypeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->catalog) {
            $res['Catalog'] = $this->catalog;
        }

        if (null !== $this->catalogName) {
            $res['CatalogName'] = $this->catalogName;
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

        if (null !== $this->isSystemTemplate) {
            $res['IsSystemTemplate'] = $this->isSystemTemplate;
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

        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }

        if (null !== $this->ownerName) {
            $res['OwnerName'] = $this->ownerName;
        }

        if (null !== $this->supportAllDataSourceType) {
            $res['SupportAllDataSourceType'] = $this->supportAllDataSourceType;
        }

        if (null !== $this->supportDataSourceTypeList) {
            if (\is_array($this->supportDataSourceTypeList)) {
                $res['SupportDataSourceTypeList'] = [];
                $n1 = 0;
                foreach ($this->supportDataSourceTypeList as $item1) {
                    $res['SupportDataSourceTypeList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->typeName) {
            $res['TypeName'] = $this->typeName;
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
        if (isset($map['Catalog'])) {
            $model->catalog = $map['Catalog'];
        }

        if (isset($map['CatalogName'])) {
            $model->catalogName = $map['CatalogName'];
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

        if (isset($map['IsSystemTemplate'])) {
            $model->isSystemTemplate = $map['IsSystemTemplate'];
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

        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }

        if (isset($map['OwnerName'])) {
            $model->ownerName = $map['OwnerName'];
        }

        if (isset($map['SupportAllDataSourceType'])) {
            $model->supportAllDataSourceType = $map['SupportAllDataSourceType'];
        }

        if (isset($map['SupportDataSourceTypeList'])) {
            if (!empty($map['SupportDataSourceTypeList'])) {
                $model->supportDataSourceTypeList = [];
                $n1 = 0;
                foreach ($map['SupportDataSourceTypeList'] as $item1) {
                    $model->supportDataSourceTypeList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['TypeName'])) {
            $model->typeName = $map['TypeName'];
        }

        return $model;
    }
}
