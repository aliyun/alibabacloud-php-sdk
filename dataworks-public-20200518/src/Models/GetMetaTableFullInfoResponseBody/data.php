<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableFullInfoResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableFullInfoResponseBody\data\columnList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The ID of the EMR cluster.
     *
     * @example C-010A704DA760****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description A list of columns.
     *
     * @var columnList[]
     */
    public $columnList;

    /**
     * @description The comment of the table.
     *
     * @example comment
     *
     * @var string
     */
    public $comment;

    /**
     * @description The time when the table was created. The result is displayed as a timestamp, which you can convert to the corresponding date based on your timezone.
     *
     * @example 1589870293000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The storage space occupied by the table, in bytes (B).
     *
     * @example 10
     *
     * @var int
     */
    public $dataSize;

    /**
     * @description The name of the database.
     *
     * @example abc
     *
     * @var string
     */
    public $databaseName;

    /**
     * @description Environment type, with the following values:
     * - 1 indicates a table in the production environment.
     * @example 1
     *
     * @var int
     */
    public $envType;

    /**
     * @description Indicates whether the table is visible, with the following values:
     * - 3: The table is only visible to the responsible person.
     * @example 1
     *
     * @var int
     */
    public $isVisible;

    /**
     * @description The last time the table was accessed. The result is displayed as a timestamp, which you can convert to the corresponding date based on your timezone.
     *
     * @example 1589870294000
     *
     * @var int
     */
    public $lastAccessTime;

    /**
     * @description The last time the table structure was changed. The result is displayed as a timestamp, which you can convert to the corresponding date based on your timezone.
     *
     * @example 1589870294000
     *
     * @var int
     */
    public $lastDdlTime;

    /**
     * @description The last time the table was updated. The result is displayed as a timestamp, which you can convert to the corresponding date based on your timezone.
     *
     * @example 1589870294000
     *
     * @var int
     */
    public $lastModifyTime;

    /**
     * @description The lifecycle of the table, in days.
     *
     * @example 5
     *
     * @var int
     */
    public $lifeCycle;

    /**
     * @description The storage location of the Hive table.
     *
     * @example hdfs://localhost:777/user/hadoop/test.txt
     *
     * @var string
     */
    public $location;

    /**
     * @description The ID of the table owner.
     *
     * @example 123
     *
     * @var string
     */
    public $ownerId;

    /**
     * @description Partition keys.
     *
     * @example abc
     *
     * @var string
     */
    public $partitionKeys;

    /**
     * @description The ID of the workspace where the table is located.
     *
     * @example 22
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The name of the workspace where the table is located.
     *
     * @example test
     *
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $schema;

    /**
     * @description The unique identifier of the table.
     *
     * @example odps.engine_name.table_name
     *
     * @var string
     */
    public $tableGuid;

    /**
     * @description The name of the table.
     *
     * @example table_name
     *
     * @var string
     */
    public $tableName;

    /**
     * @description The tenant ID.
     *
     * @example 12345
     *
     * @var int
     */
    public $tenantId;

    /**
     * @description The total number of columns.
     *
     * @example 22
     *
     * @var int
     */
    public $totalColumnCount;
    protected $_name = [
        'clusterId'        => 'ClusterId',
        'columnList'       => 'ColumnList',
        'comment'          => 'Comment',
        'createTime'       => 'CreateTime',
        'dataSize'         => 'DataSize',
        'databaseName'     => 'DatabaseName',
        'envType'          => 'EnvType',
        'isVisible'        => 'IsVisible',
        'lastAccessTime'   => 'LastAccessTime',
        'lastDdlTime'      => 'LastDdlTime',
        'lastModifyTime'   => 'LastModifyTime',
        'lifeCycle'        => 'LifeCycle',
        'location'         => 'Location',
        'ownerId'          => 'OwnerId',
        'partitionKeys'    => 'PartitionKeys',
        'projectId'        => 'ProjectId',
        'projectName'      => 'ProjectName',
        'schema'           => 'Schema',
        'tableGuid'        => 'TableGuid',
        'tableName'        => 'TableName',
        'tenantId'         => 'TenantId',
        'totalColumnCount' => 'TotalColumnCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->columnList) {
            $res['ColumnList'] = [];
            if (null !== $this->columnList && \is_array($this->columnList)) {
                $n = 0;
                foreach ($this->columnList as $item) {
                    $res['ColumnList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->dataSize) {
            $res['DataSize'] = $this->dataSize;
        }
        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->isVisible) {
            $res['IsVisible'] = $this->isVisible;
        }
        if (null !== $this->lastAccessTime) {
            $res['LastAccessTime'] = $this->lastAccessTime;
        }
        if (null !== $this->lastDdlTime) {
            $res['LastDdlTime'] = $this->lastDdlTime;
        }
        if (null !== $this->lastModifyTime) {
            $res['LastModifyTime'] = $this->lastModifyTime;
        }
        if (null !== $this->lifeCycle) {
            $res['LifeCycle'] = $this->lifeCycle;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->partitionKeys) {
            $res['PartitionKeys'] = $this->partitionKeys;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->schema) {
            $res['Schema'] = $this->schema;
        }
        if (null !== $this->tableGuid) {
            $res['TableGuid'] = $this->tableGuid;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->totalColumnCount) {
            $res['TotalColumnCount'] = $this->totalColumnCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ColumnList'])) {
            if (!empty($map['ColumnList'])) {
                $model->columnList = [];
                $n                 = 0;
                foreach ($map['ColumnList'] as $item) {
                    $model->columnList[$n++] = null !== $item ? columnList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DataSize'])) {
            $model->dataSize = $map['DataSize'];
        }
        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['IsVisible'])) {
            $model->isVisible = $map['IsVisible'];
        }
        if (isset($map['LastAccessTime'])) {
            $model->lastAccessTime = $map['LastAccessTime'];
        }
        if (isset($map['LastDdlTime'])) {
            $model->lastDdlTime = $map['LastDdlTime'];
        }
        if (isset($map['LastModifyTime'])) {
            $model->lastModifyTime = $map['LastModifyTime'];
        }
        if (isset($map['LifeCycle'])) {
            $model->lifeCycle = $map['LifeCycle'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PartitionKeys'])) {
            $model->partitionKeys = $map['PartitionKeys'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['Schema'])) {
            $model->schema = $map['Schema'];
        }
        if (isset($map['TableGuid'])) {
            $model->tableGuid = $map['TableGuid'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['TotalColumnCount'])) {
            $model->totalColumnCount = $map['TotalColumnCount'];
        }

        return $model;
    }
}
