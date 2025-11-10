<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListConsumerGroupsResponseBody\data;

use AlibabaCloud\Dara\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $consumerGroupId;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $maxReceiveTps;

    /**
     * @var string
     */
    public $messageModel;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $topicName;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'consumerGroupId' => 'consumerGroupId',
        'createTime' => 'createTime',
        'instanceId' => 'instanceId',
        'maxReceiveTps' => 'maxReceiveTps',
        'messageModel' => 'messageModel',
        'regionId' => 'regionId',
        'remark' => 'remark',
        'status' => 'status',
        'topicName' => 'topicName',
        'updateTime' => 'updateTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->maxReceiveTps) {
            $res['maxReceiveTps'] = $this->maxReceiveTps;
        }

        if (null !== $this->messageModel) {
            $res['messageModel'] = $this->messageModel;
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

        if (null !== $this->topicName) {
            $res['topicName'] = $this->topicName;
        }

        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
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
        if (isset($map['consumerGroupId'])) {
            $model->consumerGroupId = $map['consumerGroupId'];
        }

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        if (isset($map['maxReceiveTps'])) {
            $model->maxReceiveTps = $map['maxReceiveTps'];
        }

        if (isset($map['messageModel'])) {
            $model->messageModel = $map['messageModel'];
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

        if (isset($map['topicName'])) {
            $model->topicName = $map['topicName'];
        }

        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        return $model;
    }
}
