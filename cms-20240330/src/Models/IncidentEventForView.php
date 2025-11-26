<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class IncidentEventForView extends Model
{
    /**
     * @var int
     */
    public $autoRecoverTime;

    /**
     * @var CmsEventForView
     */
    public $content;

    /**
     * @var int
     */
    public $count;

    /**
     * @var mixed[]
     */
    public $dimension;

    /**
     * @var EventResourceForIncidentView
     */
    public $eventResource;

    /**
     * @var mixed[]
     */
    public $groupBy;

    /**
     * @var string
     */
    public $incidentEventUuid;

    /**
     * @var string
     */
    public $incidentUuid;

    /**
     * @var mixed[]
     */
    public $labels;

    /**
     * @var int
     */
    public $lastTime;

    /**
     * @var int
     */
    public $recoverTime;

    /**
     * @var string[]
     */
    public $searchIndex;

    /**
     * @var string
     */
    public $severity;

    /**
     * @var mixed[]
     */
    public $severityCountMap;

    /**
     * @var int
     */
    public $state;

    /**
     * @var string
     */
    public $textIndex;

    /**
     * @var int
     */
    public $time;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $workspace;
    protected $_name = [
        'autoRecoverTime' => 'autoRecoverTime',
        'content' => 'content',
        'count' => 'count',
        'dimension' => 'dimension',
        'eventResource' => 'eventResource',
        'groupBy' => 'groupBy',
        'incidentEventUuid' => 'incidentEventUuid',
        'incidentUuid' => 'incidentUuid',
        'labels' => 'labels',
        'lastTime' => 'lastTime',
        'recoverTime' => 'recoverTime',
        'searchIndex' => 'searchIndex',
        'severity' => 'severity',
        'severityCountMap' => 'severityCountMap',
        'state' => 'state',
        'textIndex' => 'textIndex',
        'time' => 'time',
        'title' => 'title',
        'userId' => 'userId',
        'workspace' => 'workspace',
    ];

    public function validate()
    {
        if (null !== $this->content) {
            $this->content->validate();
        }
        if (\is_array($this->dimension)) {
            Model::validateArray($this->dimension);
        }
        if (null !== $this->eventResource) {
            $this->eventResource->validate();
        }
        if (\is_array($this->groupBy)) {
            Model::validateArray($this->groupBy);
        }
        if (\is_array($this->labels)) {
            Model::validateArray($this->labels);
        }
        if (\is_array($this->searchIndex)) {
            Model::validateArray($this->searchIndex);
        }
        if (\is_array($this->severityCountMap)) {
            Model::validateArray($this->severityCountMap);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoRecoverTime) {
            $res['autoRecoverTime'] = $this->autoRecoverTime;
        }

        if (null !== $this->content) {
            $res['content'] = null !== $this->content ? $this->content->toArray($noStream) : $this->content;
        }

        if (null !== $this->count) {
            $res['count'] = $this->count;
        }

        if (null !== $this->dimension) {
            if (\is_array($this->dimension)) {
                $res['dimension'] = [];
                foreach ($this->dimension as $key1 => $value1) {
                    $res['dimension'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->eventResource) {
            $res['eventResource'] = null !== $this->eventResource ? $this->eventResource->toArray($noStream) : $this->eventResource;
        }

        if (null !== $this->groupBy) {
            if (\is_array($this->groupBy)) {
                $res['groupBy'] = [];
                foreach ($this->groupBy as $key1 => $value1) {
                    $res['groupBy'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->incidentEventUuid) {
            $res['incidentEventUuid'] = $this->incidentEventUuid;
        }

        if (null !== $this->incidentUuid) {
            $res['incidentUuid'] = $this->incidentUuid;
        }

        if (null !== $this->labels) {
            if (\is_array($this->labels)) {
                $res['labels'] = [];
                foreach ($this->labels as $key1 => $value1) {
                    $res['labels'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->lastTime) {
            $res['lastTime'] = $this->lastTime;
        }

        if (null !== $this->recoverTime) {
            $res['recoverTime'] = $this->recoverTime;
        }

        if (null !== $this->searchIndex) {
            if (\is_array($this->searchIndex)) {
                $res['searchIndex'] = [];
                $n1 = 0;
                foreach ($this->searchIndex as $item1) {
                    $res['searchIndex'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->severity) {
            $res['severity'] = $this->severity;
        }

        if (null !== $this->severityCountMap) {
            if (\is_array($this->severityCountMap)) {
                $res['severityCountMap'] = [];
                foreach ($this->severityCountMap as $key1 => $value1) {
                    $res['severityCountMap'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->state) {
            $res['state'] = $this->state;
        }

        if (null !== $this->textIndex) {
            $res['textIndex'] = $this->textIndex;
        }

        if (null !== $this->time) {
            $res['time'] = $this->time;
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
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
        if (isset($map['autoRecoverTime'])) {
            $model->autoRecoverTime = $map['autoRecoverTime'];
        }

        if (isset($map['content'])) {
            $model->content = CmsEventForView::fromMap($map['content']);
        }

        if (isset($map['count'])) {
            $model->count = $map['count'];
        }

        if (isset($map['dimension'])) {
            if (!empty($map['dimension'])) {
                $model->dimension = [];
                foreach ($map['dimension'] as $key1 => $value1) {
                    $model->dimension[$key1] = $value1;
                }
            }
        }

        if (isset($map['eventResource'])) {
            $model->eventResource = EventResourceForIncidentView::fromMap($map['eventResource']);
        }

        if (isset($map['groupBy'])) {
            if (!empty($map['groupBy'])) {
                $model->groupBy = [];
                foreach ($map['groupBy'] as $key1 => $value1) {
                    $model->groupBy[$key1] = $value1;
                }
            }
        }

        if (isset($map['incidentEventUuid'])) {
            $model->incidentEventUuid = $map['incidentEventUuid'];
        }

        if (isset($map['incidentUuid'])) {
            $model->incidentUuid = $map['incidentUuid'];
        }

        if (isset($map['labels'])) {
            if (!empty($map['labels'])) {
                $model->labels = [];
                foreach ($map['labels'] as $key1 => $value1) {
                    $model->labels[$key1] = $value1;
                }
            }
        }

        if (isset($map['lastTime'])) {
            $model->lastTime = $map['lastTime'];
        }

        if (isset($map['recoverTime'])) {
            $model->recoverTime = $map['recoverTime'];
        }

        if (isset($map['searchIndex'])) {
            if (!empty($map['searchIndex'])) {
                $model->searchIndex = [];
                $n1 = 0;
                foreach ($map['searchIndex'] as $item1) {
                    $model->searchIndex[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['severity'])) {
            $model->severity = $map['severity'];
        }

        if (isset($map['severityCountMap'])) {
            if (!empty($map['severityCountMap'])) {
                $model->severityCountMap = [];
                foreach ($map['severityCountMap'] as $key1 => $value1) {
                    $model->severityCountMap[$key1] = $value1;
                }
            }
        }

        if (isset($map['state'])) {
            $model->state = $map['state'];
        }

        if (isset($map['textIndex'])) {
            $model->textIndex = $map['textIndex'];
        }

        if (isset($map['time'])) {
            $model->time = $map['time'];
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
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
