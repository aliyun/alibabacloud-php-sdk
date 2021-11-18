<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20210226\Models;

use AlibabaCloud\Tea\Model;

class EcsSpec extends Model
{
    /**
     * @description cpu数量
     *
     * @var int
     */
    public $cpu;

    /**
     * @description gpu卡数
     *
     * @var int
     */
    public $gpu;

    /**
     * @description GPU卡类型
     *
     * @var string
     */
    public $gpuType;

    /**
     * @description 实例类型
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description 内存(GiB)
     *
     * @var int
     */
    public $memoryInGiB;

    /**
     * @description 磁盘类型
     *
     * @var string
     */
    public $systemDiskCategory;

    /**
     * @description 磁盘大小(GiB)
     *
     * @var int
     */
    public $systemDiskSizeInGiB;
    protected $_name = [
        'cpu'                 => 'Cpu',
        'gpu'                 => 'Gpu',
        'gpuType'             => 'GpuType',
        'instanceType'        => 'InstanceType',
        'memoryInGiB'         => 'MemoryInGiB',
        'systemDiskCategory'  => 'SystemDiskCategory',
        'systemDiskSizeInGiB' => 'SystemDiskSizeInGiB',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->gpu) {
            $res['Gpu'] = $this->gpu;
        }
        if (null !== $this->gpuType) {
            $res['GpuType'] = $this->gpuType;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->memoryInGiB) {
            $res['MemoryInGiB'] = $this->memoryInGiB;
        }
        if (null !== $this->systemDiskCategory) {
            $res['SystemDiskCategory'] = $this->systemDiskCategory;
        }
        if (null !== $this->systemDiskSizeInGiB) {
            $res['SystemDiskSizeInGiB'] = $this->systemDiskSizeInGiB;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EcsSpec
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['Gpu'])) {
            $model->gpu = $map['Gpu'];
        }
        if (isset($map['GpuType'])) {
            $model->gpuType = $map['GpuType'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['MemoryInGiB'])) {
            $model->memoryInGiB = $map['MemoryInGiB'];
        }
        if (isset($map['SystemDiskCategory'])) {
            $model->systemDiskCategory = $map['SystemDiskCategory'];
        }
        if (isset($map['SystemDiskSizeInGiB'])) {
            $model->systemDiskSizeInGiB = $map['SystemDiskSizeInGiB'];
        }

        return $model;
    }
}
