<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models;

use AlibabaCloud\Dara\Model;

class UpdateConsumerOffsetShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $consumerId;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $offsetsShrink;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $resetType;
    /**
     * @var string
     */
    public $time;
    /**
     * @var string
     */
    public $topic;
    protected $_name = [
        'consumerId'    => 'ConsumerId',
        'instanceId'    => 'InstanceId',
        'offsetsShrink' => 'Offsets',
        'regionId'      => 'RegionId',
        'resetType'     => 'ResetType',
        'time'          => 'Time',
        'topic'         => 'Topic',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->consumerId) {
            $res['ConsumerId'] = $this->consumerId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->offsetsShrink) {
            $res['Offsets'] = $this->offsetsShrink;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resetType) {
            $res['ResetType'] = $this->resetType;
        }

        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }

        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
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
        if (isset($map['ConsumerId'])) {
            $model->consumerId = $map['ConsumerId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Offsets'])) {
            $model->offsetsShrink = $map['Offsets'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResetType'])) {
            $model->resetType = $map['ResetType'];
        }

        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }

        return $model;
    }
}
