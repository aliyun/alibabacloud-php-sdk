<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDbInstancesResponseBody\dbInstances\dbInstance\readOnlyInstances;

use AlibabaCloud\Tea\Model;

class readOnlyInstance extends Model
{
    /**
     * @description Indicates the endpoint that is used to connect to the ApsaraDB RDS for MySQL instance that is used to store the data of the specified database.
     *
     * @example rm-bp1t1mk5a5b******.mysql.rds.aliyuncs.com
     *
     * @var string
     */
    public $connectUrl;

    /**
     * @description Indicates the state of the ApsaraDB RDS for MySQL instance that is used to store the data of the specified database. Valid values:
     *
     *   **0**: The ApsaraDB RDS for MySQL instance is being created.
     *   **1**: The ApsaraDB RDS for MySQL instance is running.
     *   **3**: The ApsaraDB RDS for MySQL instance is being deleted.
     *   **5**: The ApsaraDB RDS for MySQL instance is being restarted.
     *   **6**: The ApsaraDB RDS for MySQL instance is being upgraded or downgraded.
     *   **7**: The ApsaraDB RDS for MySQL instance is being backed up.
     *   **8**: The network type of the ApsaraDB RDS for MySQL instance is being changed.
     *   **9**: The ApsaraDB RDS for MySQL instance is being migrated.
     *   **11**: The data of the ApsaraDB RDS for MySQL instance is being migrated.
     *   **12**: A disaster-recovery instance is being generated.
     *   **13**: Data is being imported to the ApsaraDB RDS for MySQL instance.
     *   **14**: Data is being imported to the ApsaraDB RDS for MySQL instance from an another ApsaraDB RDS for MySQL instance.
     *   **15**: A failover is being performed.
     *   **16**: A temporary instance is being created.
     *   **17**: A network is being created for the ApsaraDB RDS for MySQL instance.
     *   **18**: The ApsaraDB RDS for MySQL instance is being cloned.
     *   **19**: The link is being changed.
     *   **20**: The read-only instances of the ApsaraDB RDS for MySQL instance are being migrated.
     *
     * @example 1
     *
     * @var string
     */
    public $DBInstanceStatus;

    /**
     * @description Indicates the type of the ApsaraDB RDS for MySQL instance that is used to store the data of the specified database. The value is set to RDS.
     *
     * @example RDS
     *
     * @var string
     */
    public $dbInstType;

    /**
     * @description Indicates the ID of a resource.
     *
     * @example dm-hbgau1zp****
     *
     * @var string
     */
    public $dmInstanceId;

    /**
     * @description Indicates the engine of the ApsaraDB RDS for MySQL instance that is used to store the data of the specified database.
     *
     * @example MySQL
     *
     * @var string
     */
    public $engine;

    /**
     * @description Indicates the engine version of the ApsaraDB RDS for MySQL instance that is used to store the data of the specified database.
     *
     * @example 5.7
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @description Indicates the timestamp when the ApsaraDB RDS for MySQL instance that is used to store the data of the specified database expires.
     *
     * @example 123421352351234
     *
     * @var string
     */
    public $expireTime;

    /**
     * @description Indicates the name of a read-only instance.
     *
     * @example **
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description Indicates the network type of the read-only instance.
     *
     * @example VPC
     *
     * @var string
     */
    public $networkType;

    /**
     * @description Indicates the billing method of the read-only instance.
     *
     *   **drdsPre**: The instance uses the subscription billing method.
     *   **drdsPost**: The instance uses the pay-as-you-go billing method.
     *
     * @example Postpaid
     *
     * @var string
     */
    public $payType;

    /**
     * @description Indicates the port that is used to connect to the read-only instance.
     *
     * @example 3306
     *
     * @var int
     */
    public $port;

    /**
     * @description Indicates the type of the read-only instance.
     *
     * @example RDS
     *
     * @var string
     */
    public $rdsInstType;

    /**
     * @description Indicates the read weight of the read-only instance.
     *
     * @example 70
     *
     * @var int
     */
    public $readWeight;

    /**
     * @description Indicates the number of remaining days before the read-only instance expires.
     *
     * @example 0
     *
     * @var int
     */
    public $remainDays;
    protected $_name = [
        'connectUrl'       => 'ConnectUrl',
        'DBInstanceStatus' => 'DBInstanceStatus',
        'dbInstType'       => 'DbInstType',
        'dmInstanceId'     => 'DmInstanceId',
        'engine'           => 'Engine',
        'engineVersion'    => 'EngineVersion',
        'expireTime'       => 'ExpireTime',
        'instanceName'     => 'InstanceName',
        'networkType'      => 'NetworkType',
        'payType'          => 'PayType',
        'port'             => 'Port',
        'rdsInstType'      => 'RdsInstType',
        'readWeight'       => 'ReadWeight',
        'remainDays'       => 'RemainDays',
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
        if (null !== $this->DBInstanceStatus) {
            $res['DBInstanceStatus'] = $this->DBInstanceStatus;
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
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
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
        if (null !== $this->remainDays) {
            $res['RemainDays'] = $this->remainDays;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return readOnlyInstance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectUrl'])) {
            $model->connectUrl = $map['ConnectUrl'];
        }
        if (isset($map['DBInstanceStatus'])) {
            $model->DBInstanceStatus = $map['DBInstanceStatus'];
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
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
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
        if (isset($map['RemainDays'])) {
            $model->remainDays = $map['RemainDays'];
        }

        return $model;
    }
}
