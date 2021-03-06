<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterMigrationResponseBody\DBClusterEndpointList;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterMigrationResponseBody\rdsEndpointList;
use AlibabaCloud\Tea\Model;

class DescribeDBClusterMigrationResponseBody extends Model
{
    /**
     * @var DBClusterEndpointList[]
     */
    public $DBClusterEndpointList;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $expiredTime;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $topologies;

    /**
     * @var string
     */
    public $rdsReadWriteMode;

    /**
     * @var string
     */
    public $sourceRDSDBInstanceId;

    /**
     * @var string
     */
    public $DBClusterReadWriteMode;

    /**
     * @var int
     */
    public $delayedSeconds;

    /**
     * @var string
     */
    public $migrationStatus;

    /**
     * @var rdsEndpointList[]
     */
    public $rdsEndpointList;
    protected $_name = [
        'DBClusterEndpointList'  => 'DBClusterEndpointList',
        'comment'                => 'Comment',
        'requestId'              => 'RequestId',
        'expiredTime'            => 'ExpiredTime',
        'DBClusterId'            => 'DBClusterId',
        'topologies'             => 'Topologies',
        'rdsReadWriteMode'       => 'RdsReadWriteMode',
        'sourceRDSDBInstanceId'  => 'SourceRDSDBInstanceId',
        'DBClusterReadWriteMode' => 'DBClusterReadWriteMode',
        'delayedSeconds'         => 'DelayedSeconds',
        'migrationStatus'        => 'MigrationStatus',
        'rdsEndpointList'        => 'RdsEndpointList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClusterEndpointList) {
            $res['DBClusterEndpointList'] = [];
            if (null !== $this->DBClusterEndpointList && \is_array($this->DBClusterEndpointList)) {
                $n = 0;
                foreach ($this->DBClusterEndpointList as $item) {
                    $res['DBClusterEndpointList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->topologies) {
            $res['Topologies'] = $this->topologies;
        }
        if (null !== $this->rdsReadWriteMode) {
            $res['RdsReadWriteMode'] = $this->rdsReadWriteMode;
        }
        if (null !== $this->sourceRDSDBInstanceId) {
            $res['SourceRDSDBInstanceId'] = $this->sourceRDSDBInstanceId;
        }
        if (null !== $this->DBClusterReadWriteMode) {
            $res['DBClusterReadWriteMode'] = $this->DBClusterReadWriteMode;
        }
        if (null !== $this->delayedSeconds) {
            $res['DelayedSeconds'] = $this->delayedSeconds;
        }
        if (null !== $this->migrationStatus) {
            $res['MigrationStatus'] = $this->migrationStatus;
        }
        if (null !== $this->rdsEndpointList) {
            $res['RdsEndpointList'] = [];
            if (null !== $this->rdsEndpointList && \is_array($this->rdsEndpointList)) {
                $n = 0;
                foreach ($this->rdsEndpointList as $item) {
                    $res['RdsEndpointList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBClusterMigrationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterEndpointList'])) {
            if (!empty($map['DBClusterEndpointList'])) {
                $model->DBClusterEndpointList = [];
                $n                            = 0;
                foreach ($map['DBClusterEndpointList'] as $item) {
                    $model->DBClusterEndpointList[$n++] = null !== $item ? DBClusterEndpointList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['Topologies'])) {
            $model->topologies = $map['Topologies'];
        }
        if (isset($map['RdsReadWriteMode'])) {
            $model->rdsReadWriteMode = $map['RdsReadWriteMode'];
        }
        if (isset($map['SourceRDSDBInstanceId'])) {
            $model->sourceRDSDBInstanceId = $map['SourceRDSDBInstanceId'];
        }
        if (isset($map['DBClusterReadWriteMode'])) {
            $model->DBClusterReadWriteMode = $map['DBClusterReadWriteMode'];
        }
        if (isset($map['DelayedSeconds'])) {
            $model->delayedSeconds = $map['DelayedSeconds'];
        }
        if (isset($map['MigrationStatus'])) {
            $model->migrationStatus = $map['MigrationStatus'];
        }
        if (isset($map['RdsEndpointList'])) {
            if (!empty($map['RdsEndpointList'])) {
                $model->rdsEndpointList = [];
                $n                      = 0;
                foreach ($map['RdsEndpointList'] as $item) {
                    $model->rdsEndpointList[$n++] = null !== $item ? rdsEndpointList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
