<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstanceAttributeResponseBody\DBInstances\DBInstance\configserverList;

use AlibabaCloud\Tea\Model;

class configserverAttribute extends Model
{
    /**
     * @description The endpoint of the Configserver node.
     *
     * @example dds-bp18b0934e7053e4-cs****.mongodb.rds.aliyuncs.com
     *
     * @var string
     */
    public $connectString;

    /**
     * @description The minor version of the current MongoDB kernel.
     *
     * @example mongodb_20230613_4.0.25
     *
     * @var string
     */
    public $currentKernelVersion;

    /**
     * @description The lock status of the Configserver node. Valid values:
     *
     *   **Unlock**: The instance is not locked.
     *   **ManualLock**: The instance is manually locked.
     *   **LockByExpiration**: The instance is automatically locked due to instance expiration.
     *   **LockByRestoration**: The instance is automatically locked before a rollback.
     *   **LockByDiskQuota**: The instance is automatically locked because its storage capacity is exhausted and the instance is inaccessible.
     *
     * @example Unlock
     *
     * @var string
     */
    public $lockMode;

    /**
     * @description The maximum number of connections to the Configserver node.
     *
     * @example 1000
     *
     * @var int
     */
    public $maxConnections;

    /**
     * @description The maximum IOPS of the Configserver node.
     *
     * @example 1000
     *
     * @var int
     */
    public $maxIOPS;

    /**
     * @description The instance type of the Configserver node.
     *
     * @example dds.cs.mid
     *
     * @var string
     */
    public $nodeClass;

    /**
     * @description The name of the Configserver node.
     *
     * @example testConfigserver
     *
     * @var string
     */
    public $nodeDescription;

    /**
     * @description The ID of the Configserver node.
     *
     * @example dds-bp11483712c1****-cs
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The storage capacity of the Configserver node. Unit: GB.
     *
     * @example 20
     *
     * @var int
     */
    public $nodeStorage;

    /**
     * @description The port number that is used to connect to the Configserver node.
     *
     * @example 3717
     *
     * @var int
     */
    public $port;

    /**
     * @description The status of the Configserver node. For more information, see [Instance states](https://help.aliyun.com/document_detail/63870.html).
     *
     * @example Running
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'connectString'        => 'ConnectString',
        'currentKernelVersion' => 'CurrentKernelVersion',
        'lockMode'             => 'LockMode',
        'maxConnections'       => 'MaxConnections',
        'maxIOPS'              => 'MaxIOPS',
        'nodeClass'            => 'NodeClass',
        'nodeDescription'      => 'NodeDescription',
        'nodeId'               => 'NodeId',
        'nodeStorage'          => 'NodeStorage',
        'port'                 => 'Port',
        'status'               => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectString) {
            $res['ConnectString'] = $this->connectString;
        }
        if (null !== $this->currentKernelVersion) {
            $res['CurrentKernelVersion'] = $this->currentKernelVersion;
        }
        if (null !== $this->lockMode) {
            $res['LockMode'] = $this->lockMode;
        }
        if (null !== $this->maxConnections) {
            $res['MaxConnections'] = $this->maxConnections;
        }
        if (null !== $this->maxIOPS) {
            $res['MaxIOPS'] = $this->maxIOPS;
        }
        if (null !== $this->nodeClass) {
            $res['NodeClass'] = $this->nodeClass;
        }
        if (null !== $this->nodeDescription) {
            $res['NodeDescription'] = $this->nodeDescription;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->nodeStorage) {
            $res['NodeStorage'] = $this->nodeStorage;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configserverAttribute
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectString'])) {
            $model->connectString = $map['ConnectString'];
        }
        if (isset($map['CurrentKernelVersion'])) {
            $model->currentKernelVersion = $map['CurrentKernelVersion'];
        }
        if (isset($map['LockMode'])) {
            $model->lockMode = $map['LockMode'];
        }
        if (isset($map['MaxConnections'])) {
            $model->maxConnections = $map['MaxConnections'];
        }
        if (isset($map['MaxIOPS'])) {
            $model->maxIOPS = $map['MaxIOPS'];
        }
        if (isset($map['NodeClass'])) {
            $model->nodeClass = $map['NodeClass'];
        }
        if (isset($map['NodeDescription'])) {
            $model->nodeDescription = $map['NodeDescription'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['NodeStorage'])) {
            $model->nodeStorage = $map['NodeStorage'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
