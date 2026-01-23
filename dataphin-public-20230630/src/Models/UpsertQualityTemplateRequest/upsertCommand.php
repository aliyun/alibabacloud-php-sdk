<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpsertQualityTemplateRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpsertQualityTemplateRequest\upsertCommand\formPropertyList;

class upsertCommand extends Model
{
    /**
     * @var string
     */
    public $catalog;

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
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var string[]
     */
    public $supportDataSourceTypeList;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'catalog' => 'Catalog',
        'description' => 'Description',
        'formPropertyList' => 'FormPropertyList',
        'id' => 'Id',
        'name' => 'Name',
        'owner' => 'Owner',
        'supportDataSourceTypeList' => 'SupportDataSourceTypeList',
        'type' => 'Type',
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

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
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

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
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

        return $model;
    }
}
