<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableBasicInfoResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The schema information of the metatable. This parameter is returned only if you enable the table schema in MaxCompute.
     *
     * @var string
     */
    public $caption;

    /**
     * @description Indicates whether the metatable is a view. Valid values:
     *
     *   true: The metatable is a view.
     *   false: The metatable is not a view.
     *
     * @example abc
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The ID of the workspace.
     *
     * @example 3
     *
     * @var int
     */
    public $columnCount;

    /**
     * @description The time when the metatable was created.
     *
     * @example test table
     *
     * @var string
     */
    public $comment;

    /**
     * @description The ID of the metatable owner.
     *
     * @example 1589870294000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The time when the schema of the metatable was last changed.
     *
     * @example 10
     *
     * @var int
     */
    public $dataSize;

    /**
     * @description The GUID of the metatable.
     *
     * @example abc
     *
     * @var string
     */
    public $databaseName;

    /**
     * @description The scope in which the metatable is visible. Valid values:
     *
     *   0: The metatable is visible to workspace members.
     *   1: The metatable is visible to users within the tenant.
     *   2: The metatable is visible to all tenants.
     *   3: The metatable is visible only to the metatable owner.
     *
     * @example 1
     *
     * @var int
     */
    public $envType;

    /**
     * @description The number of fields.
     *
     * @example 6
     *
     * @var int
     */
    public $favoriteCount;

    /**
     * @description The lifecycle of the metatable. Unit: days.
     *
     * @example true
     *
     * @var bool
     */
    public $isPartitionTable;

    /**
     * @description The name of the workspace.
     *
     * @example false
     *
     * @var bool
     */
    public $isView;

    /**
     * @description The number of times the metatable was read. This parameter is returned only if you set the Extension parameter to true and takes effect only if you set the DataSourceType parameter to odps.
     *
     * @example 1
     *
     * @var int
     */
    public $isVisible;

    /**
     * @description The time when the metatable was last updated.
     *
     * @example 1589870294000
     *
     * @var int
     */
    public $lastAccessTime;

    /**
     * @description The storage path of the Hive metadatabase.
     *
     * @example 1589870294000
     *
     * @var int
     */
    public $lastDdlTime;

    /**
     * @description The partition key of the Hive metatable.
     *
     * @example 1589870294000
     *
     * @var int
     */
    public $lastModifyTime;

    /**
     * @description The number of times the metatable was viewed. This parameter is returned only if you set the Extension parameter to true and takes effect only if you set the DataSourceType parameter to odps.
     *
     * @example 5
     *
     * @var int
     */
    public $lifeCycle;

    /**
     * @description The ID of the tenant.
     *
     * @example hdfs://
     *
     * @var string
     */
    public $location;

    /**
     * @description The name of the metadatabase.
     *
     * @example 123
     *
     * @var string
     */
    public $ownerId;

    /**
     * @description The display name of the metatable.
     *
     * @example ab
     *
     * @var string
     */
    public $partitionKeys;

    /**
     * @description The type of the environment. Valid values:
     *
     *   0: development environment
     *   1: production environment
     *
     * @example 232
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The time when the metatable was last accessed.
     *
     * @example test
     *
     * @var string
     */
    public $projectName;

    /**
     * @description Indicates whether the metatable is a partitioned table. Valid values:
     *
     *   true: The metatable is a partitioned table.
     *   false: The metatable is a non-partitioned table.
     *
     * @example 3
     *
     * @var int
     */
    public $readCount;

    /**
     * @example default
     *
     * @var string
     */
    public $schema;

    /**
     * @description The ID of the EMR cluster.
     *
     * @example odps.engine_name.table_name
     *
     * @var string
     */
    public $tableGuid;

    /**
     * @description The comment of the metatable.
     *
     * @example table_name
     *
     * @var string
     */
    public $tableName;

    /**
     * @example 12345
     *
     * @var int
     */
    public $tenantId;

    /**
     * @description The size of storage space that is occupied by the metatable. Unit: bytes.
     *
     * @example 2
     *
     * @var int
     */
    public $viewCount;
    protected $_name = [
        'caption'          => 'Caption',
        'clusterId'        => 'ClusterId',
        'columnCount'      => 'ColumnCount',
        'comment'          => 'Comment',
        'createTime'       => 'CreateTime',
        'dataSize'         => 'DataSize',
        'databaseName'     => 'DatabaseName',
        'envType'          => 'EnvType',
        'favoriteCount'    => 'FavoriteCount',
        'isPartitionTable' => 'IsPartitionTable',
        'isView'           => 'IsView',
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
        'readCount'        => 'ReadCount',
        'schema'           => 'Schema',
        'tableGuid'        => 'TableGuid',
        'tableName'        => 'TableName',
        'tenantId'         => 'TenantId',
        'viewCount'        => 'ViewCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->caption) {
            $res['Caption'] = $this->caption;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->columnCount) {
            $res['ColumnCount'] = $this->columnCount;
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
        if (null !== $this->favoriteCount) {
            $res['FavoriteCount'] = $this->favoriteCount;
        }
        if (null !== $this->isPartitionTable) {
            $res['IsPartitionTable'] = $this->isPartitionTable;
        }
        if (null !== $this->isView) {
            $res['IsView'] = $this->isView;
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
        if (null !== $this->readCount) {
            $res['ReadCount'] = $this->readCount;
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
        if (null !== $this->viewCount) {
            $res['ViewCount'] = $this->viewCount;
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
        if (isset($map['Caption'])) {
            $model->caption = $map['Caption'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ColumnCount'])) {
            $model->columnCount = $map['ColumnCount'];
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
        if (isset($map['FavoriteCount'])) {
            $model->favoriteCount = $map['FavoriteCount'];
        }
        if (isset($map['IsPartitionTable'])) {
            $model->isPartitionTable = $map['IsPartitionTable'];
        }
        if (isset($map['IsView'])) {
            $model->isView = $map['IsView'];
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
        if (isset($map['ReadCount'])) {
            $model->readCount = $map['ReadCount'];
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
        if (isset($map['ViewCount'])) {
            $model->viewCount = $map['ViewCount'];
        }

        return $model;
    }
}
