<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetDasProServiceUsageResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $commodityInstanceId;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var int
     */
    public $expireTime;

    /**
     * @var string
     */
    public $instanceAlias;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var bool
     */
    public $isSpare;

    /**
     * @var int
     */
    public $migrationPredictRemainingTime;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $serviceUnitId;

    /**
     * @var string
     */
    public $sqlRetention;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var float
     */
    public $storageFreeQuotaInMB;

    /**
     * @var int
     */
    public $storageUsed;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'commodityInstanceId' => 'commodityInstanceId',
        'engine' => 'engine',
        'expireTime' => 'expireTime',
        'instanceAlias' => 'instanceAlias',
        'instanceId' => 'instanceId',
        'ip' => 'ip',
        'isSpare' => 'isSpare',
        'migrationPredictRemainingTime' => 'migrationPredictRemainingTime',
        'port' => 'port',
        'region' => 'region',
        'serviceUnitId' => 'serviceUnitId',
        'sqlRetention' => 'sqlRetention',
        'startTime' => 'startTime',
        'storageFreeQuotaInMB' => 'storageFreeQuotaInMB',
        'storageUsed' => 'storageUsed',
        'userId' => 'userId',
        'vpcId' => 'vpcId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->commodityInstanceId) {
            $res['commodityInstanceId'] = $this->commodityInstanceId;
        }

        if (null !== $this->engine) {
            $res['engine'] = $this->engine;
        }

        if (null !== $this->expireTime) {
            $res['expireTime'] = $this->expireTime;
        }

        if (null !== $this->instanceAlias) {
            $res['instanceAlias'] = $this->instanceAlias;
        }

        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        if (null !== $this->ip) {
            $res['ip'] = $this->ip;
        }

        if (null !== $this->isSpare) {
            $res['isSpare'] = $this->isSpare;
        }

        if (null !== $this->migrationPredictRemainingTime) {
            $res['migrationPredictRemainingTime'] = $this->migrationPredictRemainingTime;
        }

        if (null !== $this->port) {
            $res['port'] = $this->port;
        }

        if (null !== $this->region) {
            $res['region'] = $this->region;
        }

        if (null !== $this->serviceUnitId) {
            $res['serviceUnitId'] = $this->serviceUnitId;
        }

        if (null !== $this->sqlRetention) {
            $res['sqlRetention'] = $this->sqlRetention;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        if (null !== $this->storageFreeQuotaInMB) {
            $res['storageFreeQuotaInMB'] = $this->storageFreeQuotaInMB;
        }

        if (null !== $this->storageUsed) {
            $res['storageUsed'] = $this->storageUsed;
        }

        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }

        if (null !== $this->vpcId) {
            $res['vpcId'] = $this->vpcId;
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
        if (isset($map['commodityInstanceId'])) {
            $model->commodityInstanceId = $map['commodityInstanceId'];
        }

        if (isset($map['engine'])) {
            $model->engine = $map['engine'];
        }

        if (isset($map['expireTime'])) {
            $model->expireTime = $map['expireTime'];
        }

        if (isset($map['instanceAlias'])) {
            $model->instanceAlias = $map['instanceAlias'];
        }

        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        if (isset($map['ip'])) {
            $model->ip = $map['ip'];
        }

        if (isset($map['isSpare'])) {
            $model->isSpare = $map['isSpare'];
        }

        if (isset($map['migrationPredictRemainingTime'])) {
            $model->migrationPredictRemainingTime = $map['migrationPredictRemainingTime'];
        }

        if (isset($map['port'])) {
            $model->port = $map['port'];
        }

        if (isset($map['region'])) {
            $model->region = $map['region'];
        }

        if (isset($map['serviceUnitId'])) {
            $model->serviceUnitId = $map['serviceUnitId'];
        }

        if (isset($map['sqlRetention'])) {
            $model->sqlRetention = $map['sqlRetention'];
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        if (isset($map['storageFreeQuotaInMB'])) {
            $model->storageFreeQuotaInMB = $map['storageFreeQuotaInMB'];
        }

        if (isset($map['storageUsed'])) {
            $model->storageUsed = $map['storageUsed'];
        }

        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        if (isset($map['vpcId'])) {
            $model->vpcId = $map['vpcId'];
        }

        return $model;
    }
}
