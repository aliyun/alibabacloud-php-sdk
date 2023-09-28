<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListConsumerGroupsResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @description The ID of the consumer group.
     *
     * @example GID-TEST
     *
     * @var string
     */
    public $consumerGroupId;

    /**
     * @description The time when the consumer group was created.
     *
     * @example 2022-08-01 20:05:50
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The ID of the instance.
     *
     * @example rmq-cn-7e22ody****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the region in which the instance resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The remarks on the consumer group.
     *
     * @example This is the remark for test.
     *
     * @var string
     */
    public $remark;

    /**
     * @description The state of the consumer group.
     *
     * Valid values:
     *
     *   RUNNING
     *
     * .
     *
     *   CREATING
     *
     * .
     * @example RUNNING
     *
     * @var string
     */
    public $status;

    /**
     * @description The time when the consumer group was last updated.
     *
     * @example 2022-08-01 20:05:50
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'consumerGroupId' => 'consumerGroupId',
        'createTime'      => 'createTime',
        'instanceId'      => 'instanceId',
        'regionId'        => 'regionId',
        'remark'          => 'remark',
        'status'          => 'status',
        'updateTime'      => 'updateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->consumerGroupId) {
            $res['consumerGroupId'] = $this->consumerGroupId;
        }
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }
        if (null !== $this->remark) {
            $res['remark'] = $this->remark;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['consumerGroupId'])) {
            $model->consumerGroupId = $map['consumerGroupId'];
        }
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }
        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }
        if (isset($map['remark'])) {
            $model->remark = $map['remark'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        return $model;
    }
}
