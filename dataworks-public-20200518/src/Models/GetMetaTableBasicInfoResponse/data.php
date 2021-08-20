<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableBasicInfoResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $tableName;

    /**
     * @var string
     */
    public $tableGuid;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @var int
     */
    public $tenantId;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var int
     */
    public $lastModifyTime;

    /**
     * @var int
     */
    public $lifeCycle;

    /**
     * @var int
     */
    public $isVisible;

    /**
     * @var int
     */
    public $lastDdlTime;

    /**
     * @var int
     */
    public $lastAccessTime;

    /**
     * @var int
     */
    public $envType;

    /**
     * @var int
     */
    public $dataSize;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $databaseName;

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
    public $clusterId;

    /**
     * @var string
     */
    public $caption;

    /**
     * @var bool
     */
    public $isPartitionTable;

    /**
     * @var int
     */
    public $readCount;

    /**
     * @var int
     */
    public $viewCount;

    /**
     * @var int
     */
    public $favoriteCount;

    /**
     * @var bool
     */
    public $isView;

    /**
     * @var int
     */
    public $columnCount;
    protected $_name = [
        'tableName'        => 'TableName',
        'tableGuid'        => 'TableGuid',
        'ownerId'          => 'OwnerId',
        'tenantId'         => 'TenantId',
        'projectId'        => 'ProjectId',
        'createTime'       => 'CreateTime',
        'lastModifyTime'   => 'LastModifyTime',
        'lifeCycle'        => 'LifeCycle',
        'isVisible'        => 'IsVisible',
        'lastDdlTime'      => 'LastDdlTime',
        'lastAccessTime'   => 'LastAccessTime',
        'envType'          => 'EnvType',
        'dataSize'         => 'DataSize',
        'comment'          => 'Comment',
        'projectName'      => 'ProjectName',
        'databaseName'     => 'DatabaseName',
        'partitionKeys'    => 'PartitionKeys',
        'location'         => 'Location',
        'clusterId'        => 'ClusterId',
        'caption'          => 'Caption',
        'isPartitionTable' => 'IsPartitionTable',
        'readCount'        => 'ReadCount',
        'viewCount'        => 'ViewCount',
        'favoriteCount'    => 'FavoriteCount',
        'isView'           => 'IsView',
        'columnCount'      => 'ColumnCount',
    ];

    public function validate()
    {
        Model::validateRequired('tableName', $this->tableName, true);
        Model::validateRequired('tableGuid', $this->tableGuid, true);
        Model::validateRequired('ownerId', $this->ownerId, true);
        Model::validateRequired('tenantId', $this->tenantId, true);
        Model::validateRequired('projectId', $this->projectId, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('lastModifyTime', $this->lastModifyTime, true);
        Model::validateRequired('lifeCycle', $this->lifeCycle, true);
        Model::validateRequired('isVisible', $this->isVisible, true);
        Model::validateRequired('lastDdlTime', $this->lastDdlTime, true);
        Model::validateRequired('lastAccessTime', $this->lastAccessTime, true);
        Model::validateRequired('envType', $this->envType, true);
        Model::validateRequired('dataSize', $this->dataSize, true);
        Model::validateRequired('comment', $this->comment, true);
        Model::validateRequired('projectName', $this->projectName, true);
        Model::validateRequired('databaseName', $this->databaseName, true);
        Model::validateRequired('partitionKeys', $this->partitionKeys, true);
        Model::validateRequired('location', $this->location, true);
        Model::validateRequired('clusterId', $this->clusterId, true);
        Model::validateRequired('caption', $this->caption, true);
        Model::validateRequired('isPartitionTable', $this->isPartitionTable, true);
        Model::validateRequired('readCount', $this->readCount, true);
        Model::validateRequired('viewCount', $this->viewCount, true);
        Model::validateRequired('favoriteCount', $this->favoriteCount, true);
        Model::validateRequired('isView', $this->isView, true);
        Model::validateRequired('columnCount', $this->columnCount, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->tableGuid) {
            $res['TableGuid'] = $this->tableGuid;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->lastModifyTime) {
            $res['LastModifyTime'] = $this->lastModifyTime;
        }
        if (null !== $this->lifeCycle) {
            $res['LifeCycle'] = $this->lifeCycle;
        }
        if (null !== $this->isVisible) {
            $res['IsVisible'] = $this->isVisible;
        }
        if (null !== $this->lastDdlTime) {
            $res['LastDdlTime'] = $this->lastDdlTime;
        }
        if (null !== $this->lastAccessTime) {
            $res['LastAccessTime'] = $this->lastAccessTime;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->dataSize) {
            $res['DataSize'] = $this->dataSize;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }
        if (null !== $this->partitionKeys) {
            $res['PartitionKeys'] = $this->partitionKeys;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->caption) {
            $res['Caption'] = $this->caption;
        }
        if (null !== $this->isPartitionTable) {
            $res['IsPartitionTable'] = $this->isPartitionTable;
        }
        if (null !== $this->readCount) {
            $res['ReadCount'] = $this->readCount;
        }
        if (null !== $this->viewCount) {
            $res['ViewCount'] = $this->viewCount;
        }
        if (null !== $this->favoriteCount) {
            $res['FavoriteCount'] = $this->favoriteCount;
        }
        if (null !== $this->isView) {
            $res['IsView'] = $this->isView;
        }
        if (null !== $this->columnCount) {
            $res['ColumnCount'] = $this->columnCount;
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
        if (isset($map['TableGuid'])) {
            $model->tableGuid = $map['TableGuid'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['LastModifyTime'])) {
            $model->lastModifyTime = $map['LastModifyTime'];
        }
        if (isset($map['LifeCycle'])) {
            $model->lifeCycle = $map['LifeCycle'];
        }
        if (isset($map['IsVisible'])) {
            $model->isVisible = $map['IsVisible'];
        }
        if (isset($map['LastDdlTime'])) {
            $model->lastDdlTime = $map['LastDdlTime'];
        }
        if (isset($map['LastAccessTime'])) {
            $model->lastAccessTime = $map['LastAccessTime'];
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['DataSize'])) {
            $model->dataSize = $map['DataSize'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }
        if (isset($map['PartitionKeys'])) {
            $model->partitionKeys = $map['PartitionKeys'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Caption'])) {
            $model->caption = $map['Caption'];
        }
        if (isset($map['IsPartitionTable'])) {
            $model->isPartitionTable = $map['IsPartitionTable'];
        }
        if (isset($map['ReadCount'])) {
            $model->readCount = $map['ReadCount'];
        }
        if (isset($map['ViewCount'])) {
            $model->viewCount = $map['ViewCount'];
        }
        if (isset($map['FavoriteCount'])) {
            $model->favoriteCount = $map['FavoriteCount'];
        }
        if (isset($map['IsView'])) {
            $model->isView = $map['IsView'];
        }
        if (isset($map['ColumnCount'])) {
            $model->columnCount = $map['ColumnCount'];
        }

        return $model;
    }
}
