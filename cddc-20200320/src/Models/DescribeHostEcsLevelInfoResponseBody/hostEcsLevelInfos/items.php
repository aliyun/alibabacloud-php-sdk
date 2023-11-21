<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeHostEcsLevelInfoResponseBody\hostEcsLevelInfos;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description The disk bandwidth. Unit: Gbit/s.
     *
     * @example 4
     *
     * @var float
     */
    public $cloudStorageBandwidth;

    /**
     * @description The number of CPU cores of the host.
     *
     * @example 24
     *
     * @var int
     */
    public $cpu;

    /**
     * @description The processor frequency. Unit: GHz.
     *
     * @example 2.5 GHz/3.2 GHz
     *
     * @var string
     */
    public $cpuFrequency;

    /**
     * @description The CPU model of the host.
     *
     * @example Intel Xeon(Cascade Lake) Platinum 8269CY
     *
     * @var string
     */
    public $cpuVersion;

    /**
     * @description The name of the host.
     *
     * @example testxxx
     *
     * @var string
     */
    public $description;

    /**
     * @description The instance family of the host.
     *
     * @var string
     */
    public $ecsClass;

    /**
     * @description The instance type of the host.
     *
     * @example ecs.g6.2xlarge
     *
     * @var string
     */
    public $ecsClassCode;

    /**
     * @description Indicates whether the host uses cloud disks.
     *
     * @example 1
     *
     * @var int
     */
    public $isCloudDisk;

    /**
     * @description The local storage.
     *
     * @example 7
     *
     * @var string
     */
    public $localStorage;

    /**
     * @description The memory size of the host. Unit: GB.
     *
     * @example 192
     *
     * @var int
     */
    public $memory;

    /**
     * @description The internal bandwidth of the host. Unit: Gbit/s.
     *
     * @example 10
     *
     * @var float
     */
    public $netBandWidth;

    /**
     * @description The packet forwarding rate over the internal network, which is displayed after being divided by 10,000. Unit: packets per second (PPS).
     *
     * @example 150
     *
     * @var int
     */
    public $netPackage;

    /**
     * @description The instance type of the instance.
     *
     * @example mssql.cluster.host.g2xlarge
     *
     * @var string
     */
    public $rdsClassCode;

    /**
     * @description The storage IOPS of the host, which is displayed after being divided by 10,000.
     *
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
