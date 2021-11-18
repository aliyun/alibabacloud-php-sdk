<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListAgentEventsResponseBody\agentEventList;

use AlibabaCloud\SDK\CCC\V20170705\Models\ListAgentEventsResponseBody\agentEventList\agentEvent\skillGroupIds;
use AlibabaCloud\Tea\Model;

class agentEvent extends Model
{
    /**
     * @var string
     */
    public $event;

    /**
     * @var int
     */
    public $eventTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $loginName;

    /**
     * @var int
     */
    public $ramId;

    /**
     * @var skillGroupIds
     */
    public $skillGroupIds;
    protected $_name = [
        'event'         => 'Event',
        'eventTime'     => 'EventTime',
        'instanceId'    => 'InstanceId',
        'loginName'     => 'LoginName',
        'ramId'         => 'RamId',
        'skillGroupIds' => 'SkillGroupIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->event) {
            $res['Event'] = $this->event;
        }
        if (null !== $this->eventTime) {
            $res['EventTime'] = $this->eventTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->loginName) {
            $res['LoginName'] = $this->loginName;
        }
        if (null !== $this->ramId) {
            $res['RamId'] = $this->ramId;
        }
        if (null !== $this->skillGroupIds) {
            $res['SkillGroupIds'] = null !== $this->skillGroupIds ? $this->skillGroupIds->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return agentEvent
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Event'])) {
            $model->event = $map['Event'];
        }
        if (isset($map['EventTime'])) {
            $model->eventTime = $map['EventTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['LoginName'])) {
            $model->loginName = $map['LoginName'];
        }
        if (isset($map['RamId'])) {
            $model->ramId = $map['RamId'];
        }
        if (isset($map['SkillGroupIds'])) {
            $model->skillGroupIds = skillGroupIds::fromMap($map['SkillGroupIds']);
        }

        return $model;
    }
}
