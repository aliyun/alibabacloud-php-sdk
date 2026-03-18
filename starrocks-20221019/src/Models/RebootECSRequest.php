<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Starrocks\V20221019\Models;

use AlibabaCloud\Dara\Model;

class RebootECSRequest extends Model
{
    /**
     * @var string
     */
    public $eventId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $rebootTime;
    protected $_name = [
        'eventId' => 'EventId',
        'instanceId' => 'InstanceId',
        'rebootTime' => 'RebootTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->rebootTime) {
            $res['RebootTime'] = $this->rebootTime;
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
        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['RebootTime'])) {
            $model->rebootTime = $map['RebootTime'];
        }

        return $model;
    }
}
