<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models;

use AlibabaCloud\Tea\Model;

class EnableAutoTopicCreationRequest extends Model
{
    /**
     * @description The instance ID.
     *
     * This parameter is required.
     * @example alikafka_post-cn-v0h1fgs2****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The operation that you want to perform. Valid values:
     *
     *   enable: enables the automatic topic creation feature.
     *   disable: disables the automatic topic creation feature.
     *   updatePartition: changes the number of partitions in topics that are automatically created.
     *
     * This parameter is required.
     * @example enable
     *
     * @var string
     */
    public $operate;

    /**
     * @description The changed number of partitions in topics that are automatically created.
     *
     * This parameter takes effect only if you set Operate to updatePartition.
     * @example 12
     *
     * @var int
     */
    public $partitionNum;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'instanceId'   => 'InstanceId',
        'operate'      => 'Operate',
        'partitionNum' => 'PartitionNum',
        'regionId'     => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->operate) {
            $res['Operate'] = $this->operate;
        }
        if (null !== $this->partitionNum) {
            $res['PartitionNum'] = $this->partitionNum;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EnableAutoTopicCreationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Operate'])) {
            $model->operate = $map['Operate'];
        }
        if (isset($map['PartitionNum'])) {
            $model->partitionNum = $map['PartitionNum'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
