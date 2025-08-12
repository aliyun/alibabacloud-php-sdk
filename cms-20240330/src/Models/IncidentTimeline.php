<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class IncidentTimeline extends Model
{
    /**
     * @var string
     */
    public $childType;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $incidentId;

    /**
     * @var string
     */
    public $incidentTimelineId;

    /**
     * @var int
     */
    public $time;

    /**
     * @var string
     */
    public $timelineId;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'childType' => 'childType',
        'content' => 'content',
        'incidentId' => 'incidentId',
        'incidentTimelineId' => 'incidentTimelineId',
        'time' => 'time',
        'timelineId' => 'timelineId',
        'title' => 'title',
        'type' => 'type',
        'userId' => 'userId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->childType) {
            $res['childType'] = $this->childType;
        }

        if (null !== $this->content) {
            $res['content'] = $this->content;
        }

        if (null !== $this->incidentId) {
            $res['incidentId'] = $this->incidentId;
        }

        if (null !== $this->incidentTimelineId) {
            $res['incidentTimelineId'] = $this->incidentTimelineId;
        }

        if (null !== $this->time) {
            $res['time'] = $this->time;
        }

        if (null !== $this->timelineId) {
            $res['timelineId'] = $this->timelineId;
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
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
        if (isset($map['childType'])) {
            $model->childType = $map['childType'];
        }

        if (isset($map['content'])) {
            $model->content = $map['content'];
        }

        if (isset($map['incidentId'])) {
            $model->incidentId = $map['incidentId'];
        }

        if (isset($map['incidentTimelineId'])) {
            $model->incidentTimelineId = $map['incidentTimelineId'];
        }

        if (isset($map['time'])) {
            $model->time = $map['time'];
        }

        if (isset($map['timelineId'])) {
            $model->timelineId = $map['timelineId'];
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
