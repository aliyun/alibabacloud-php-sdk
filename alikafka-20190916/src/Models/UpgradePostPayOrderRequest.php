<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models;

use AlibabaCloud\Tea\Model;

class UpgradePostPayOrderRequest extends Model
{
    /**
     * @var int
     */
    public $diskSize;

    /**
     * @var int
     */
    public $eipMax;

    /**
     * @var bool
     */
    public $eipModel;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $ioMax;

    /**
     * @var string
     */
    public $ioMaxSpec;

    /**
     * @var int
     */
    public $partitionNum;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $specType;

    /**
     * @var int
     */
    public $topicQuota;
    protected $_name = [
        'diskSize'     => 'DiskSize',
        'eipMax'       => 'EipMax',
        'eipModel'     => 'EipModel',
        'instanceId'   => 'InstanceId',
        'ioMax'        => 'IoMax',
        'ioMaxSpec'    => 'IoMaxSpec',
        'partitionNum' => 'PartitionNum',
        'regionId'     => 'RegionId',
        'specType'     => 'SpecType',
        'topicQuota'   => 'TopicQuota',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diskSize) {
            $res['DiskSize'] = $this->diskSize;
        }
        if (null !== $this->eipMax) {
            $res['EipMax'] = $this->eipMax;
        }
        if (null !== $this->eipModel) {
            $res['EipModel'] = $this->eipModel;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->ioMax) {
            $res['IoMax'] = $this->ioMax;
        }
        if (null !== $this->ioMaxSpec) {
            $res['IoMaxSpec'] = $this->ioMaxSpec;
        }
        if (null !== $this->partitionNum) {
            $res['PartitionNum'] = $this->partitionNum;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->specType) {
            $res['SpecType'] = $this->specType;
        }
        if (null !== $this->topicQuota) {
            $res['TopicQuota'] = $this->topicQuota;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpgradePostPayOrderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiskSize'])) {
            $model->diskSize = $map['DiskSize'];
        }
        if (isset($map['EipMax'])) {
            $model->eipMax = $map['EipMax'];
        }
        if (isset($map['EipModel'])) {
            $model->eipModel = $map['EipModel'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IoMax'])) {
            $model->ioMax = $map['IoMax'];
        }
        if (isset($map['IoMaxSpec'])) {
            $model->ioMaxSpec = $map['IoMaxSpec'];
        }
        if (isset($map['PartitionNum'])) {
            $model->partitionNum = $map['PartitionNum'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SpecType'])) {
            $model->specType = $map['SpecType'];
        }
        if (isset($map['TopicQuota'])) {
            $model->topicQuota = $map['TopicQuota'];
        }

        return $model;
    }
}
