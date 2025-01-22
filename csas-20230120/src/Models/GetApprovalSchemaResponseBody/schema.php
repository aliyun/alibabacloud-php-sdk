<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\GetApprovalSchemaResponseBody;

use AlibabaCloud\Dara\Model;

class schema extends Model
{
    /**
     * @var string
     */
    public $createTime;
    /**
     * @var string
     */
    public $description;
    /**
     * @var bool
     */
    public $isDefault;
    /**
     * @var string
     */
    public $policyType;
    /**
     * @var string
     */
    public $schemaContent;
    /**
     * @var string
     */
    public $schemaId;
    /**
     * @var string
     */
    public $schemaName;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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
