<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableFullInfoResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableFullInfoResponseBody\data\columnList;
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
    public $comment;

    /**
     * @var int
     */
    public $lifeCycle;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $projectName;

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
     * @var string
     */
    public $databaseName;

    /**
     * @var int
     */
    public $isVisible;

    /**
     * @var int
     */
    public $totalColumnCount;

    /**
     * @var string
     */
    public $tableGuid;

    /**
     * @var string
     */
    public $partitionKeys;

    /**
     * @var int
     */
    public $lastDdlTime;

    /**
     * @var string
     */
    public $location;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var int
     */
    public $tenantId;

    /**
     * @var columnList[]
     */
    public $columnList;
    protected $_name = [
        'tableName'        => 'TableName',
        'comment'          => 'Comment',
        'lifeCycle'        => 'LifeCycle',
        'createTime'       => 'CreateTime',
        'projectName'      => 'ProjectName',
        'projectId'        => 'ProjectId',
        'ownerId'          => 'OwnerId',
        'envType'          => 'EnvType',
        'lastAccessTime'   => 'LastAccessTime',
        'dataSize'         => 'DataSize',
        'lastModifyTime'   => 'LastModifyTime',
        'databaseName'     => 'DatabaseName',
        'isVisible'        => 'IsVisible',
        'totalColumnCount' => 'TotalColumnCount',
        'tableGuid'        => 'TableGuid',
        'partitionKeys'    => 'PartitionKeys',
        'lastDdlTime'      => 'LastDdlTime',
        'location'         => 'Location',
        'clusterId'        => 'ClusterId',
        'tenantId'         => 'TenantId',
        'columnList'       => 'ColumnList',
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
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->lifeCycle) {
            $res['LifeCycle'] = $this->lifeCycle;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
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
        if (null !== $this->lastAccessTime) {
            $res['LastAccessTime'] = $this->lastAccessTime;
        }
        if (null !== $this->dataSize) {
            $res['DataSize'] = $this->dataSize;
        }
        if (null !== $this->lastModifyTime) {
            $res['LastModifyTime'] = $this->lastModifyTime;
        }
        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }
        if (null !== $this->isVisible) {
            $res['IsVisible'] = $this->isVisible;
        }
        if (null !== $this->totalColumnCount) {
            $res['TotalColumnCount'] = $this->totalColumnCount;
        }
        if (null !== $this->tableGuid) {
            $res['TableGuid'] = $this->tableGuid;
        }
        if (null !== $this->partitionKeys) {
            $res['PartitionKeys'] = $this->partitionKeys;
        }
        if (null !== $this->lastDdlTime) {
            $res['LastDdlTime'] = $this->lastDdlTime;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
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
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['LifeCycle'])) {
            $model->lifeCycle = $map['LifeCycle'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
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
        if (isset($map['LastAccessTime'])) {
            $model->lastAccessTime = $map['LastAccessTime'];
        }
        if (isset($map['DataSize'])) {
            $model->dataSize = $map['DataSize'];
        }
        if (isset($map['LastModifyTime'])) {
            $model->lastModifyTime = $map['LastModifyTime'];
        }
        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }
        if (isset($map['IsVisible'])) {
            $model->isVisible = $map['IsVisible'];
        }
        if (isset($map['TotalColumnCount'])) {
            $model->totalColumnCount = $map['TotalColumnCount'];
        }
        if (isset($map['TableGuid'])) {
            $model->tableGuid = $map['TableGuid'];
        }
        if (isset($map['PartitionKeys'])) {
            $model->partitionKeys = $map['PartitionKeys'];
        }
        if (isset($map['LastDdlTime'])) {
            $model->lastDdlTime = $map['LastDdlTime'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
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

        return $model;
    }
}
