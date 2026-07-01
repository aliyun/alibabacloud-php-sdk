<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateDatasetRequest\updateCommand\versionConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateDatasetRequest\updateCommand\versionConfig\metadataStorageConfig\tableSchema;

class metadataStorageConfig extends Model
{
    /**
     * @var string
     */
    public $dataSourceId;

    /**
     * @var string
     */
    public $dataSourceName;

    /**
     * @var string
     */
    public $devSchema;

    /**
     * @var string
     */
    public $metadataStorageMode;

    /**
     * @var string
     */
    public $metadataStorageType;

    /**
     * @var string
     */
    public $prodSchema;

    /**
     * @var string
     */
    public $tableName;

    /**
     * @var tableSchema
     */
    public $tableSchema;
    protected $_name = [
        'dataSourceId' => 'DataSourceId',
        'dataSourceName' => 'DataSourceName',
        'devSchema' => 'DevSchema',
        'metadataStorageMode' => 'MetadataStorageMode',
        'metadataStorageType' => 'MetadataStorageType',
        'prodSchema' => 'ProdSchema',
        'tableName' => 'TableName',
        'tableSchema' => 'TableSchema',
    ];

    public function validate()
    {
        if (null !== $this->tableSchema) {
            $this->tableSchema->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }

        if (null !== $this->dataSourceName) {
            $res['DataSourceName'] = $this->dataSourceName;
        }

        if (null !== $this->devSchema) {
            $res['DevSchema'] = $this->devSchema;
        }

        if (null !== $this->metadataStorageMode) {
            $res['MetadataStorageMode'] = $this->metadataStorageMode;
        }

        if (null !== $this->metadataStorageType) {
            $res['MetadataStorageType'] = $this->metadataStorageType;
        }

        if (null !== $this->prodSchema) {
            $res['ProdSchema'] = $this->prodSchema;
        }

        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        if (null !== $this->tableSchema) {
            $res['TableSchema'] = null !== $this->tableSchema ? $this->tableSchema->toArray($noStream) : $this->tableSchema;
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
        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }

        if (isset($map['DataSourceName'])) {
            $model->dataSourceName = $map['DataSourceName'];
        }

        if (isset($map['DevSchema'])) {
            $model->devSchema = $map['DevSchema'];
        }

        if (isset($map['MetadataStorageMode'])) {
            $model->metadataStorageMode = $map['MetadataStorageMode'];
        }

        if (isset($map['MetadataStorageType'])) {
            $model->metadataStorageType = $map['MetadataStorageType'];
        }

        if (isset($map['ProdSchema'])) {
            $model->prodSchema = $map['ProdSchema'];
        }

        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        if (isset($map['TableSchema'])) {
            $model->tableSchema = tableSchema::fromMap($map['TableSchema']);
        }

        return $model;
    }
}
