<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDbInstanceResponseBody;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDbInstanceResponseBody\dbInstance\readOnlyInstances;
use AlibabaCloud\Tea\Model;

class dbInstance extends Model
{
    /**
     * @description The URL used to connect to the custom ApsaraDB RDS for MySQL instance.
     *
     * @example rm-***************.mysql.rds.aliyuncs.com
     *
     * @var string
     */
    public $connectUrl;

    /**
     * @description The ID of the ApsaraDB RDS for MySQL instance.
     *
     * @example rm-***************
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The state of the instance.
     *
     * @example 1
     *
     * @var string
     */
    public $DBInstanceStatus;

    /**
     * @description The role of the instance. Valid values:
     *
     *   **Primary**: The instance is a primary instance.
     *   **ReadOnly**: The instance is a read-only instance.
     *
     * @example Primary
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
     * @description The engine of the database that is run on the instance. Valid value: **MySQL**.
     *
     * @example MySQL
     *
     * @var string
     */
    public $engine;

    /**
     * @description The engine version of the database that is run on the instance. Valid values: **5.7**.
     *
     * @example 5.7
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @description The time when the custom ApsaraDB RDS for MySQL instance expires. The value of this parameter is a UNIX timestamp. Unit: seconds.
     *
     * >  This parameter is returned only when the custom ApsaraDB RDS for MySQL instance is a subscription instance.
     * @example 12341434315
     *
     * @var string
     */
    public $expireTime;

    /**
     * @description The type of the network. Valid values: **VPC**.
     *
     * @example VPC
     *
     * @var string
     */
    public $networkType;

    /**
     * @description The billing method of the custom ApsaraDB RDS for MySQL instance. Valid values:
     *
     *   **Prepaid**: subscription
     *   **Postaid**: pay-as-you-go
     *
     * @example Postpaid
     *
     * @var string
     */
    public $payType;

    /**
     * @description The port used to connect to the custom ApsaraDB RDS for MySQL instance.
     *
     * @example 3306
     *
     * @var int
     */
    public $port;

    /**
     * @description The type of the instance.
     *
     * @example RDS
     *
     * @var string
     */
    public $rdsInstType;

    /**
     * @description The list of read-only ApsaraDB RDS for MySQL instances.
     *
     * @var readOnlyInstances
     */
    public $readOnlyInstances;

    /**
     * @description The read ratio of the instance.
     *
     * @example 70
     *
     * @var int
     */
    public $readWeight;

    /**
     * @description The number of remaining days before the instance expires.
     *
     * @example 0
     *
     * @var string
     */
    public $remainDays;
    protected $_name = [
        'connectUrl'        => 'ConnectUrl',
        'DBInstanceId'      => 'DBInstanceId',
        'DBInstanceStatus'  => 'DBInstanceStatus',
        'dbInstType'        => 'DbInstType',
        'dmInstanceId'      => 'DmInstanceId',
        'engine'            => 'Engine',
        'engineVersion'     => 'EngineVersion',
        'expireTime'        => 'ExpireTime',
        'networkType'       => 'NetworkType',
        'payType'           => 'PayType',
        'port'              => 'Port',
        'rdsInstType'       => 'RdsInstType',
        'readOnlyInstances' => 'ReadOnlyInstances',
        'readWeight'        => 'ReadWeight',
        'remainDays'        => 'RemainDays',
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
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
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
        if (null !== $this->readOnlyInstances) {
            $res['ReadOnlyInstances'] = null !== $this->readOnlyInstances ? $this->readOnlyInstances->toMap() : null;
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
     * @return dbInstance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectUrl'])) {
            $model->connectUrl = $map['ConnectUrl'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
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
        if (isset($map['ReadOnlyInstances'])) {
            $model->readOnlyInstances = readOnlyInstances::fromMap($map['ReadOnlyInstances']);
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
