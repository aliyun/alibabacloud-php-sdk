<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqp\V20190901\Models\ListQueueResponseBody\data\voList;

use AlibabaCloud\Dara\Model;

class queueVO extends Model
{
    /**
     * @var int
     */
    public $accumulationCount;

    /**
     * @var mixed[]
     */
    public $attributes;

    /**
     * @var bool
     */
    public $autoDelete;

    /**
     * @var bool
     */
    public $canDelete;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var bool
     */
    public $durable;

    /**
     * @var bool
     */
    public $exclusive;

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
    public $vhostName;
    protected $_name = [
        'accumulationCount' => 'AccumulationCount',
        'attributes' => 'Attributes',
        'autoDelete' => 'AutoDelete',
        'canDelete' => 'CanDelete',
        'createTime' => 'CreateTime',
        'durable' => 'Durable',
        'exclusive' => 'Exclusive',
        'lastConsumeTime' => 'LastConsumeTime',
        'name' => 'Name',
        'vhostName' => 'VhostName',
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
        if (null !== $this->accumulationCount) {
            $res['AccumulationCount'] = $this->accumulationCount;
        }

        if (null !== $this->attributes) {
            if (\is_array($this->attributes)) {
                $res['Attributes'] = [];
                foreach ($this->attributes as $key1 => $value1) {
                    $res['Attributes'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->autoDelete) {
            $res['AutoDelete'] = $this->autoDelete;
        }

        if (null !== $this->canDelete) {
            $res['CanDelete'] = $this->canDelete;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->durable) {
            $res['Durable'] = $this->durable;
        }

        if (null !== $this->exclusive) {
            $res['Exclusive'] = $this->exclusive;
        }

        if (null !== $this->lastConsumeTime) {
            $res['LastConsumeTime'] = $this->lastConsumeTime;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->vhostName) {
            $res['VhostName'] = $this->vhostName;
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
        if (isset($map['AccumulationCount'])) {
            $model->accumulationCount = $map['AccumulationCount'];
        }

        if (isset($map['Attributes'])) {
            if (!empty($map['Attributes'])) {
                $model->attributes = [];
                foreach ($map['Attributes'] as $key1 => $value1) {
                    $model->attributes[$key1] = $value1;
                }
            }
        }

        if (isset($map['AutoDelete'])) {
            $model->autoDelete = $map['AutoDelete'];
        }

        if (isset($map['CanDelete'])) {
            $model->canDelete = $map['CanDelete'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Durable'])) {
            $model->durable = $map['Durable'];
        }

        if (isset($map['Exclusive'])) {
            $model->exclusive = $map['Exclusive'];
        }

        if (isset($map['LastConsumeTime'])) {
            $model->lastConsumeTime = $map['LastConsumeTime'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['VhostName'])) {
            $model->vhostName = $map['VhostName'];
        }

        return $model;
    }
}
