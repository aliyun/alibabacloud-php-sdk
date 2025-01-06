<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models;

use AlibabaCloud\SDK\Alikafka\V20190916\Models\CreatePrePayInstanceShrinkRequest\tag;
use AlibabaCloud\Tea\Model;

class CreatePrePayInstanceShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $confluentConfigShrink;

    /**
     * @example 5
     *
     * @var int
     */
    public $deployType;

    /**
     * @example 500
     *
     * @var int
     */
    public $diskSize;

    /**
     * @example 1
     *
     * @var string
     */
    public $diskType;

    /**
     * @example 1
     *
     * @var int
     */
    public $duration;

    /**
     * @example 3
     *
     * @var int
     */
    public $eipMax;

    /**
     * @example alikafka.hw.2xlarge
     *
     * @var string
     */
    public $ioMaxSpec;

    /**
     * @example 1
     *
     * @var int
     */
    public $paidType;

    /**
     * @example 1000
     *
     * @var int
     */
    public $partitionNum;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example rg-ac***********7q
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example professional
     *
     * @var string
     */
    public $specType;

    /**
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'confluentConfigShrink' => 'ConfluentConfig',
        'deployType'            => 'DeployType',
        'diskSize'              => 'DiskSize',
        'diskType'              => 'DiskType',
        'duration'              => 'Duration',
        'eipMax'                => 'EipMax',
        'ioMaxSpec'             => 'IoMaxSpec',
        'paidType'              => 'PaidType',
        'partitionNum'          => 'PartitionNum',
        'regionId'              => 'RegionId',
        'resourceGroupId'       => 'ResourceGroupId',
        'specType'              => 'SpecType',
        'tag'                   => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->confluentConfigShrink) {
            $res['ConfluentConfig'] = $this->confluentConfigShrink;
        }
        if (null !== $this->deployType) {
            $res['DeployType'] = $this->deployType;
        }
        if (null !== $this->diskSize) {
            $res['DiskSize'] = $this->diskSize;
        }
        if (null !== $this->diskType) {
            $res['DiskType'] = $this->diskType;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->eipMax) {
            $res['EipMax'] = $this->eipMax;
        }
        if (null !== $this->ioMaxSpec) {
            $res['IoMaxSpec'] = $this->ioMaxSpec;
        }
        if (null !== $this->paidType) {
            $res['PaidType'] = $this->paidType;
        }
        if (null !== $this->partitionNum) {
            $res['PartitionNum'] = $this->partitionNum;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->specType) {
            $res['SpecType'] = $this->specType;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePrePayInstanceShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfluentConfig'])) {
            $model->confluentConfigShrink = $map['ConfluentConfig'];
        }
        if (isset($map['DeployType'])) {
            $model->deployType = $map['DeployType'];
        }
        if (isset($map['DiskSize'])) {
            $model->diskSize = $map['DiskSize'];
        }
        if (isset($map['DiskType'])) {
            $model->diskType = $map['DiskType'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['EipMax'])) {
            $model->eipMax = $map['EipMax'];
        }
        if (isset($map['IoMaxSpec'])) {
            $model->ioMaxSpec = $map['IoMaxSpec'];
        }
        if (isset($map['PaidType'])) {
            $model->paidType = $map['PaidType'];
        }
        if (isset($map['PartitionNum'])) {
            $model->partitionNum = $map['PartitionNum'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SpecType'])) {
            $model->specType = $map['SpecType'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
