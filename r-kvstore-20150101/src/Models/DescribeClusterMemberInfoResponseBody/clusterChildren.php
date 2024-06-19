<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeClusterMemberInfoResponseBody;

use AlibabaCloud\Tea\Model;

class clusterChildren extends Model
{
    /**
     * @description The maximum bandwidth of the node. Unit: MB/s.
     *
     * > This parameter is returned only if the return value of **Service** is **redis**, which indicates a data node.
     * @example 96
     *
     * @var int
     */
    public $bandWidth;

    /**
     * @description The retention period of binlogs.
     *
     * @example 7
     *
     * @var int
     */
    public $binlogRetentionDays;

    /**
     * @description The type of workload. The return value is **ALIYUN**.
     *
     * @example ALIYUN
     *
     * @var string
     */
    public $bizType;

    /**
     * @description The maximum memory capacity per data node. Unit: MB.
     *
     * > This parameter is returned only if the return value of **Service** is **redis**, which indicates a data node.
     * @example 1024
     *
     * @var int
     */
    public $capacity;

    /**
     * @description The specifications of the data node. For more information, see [Community Edition instances that use cloud disks](https://help.aliyun.com/document_detail/164477.html).
     *
     * @example redis.shard.small.ce
     *
     * @var string
     */
    public $classCode;

    /**
     * @description The maximum number of connections supported by the data node.
     *
     * @example 20000
     *
     * @var int
     */
    public $connections;

    /**
     * @description The current bandwidth of the node, which consists of the default bandwidth and the increased bandwidth. Unit: MB/s.
     *
     * > This parameter is returned only if the instance is created in a dedicated cluster.
     * @example 100
     *
     * @var int
     */
    public $currentBandWidth;

    /**
     * @description The storage capacity of the [enhanced SSD (ESSD)](https://help.aliyun.com/document_detail/122389.html) that is used by the data node. Unit: MB.
     *
     * > The ESSD is used only to store system operating data, such as Persistent Memory (PMEM). It is not used as a medium to write and read data.
     * @example 4096
     *
     * @var int
     */
    public $diskSizeMB;

    /**
     * @description The ID of the replica set in the node.
     *
     * @example 501791111
     *
     * @var int
     */
    public $id;

    /**
     * @description The name of the data node.
     *
     * @example r-bp1zxszhcgatnx****-db-0
     *
     * @var string
     */
    public $name;

    /**
     * @description The number of replica nodes.
     *
     * @example 0
     *
     * @var int
     */
    public $replicaSize;

    /**
     * @description The name of the resource group to which the node belongs.
     *
     * @example GLOBAL_ZHANGJIAKOU_A
     *
     * @var string
     */
    public $resourceGroupName;

    /**
     * @description The node type. Valid values:
     *
     *   **redis**: data node
     *   **redis_cs**: config server
     *
     * @example redis
     *
     * @var string
     */
    public $service;

    /**
     * @description The major version of the node.
     *
     * @example 5.0
     *
     * @var string
     */
    public $serviceVersion;

    /**
     * @description The ID of the user.
     *
     * @example 2****_176498472570****
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'bandWidth'           => 'BandWidth',
        'binlogRetentionDays' => 'BinlogRetentionDays',
        'bizType'             => 'BizType',
        'capacity'            => 'Capacity',
        'classCode'           => 'ClassCode',
        'connections'         => 'Connections',
        'currentBandWidth'    => 'CurrentBandWidth',
        'diskSizeMB'          => 'DiskSizeMB',
        'id'                  => 'Id',
        'name'                => 'Name',
        'replicaSize'         => 'ReplicaSize',
        'resourceGroupName'   => 'ResourceGroupName',
        'service'             => 'Service',
        'serviceVersion'      => 'ServiceVersion',
        'userId'              => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandWidth) {
            $res['BandWidth'] = $this->bandWidth;
        }
        if (null !== $this->binlogRetentionDays) {
            $res['BinlogRetentionDays'] = $this->binlogRetentionDays;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->capacity) {
            $res['Capacity'] = $this->capacity;
        }
        if (null !== $this->classCode) {
            $res['ClassCode'] = $this->classCode;
        }
        if (null !== $this->connections) {
            $res['Connections'] = $this->connections;
        }
        if (null !== $this->currentBandWidth) {
            $res['CurrentBandWidth'] = $this->currentBandWidth;
        }
        if (null !== $this->diskSizeMB) {
            $res['DiskSizeMB'] = $this->diskSizeMB;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->replicaSize) {
            $res['ReplicaSize'] = $this->replicaSize;
        }
        if (null !== $this->resourceGroupName) {
            $res['ResourceGroupName'] = $this->resourceGroupName;
        }
        if (null !== $this->service) {
            $res['Service'] = $this->service;
        }
        if (null !== $this->serviceVersion) {
            $res['ServiceVersion'] = $this->serviceVersion;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusterChildren
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BandWidth'])) {
            $model->bandWidth = $map['BandWidth'];
        }
        if (isset($map['BinlogRetentionDays'])) {
            $model->binlogRetentionDays = $map['BinlogRetentionDays'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['Capacity'])) {
            $model->capacity = $map['Capacity'];
        }
        if (isset($map['ClassCode'])) {
            $model->classCode = $map['ClassCode'];
        }
        if (isset($map['Connections'])) {
            $model->connections = $map['Connections'];
        }
        if (isset($map['CurrentBandWidth'])) {
            $model->currentBandWidth = $map['CurrentBandWidth'];
        }
        if (isset($map['DiskSizeMB'])) {
            $model->diskSizeMB = $map['DiskSizeMB'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ReplicaSize'])) {
            $model->replicaSize = $map['ReplicaSize'];
        }
        if (isset($map['ResourceGroupName'])) {
            $model->resourceGroupName = $map['ResourceGroupName'];
        }
        if (isset($map['Service'])) {
            $model->service = $map['Service'];
        }
        if (isset($map['ServiceVersion'])) {
            $model->serviceVersion = $map['ServiceVersion'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
