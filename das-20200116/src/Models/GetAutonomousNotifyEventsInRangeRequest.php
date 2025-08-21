<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Dara\Model;

class GetAutonomousNotifyEventsInRangeRequest extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $eventContext;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $level;

    /**
     * @var string
     */
    public $minLevel;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var string
     */
    public $pageOffset;

    /**
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $context;
    protected $_name = [
        'endTime' => 'EndTime',
        'eventContext' => 'EventContext',
        'instanceId' => 'InstanceId',
        'level' => 'Level',
        'minLevel' => 'MinLevel',
        'nodeId' => 'NodeId',
        'pageOffset' => 'PageOffset',
        'pageSize' => 'PageSize',
        'startTime' => 'StartTime',
        'context' => '__context',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->eventContext) {
            $res['EventContext'] = $this->eventContext;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }

        if (null !== $this->minLevel) {
            $res['MinLevel'] = $this->minLevel;
        }

        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        if (null !== $this->pageOffset) {
            $res['PageOffset'] = $this->pageOffset;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->context) {
            $res['__context'] = $this->context;
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
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['EventContext'])) {
            $model->eventContext = $map['EventContext'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        if (isset($map['MinLevel'])) {
            $model->minLevel = $map['MinLevel'];
        }

        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        if (isset($map['PageOffset'])) {
            $model->pageOffset = $map['PageOffset'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['__context'])) {
            $model->context = $map['__context'];
        }

        return $model;
    }
}
