<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetAuthorityTemplateResponseBody\authorityTemplateView\authorityTemplateItemList;

use AlibabaCloud\Tea\Model;

class authorityTemplateItem extends Model
{
    /**
     * @description Other information. For example, you can add the logon permission on an instance to the permission template.
     *
     * @example "permissionTypes": [
     * ]
     * @var string
     */
    public $attribute;

    /**
     * @description The ID of the database.
     *
     * @example 43***
     *
     * @var int
     */
    public $dbId;

    /**
     * @description The ID of the instance.
     *
     * @example 188****
     *
     * @var int
     */
    public $instanceId;

    /**
     * @description The ID of the resource.
     *
     * @example 12***
     *
     * @var int
     */
    public $itemId;

    /**
     * @description The ID of the user who modified the resource.
     *
     * @example 51***
     *
     * @var int
     */
    public $modifierId;

    /**
     * @description The type of the resource. Valid values:
     *
     *   **INSTANCE**: instance
     *   **LOGIC_DB**: logical database
     *   **META_DB**: physical database
     *   **LOGIC_TABLE**: logical table
     *   **SINGLE_TABLE**: physical table
     *
     * @example INSTANCE
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The name of the table.
     *
     * @example ExampleTable
     *
     * @var string
     */
    public $tableName;

    /**
     * @description The ID of the permission template.
     *
     * @example 1563
     *
     * @var int
     */
    public $templateId;
    protected $_name = [
        'attribute'    => 'Attribute',
        'dbId'         => 'DbId',
        'instanceId'   => 'InstanceId',
        'itemId'       => 'ItemId',
        'modifierId'   => 'ModifierId',
        'resourceType' => 'ResourceType',
        'tableName'    => 'TableName',
        'templateId'   => 'TemplateId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return authorityTemplateItem
     */
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
