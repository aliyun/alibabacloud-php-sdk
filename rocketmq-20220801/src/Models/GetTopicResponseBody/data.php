<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetTopicResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 2022-08-01 20:05:50
     *
     * @var string
     */
    public $createTime;

    /**
     * @example rmq-cn-7e22ody****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example NORMAL
     *
     * @var string
     */
    public $messageType;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example This is the remark for test.
     *
     * @var string
     */
    public $remark;

    /**
     * @example RUNNING
     *
     * @var string
     */
    public $status;

    /**
     * @example topic_test
     *
     * @var string
     */
    public $topicName;

    /**
     * @example 2022-08-01 20:05:50
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'createTime'  => 'createTime',
        'instanceId'  => 'instanceId',
        'messageType' => 'messageType',
        'regionId'    => 'regionId',
        'remark'      => 'remark',
        'status'      => 'status',
        'topicName'   => 'topicName',
        'updateTime'  => 'updateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
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

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
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
