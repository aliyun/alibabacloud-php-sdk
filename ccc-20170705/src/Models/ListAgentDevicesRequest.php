<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\Tea\Model;

class ListAgentDevicesRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $ramIds;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $stopTime;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'ramIds'     => 'RamIds',
        'startTime'  => 'StartTime',
        'stopTime'   => 'StopTime',
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
        if (null !== $this->ramIds) {
            $res['RamIds'] = $this->ramIds;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->stopTime) {
            $res['StopTime'] = $this->stopTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAgentDevicesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RamIds'])) {
            $model->ramIds = $map['RamIds'];
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
