<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeHostEcsLevelInfoResponseBody\hostEcsLevelInfos;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var float
     */
    public $cloudStorageBandwidth;

    /**
     * @var int
     */
    public $cpu;

    /**
     * @var string
     */
    public $cpuFrequency;

    /**
     * @var string
     */
    public $cpuVersion;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $ecsClass;

    /**
     * @var string
     */
    public $ecsClassCode;

    /**
     * @var int
     */
    public $isCloudDisk;

    /**
     * @var string
     */
    public $localStorage;

    /**
     * @var int
     */
    public $memory;

    /**
     * @var float
     */
    public $netBandWidth;

    /**
     * @var int
     */
    public $netPackage;

    /**
     * @var string
     */
    public $rdsClassCode;

    /**
     * @var int
     */
    public $storageIops;
    protected $_name = [
        'cloudStorageBandwidth' => 'CloudStorageBandwidth',
        'cpu' => 'Cpu',
        'cpuFrequency' => 'CpuFrequency',
        'cpuVersion' => 'CpuVersion',
        'description' => 'Description',
        'ecsClass' => 'EcsClass',
        'ecsClassCode' => 'EcsClassCode',
        'isCloudDisk' => 'IsCloudDisk',
        'localStorage' => 'LocalStorage',
        'memory' => 'Memory',
        'netBandWidth' => 'NetBandWidth',
        'netPackage' => 'NetPackage',
        'rdsClassCode' => 'RdsClassCode',
        'storageIops' => 'StorageIops',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
