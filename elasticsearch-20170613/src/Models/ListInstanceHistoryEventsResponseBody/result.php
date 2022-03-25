<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListInstanceHistoryEventsResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string[]
     */
    public $actionList;

    /**
     * @var string
     */
    public $eventCreateTime;

    /**
     * @var string
     */
    public $eventCycleStatus;

    /**
     * @var string
     */
    public $eventExecuteTime;

    /**
     * @var string
     */
    public $eventFinashTime;

    /**
     * @var string
     */
    public $eventLevel;

    /**
     * @var string
     */
    public $eventType;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $nodeIP;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'actionList'       => 'actionList',
        'eventCreateTime'  => 'eventCreateTime',
        'eventCycleStatus' => 'eventCycleStatus',
        'eventExecuteTime' => 'eventExecuteTime',
        'eventFinashTime'  => 'eventFinashTime',
        'eventLevel'       => 'eventLevel',
        'eventType'        => 'eventType',
        'instanceId'       => 'instanceId',
        'nodeIP'           => 'nodeIP',
        'regionId'         => 'regionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionList) {
            $res['actionList'] = $this->actionList;
        }
        if (null !== $this->eventCreateTime) {
            $res['eventCreateTime'] = $this->eventCreateTime;
        }
        if (null !== $this->eventCycleStatus) {
            $res['eventCycleStatus'] = $this->eventCycleStatus;
        }
        if (null !== $this->eventExecuteTime) {
            $res['eventExecuteTime'] = $this->eventExecuteTime;
        }
        if (null !== $this->eventFinashTime) {
            $res['eventFinashTime'] = $this->eventFinashTime;
        }
        if (null !== $this->eventLevel) {
            $res['eventLevel'] = $this->eventLevel;
        }
        if (null !== $this->eventType) {
            $res['eventType'] = $this->eventType;
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->nodeIP) {
            $res['nodeIP'] = $this->nodeIP;
        }
        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['actionList'])) {
            if (!empty($map['actionList'])) {
                $model->actionList = $map['actionList'];
            }
        }
        if (isset($map['eventCreateTime'])) {
            $model->eventCreateTime = $map['eventCreateTime'];
        }
        if (isset($map['eventCycleStatus'])) {
            $model->eventCycleStatus = $map['eventCycleStatus'];
        }
        if (isset($map['eventExecuteTime'])) {
            $model->eventExecuteTime = $map['eventExecuteTime'];
        }
        if (isset($map['eventFinashTime'])) {
            $model->eventFinashTime = $map['eventFinashTime'];
        }
        if (isset($map['eventLevel'])) {
            $model->eventLevel = $map['eventLevel'];
        }
        if (isset($map['eventType'])) {
            $model->eventType = $map['eventType'];
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }
        if (isset($map['nodeIP'])) {
            $model->nodeIP = $map['nodeIP'];
        }
        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        return $model;
    }
}
