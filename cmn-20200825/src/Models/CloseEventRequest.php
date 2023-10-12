<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class CloseEventRequest extends Model
{
    /**
     * @example 探针掉线事件
     *
     * @var string
     */
    public $eventName;

    /**
     * @example agent
     *
     * @var string
     */
    public $eventObjectId;

    /**
     * @example AGENT_EVENT
     *
     * @var string
     */
    public $eventType;

    /**
     * @example cmn-cn-xxxx
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'eventName'     => 'EventName',
        'eventObjectId' => 'EventObjectId',
        'eventType'     => 'EventType',
        'instanceId'    => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventName) {
            $res['EventName'] = $this->eventName;
        }
        if (null !== $this->eventObjectId) {
            $res['EventObjectId'] = $this->eventObjectId;
        }
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CloseEventRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventName'])) {
            $model->eventName = $map['EventName'];
        }
        if (isset($map['EventObjectId'])) {
            $model->eventObjectId = $map['EventObjectId'];
        }
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
