<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeHostEcsLevelInfoResponseBody\hostEcsLevelInfos;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @example 4
     *
     * @var float
     */
    public $cloudStorageBandwidth;

    /**
     * @example 24
     *
     * @var int
     */
    public $cpu;

    /**
     * @example 2.5 GHz/3.2 GHz
     *
     * @var string
     */
    public $cpuFrequency;

    /**
     * @example Intel Xeon(Cascade Lake) Platinum 8269CY
     *
     * @var string
     */
    public $cpuVersion;

    /**
     * @example testxxx
     *
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $ecsClass;

    /**
     * @example ecs.g6.2xlarge
     *
     * @var string
     */
    public $ecsClassCode;

    /**
     * @example 1
     *
     * @var int
     */
    public $isCloudDisk;

    /**
     * @example 7
     *
     * @var string
     */
    public $localStorage;

    /**
     * @example 192
     *
     * @var int
     */
    public $memory;

    /**
     * @example 10
     *
     * @var float
     */
    public $netBandWidth;

    /**
     * @example 150
     *
     * @var int
     */
    public $netPackage;

    /**
     * @example mssql.cluster.host.g2xlarge
     *
     * @var string
     */
    public $rdsClassCode;

    /**
     * @example 5
     *
     * @var int
     */
    public $storageIops;
    protected $_name = [
        'cloudStorageBandwidth' => 'CloudStorageBandwidth',
        'cpu'                   => 'Cpu',
        'cpuFrequency'          => 'CpuFrequency',
        'cpuVersion'            => 'CpuVersion',
        'description'           => 'Description',
        'ecsClass'              => 'EcsClass',
        'ecsClassCode'          => 'EcsClassCode',
        'isCloudDisk'           => 'IsCloudDisk',
        'localStorage'          => 'LocalStorage',
        'memory'                => 'Memory',
        'netBandWidth'          => 'NetBandWidth',
        'netPackage'            => 'NetPackage',
        'rdsClassCode'          => 'RdsClassCode',
        'storageIops'           => 'StorageIops',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cloudStorageBandwidth) {
            $res['CloudStorageBandwidth'] = $this->cloudStorageBandwidth;
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->cpuFrequency) {
            $res['CpuFrequency'] = $this->cpuFrequency;
        }
        if (null !== $this->cpuVersion) {
            $res['CpuVersion'] = $this->cpuVersion;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->ecsClass) {
            $res['EcsClass'] = $this->ecsClass;
        }
        if (null !== $this->ecsClassCode) {
            $res['EcsClassCode'] = $this->ecsClassCode;
        }
        if (null !== $this->isCloudDisk) {
            $res['IsCloudDisk'] = $this->isCloudDisk;
        }
        if (null !== $this->localStorage) {
            $res['LocalStorage'] = $this->localStorage;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->netBandWidth) {
            $res['NetBandWidth'] = $this->netBandWidth;
        }
        if (null !== $this->netPackage) {
            $res['NetPackage'] = $this->netPackage;
        }
        if (null !== $this->rdsClassCode) {
            $res['RdsClassCode'] = $this->rdsClassCode;
        }
        if (null !== $this->storageIops) {
            $res['StorageIops'] = $this->storageIops;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CloudStorageBandwidth'])) {
            $model->cloudStorageBandwidth = $map['CloudStorageBandwidth'];
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['CpuFrequency'])) {
            $model->cpuFrequency = $map['CpuFrequency'];
        }
        if (isset($map['CpuVersion'])) {
            $model->cpuVersion = $map['CpuVersion'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EcsClass'])) {
            $model->ecsClass = $map['EcsClass'];
        }
        if (isset($map['EcsClassCode'])) {
            $model->ecsClassCode = $map['EcsClassCode'];
        }
        if (isset($map['IsCloudDisk'])) {
            $model->isCloudDisk = $map['IsCloudDisk'];
        }
        if (isset($map['LocalStorage'])) {
            $model->localStorage = $map['LocalStorage'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['NetBandWidth'])) {
            $model->netBandWidth = $map['NetBandWidth'];
        }
        if (isset($map['NetPackage'])) {
            $model->netPackage = $map['NetPackage'];
        }
        if (isset($map['RdsClassCode'])) {
            $model->rdsClassCode = $map['RdsClassCode'];
        }
        if (isset($map['StorageIops'])) {
            $model->storageIops = $map['StorageIops'];
        }

        return $model;
    }
}
