<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\Dara\Model;

class ListAgentEventsRequest extends Model
{
    /**
     * @var string[]
     */
    public $event;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string[]
     */
    public $ramId;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $stopTime;
    protected $_name = [
        'event' => 'Event',
        'instanceId' => 'InstanceId',
        'ramId' => 'RamId',
        'startTime' => 'StartTime',
        'stopTime' => 'StopTime',
    ];

    public function validate()
    {
        if (\is_array($this->event)) {
            Model::validateArray($this->event);
        }
        if (\is_array($this->ramId)) {
            Model::validateArray($this->ramId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->event) {
            if (\is_array($this->event)) {
                $res['Event'] = [];
                $n1 = 0;
                foreach ($this->event as $item1) {
                    $res['Event'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->ramId) {
            if (\is_array($this->ramId)) {
                $res['RamId'] = [];
                $n1 = 0;
                foreach ($this->ramId as $item1) {
                    $res['RamId'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->stopTime) {
            $res['StopTime'] = $this->stopTime;
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
        if (isset($map['Event'])) {
            if (!empty($map['Event'])) {
                $model->event = [];
                $n1 = 0;
                foreach ($map['Event'] as $item1) {
                    $model->event[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['RamId'])) {
            if (!empty($map['RamId'])) {
                $model->ramId = [];
                $n1 = 0;
                foreach ($map['RamId'] as $item1) {
                    $model->ramId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['StopTime'])) {
            $model->stopTime = $map['StopTime'];
        }

        return $model;
    }
}
