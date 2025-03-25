<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterMigrationResponseBody\DBClusterEndpointList;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterMigrationResponseBody\rdsEndpointList;

class DescribeDBClusterMigrationResponseBody extends Model
{
    /**
     * @var string
     */
    public $comment;

    /**
     * @var DBClusterEndpointList[]
     */
    public $DBClusterEndpointList;

    /**
     * @var string
     */
    public $DBClusterId;

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
    public $dtsInstanceId;

    /**
     * @var string
     */
    public $expiredTime;

    /**
     * @var string
     */
    public $migrationStatus;

    /**
     * @var rdsEndpointList[]
     */
    public $rdsEndpointList;

    /**
     * @var string
     */
    public $rdsReadWriteMode;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $sourceRDSDBInstanceId;

    /**
     * @var string
     */
    public $srcDbType;

    /**
     * @var string
     */
    public $topologies;
    protected $_name = [
        'comment' => 'Comment',
        'DBClusterEndpointList' => 'DBClusterEndpointList',
        'DBClusterId' => 'DBClusterId',
        'DBClusterReadWriteMode' => 'DBClusterReadWriteMode',
        'delayedSeconds' => 'DelayedSeconds',
        'dtsInstanceId' => 'DtsInstanceId',
        'expiredTime' => 'ExpiredTime',
        'migrationStatus' => 'MigrationStatus',
        'rdsEndpointList' => 'RdsEndpointList',
        'rdsReadWriteMode' => 'RdsReadWriteMode',
        'requestId' => 'RequestId',
        'sourceRDSDBInstanceId' => 'SourceRDSDBInstanceId',
        'srcDbType' => 'SrcDbType',
        'topologies' => 'Topologies',
    ];

    public function validate()
    {
        if (\is_array($this->DBClusterEndpointList)) {
            Model::validateArray($this->DBClusterEndpointList);
        }
        if (\is_array($this->rdsEndpointList)) {
            Model::validateArray($this->rdsEndpointList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }

        if (null !== $this->DBClusterEndpointList) {
            if (\is_array($this->DBClusterEndpointList)) {
                $res['DBClusterEndpointList'] = [];
                $n1 = 0;
                foreach ($this->DBClusterEndpointList as $item1) {
                    $res['DBClusterEndpointList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->DBClusterReadWriteMode) {
            $res['DBClusterReadWriteMode'] = $this->DBClusterReadWriteMode;
        }

        if (null !== $this->delayedSeconds) {
            $res['DelayedSeconds'] = $this->delayedSeconds;
        }

        if (null !== $this->dtsInstanceId) {
            $res['DtsInstanceId'] = $this->dtsInstanceId;
        }

        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }

        if (null !== $this->migrationStatus) {
            $res['MigrationStatus'] = $this->migrationStatus;
        }

        if (null !== $this->rdsEndpointList) {
            if (\is_array($this->rdsEndpointList)) {
                $res['RdsEndpointList'] = [];
                $n1 = 0;
                foreach ($this->rdsEndpointList as $item1) {
                    $res['RdsEndpointList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->rdsReadWriteMode) {
            $res['RdsReadWriteMode'] = $this->rdsReadWriteMode;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->sourceRDSDBInstanceId) {
            $res['SourceRDSDBInstanceId'] = $this->sourceRDSDBInstanceId;
        }

        if (null !== $this->srcDbType) {
            $res['SrcDbType'] = $this->srcDbType;
        }

        if (null !== $this->topologies) {
            $res['Topologies'] = $this->topologies;
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
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }

        if (isset($map['DBClusterEndpointList'])) {
            if (!empty($map['DBClusterEndpointList'])) {
                $model->DBClusterEndpointList = [];
                $n1 = 0;
                foreach ($map['DBClusterEndpointList'] as $item1) {
                    $model->DBClusterEndpointList[$n1++] = DBClusterEndpointList::fromMap($item1);
                }
            }
        }

        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['DBClusterReadWriteMode'])) {
            $model->DBClusterReadWriteMode = $map['DBClusterReadWriteMode'];
        }

        if (isset($map['DelayedSeconds'])) {
            $model->delayedSeconds = $map['DelayedSeconds'];
        }

        if (isset($map['DtsInstanceId'])) {
            $model->dtsInstanceId = $map['DtsInstanceId'];
        }

        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }

        if (isset($map['MigrationStatus'])) {
            $model->migrationStatus = $map['MigrationStatus'];
        }

        if (isset($map['RdsEndpointList'])) {
            if (!empty($map['RdsEndpointList'])) {
                $model->rdsEndpointList = [];
                $n1 = 0;
                foreach ($map['RdsEndpointList'] as $item1) {
                    $model->rdsEndpointList[$n1++] = rdsEndpointList::fromMap($item1);
                }
            }
        }

        if (isset($map['RdsReadWriteMode'])) {
            $model->rdsReadWriteMode = $map['RdsReadWriteMode'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SourceRDSDBInstanceId'])) {
            $model->sourceRDSDBInstanceId = $map['SourceRDSDBInstanceId'];
        }

        if (isset($map['SrcDbType'])) {
            $model->srcDbType = $map['SrcDbType'];
        }

        if (isset($map['Topologies'])) {
            $model->topologies = $map['Topologies'];
        }

        return $model;
    }
}
