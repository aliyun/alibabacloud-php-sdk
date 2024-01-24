<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsRdsInstancesResponseBody\dbInstances;

use AlibabaCloud\Tea\Model;

class dbInstance extends Model
{
    /**
     * @description The internal endpoint of the custom ApsaraDB RDS for MySQL instance at the storage layer.
     *
     * @example rm-***************.mysql.rds.aliyuncs.com
     *
     * @var string
     */
    public $connectUrl;

    /**
     * @description The number of CPU cores of the custom ApsaraDB RDS for MySQL instance at the storage layer.
     *
     * @example 8
     *
     * @var string
     */
    public $DBInstanceCPU;

    /**
     * @description The instance family of the custom ApsaraDB RDS for MySQL instance at the storage layer. Valid values:
     *
     *   **x**: general-purpose instance family
     *   **d**: dedicated instance family
     *   **h**: dedicated host instance family
     *
     * @example x
     *
     * @var string
     */
    public $DBInstanceClassType;

    /**
     * @description The ID of the custom ApsaraDB RDS for MySQL instance at the storage layer.
     *
     * @example rm-*****************
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The memory size of the custom ApsaraDB RDS for MySQL instance at the storage layer. Unit: MB.
     *
     * @example 8192
     *
     * @var int
     */
    public $DBInstanceMemory;

    /**
     * @description The status of the custom ApsaraDB RDS for MySQL instance at the storage layer. Valid values:
     *
     *   0: The instance is being created.
     *   1: The instance is running.
     *   3: The instance is being deleted.
     *   5: The instance is being restarted.
     *   6: The instance is being upgraded or downgraded.
     *   7: The instance is being backed up.
     *   8: The network type of the instance is being changed.
     *   9: The instance is being migrated.
     *   11: The data stored on the instance is being migrated.
     *   12: A disaster recovery instance is being generated.
     *   13: Data is being imported to the instance.
     *   14: Data is being imported from another RDS instance to the instance.
     *   15: A switchover is being performed.
     *   16: A temporary instance is being created.
     *   17: The network of the instance is being created.
     *   18: The instance is being cloned.
     *   19: The link is being changed.
     *   20: The read-only RDS instances of the instance are being migrated.
     *
     * @example 1
     *
     * @var string
     */
    public $DBInstanceStatus;

    /**
     * @description The storage space of the custom ApsaraDB RDS for MySQL instance at the storage layer. Unit: GB.
     *
     * @example 20
     *
     * @var int
     */
    public $DBInstanceStorage;

    /**
     * @description The type of the instance at the storage layer. The value is RDS.
     *
     * @example RDS
     *
     * @var string
     */
    public $dbInstType;

    /**
     * @description The ID of the resource.
     *
     * @example dm-*************
     *
     * @var string
     */
    public $dmInstanceId;

    /**
     * @description The engine type of the custom ApsaraDB RDS for MySQL instance at the storage layer. The value is MySQL.
     *
     * @example MySQL
     *
     * @var string
     */
    public $engine;

    /**
     * @description The engine version of the custom ApsaraDB RDS for MySQL instance at the storage layer. The value is 8.0.
     *
     * @example 8.0
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @description The lock mode of the RDS instance. Valid values:
     *
     * 5: The instance is automatically locked if the storage space of the read-only instances reaches the upper limit.
     * @example 1
     *
     * @var int
     */
    public $lockMode;

    /**
     * @description The reason why the RDS instance is locked.
     *
     * @example Manually Locked
     *
     * @var string
     */
    public $lockReason;

    /**
     * @description The network type of the custom ApsaraDB RDS for MySQL instance at the storage layer. The value is VPC.
     *
     * @example VPC
     *
     * @var string
     */
    public $networkType;

    /**
     * @description The billing method of the custom ApsaraDB RDS for MySQL instance at the storage layer. Valid values:
     *
     *   Postpaid: pay-as-you-go
     *   Prepaid: subscription
     *
     * @example PostPaid
     *
     * @var string
     */
    public $payType;

    /**
     * @description The port used to connect to the instance over an internal network.
     *
     * @example 3306
     *
     * @var int
     */
    public $port;

