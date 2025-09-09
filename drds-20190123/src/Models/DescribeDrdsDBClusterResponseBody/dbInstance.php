<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDBClusterResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDBClusterResponseBody\dbInstance\DBNodes;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDBClusterResponseBody\dbInstance\endpoints;

class dbInstance extends Model
{
    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $DBInstanceStatus;

    /**
     * @var DBNodes
     */
    public $DBNodes;

    /**
     * @var string
     */
    public $dbInstType;

    /**
     * @var endpoints
     */
    public $endpoints;

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
     * @var string
     */
    public $readMode;

    /**
     * @var string
     */
    public $remainDays;
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
        'DBInstanceStatus' => 'DBInstanceStatus',
        'DBNodes' => 'DBNodes',
        'dbInstType' => 'DbInstType',
        'endpoints' => 'Endpoints',
        'engine' => 'Engine',
        'engineVersion' => 'EngineVersion',
        'expireTime' => 'ExpireTime',
        'networkType' => 'NetworkType',
        'payType' => 'PayType',
        'port' => 'Port',
        'rdsInstType' => 'RdsInstType',
        'readMode' => 'ReadMode',
        'remainDays' => 'RemainDays',
    ];

    public function validate()
    {
        if (null !== $this->DBNodes) {
            $this->DBNodes->validate();
        }
        if (null !== $this->endpoints) {
            $this->endpoints->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        if (null !== $this->DBInstanceStatus) {
            $res['DBInstanceStatus'] = $this->DBInstanceStatus;
        }

        if (null !== $this->DBNodes) {
            $res['DBNodes'] = null !== $this->DBNodes ? $this->DBNodes->toArray($noStream) : $this->DBNodes;
        }

        if (null !== $this->dbInstType) {
            $res['DbInstType'] = $this->dbInstType;
        }

        if (null !== $this->endpoints) {
            $res['Endpoints'] = null !== $this->endpoints ? $this->endpoints->toArray($noStream) : $this->endpoints;
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

        if (null !== $this->readMode) {
            $res['ReadMode'] = $this->readMode;
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
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        if (isset($map['DBInstanceStatus'])) {
            $model->DBInstanceStatus = $map['DBInstanceStatus'];
        }

        if (isset($map['DBNodes'])) {
            $model->DBNodes = DBNodes::fromMap($map['DBNodes']);
        }

        if (isset($map['DbInstType'])) {
            $model->dbInstType = $map['DbInstType'];
        }

        if (isset($map['Endpoints'])) {
            $model->endpoints = endpoints::fromMap($map['Endpoints']);
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

        if (isset($map['ReadMode'])) {
            $model->readMode = $map['ReadMode'];
        }

        if (isset($map['RemainDays'])) {
            $model->remainDays = $map['RemainDays'];
        }

        return $model;
    }
}
