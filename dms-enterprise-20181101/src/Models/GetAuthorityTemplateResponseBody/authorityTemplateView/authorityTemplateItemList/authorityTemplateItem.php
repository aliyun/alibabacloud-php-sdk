<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetAuthorityTemplateResponseBody\authorityTemplateView\authorityTemplateItemList;

use AlibabaCloud\Dara\Model;

class authorityTemplateItem extends Model
{
    /**
     * @var string
     */
    public $attribute;

    /**
     * @var int
     */
    public $dbId;

    /**
     * @var int
     */
    public $instanceId;

    /**
     * @var int
     */
    public $itemId;

    /**
     * @var int
     */
    public $modifierId;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $tableName;

    /**
     * @var int
     */
    public $templateId;
    protected $_name = [
        'attribute' => 'Attribute',
        'dbId' => 'DbId',
        'instanceId' => 'InstanceId',
        'itemId' => 'ItemId',
        'modifierId' => 'ModifierId',
        'resourceType' => 'ResourceType',
        'tableName' => 'TableName',
        'templateId' => 'TemplateId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attribute) {
            $res['Attribute'] = $this->attribute;
        }

        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }

        if (null !== $this->modifierId) {
            $res['ModifierId'] = $this->modifierId;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
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
        if (isset($map['Attribute'])) {
            $model->attribute = $map['Attribute'];
        }

        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }

        if (isset($map['ModifierId'])) {
            $model->modifierId = $map['ModifierId'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
