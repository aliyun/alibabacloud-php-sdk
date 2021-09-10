<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableBasicInfoResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $tableName;

    /**
     * @var int
     */
    public $favoriteCount;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var int
     */
    public $columnCount;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @var int
     */
    public $envType;

    /**
     * @var string
     */
    public $databaseName;

    /**
     * @var int
     */
    public $isVisible;

    /**
     * @var string
     */
    public $tableGuid;

    /**
     * @var int
     */
    public $readCount;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var bool
     */
    public $isPartitionTable;

    /**
     * @var bool
     */
    public $isView;

    /**
     * @var int
     */
    public $lifeCycle;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var int
     */
    public $viewCount;

    /**
     * @var int
     */
    public $lastAccessTime;

    /**
     * @var int
     */
    public $dataSize;

    /**
     * @var int
     */
    public $lastModifyTime;

    /**
     * @var int
     */
    public $lastDdlTime;

    /**
     * @var string
     */
    public $partitionKeys;

    /**
     * @var string
     */
    public $location;

    /**
     * @var string
     */
    public $caption;

    /**
     * @var int
     */
    public $tenantId;
    protected $_name = [
        'tableName'        => 'TableName',
        'favoriteCount'    => 'FavoriteCount',
        'comment'          => 'Comment',
        'columnCount'      => 'ColumnCount',
        'createTime'       => 'CreateTime',
        'projectId'        => 'ProjectId',
        'ownerId'          => 'OwnerId',
        'envType'          => 'EnvType',
        'databaseName'     => 'DatabaseName',
        'isVisible'        => 'IsVisible',
        'tableGuid'        => 'TableGuid',
        'readCount'        => 'ReadCount',
        'clusterId'        => 'ClusterId',
        'isPartitionTable' => 'IsPartitionTable',
        'isView'           => 'IsView',
        'lifeCycle'        => 'LifeCycle',
        'projectName'      => 'ProjectName',
        'viewCount'        => 'ViewCount',
        'lastAccessTime'   => 'LastAccessTime',
        'dataSize'         => 'DataSize',
        'lastModifyTime'   => 'LastModifyTime',
        'lastDdlTime'      => 'LastDdlTime',
        'partitionKeys'    => 'PartitionKeys',
        'location'         => 'Location',
        'caption'          => 'Caption',
        'tenantId'         => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->favoriteCount) {
            $res['FavoriteCount'] = $this->favoriteCount;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->columnCount) {
            $res['ColumnCount'] = $this->columnCount;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }
        if (null !== $this->isVisible) {
            $res['IsVisible'] = $this->isVisible;
        }
        if (null !== $this->tableGuid) {
            $res['TableGuid'] = $this->tableGuid;
        }
        if (null !== $this->readCount) {
            $res['ReadCount'] = $this->readCount;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->isPartitionTable) {
            $res['IsPartitionTable'] = $this->isPartitionTable;
        }
        if (null !== $this->isView) {
            $res['IsView'] = $this->isView;
        }
        if (null !== $this->lifeCycle) {
            $res['LifeCycle'] = $this->lifeCycle;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->viewCount) {
            $res['ViewCount'] = $this->viewCount;
        }
        if (null !== $this->lastAccessTime) {
            $res['LastAccessTime'] = $this->lastAccessTime;
        }
        if (null !== $this->dataSize) {
            $res['DataSize'] = $this->dataSize;
        }
        if (null !== $this->lastModifyTime) {
            $res['LastModifyTime'] = $this->lastModifyTime;
        }
        if (null !== $this->lastDdlTime) {
            $res['LastDdlTime'] = $this->lastDdlTime;
        }
        if (null !== $this->partitionKeys) {
            $res['PartitionKeys'] = $this->partitionKeys;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->caption) {
            $res['Caption'] = $this->caption;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
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
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['FavoriteCount'])) {
            $model->favoriteCount = $map['FavoriteCount'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['ColumnCount'])) {
            $model->columnCount = $map['ColumnCount'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }
        if (isset($map['IsVisible'])) {
            $model->isVisible = $map['IsVisible'];
        }
        if (isset($map['TableGuid'])) {
            $model->tableGuid = $map['TableGuid'];
        }
        if (isset($map['ReadCount'])) {
            $model->readCount = $map['ReadCount'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['IsPartitionTable'])) {
            $model->isPartitionTable = $map['IsPartitionTable'];
        }
        if (isset($map['IsView'])) {
            $model->isView = $map['IsView'];
        }
        if (isset($map['LifeCycle'])) {
            $model->lifeCycle = $map['LifeCycle'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['ViewCount'])) {
            $model->viewCount = $map['ViewCount'];
        }
        if (isset($map['LastAccessTime'])) {
            $model->lastAccessTime = $map['LastAccessTime'];
        }
        if (isset($map['DataSize'])) {
            $model->dataSize = $map['DataSize'];
        }
        if (isset($map['LastModifyTime'])) {
            $model->lastModifyTime = $map['LastModifyTime'];
        }
        if (isset($map['LastDdlTime'])) {
            $model->lastDdlTime = $map['LastDdlTime'];
        }
        if (isset($map['PartitionKeys'])) {
            $model->partitionKeys = $map['PartitionKeys'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['Caption'])) {
            $model->caption = $map['Caption'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
