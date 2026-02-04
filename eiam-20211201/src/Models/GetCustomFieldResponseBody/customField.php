<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetCustomFieldResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetCustomFieldResponseBody\customField\fieldDataConfig;

class customField extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $defaultValue;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $encrypted;

    /**
     * @var string
     */
    public $entityType;

    /**
     * @var fieldDataConfig
     */
    public $fieldDataConfig;

    /**
     * @var string
     */
    public $fieldDataType;

    /**
     * @var string
     */
    public $fieldDisplayName;

    /**
     * @var string
     */
    public $fieldDisplayType;

    /**
     * @var string
     */
    public $fieldId;

    /**
     * @var string
     */
    public $fieldName;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var bool
     */
    public $required;

    /**
     * @var string
     */
    public $status;

    /**
     * @var bool
     */
    public $unique;

    /**
     * @var int
     */
    public $updateTime;

    /**
     * @var string
     */
    public $userPermission;
    protected $_name = [
        'createTime' => 'CreateTime',
        'defaultValue' => 'DefaultValue',
        'description' => 'Description',
        'encrypted' => 'Encrypted',
        'entityType' => 'EntityType',
        'fieldDataConfig' => 'FieldDataConfig',
        'fieldDataType' => 'FieldDataType',
        'fieldDisplayName' => 'FieldDisplayName',
        'fieldDisplayType' => 'FieldDisplayType',
        'fieldId' => 'FieldId',
        'fieldName' => 'FieldName',
        'instanceId' => 'InstanceId',
        'required' => 'Required',
        'status' => 'Status',
        'unique' => 'Unique',
        'updateTime' => 'UpdateTime',
        'userPermission' => 'UserPermission',
    ];

    public function validate()
    {
        if (null !== $this->fieldDataConfig) {
            $this->fieldDataConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->defaultValue) {
            $res['DefaultValue'] = $this->defaultValue;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->encrypted) {
            $res['Encrypted'] = $this->encrypted;
        }

        if (null !== $this->entityType) {
            $res['EntityType'] = $this->entityType;
        }

        if (null !== $this->fieldDataConfig) {
            $res['FieldDataConfig'] = null !== $this->fieldDataConfig ? $this->fieldDataConfig->toArray($noStream) : $this->fieldDataConfig;
        }

        if (null !== $this->fieldDataType) {
            $res['FieldDataType'] = $this->fieldDataType;
        }

        if (null !== $this->fieldDisplayName) {
            $res['FieldDisplayName'] = $this->fieldDisplayName;
        }

        if (null !== $this->fieldDisplayType) {
            $res['FieldDisplayType'] = $this->fieldDisplayType;
        }

        if (null !== $this->fieldId) {
            $res['FieldId'] = $this->fieldId;
        }

        if (null !== $this->fieldName) {
            $res['FieldName'] = $this->fieldName;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->required) {
            $res['Required'] = $this->required;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->unique) {
            $res['Unique'] = $this->unique;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        if (null !== $this->userPermission) {
            $res['UserPermission'] = $this->userPermission;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DefaultValue'])) {
            $model->defaultValue = $map['DefaultValue'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Encrypted'])) {
            $model->encrypted = $map['Encrypted'];
        }

        if (isset($map['EntityType'])) {
            $model->entityType = $map['EntityType'];
        }

        if (isset($map['FieldDataConfig'])) {
            $model->fieldDataConfig = fieldDataConfig::fromMap($map['FieldDataConfig']);
        }

        if (isset($map['FieldDataType'])) {
            $model->fieldDataType = $map['FieldDataType'];
        }

        if (isset($map['FieldDisplayName'])) {
            $model->fieldDisplayName = $map['FieldDisplayName'];
        }

        if (isset($map['FieldDisplayType'])) {
            $model->fieldDisplayType = $map['FieldDisplayType'];
        }

        if (isset($map['FieldId'])) {
            $model->fieldId = $map['FieldId'];
        }

        if (isset($map['FieldName'])) {
            $model->fieldName = $map['FieldName'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Required'])) {
            $model->required = $map['Required'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Unique'])) {
            $model->unique = $map['Unique'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        if (isset($map['UserPermission'])) {
            $model->userPermission = $map['UserPermission'];
        }

        return $model;
    }
}
