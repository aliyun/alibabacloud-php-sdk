<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetDatasetResponseBody\datasetDTO\versionList\dataVersionConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetDatasetResponseBody\datasetDTO\versionList\dataVersionConfig\realtimeMetaTableConfig\tableSchema;

class realtimeMetaTableConfig extends Model
{
    /**
     * @var string
     */
    public $datasourceType;

    /**
     * @var string
     */
    public $metaTableName;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var tableSchema
     */
    public $tableSchema;
    protected $_name = [
        'datasourceType' => 'DatasourceType',
        'metaTableName' => 'MetaTableName',
        'projectId' => 'ProjectId',
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
        if (null !== $this->datasourceType) {
            $res['DatasourceType'] = $this->datasourceType;
        }

        if (null !== $this->metaTableName) {
            $res['MetaTableName'] = $this->metaTableName;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
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
        if (isset($map['DatasourceType'])) {
            $model->datasourceType = $map['DatasourceType'];
        }

        if (isset($map['MetaTableName'])) {
            $model->metaTableName = $map['MetaTableName'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['TableSchema'])) {
            $model->tableSchema = tableSchema::fromMap($map['TableSchema']);
        }

        return $model;
    }
}
