<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class IncidentTimelineForView extends Model
{
    /**
     * @var string
     */
    public $changeType;

    /**
     * @var mixed
     */
    public $content;

    /**
     * @var string
     */
    public $incidentUuid;

    /**
     * @var ContactForIncidentView
     */
    public $operator;

    /**
     * @var int
     */
    public $time;

    /**
     * @var string
     */
    public $timelineUuid;

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

    /**
     * @var string
     */
    public $workspace;
    protected $_name = [
        'changeType' => 'changeType',
        'content' => 'content',
        'incidentUuid' => 'incidentUuid',
        'operator' => 'operator',
        'time' => 'time',
        'timelineUuid' => 'timelineUuid',
        'title' => 'title',
        'type' => 'type',
        'userId' => 'userId',
        'workspace' => 'workspace',
    ];

    public function validate()
    {
        if (null !== $this->operator) {
            $this->operator->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->changeType) {
            $res['changeType'] = $this->changeType;
        }

        if (null !== $this->content) {
            $res['content'] = $this->content;
        }

        if (null !== $this->incidentUuid) {
            $res['incidentUuid'] = $this->incidentUuid;
        }

        if (null !== $this->operator) {
            $res['operator'] = null !== $this->operator ? $this->operator->toArray($noStream) : $this->operator;
        }

        if (null !== $this->time) {
            $res['time'] = $this->time;
        }

        if (null !== $this->timelineUuid) {
            $res['timelineUuid'] = $this->timelineUuid;
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

        if (null !== $this->workspace) {
            $res['workspace'] = $this->workspace;
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
        if (isset($map['changeType'])) {
            $model->changeType = $map['changeType'];
        }

        if (isset($map['content'])) {
            $model->content = $map['content'];
        }

        if (isset($map['incidentUuid'])) {
            $model->incidentUuid = $map['incidentUuid'];
        }

        if (isset($map['operator'])) {
            $model->operator = ContactForIncidentView::fromMap($map['operator']);
        }

        if (isset($map['time'])) {
            $model->time = $map['time'];
        }

        if (isset($map['timelineUuid'])) {
            $model->timelineUuid = $map['timelineUuid'];
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

        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }

        return $model;
    }
}
