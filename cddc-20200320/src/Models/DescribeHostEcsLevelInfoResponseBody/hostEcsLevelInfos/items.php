<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeHostEcsLevelInfoResponseBody\hostEcsLevelInfos;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var float
     */
    public $netBandWidth;

    /**
     * @var string
     */
    public $ecsClass;

    /**
     * @var string
     */
    public $rdsClassCode;

    /**
     * @var int
     */
    public $cpu;

    /**
     * @var string
     */
    public $cpuFrequency;

    /**
     * @var int
     */
    public $storageIops;

    /**
     * @var float
     */
    public $cloudStorageBandwidth;

    /**
     * @var string
     */
    public $ecsClassCode;

    /**
     * @var int
     */
    public $isCloudDisk;

    /**
     * @var int
     */
    public $memory;

    /**
     * @var int
     */
    public $netPackage;

    /**
     * @var string
     */
    public $cpuVersion;

    /**
     * @var string
     */
    public $localStorage;

    /**
     * @var string
     */
    public $description;
    protected $_name = [
        'netBandWidth'          => 'NetBandWidth',
        'ecsClass'              => 'EcsClass',
        'rdsClassCode'          => 'RdsClassCode',
        'cpu'                   => 'Cpu',
        'cpuFrequency'          => 'CpuFrequency',
        'storageIops'           => 'StorageIops',
        'cloudStorageBandwidth' => 'CloudStorageBandwidth',
        'ecsClassCode'          => 'EcsClassCode',
        'isCloudDisk'           => 'IsCloudDisk',
        'memory'                => 'Memory',
        'netPackage'            => 'NetPackage',
        'cpuVersion'            => 'CpuVersion',
        'localStorage'          => 'LocalStorage',
        'description'           => 'Description',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->netBandWidth) {
            $res['NetBandWidth'] = $this->netBandWidth;
        }
        if (null !== $this->ecsClass) {
            $res['EcsClass'] = $this->ecsClass;
        }
        if (null !== $this->rdsClassCode) {
            $res['RdsClassCode'] = $this->rdsClassCode;
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->cpuFrequency) {
            $res['CpuFrequency'] = $this->cpuFrequency;
        }
        if (null !== $this->storageIops) {
            $res['StorageIops'] = $this->storageIops;
        }
        if (null !== $this->cloudStorageBandwidth) {
            $res['CloudStorageBandwidth'] = $this->cloudStorageBandwidth;
        }
        if (null !== $this->ecsClassCode) {
            $res['EcsClassCode'] = $this->ecsClassCode;
        }
        if (null !== $this->isCloudDisk) {
            $res['IsCloudDisk'] = $this->isCloudDisk;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->netPackage) {
            $res['NetPackage'] = $this->netPackage;
        }
        if (null !== $this->cpuVersion) {
            $res['CpuVersion'] = $this->cpuVersion;
        }
        if (null !== $this->localStorage) {
            $res['LocalStorage'] = $this->localStorage;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
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
        if (isset($map['NetBandWidth'])) {
            $model->netBandWidth = $map['NetBandWidth'];
        }
        if (isset($map['EcsClass'])) {
            $model->ecsClass = $map['EcsClass'];
        }
        if (isset($map['RdsClassCode'])) {
            $model->rdsClassCode = $map['RdsClassCode'];
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['CpuFrequency'])) {
            $model->cpuFrequency = $map['CpuFrequency'];
        }
        if (isset($map['StorageIops'])) {
            $model->storageIops = $map['StorageIops'];
        }
        if (isset($map['CloudStorageBandwidth'])) {
            $model->cloudStorageBandwidth = $map['CloudStorageBandwidth'];
        }
        if (isset($map['EcsClassCode'])) {
            $model->ecsClassCode = $map['EcsClassCode'];
        }
        if (isset($map['IsCloudDisk'])) {
            $model->isCloudDisk = $map['IsCloudDisk'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['NetPackage'])) {
            $model->netPackage = $map['NetPackage'];
        }
        if (isset($map['CpuVersion'])) {
            $model->cpuVersion = $map['CpuVersion'];
        }
        if (isset($map['LocalStorage'])) {
            $model->localStorage = $map['LocalStorage'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        return $model;
    }
}
