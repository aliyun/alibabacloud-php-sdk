<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqpopen\V20191212\Models\ListQueuesResponseBody\data;

use AlibabaCloud\Dara\Model;

class queues extends Model
{
    /**
     * @var mixed[]
     */
    public $attributes;

    /**
     * @var bool
     */
    public $autoDeleteState;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var bool
     */
    public $exclusiveState;

    /**
     * @var int
     */
    public $lastConsumeTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @var string
     */
    public $VHostName;
    protected $_name = [
        'attributes' => 'Attributes',
        'autoDeleteState' => 'AutoDeleteState',
        'createTime' => 'CreateTime',
        'exclusiveState' => 'ExclusiveState',
        'lastConsumeTime' => 'LastConsumeTime',
        'name' => 'Name',
        'ownerId' => 'OwnerId',
        'VHostName' => 'VHostName',
    ];

    public function validate()
    {
        if (\is_array($this->attributes)) {
            Model::validateArray($this->attributes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attributes) {
            if (\is_array($this->attributes)) {
                $res['Attributes'] = [];
                foreach ($this->attributes as $key1 => $value1) {
                    $res['Attributes'][$key1] = $value1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Attributes'])) {
            if (!empty($map['Attributes'])) {
                $model->attributes = [];
                foreach ($map['Attributes'] as $key1 => $value1) {
                    $model->attributes[$key1] = $value1;
                }
            }
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
