<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetRunningTasksResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $activeTimeGMT;

    /**
     * @var string
     */
    public $activityId;

    /**
     * @var string
     */
    public $actualActionerId;

    /**
     * @var string
     */
    public $createTimeGMT;

    /**
     * @var string
     */
    public $finishTimeGMT;

    /**
     * @var string
     */
    public $originatorId;

    /**
     * @var string
     */
    public $processInstanceId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskType;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $titleInEnglish;
    protected $_name = [
        'activeTimeGMT' => 'ActiveTimeGMT',
        'activityId' => 'ActivityId',
        'actualActionerId' => 'ActualActionerId',
        'createTimeGMT' => 'CreateTimeGMT',
        'finishTimeGMT' => 'FinishTimeGMT',
        'originatorId' => 'OriginatorId',
        'processInstanceId' => 'ProcessInstanceId',
        'status' => 'Status',
        'taskId' => 'TaskId',
        'taskType' => 'TaskType',
        'title' => 'Title',
        'titleInEnglish' => 'TitleInEnglish',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activeTimeGMT) {
            $res['ActiveTimeGMT'] = $this->activeTimeGMT;
        }

        if (null !== $this->activityId) {
            $res['ActivityId'] = $this->activityId;
        }

        if (null !== $this->actualActionerId) {
            $res['ActualActionerId'] = $this->actualActionerId;
        }

        if (null !== $this->createTimeGMT) {
            $res['CreateTimeGMT'] = $this->createTimeGMT;
        }

        if (null !== $this->finishTimeGMT) {
            $res['FinishTimeGMT'] = $this->finishTimeGMT;
        }

        if (null !== $this->originatorId) {
            $res['OriginatorId'] = $this->originatorId;
        }

        if (null !== $this->processInstanceId) {
            $res['ProcessInstanceId'] = $this->processInstanceId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        if (null !== $this->titleInEnglish) {
            $res['TitleInEnglish'] = $this->titleInEnglish;
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
        if (isset($map['ActiveTimeGMT'])) {
            $model->activeTimeGMT = $map['ActiveTimeGMT'];
        }

        if (isset($map['ActivityId'])) {
            $model->activityId = $map['ActivityId'];
        }

        if (isset($map['ActualActionerId'])) {
            $model->actualActionerId = $map['ActualActionerId'];
        }

        if (isset($map['CreateTimeGMT'])) {
            $model->createTimeGMT = $map['CreateTimeGMT'];
        }

        if (isset($map['FinishTimeGMT'])) {
            $model->finishTimeGMT = $map['FinishTimeGMT'];
        }

        if (isset($map['OriginatorId'])) {
            $model->originatorId = $map['OriginatorId'];
        }

        if (isset($map['ProcessInstanceId'])) {
            $model->processInstanceId = $map['ProcessInstanceId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        if (isset($map['TitleInEnglish'])) {
            $model->titleInEnglish = $map['TitleInEnglish'];
        }

        return $model;
    }
}
