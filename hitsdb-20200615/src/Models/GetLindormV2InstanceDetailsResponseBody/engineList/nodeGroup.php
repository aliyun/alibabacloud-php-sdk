<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLindormV2InstanceDetailsResponseBody\engineList;

use AlibabaCloud\Dara\Model;

class nodeGroup extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var int
     */
    public $cpuCoreCount;

    /**
     * @var bool
     */
    public $enableAttachLocalDisk;

    /**
     * @var int
     */
    public $localDiskCapacity;

    /**
     * @var string
     */
    public $localDiskCategory;

    /**
     * @var int
     */
    public $memorySizeGiB;

    /**
     * @var string
     */
    public $nodeSpec;

    /**
     * @var int
     */
    public $quantity;

    /**
     * @var string
     */
    public $resourceGroupName;

    /**
     * @var string
     */
    public $specId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'category' => 'Category',
        'cpuCoreCount' => 'CpuCoreCount',
        'enableAttachLocalDisk' => 'EnableAttachLocalDisk',
        'localDiskCapacity' => 'LocalDiskCapacity',
        'localDiskCategory' => 'LocalDiskCategory',
        'memorySizeGiB' => 'MemorySizeGiB',
        'nodeSpec' => 'NodeSpec',
        'quantity' => 'Quantity',
        'resourceGroupName' => 'ResourceGroupName',
        'specId' => 'SpecId',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->cpuCoreCount) {
            $res['CpuCoreCount'] = $this->cpuCoreCount;
        }

        if (null !== $this->enableAttachLocalDisk) {
            $res['EnableAttachLocalDisk'] = $this->enableAttachLocalDisk;
        }

        if (null !== $this->localDiskCapacity) {
            $res['LocalDiskCapacity'] = $this->localDiskCapacity;
        }

        if (null !== $this->localDiskCategory) {
            $res['LocalDiskCategory'] = $this->localDiskCategory;
        }

        if (null !== $this->memorySizeGiB) {
            $res['MemorySizeGiB'] = $this->memorySizeGiB;
        }

        if (null !== $this->nodeSpec) {
            $res['NodeSpec'] = $this->nodeSpec;
        }

        if (null !== $this->quantity) {
            $res['Quantity'] = $this->quantity;
        }

        if (null !== $this->resourceGroupName) {
            $res['ResourceGroupName'] = $this->resourceGroupName;
        }

        if (null !== $this->specId) {
            $res['SpecId'] = $this->specId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['CpuCoreCount'])) {
            $model->cpuCoreCount = $map['CpuCoreCount'];
        }

        if (isset($map['EnableAttachLocalDisk'])) {
            $model->enableAttachLocalDisk = $map['EnableAttachLocalDisk'];
        }

        if (isset($map['LocalDiskCapacity'])) {
            $model->localDiskCapacity = $map['LocalDiskCapacity'];
        }

        if (isset($map['LocalDiskCategory'])) {
            $model->localDiskCategory = $map['LocalDiskCategory'];
        }

        if (isset($map['MemorySizeGiB'])) {
            $model->memorySizeGiB = $map['MemorySizeGiB'];
        }

        if (isset($map['NodeSpec'])) {
            $model->nodeSpec = $map['NodeSpec'];
        }

        if (isset($map['Quantity'])) {
            $model->quantity = $map['Quantity'];
        }

        if (isset($map['ResourceGroupName'])) {
            $model->resourceGroupName = $map['ResourceGroupName'];
        }

        if (isset($map['SpecId'])) {
            $model->specId = $map['SpecId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
