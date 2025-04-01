<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Dara\Model;

class CreateInstanceRequest extends Model
{
    /**
     * @var bool
     */
    public $autoRenew;

    /**
     * @var int
     */
    public $autoRenewPeriod;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $cpuArch;

    /**
     * @var int
     */
    public $diskSize;

    /**
     * @var string
     */
    public $diskType;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var string
     */
    public $instanceClass;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $isolationOptimization;

    /**
     * @var string
     */
    public $obVersion;

    /**
     * @var int
     */
    public $period;

    /**
     * @var string
     */
    public $periodUnit;

    /**
     * @var string
     */
    public $primaryInstance;

    /**
     * @var string
     */
    public $primaryRegion;

    /**
     * @var string
     */
    public $replicaMode;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $series;

    /**
     * @var string
     */
    public $zones;
    protected $_name = [
        'autoRenew' => 'AutoRenew',
        'autoRenewPeriod' => 'AutoRenewPeriod',
        'chargeType' => 'ChargeType',
        'cpuArch' => 'CpuArch',
        'diskSize' => 'DiskSize',
        'diskType' => 'DiskType',
        'dryRun' => 'DryRun',
        'instanceClass' => 'InstanceClass',
        'instanceName' => 'InstanceName',
        'isolationOptimization' => 'IsolationOptimization',
        'obVersion' => 'ObVersion',
        'period' => 'Period',
        'periodUnit' => 'PeriodUnit',
        'primaryInstance' => 'PrimaryInstance',
        'primaryRegion' => 'PrimaryRegion',
        'replicaMode' => 'ReplicaMode',
        'resourceGroupId' => 'ResourceGroupId',
        'series' => 'Series',
        'zones' => 'Zones',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }

        if (null !== $this->autoRenewPeriod) {
            $res['AutoRenewPeriod'] = $this->autoRenewPeriod;
        }

        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }

        if (null !== $this->cpuArch) {
            $res['CpuArch'] = $this->cpuArch;
        }

        if (null !== $this->diskSize) {
            $res['DiskSize'] = $this->diskSize;
        }

        if (null !== $this->diskType) {
            $res['DiskType'] = $this->diskType;
        }

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        if (null !== $this->instanceClass) {
            $res['InstanceClass'] = $this->instanceClass;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->isolationOptimization) {
            $res['IsolationOptimization'] = $this->isolationOptimization;
        }

        if (null !== $this->obVersion) {
            $res['ObVersion'] = $this->obVersion;
        }

        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }

        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }

        if (null !== $this->primaryInstance) {
            $res['PrimaryInstance'] = $this->primaryInstance;
        }

        if (null !== $this->primaryRegion) {
            $res['PrimaryRegion'] = $this->primaryRegion;
        }

        if (null !== $this->replicaMode) {
            $res['ReplicaMode'] = $this->replicaMode;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->series) {
            $res['Series'] = $this->series;
        }

        if (null !== $this->zones) {
            $res['Zones'] = $this->zones;
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
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }

        if (isset($map['AutoRenewPeriod'])) {
            $model->autoRenewPeriod = $map['AutoRenewPeriod'];
        }

        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }

        if (isset($map['CpuArch'])) {
            $model->cpuArch = $map['CpuArch'];
        }

        if (isset($map['DiskSize'])) {
            $model->diskSize = $map['DiskSize'];
        }

        if (isset($map['DiskType'])) {
            $model->diskType = $map['DiskType'];
        }

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['InstanceClass'])) {
            $model->instanceClass = $map['InstanceClass'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['IsolationOptimization'])) {
            $model->isolationOptimization = $map['IsolationOptimization'];
        }

        if (isset($map['ObVersion'])) {
            $model->obVersion = $map['ObVersion'];
        }

        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }

        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }

        if (isset($map['PrimaryInstance'])) {
            $model->primaryInstance = $map['PrimaryInstance'];
        }

        if (isset($map['PrimaryRegion'])) {
            $model->primaryRegion = $map['PrimaryRegion'];
        }

        if (isset($map['ReplicaMode'])) {
            $model->replicaMode = $map['ReplicaMode'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['Series'])) {
            $model->series = $map['Series'];
        }

        if (isset($map['Zones'])) {
            $model->zones = $map['Zones'];
        }

        return $model;
    }
}
