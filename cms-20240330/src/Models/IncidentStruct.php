<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class IncidentStruct extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var IncidentEscalationStruct[]
     */
    public $escalations;

    /**
     * @var string
     */
    public $incidentId;

    /**
     * @var IncidentPlanStruct
     */
    public $incidentPlan;

    /**
     * @var IncidentResourceDetail
     */
    public $resource;

    /**
     * @var string
     */
    public $severity;

    /**
     * @var string
     */
    public $status;

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
    protected $_name = [
        'content' => 'content',
        'escalations' => 'escalations',
        'incidentId' => 'incidentId',
        'incidentPlan' => 'incidentPlan',
        'resource' => 'resource',
        'severity' => 'severity',
        'status' => 'status',
        'time' => 'time',
        'title' => 'title',
        'userId' => 'userId',
    ];

    public function validate()
    {
        if (\is_array($this->escalations)) {
            Model::validateArray($this->escalations);
        }
        if (null !== $this->incidentPlan) {
            $this->incidentPlan->validate();
        }
        if (null !== $this->resource) {
            $this->resource->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }

        if (null !== $this->escalations) {
            if (\is_array($this->escalations)) {
                $res['escalations'] = [];
                $n1 = 0;
                foreach ($this->escalations as $item1) {
                    $res['escalations'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->incidentId) {
            $res['incidentId'] = $this->incidentId;
        }

        if (null !== $this->incidentPlan) {
            $res['incidentPlan'] = null !== $this->incidentPlan ? $this->incidentPlan->toArray($noStream) : $this->incidentPlan;
        }

        if (null !== $this->resource) {
            $res['resource'] = null !== $this->resource ? $this->resource->toArray($noStream) : $this->resource;
        }

        if (null !== $this->severity) {
            $res['severity'] = $this->severity;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }

        if (isset($map['escalations'])) {
            if (!empty($map['escalations'])) {
                $model->escalations = [];
                $n1 = 0;
                foreach ($map['escalations'] as $item1) {
                    $model->escalations[$n1] = IncidentEscalationStruct::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['incidentId'])) {
            $model->incidentId = $map['incidentId'];
        }

        if (isset($map['incidentPlan'])) {
            $model->incidentPlan = IncidentPlanStruct::fromMap($map['incidentPlan']);
        }

        if (isset($map['resource'])) {
            $model->resource = IncidentResourceDetail::fromMap($map['resource']);
        }

        if (isset($map['severity'])) {
            $model->severity = $map['severity'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
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

        return $model;
    }
}
