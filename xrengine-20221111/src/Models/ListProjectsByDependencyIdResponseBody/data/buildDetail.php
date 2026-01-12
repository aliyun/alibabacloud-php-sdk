<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XrEngine\V20221111\Models\ListProjectsByDependencyIdResponseBody\data;

use AlibabaCloud\Dara\Model;

class buildDetail extends Model
{
    /**
     * @var string
     */
    public $completedTime;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var int
     */
    public $estimatedDuration;

    /**
     * @var string
     */
    public $runningTime;

    /**
     * @var string
     */
    public $submitTime;
    protected $_name = [
        'completedTime' => 'CompletedTime',
        'errorMessage' => 'ErrorMessage',
        'estimatedDuration' => 'EstimatedDuration',
        'runningTime' => 'RunningTime',
        'submitTime' => 'SubmitTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->completedTime) {
            $res['CompletedTime'] = $this->completedTime;
        }

        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->estimatedDuration) {
            $res['EstimatedDuration'] = $this->estimatedDuration;
        }

        if (null !== $this->runningTime) {
            $res['RunningTime'] = $this->runningTime;
        }

        if (null !== $this->submitTime) {
            $res['SubmitTime'] = $this->submitTime;
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
        if (isset($map['CompletedTime'])) {
            $model->completedTime = $map['CompletedTime'];
        }

        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        if (isset($map['EstimatedDuration'])) {
            $model->estimatedDuration = $map['EstimatedDuration'];
        }

        if (isset($map['RunningTime'])) {
            $model->runningTime = $map['RunningTime'];
        }

        if (isset($map['SubmitTime'])) {
            $model->submitTime = $map['SubmitTime'];
        }

        return $model;
    }
}
