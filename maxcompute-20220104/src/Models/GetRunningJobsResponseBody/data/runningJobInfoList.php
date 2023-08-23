<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetRunningJobsResponseBody\data;

use AlibabaCloud\Tea\Model;

class runningJobInfoList extends Model
{
    /**
     * @example 0.45
     *
     * @var float
     */
    public $cuSnapshot;

    /**
     * @example 2023050206371544gomgtp3ljcr4
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example ALIYUN$xxx@test.aliyunid.com
     *
     * @var string
     */
    public $jobOwner;

    /**
     * @example 0.45
     *
     * @var float
     */
    public $memorySnapshot;

    /**
     * @example 0
     *
     * @var float
     */
    public $progress;

    /**
     * @example project_20221021123044_981b
     *
     * @var string
     */
    public $project;

    /**
     * @example my_quota
     *
     * @var string
     */
    public $quotaNickname;

    /**
     * @example 1689746864
     *
     * @var int
     */
    public $runningAtTime;

    /**
     * @example 1689746864
     *
     * @var int
     */
    public $submittedAtTime;
    protected $_name = [
        'cuSnapshot'      => 'cuSnapshot',
        'instanceId'      => 'instanceId',
        'jobOwner'        => 'jobOwner',
        'memorySnapshot'  => 'memorySnapshot',
        'progress'        => 'progress',
        'project'         => 'project',
        'quotaNickname'   => 'quotaNickname',
        'runningAtTime'   => 'runningAtTime',
        'submittedAtTime' => 'submittedAtTime',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return runningJobInfoList
     */
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
