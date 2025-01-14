<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ListApprovalSchemasForApprovalProcessesResponseBody\processes;

use AlibabaCloud\Tea\Model;

class schemas extends Model
{
    /**
     * @example 2024-03-15 14:44:07
     *
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @example true
     *
     * @var bool
     */
    public $isDefault;

    /**
     * @example DlpSend
     *
     * @var string
     */
    public $policyType;

    /**
     * @example {"form": {"labelCol": 6,"wrapperCol": 12}}
     *
     * @var string
     */
    public $schemaContent;

    /**
     * @example approval-schema-090134f1ebff****
     *
     * @var string
     */
    public $schemaId;

    /**
     * @var string
     */
    public $schemaName;

    /**
     * @example 1715680940
     *
     * @var int
     */
    public $schemaVersion;
    protected $_name = [
        'createTime'    => 'CreateTime',
        'description'   => 'Description',
        'isDefault'     => 'IsDefault',
        'policyType'    => 'PolicyType',
        'schemaContent' => 'SchemaContent',
        'schemaId'      => 'SchemaId',
        'schemaName'    => 'SchemaName',
        'schemaVersion' => 'SchemaVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }
        if (null !== $this->policyType) {
            $res['PolicyType'] = $this->policyType;
        }
        if (null !== $this->schemaContent) {
            $res['SchemaContent'] = $this->schemaContent;
        }
        if (null !== $this->schemaId) {
            $res['SchemaId'] = $this->schemaId;
        }
        if (null !== $this->schemaName) {
            $res['SchemaName'] = $this->schemaName;
        }
        if (null !== $this->schemaVersion) {
            $res['SchemaVersion'] = $this->schemaVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return schemas
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }
        if (isset($map['PolicyType'])) {
            $model->policyType = $map['PolicyType'];
        }
        if (isset($map['SchemaContent'])) {
            $model->schemaContent = $map['SchemaContent'];
        }
        if (isset($map['SchemaId'])) {
            $model->schemaId = $map['SchemaId'];
        }
        if (isset($map['SchemaName'])) {
            $model->schemaName = $map['SchemaName'];
        }
        if (isset($map['SchemaVersion'])) {
            $model->schemaVersion = $map['SchemaVersion'];
        }

        return $model;
    }
}
