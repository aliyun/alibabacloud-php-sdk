<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAppInstanceTypeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAppInstanceTypeResponseBody\appInstanceTypeModels\inventoryInfo;

class appInstanceTypeModels extends Model
{
    /**
     * @var string
     */
    public $appInstanceType;

    /**
     * @var string
     */
    public $appInstanceTypeFamily;

    /**
     * @var string
     */
    public $cpu;

    /**
     * @var int
     */
    public $dataDiskSize;

    /**
     * @var string
     */
    public $gpu;

    /**
     * @var int
     */
    public $gpuMemory;

    /**
     * @var string
     */
    public $gpuSpec;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $instanceTypeName;

    /**
     * @var inventoryInfo
     */
    public $inventoryInfo;

    /**
     * @var int
     */
    public $memory;

    /**
     * @var string
     */
    public $productType;

    /**
     * @var int
     */
    public $systemDiskSize;
    protected $_name = [
        'appInstanceType' => 'AppInstanceType',
        'appInstanceTypeFamily' => 'AppInstanceTypeFamily',
        'cpu' => 'Cpu',
        'dataDiskSize' => 'DataDiskSize',
        'gpu' => 'Gpu',
        'gpuMemory' => 'GpuMemory',
        'gpuSpec' => 'GpuSpec',
        'id' => 'Id',
        'instanceTypeName' => 'InstanceTypeName',
        'inventoryInfo' => 'InventoryInfo',
        'memory' => 'Memory',
        'productType' => 'ProductType',
        'systemDiskSize' => 'SystemDiskSize',
    ];

    public function validate()
    {
        if (null !== $this->inventoryInfo) {
            $this->inventoryInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appInstanceType) {
            $res['AppInstanceType'] = $this->appInstanceType;
        }

        if (null !== $this->appInstanceTypeFamily) {
            $res['AppInstanceTypeFamily'] = $this->appInstanceTypeFamily;
        }

        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }

        if (null !== $this->dataDiskSize) {
            $res['DataDiskSize'] = $this->dataDiskSize;
        }

        if (null !== $this->gpu) {
            $res['Gpu'] = $this->gpu;
        }

        if (null !== $this->gpuMemory) {
            $res['GpuMemory'] = $this->gpuMemory;
        }

        if (null !== $this->gpuSpec) {
            $res['GpuSpec'] = $this->gpuSpec;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->instanceTypeName) {
            $res['InstanceTypeName'] = $this->instanceTypeName;
        }

        if (null !== $this->inventoryInfo) {
            $res['InventoryInfo'] = null !== $this->inventoryInfo ? $this->inventoryInfo->toArray($noStream) : $this->inventoryInfo;
        }

        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }

        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }

        if (null !== $this->systemDiskSize) {
            $res['SystemDiskSize'] = $this->systemDiskSize;
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
        if (isset($map['AppInstanceType'])) {
            $model->appInstanceType = $map['AppInstanceType'];
        }

        if (isset($map['AppInstanceTypeFamily'])) {
            $model->appInstanceTypeFamily = $map['AppInstanceTypeFamily'];
        }

        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }

        if (isset($map['DataDiskSize'])) {
            $model->dataDiskSize = $map['DataDiskSize'];
        }

        if (isset($map['Gpu'])) {
            $model->gpu = $map['Gpu'];
        }

        if (isset($map['GpuMemory'])) {
            $model->gpuMemory = $map['GpuMemory'];
        }

        if (isset($map['GpuSpec'])) {
            $model->gpuSpec = $map['GpuSpec'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['InstanceTypeName'])) {
            $model->instanceTypeName = $map['InstanceTypeName'];
        }

        if (isset($map['InventoryInfo'])) {
            $model->inventoryInfo = inventoryInfo::fromMap($map['InventoryInfo']);
        }

        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }

        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }

        if (isset($map['SystemDiskSize'])) {
            $model->systemDiskSize = $map['SystemDiskSize'];
        }

        return $model;
    }
}
