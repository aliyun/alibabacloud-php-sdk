<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class EditMetaKnowledgeAssetRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $assetDescription;

    /**
     * @var string
     */
    public $columnName;

    /**
     * @description This parameter is required.
     *
     * @var int
     */
    public $dbId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $tableName;

    /**
     * @var string
     */
    public $tableSchemaName;
    protected $_name = [
        'assetDescription' => 'AssetDescription',
        'columnName' => 'ColumnName',
        'dbId' => 'DbId',
        'tableName' => 'TableName',
        'tableSchemaName' => 'TableSchemaName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->assetDescription) {
            $res['AssetDescription'] = $this->assetDescription;
        }
        if (null !== $this->columnName) {
            $res['ColumnName'] = $this->columnName;
        }
        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->tableSchemaName) {
            $res['TableSchemaName'] = $this->tableSchemaName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EditMetaKnowledgeAssetRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssetDescription'])) {
            $model->assetDescription = $map['AssetDescription'];
        }
        if (isset($map['ColumnName'])) {
            $model->columnName = $map['ColumnName'];
        }
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['TableSchemaName'])) {
            $model->tableSchemaName = $map['TableSchemaName'];
        }

        return $model;
    }
}
