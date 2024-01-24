<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqpopen\V20191212\Models\ListQueuesResponseBody\data;

use AlibabaCloud\Tea\Model;

class queues extends Model
{
    /**
     * @description The attributes.
     *
     * @example test
     *
     * @var mixed[]
     */
    public $attributes;

    /**
     * @description Indicates whether the queue was automatically deleted.
     *
     * @example false
     *
     * @var bool
     */
    public $autoDeleteState;

    /**
     * @description The time when the queue was created.
     *
     * @example 1580887085240
     *
     * @var int
     */
    public $createTime;

    /**
     * @description Indicates whether the queue is an exclusive queue.
     *
     * @example false
     *
     * @var bool
     */
    public $exclusiveState;

    /**
     * @description The time when messages in the queue were last consumed.
     *
     * @example 1680887085240
     *
     * @var int
     */
    public $lastConsumeTime;

    /**
     * @description The queue name.
     *
     * @example QueueTest
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the ApsaraMQ for RabbitMQ instance to which the queue belongs.
     *
     * @example 1880770869023***
     *
     * @var string
     */
    public $ownerId;

    /**
     * @description The vhost name.
     *
     * @example test
     *
     * @var string
     */
    public $VHostName;
    protected $_name = [
        'attributes'      => 'Attributes',
        'autoDeleteState' => 'AutoDeleteState',
        'createTime'      => 'CreateTime',
        'exclusiveState'  => 'ExclusiveState',
        'lastConsumeTime' => 'LastConsumeTime',
        'name'            => 'Name',
        'ownerId'         => 'OwnerId',
        'VHostName'       => 'VHostName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attributes) {
            $res['Attributes'] = $this->attributes;
        }
        if (null !== $this->autoDeleteState) {
            $res['AutoDeleteState'] = $this->autoDeleteState;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->exclusiveState) {
            $res['ExclusiveState'] = $this->exclusiveState;
        }
        if (null !== $this->lastConsumeTime) {
            $res['LastConsumeTime'] = $this->lastConsumeTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->VHostName) {
            $res['VHostName'] = $this->VHostName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return queues
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Attributes'])) {
            $model->attributes = $map['Attributes'];
        }
        if (isset($map['AutoDeleteState'])) {
            $model->autoDeleteState = $map['AutoDeleteState'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ExclusiveState'])) {
            $model->exclusiveState = $map['ExclusiveState'];
        }
        if (isset($map['LastConsumeTime'])) {
            $model->lastConsumeTime = $map['LastConsumeTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['VHostName'])) {
            $model->VHostName = $map['VHostName'];
        }

        return $model;
    }
}
