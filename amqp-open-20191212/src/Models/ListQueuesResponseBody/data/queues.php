<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqpopen\V20191212\Models\ListQueuesResponseBody\data;

use AlibabaCloud\Tea\Model;

class queues extends Model
{
    /**
     * @var bool
     */
    public $exclusiveState;

    /**
     * @var bool
     */
    public $autoDeleteState;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var mixed[]
     */
    public $attributes;

    /**
     * @var string
     */
    public $VHostName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @var int
     */
    public $lastConsumeTime;
    protected $_name = [
        'exclusiveState'  => 'ExclusiveState',
        'autoDeleteState' => 'AutoDeleteState',
        'createTime'      => 'CreateTime',
        'attributes'      => 'Attributes',
        'VHostName'       => 'VHostName',
        'name'            => 'Name',
        'ownerId'         => 'OwnerId',
        'lastConsumeTime' => 'LastConsumeTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->exclusiveState) {
            $res['ExclusiveState'] = $this->exclusiveState;
        }
        if (null !== $this->autoDeleteState) {
            $res['AutoDeleteState'] = $this->autoDeleteState;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->attributes) {
            $res['Attributes'] = $this->attributes;
        }
        if (null !== $this->VHostName) {
            $res['VHostName'] = $this->VHostName;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->lastConsumeTime) {
            $res['LastConsumeTime'] = $this->lastConsumeTime;
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
        if (isset($map['ExclusiveState'])) {
            $model->exclusiveState = $map['ExclusiveState'];
        }
        if (isset($map['AutoDeleteState'])) {
            $model->autoDeleteState = $map['AutoDeleteState'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Attributes'])) {
            $model->attributes = $map['Attributes'];
        }
        if (isset($map['VHostName'])) {
            $model->VHostName = $map['VHostName'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['LastConsumeTime'])) {
            $model->lastConsumeTime = $map['LastConsumeTime'];
        }

        return $model;
    }
}
