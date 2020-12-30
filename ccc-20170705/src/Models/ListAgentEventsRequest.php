<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\Tea\Model;

class ListAgentEventsRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $stopTime;

    /**
     * @var string[]
     */
    public $ramId;

    /**
     * @var string[]
     */
    public $event;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'startTime'  => 'StartTime',
        'stopTime'   => 'StopTime',
        'ramId'      => 'RamId',
        'event'      => 'Event',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->stopTime) {
            $res['StopTime'] = $this->stopTime;
        }
        if (null !== $this->ramId) {
            $res['RamId'] = $this->ramId;
        }
        if (null !== $this->event) {
            $res['Event'] = $this->event;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAgentEventsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['StopTime'])) {
            $model->stopTime = $map['StopTime'];
        }
        if (isset($map['RamId'])) {
            if (!empty($map['RamId'])) {
                $model->ramId = $map['RamId'];
            }
        }
        if (isset($map['Event'])) {
            if (!empty($map['Event'])) {
                $model->event = $map['Event'];
            }
        }

        return $model;
    }
}
