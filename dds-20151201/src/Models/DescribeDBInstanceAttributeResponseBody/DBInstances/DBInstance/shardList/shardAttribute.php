<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstanceAttributeResponseBody\DBInstances\DBInstance\shardList;

use AlibabaCloud\Dara\Model;

class shardAttribute extends Model
{
    /**
     * @var string
     */
    public $connectString;

    /**
     * @var string
     */
    public $currentKernelVersion;

    /**
     * @var string
     */
    public $lockMode;

    /**
     * @var int
     */
    public $maxConnections;

    /**
     * @var string
     */
    public $maxDiskMbps;

    /**
     * @var int
     */
    public $maxIOPS;

    /**
     * @var string
     */
    public $nodeClass;

    /**
     * @var string
     */
    public $nodeDescription;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var int
     */
    public $nodeStorage;

    /**
     * @var int
     */
    public $port;

    /**
     * @var int
     */
    public $readonlyReplicas;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'connectString' => 'ConnectString',
        'currentKernelVersion' => 'CurrentKernelVersion',
        'lockMode' => 'LockMode',
        'maxConnections' => 'MaxConnections',
        'maxDiskMbps' => 'MaxDiskMbps',
        'maxIOPS' => 'MaxIOPS',
        'nodeClass' => 'NodeClass',
        'nodeDescription' => 'NodeDescription',
        'nodeId' => 'NodeId',
        'nodeStorage' => 'NodeStorage',
        'port' => 'Port',
        'readonlyReplicas' => 'ReadonlyReplicas',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->maxDiskMbps) {
            $res['MaxDiskMbps'] = $this->maxDiskMbps;
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

        if (null !== $this->readonlyReplicas) {
            $res['ReadonlyReplicas'] = $this->readonlyReplicas;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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

        if (isset($map['MaxDiskMbps'])) {
            $model->maxDiskMbps = $map['MaxDiskMbps'];
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

        if (isset($map['ReadonlyReplicas'])) {
            $model->readonlyReplicas = $map['ReadonlyReplicas'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
