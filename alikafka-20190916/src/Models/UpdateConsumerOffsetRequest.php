<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\UpdateConsumerOffsetRequest\offsets;

class UpdateConsumerOffsetRequest extends Model
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
     * @var offsets[]
     */
    public $offsets;

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
        'consumerId' => 'ConsumerId',
        'instanceId' => 'InstanceId',
        'offsets' => 'Offsets',
        'regionId' => 'RegionId',
        'resetType' => 'ResetType',
        'time' => 'Time',
        'topic' => 'Topic',
    ];

    public function validate()
    {
        if (\is_array($this->offsets)) {
            Model::validateArray($this->offsets);
        }
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

        if (null !== $this->offsets) {
            if (\is_array($this->offsets)) {
                $res['Offsets'] = [];
                $n1 = 0;
                foreach ($this->offsets as $item1) {
                    $res['Offsets'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['Offsets'])) {
                $model->offsets = [];
                $n1 = 0;
                foreach ($map['Offsets'] as $item1) {
                    $model->offsets[$n1] = offsets::fromMap($item1);
                    ++$n1;
                }
            }
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
