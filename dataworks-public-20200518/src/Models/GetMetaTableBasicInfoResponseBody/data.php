<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableBasicInfoResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $caption;
    /**
     * @var string
     */
    public $clusterId;
    /**
     * @var int
     */
    public $columnCount;
    /**
     * @var string
     */
    public $comment;
    /**
     * @var int
     */
    public $createTime;
    /**
     * @var int
     */
    public $dataSize;
    /**
     * @var string
     */
    public $databaseName;
    /**
     * @var int
     */
    public $envType;
    /**
     * @var int
     */
    public $favoriteCount;
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
    public $isVisible;
    /**
     * @var int
     */
    public $lastAccessTime;
    /**
     * @var int
     */
    public $lastDdlTime;
    /**
     * @var int
     */
    public $lastModifyTime;
    /**
     * @var int
     */
    public $lifeCycle;
    /**
     * @var string
     */
    public $location;
    /**
     * @var string
     */
    public $ownerId;
    /**
     * @var string
     */
    public $partitionKeys;
    /**
     * @var int
     */
    public $projectId;
    /**
     * @var string
     */
    public $projectName;
    /**
     * @var int
     */
    public $readCount;
    /**
     * @var string
     */
    public $schema;
    /**
     * @var string
     */
    public $tableGuid;
    /**
     * @var string
     */
    public $tableName;
    /**
     * @var int
     */
    public $tenantId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