    /**
     * @description The type of the custom ApsaraDB RDS for MySQL instance at the storage layer. Valid values:
     *
     *   Primary: primary instance
     *   Readonly: read-only instance
     *
     * @example Primary
     *
     * @var string
     */
    public $rdsInstType;

    /**
     * @description The read and write weights of the custom ApsaraDB RDS for MySQL instance at the storage layer.
     *
     * @example 0
     *
     * @var int
     */
    public $readWeight;
    protected $_name = [
        'connectUrl'          => 'ConnectUrl',
        'DBInstanceCPU'       => 'DBInstanceCPU',
        'DBInstanceClassType' => 'DBInstanceClassType',
        'DBInstanceId'        => 'DBInstanceId',
        'DBInstanceMemory'    => 'DBInstanceMemory',
        'DBInstanceStatus'    => 'DBInstanceStatus',
        'DBInstanceStorage'   => 'DBInstanceStorage',
        'dbInstType'          => 'DbInstType',
        'dmInstanceId'        => 'DmInstanceId',
        'engine'              => 'Engine',
        'engineVersion'       => 'EngineVersion',
        'lockMode'            => 'LockMode',
        'lockReason'          => 'LockReason',
        'networkType'         => 'NetworkType',
        'payType'             => 'PayType',
        'port'                => 'Port',
        'rdsInstType'         => 'RdsInstType',
        'readWeight'          => 'ReadWeight',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectUrl) {
            $res['ConnectUrl'] = $this->connectUrl;
        }
        if (null !== $this->DBInstanceCPU) {
            $res['DBInstanceCPU'] = $this->DBInstanceCPU;
        }
        if (null !== $this->DBInstanceClassType) {
            $res['DBInstanceClassType'] = $this->DBInstanceClassType;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->DBInstanceMemory) {
            $res['DBInstanceMemory'] = $this->DBInstanceMemory;
        }
        if (null !== $this->DBInstanceStatus) {
            $res['DBInstanceStatus'] = $this->DBInstanceStatus;
        }
        if (null !== $this->DBInstanceStorage) {
            $res['DBInstanceStorage'] = $this->DBInstanceStorage;
        }
        if (null !== $this->dbInstType) {
            $res['DbInstType'] = $this->dbInstType;
        }
        if (null !== $this->dmInstanceId) {
            $res['DmInstanceId'] = $this->dmInstanceId;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->lockMode) {
            $res['LockMode'] = $this->lockMode;
        }
        if (null !== $this->lockReason) {
            $res['LockReason'] = $this->lockReason;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->rdsInstType) {
            $res['RdsInstType'] = $this->rdsInstType;
        }
        if (null !== $this->readWeight) {
            $res['ReadWeight'] = $this->readWeight;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dbInstance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectUrl'])) {
            $model->connectUrl = $map['ConnectUrl'];
        }
        if (isset($map['DBInstanceCPU'])) {
            $model->DBInstanceCPU = $map['DBInstanceCPU'];
        }
        if (isset($map['DBInstanceClassType'])) {
            $model->DBInstanceClassType = $map['DBInstanceClassType'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DBInstanceMemory'])) {
            $model->DBInstanceMemory = $map['DBInstanceMemory'];
        }
        if (isset($map['DBInstanceStatus'])) {
            $model->DBInstanceStatus = $map['DBInstanceStatus'];
        }
        if (isset($map['DBInstanceStorage'])) {
            $model->DBInstanceStorage = $map['DBInstanceStorage'];
        }
        if (isset($map['DbInstType'])) {
            $model->dbInstType = $map['DbInstType'];
        }
        if (isset($map['DmInstanceId'])) {
            $model->dmInstanceId = $map['DmInstanceId'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['LockMode'])) {
            $model->lockMode = $map['LockMode'];
        }
        if (isset($map['LockReason'])) {
            $model->lockReason = $map['LockReason'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['RdsInstType'])) {
            $model->rdsInstType = $map['RdsInstType'];
        }
        if (isset($map['ReadWeight'])) {
            $model->readWeight = $map['ReadWeight'];
        }

        return $model;
    }
}
