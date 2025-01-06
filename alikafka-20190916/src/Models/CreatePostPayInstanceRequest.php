<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models;

use AlibabaCloud\SDK\Alikafka\V20190916\Models\CreatePostPayInstanceRequest\serverlessConfig;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\CreatePostPayInstanceRequest\tag;
use AlibabaCloud\Tea\Model;

class CreatePostPayInstanceRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 4
     *
     * @var int
     */
    public $deployType;

    /**
     * @example 1500
     *
     * @var int
     */
    public $diskSize;

    /**
     * @example 0
     *
     * @var string
     */
    public $diskType;

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
     * @example 0
     *
     * @var int
     */
    public $paidType;

    /**
     * @example 100
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
     * @var serverlessConfig
     */
    public $serverlessConfig;

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
        'deployType'       => 'DeployType',
        'diskSize'         => 'DiskSize',
        'diskType'         => 'DiskType',
        'eipMax'           => 'EipMax',
        'ioMaxSpec'        => 'IoMaxSpec',
        'paidType'         => 'PaidType',
        'partitionNum'     => 'PartitionNum',
        'regionId'         => 'RegionId',
        'resourceGroupId'  => 'ResourceGroupId',
        'serverlessConfig' => 'ServerlessConfig',
        'specType'         => 'SpecType',
        'tag'              => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deployType) {
            $res['DeployType'] = $this->deployType;
        }
        if (null !== $this->diskSize) {
            $res['DiskSize'] = $this->diskSize;
        }
        if (null !== $this->diskType) {
            $res['DiskType'] = $this->diskType;
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
        if (null !== $this->serverlessConfig) {
            $res['ServerlessConfig'] = null !== $this->serverlessConfig ? $this->serverlessConfig->toMap() : null;
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
     * @return CreatePostPayInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeployType'])) {
            $model->deployType = $map['DeployType'];
        }
        if (isset($map['DiskSize'])) {
            $model->diskSize = $map['DiskSize'];
        }
        if (isset($map['DiskType'])) {
            $model->diskType = $map['DiskType'];
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
        if (isset($map['ServerlessConfig'])) {
            $model->serverlessConfig = serverlessConfig::fromMap($map['ServerlessConfig']);
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
