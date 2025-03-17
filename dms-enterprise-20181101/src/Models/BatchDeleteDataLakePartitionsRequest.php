<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class BatchDeleteDataLakePartitionsRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example hive
     *
     * @var string
     */
    public $catalogName;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $dataRegion;

    /**
     * @description This parameter is required.
     *
     * @example default
     *
     * @var string
     */
    public $dbName;

    /**
     * @example true
     *
     * @var bool
     */
    public $ifExists;

    /**
     * @description This parameter is required.
     *
     * @var string[][]
     */
    public $partitionValuesList;

    /**
     * @description This parameter is required.
     *
     * @example table_name
     *
     * @var string
     */
    public $tableName;

    /**
     * @example 3****
     *
     * @var int
     */
    public $tid;

    /**
     * @var int
     */
    public $workspaceId;
    protected $_name = [
        'catalogName' => 'CatalogName',
        'dataRegion' => 'DataRegion',
        'dbName' => 'DbName',
        'ifExists' => 'IfExists',
        'partitionValuesList' => 'PartitionValuesList',
        'tableName' => 'TableName',
        'tid' => 'Tid',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->catalogName) {
            $res['CatalogName'] = $this->catalogName;
        }
        if (null !== $this->dataRegion) {
            $res['DataRegion'] = $this->dataRegion;
        }
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->ifExists) {
            $res['IfExists'] = $this->ifExists;
        }
        if (null !== $this->partitionValuesList) {
            $res['PartitionValuesList'] = $this->partitionValuesList;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchDeleteDataLakePartitionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CatalogName'])) {
            $model->catalogName = $map['CatalogName'];
        }
        if (isset($map['DataRegion'])) {
            $model->dataRegion = $map['DataRegion'];
        }
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['IfExists'])) {
            $model->ifExists = $map['IfExists'];
        }
        if (isset($map['PartitionValuesList'])) {
            if (!empty($map['PartitionValuesList'])) {
                $model->partitionValuesList = $map['PartitionValuesList'];
            }
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
