<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hologram\V20220601\Models;

use AlibabaCloud\Dara\Model;

class CreateInstanceRequest extends Model
{
    /**
     * @var bool
     */
    public $autoPay;

    /**
     * @var bool
     */
    public $autoRenew;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var int
     */
    public $coldStorageSize;

    /**
     * @var int
     */
    public $cpu;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var bool
     */
    public $enableServerlessComputing;

    /**
     * @var int
     */
    public $gatewayCount;

    /**
     * @var string
     */
    public $initialDatabases;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $leaderInstanceId;

    /**
     * @var string
     */
    public $pricingCycle;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var int
     */
    public $storageSize;

    /**
     * @var string
     */
    public $storageType;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'autoPay' => 'autoPay',
        'autoRenew' => 'autoRenew',
        'chargeType' => 'chargeType',
        'coldStorageSize' => 'coldStorageSize',
        'cpu' => 'cpu',
        'duration' => 'duration',
        'enableServerlessComputing' => 'enableServerlessComputing',
        'gatewayCount' => 'gatewayCount',
        'initialDatabases' => 'initialDatabases',
        'instanceName' => 'instanceName',
        'instanceType' => 'instanceType',
        'leaderInstanceId' => 'leaderInstanceId',
        'pricingCycle' => 'pricingCycle',
        'regionId' => 'regionId',
        'resourceGroupId' => 'resourceGroupId',
        'storageSize' => 'storageSize',
        'storageType' => 'storageType',
        'vSwitchId' => 'vSwitchId',
        'vpcId' => 'vpcId',
        'zoneId' => 'zoneId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoPay) {
            $res['autoPay'] = $this->autoPay;
        }

        if (null !== $this->autoRenew) {
            $res['autoRenew'] = $this->autoRenew;
        }

        if (null !== $this->chargeType) {
            $res['chargeType'] = $this->chargeType;
        }

        if (null !== $this->coldStorageSize) {
            $res['coldStorageSize'] = $this->coldStorageSize;
        }

        if (null !== $this->cpu) {
            $res['cpu'] = $this->cpu;
        }

        if (null !== $this->duration) {
            $res['duration'] = $this->duration;
        }

        if (null !== $this->enableServerlessComputing) {
            $res['enableServerlessComputing'] = $this->enableServerlessComputing;
        }

        if (null !== $this->gatewayCount) {
            $res['gatewayCount'] = $this->gatewayCount;
        }

        if (null !== $this->initialDatabases) {
            $res['initialDatabases'] = $this->initialDatabases;
        }

        if (null !== $this->instanceName) {
            $res['instanceName'] = $this->instanceName;
        }

        if (null !== $this->instanceType) {
            $res['instanceType'] = $this->instanceType;
        }

        if (null !== $this->leaderInstanceId) {
            $res['leaderInstanceId'] = $this->leaderInstanceId;
        }

        if (null !== $this->pricingCycle) {
            $res['pricingCycle'] = $this->pricingCycle;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->storageSize) {
            $res['storageSize'] = $this->storageSize;
        }

        if (null !== $this->storageType) {
            $res['storageType'] = $this->storageType;
        }

        if (null !== $this->vSwitchId) {
            $res['vSwitchId'] = $this->vSwitchId;
        }

        if (null !== $this->vpcId) {
            $res['vpcId'] = $this->vpcId;
        }

        if (null !== $this->zoneId) {
            $res['zoneId'] = $this->zoneId;
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
        if (isset($map['autoPay'])) {
            $model->autoPay = $map['autoPay'];
        }

        if (isset($map['autoRenew'])) {
            $model->autoRenew = $map['autoRenew'];
        }

        if (isset($map['chargeType'])) {
            $model->chargeType = $map['chargeType'];
        }

        if (isset($map['coldStorageSize'])) {
            $model->coldStorageSize = $map['coldStorageSize'];
        }

        if (isset($map['cpu'])) {
            $model->cpu = $map['cpu'];
        }

        if (isset($map['duration'])) {
            $model->duration = $map['duration'];
        }

        if (isset($map['enableServerlessComputing'])) {
            $model->enableServerlessComputing = $map['enableServerlessComputing'];
        }

        if (isset($map['gatewayCount'])) {
            $model->gatewayCount = $map['gatewayCount'];
        }

        if (isset($map['initialDatabases'])) {
            $model->initialDatabases = $map['initialDatabases'];
        }

        if (isset($map['instanceName'])) {
            $model->instanceName = $map['instanceName'];
        }

        if (isset($map['instanceType'])) {
            $model->instanceType = $map['instanceType'];
        }

        if (isset($map['leaderInstanceId'])) {
            $model->leaderInstanceId = $map['leaderInstanceId'];
        }

        if (isset($map['pricingCycle'])) {
            $model->pricingCycle = $map['pricingCycle'];
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        if (isset($map['resourceGroupId'])) {
            $model->resourceGroupId = $map['resourceGroupId'];
        }

        if (isset($map['storageSize'])) {
            $model->storageSize = $map['storageSize'];
        }

        if (isset($map['storageType'])) {
            $model->storageType = $map['storageType'];
        }

        if (isset($map['vSwitchId'])) {
            $model->vSwitchId = $map['vSwitchId'];
        }

        if (isset($map['vpcId'])) {
            $model->vpcId = $map['vpcId'];
        }

        if (isset($map['zoneId'])) {
            $model->zoneId = $map['zoneId'];
        }

        return $model;
    }
}
