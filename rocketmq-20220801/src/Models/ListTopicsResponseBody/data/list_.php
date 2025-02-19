<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListTopicsResponseBody\data;

use AlibabaCloud\Dara\Model;

class list_ extends Model
{
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
    public $maxSendTps;
    /**
     * @var string
     */
    public $messageType;
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
        'createTime'  => 'createTime',
        'instanceId'  => 'instanceId',
        'maxSendTps'  => 'maxSendTps',
        'messageType' => 'messageType',
        'regionId'    => 'regionId',
        'remark'      => 'remark',
        'status'      => 'status',
        'topicName'   => 'topicName',
        'updateTime'  => 'updateTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        if (null !== $this->maxSendTps) {
            $res['maxSendTps'] = $this->maxSendTps;
        }

        if (null !== $this->messageType) {
            $res['messageType'] = $this->messageType;
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
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        if (isset($map['maxSendTps'])) {
            $model->maxSendTps = $map['maxSendTps'];
        }

        if (isset($map['messageType'])) {
            $model->messageType = $map['messageType'];
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
