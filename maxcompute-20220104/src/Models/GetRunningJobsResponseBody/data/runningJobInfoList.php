<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetRunningJobsResponseBody\data;

use AlibabaCloud\Dara\Model;

class runningJobInfoList extends Model
{
    /**
     * @var float
     */
    public $cuSnapshot;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $jobOwner;

    /**
     * @var float
     */
    public $memorySnapshot;

    /**
     * @var float
     */
    public $progress;

    /**
     * @var string
     */
    public $project;

    /**
     * @var string
     */
    public $quotaNickname;

    /**
     * @var int
     */
    public $runningAtTime;

    /**
     * @var int
     */
    public $submittedAtTime;
    protected $_name = [
        'cuSnapshot' => 'cuSnapshot',
        'instanceId' => 'instanceId',
        'jobOwner' => 'jobOwner',
        'memorySnapshot' => 'memorySnapshot',
        'progress' => 'progress',
        'project' => 'project',
        'quotaNickname' => 'quotaNickname',
        'runningAtTime' => 'runningAtTime',
        'submittedAtTime' => 'submittedAtTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cuSnapshot) {
            $res['cuSnapshot'] = $this->cuSnapshot;
        }

        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        if (null !== $this->jobOwner) {
            $res['jobOwner'] = $this->jobOwner;
        }

        if (null !== $this->memorySnapshot) {
            $res['memorySnapshot'] = $this->memorySnapshot;
        }

        if (null !== $this->progress) {
            $res['progress'] = $this->progress;
        }

        if (null !== $this->project) {
            $res['project'] = $this->project;
        }

        if (null !== $this->quotaNickname) {
            $res['quotaNickname'] = $this->quotaNickname;
        }

        if (null !== $this->runningAtTime) {
            $res['runningAtTime'] = $this->runningAtTime;
        }

        if (null !== $this->submittedAtTime) {
            $res['submittedAtTime'] = $this->submittedAtTime;
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
        if (isset($map['cuSnapshot'])) {
            $model->cuSnapshot = $map['cuSnapshot'];
        }

        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        if (isset($map['jobOwner'])) {
            $model->jobOwner = $map['jobOwner'];
        }

        if (isset($map['memorySnapshot'])) {
            $model->memorySnapshot = $map['memorySnapshot'];
        }

        if (isset($map['progress'])) {
            $model->progress = $map['progress'];
        }

        if (isset($map['project'])) {
            $model->project = $map['project'];
        }

        if (isset($map['quotaNickname'])) {
            $model->quotaNickname = $map['quotaNickname'];
        }

        if (isset($map['runningAtTime'])) {
            $model->runningAtTime = $map['runningAtTime'];
        }

        if (isset($map['submittedAtTime'])) {
            $model->submittedAtTime = $map['submittedAtTime'];
        }

        return $model;
    }
}
