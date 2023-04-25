<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models;

use AlibabaCloud\SDK\Alikafka\V20190916\Models\UpdateConsumerOffsetRequest\offsets;
use AlibabaCloud\Tea\Model;

class UpdateConsumerOffsetRequest extends Model
{
    /**
     * @example kafka-test
     *
     * @var string
     */
    public $consumerId;

    /**
     * @example alikafka_post-cn-mp91inkw****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var offsets[]
     */
    public $offsets;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example timestamp
     *
     * @var string
     */
    public $resetType;

    /**
     * @example -1
     *
     * @var string
     */
    public $time;

    /**
     * @example topic_name
     *
     * @var string
     */
    public $topic;
    protected $_name = [
        'consumerId' => 'ConsumerId',
        'instanceId' => 'InstanceId',
        'offsets'    => 'Offsets',
        'regionId'   => 'RegionId',
        'resetType'  => 'ResetType',
        'time'       => 'Time',
        'topic'      => 'Topic',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->consumerId) {
            $res['ConsumerId'] = $this->consumerId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->offsets) {
            $res['Offsets'] = [];
            if (null !== $this->offsets && \is_array($this->offsets)) {
                $n = 0;
                foreach ($this->offsets as $item) {
                    $res['Offsets'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return UpdateConsumerOffsetRequest
     */
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
                $n              = 0;
                foreach ($map['Offsets'] as $item) {
                    $model->offsets[$n++] = null !== $item ? offsets::fromMap($item) : $item;
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
