<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDbInstancesResponseBody\dbInstances\dbInstance\readOnlyInstances;

use AlibabaCloud\Dara\Model;

class readOnlyInstance extends Model
{
    /**
     * @var string
     */
    public $connectUrl;

    /**
     * @var string
     */
    public $DBInstanceStatus;

    /**
     * @var string
     */
    public $dbInstType;

    /**
     * @var string
     */
    public $dmInstanceId;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var string
     */
    public $engineVersion;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $rdsInstType;

    /**
     * @var int
     */
    public $readWeight;

    /**
     * @var int
     */
    public $remainDays;
    protected $_name = [
        'connectUrl' => 'ConnectUrl',
        'DBInstanceStatus' => 'DBInstanceStatus',
        'dbInstType' => 'DbInstType',
        'dmInstanceId' => 'DmInstanceId',
        'engine' => 'Engine',
        'engineVersion' => 'EngineVersion',
        'expireTime' => 'ExpireTime',
        'instanceName' => 'InstanceName',
        'networkType' => 'NetworkType',
        'payType' => 'PayType',
        'port' => 'Port',
        'rdsInstType' => 'RdsInstType',
        'readWeight' => 'ReadWeight',
        'remainDays' => 'RemainDays',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
