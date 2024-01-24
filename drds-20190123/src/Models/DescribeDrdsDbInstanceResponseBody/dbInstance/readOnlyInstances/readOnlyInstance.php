<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDbInstanceResponseBody\dbInstance\readOnlyInstances;

use AlibabaCloud\Tea\Model;

class readOnlyInstance extends Model
{
    /**
     * @description The URL used to connect to the read-only instance.
     *
     * @example rm-bp1ub71ct9skc3yxx.mysql.rds.aliyuncs.com
     *
     * @var string
     */
    public $connectUrl;

    /**
     * @description The ID of the read-only instance.
     *
     * @example rm-bp1ub71ct9skc****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The state of the read-only instance.
     *
     * @example 1
     *
     * @var string
     */
    public $DBInstanceStatus;

    /**
     * @description The role of the read-only instance.
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
     * @description The engine of the database that is run on the read-only instance.
     *
     * @example MySQL
     *
     * @var string
     */
    public $engine;

    /**
     * @description The engine version of the database that is run on the read-only instance.
     *
     * @example 5.7
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @description The timestamp that indicates when the read-only instance expires.
     *
     * @example 1823487328173
     *
     * @var string
     */
    public $expireTime;

    /**
     * @description The network type of the read-only instance.
     *
     * @example VPC
     *
     * @var string
     */
    public $networkType;

    /**
     * @description The billing method of the read-only instance.
     *
     * @example Postpaid
     *
     * @var string
     */
    public $payType;

    /**
     * @description The port used to connect to the read-only instance.
     *
     * @example 3306
     *
     * @var int
     */
    public $port;

    /**
     * @description The type of the ApsaraDB RDS for MySQL instance.
     *
     * @example RDS
     *
     * @var string
     */
    public $rdsInstType;

    /**
     * @description The read ratio of the read-only instance.
     *
     * @example 30
     *
     * @var int
     */
    public $readWeight;

    /**
     * @description The number of remaining days before the read-only instance expires.
     *
     * @example 0
     *
     * @var string
     */
    public $remainDays;

    /**
     * @description This parameter is unavailable for read-only instances.
     *
     * @example 0
     *
     * @var int
     */
    public $versionAction;
    protected $_name = [
        'connectUrl'       => 'ConnectUrl',
        'DBInstanceId'     => 'DBInstanceId',
        'DBInstanceStatus' => 'DBInstanceStatus',
        'dbInstType'       => 'DbInstType',
        'dmInstanceId'     => 'DmInstanceId',
        'engine'           => 'Engine',
        'engineVersion'    => 'EngineVersion',
        'expireTime'       => 'ExpireTime',
        'networkType'      => 'NetworkType',
        'payType'          => 'PayType',
        'port'             => 'Port',
        'rdsInstType'      => 'RdsInstType',
        'readWeight'       => 'ReadWeight',
        'remainDays'       => 'RemainDays',
        'versionAction'    => 'VersionAction',
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
        if (null !== $this->readWeight) {
            $res['ReadWeight'] = $this->readWeight;
        }
        if (null !== $this->remainDays) {
            $res['RemainDays'] = $this->remainDays;
        }
        if (null !== $this->versionAction) {
            $res['VersionAction'] = $this->versionAction;
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
        if (isset($map['ReadWeight'])) {
            $model->readWeight = $map['ReadWeight'];
        }
        if (isset($map['RemainDays'])) {
            $model->remainDays = $map['RemainDays'];
        }
        if (isset($map['VersionAction'])) {
            $model->versionAction = $map['VersionAction'];
        }

        return $model;
    }
}
