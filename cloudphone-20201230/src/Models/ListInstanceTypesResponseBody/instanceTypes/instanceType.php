<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudphone\V20201230\Models\ListInstanceTypesResponseBody\instanceTypes;

use AlibabaCloud\SDK\Cloudphone\V20201230\Models\ListInstanceTypesResponseBody\instanceTypes\instanceType\resolutions;
use AlibabaCloud\Tea\Model;

class instanceType extends Model
{
    /**
     * @var int
     */
    public $cpuCoreCount;

    /**
     * @var string
     */
    public $defaultResolution;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $instanceTypeFamily;

    /**
     * @var string
     */
    public $memorySize;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $nameEn;

    /**
     * @var resolutions
     */
    public $resolutions;
    protected $_name = [
        'cpuCoreCount'       => 'CpuCoreCount',
        'defaultResolution'  => 'DefaultResolution',
        'instanceType'       => 'InstanceType',
        'instanceTypeFamily' => 'InstanceTypeFamily',
        'memorySize'         => 'MemorySize',
        'name'               => 'Name',
        'nameEn'             => 'NameEn',
        'resolutions'        => 'Resolutions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cpuCoreCount) {
            $res['CpuCoreCount'] = $this->cpuCoreCount;
        }
        if (null !== $this->defaultResolution) {
            $res['DefaultResolution'] = $this->defaultResolution;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->instanceTypeFamily) {
            $res['InstanceTypeFamily'] = $this->instanceTypeFamily;
        }
        if (null !== $this->memorySize) {
            $res['MemorySize'] = $this->memorySize;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->nameEn) {
            $res['NameEn'] = $this->nameEn;
        }
        if (null !== $this->resolutions) {
            $res['Resolutions'] = null !== $this->resolutions ? $this->resolutions->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceType
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CpuCoreCount'])) {
            $model->cpuCoreCount = $map['CpuCoreCount'];
        }
        if (isset($map['DefaultResolution'])) {
            $model->defaultResolution = $map['DefaultResolution'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['InstanceTypeFamily'])) {
            $model->instanceTypeFamily = $map['InstanceTypeFamily'];
        }
        if (isset($map['MemorySize'])) {
            $model->memorySize = $map['MemorySize'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NameEn'])) {
            $model->nameEn = $map['NameEn'];
        }
        if (isset($map['Resolutions'])) {
            $model->resolutions = resolutions::fromMap($map['Resolutions']);
        }

        return $model;
    }
}
