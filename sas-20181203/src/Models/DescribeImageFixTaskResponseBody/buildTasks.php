<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageFixTaskResponseBody;

use AlibabaCloud\Tea\Model;

class buildTasks extends Model
{
    /**
     * @var string
     */
    public $buildTaskId;

    /**
     * @var string
     */
    public $finishTime;

    /**
     * @var string
     */
    public $fixTime;

    /**
     * @var string
     */
    public $newTag;

    /**
     * @var string
     */
    public $newUuid;

    /**
     * @var string
     */
    public $oldTag;

    /**
     * @var string
     */
    public $oldUuid;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $repoName;

    /**
     * @var string
     */
    public $repoNamespace;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $taskType;
    protected $_name = [
        'buildTaskId'   => 'BuildTaskId',
        'finishTime'    => 'FinishTime',
        'fixTime'       => 'FixTime',
        'newTag'        => 'NewTag',
        'newUuid'       => 'NewUuid',
        'oldTag'        => 'OldTag',
        'oldUuid'       => 'OldUuid',
        'regionId'      => 'RegionId',
        'repoName'      => 'RepoName',
        'repoNamespace' => 'RepoNamespace',
        'status'        => 'Status',
        'taskType'      => 'TaskType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->buildTaskId) {
            $res['BuildTaskId'] = $this->buildTaskId;
        }
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->fixTime) {
            $res['FixTime'] = $this->fixTime;
        }
        if (null !== $this->newTag) {
            $res['NewTag'] = $this->newTag;
        }
        if (null !== $this->newUuid) {
            $res['NewUuid'] = $this->newUuid;
        }
        if (null !== $this->oldTag) {
            $res['OldTag'] = $this->oldTag;
        }
        if (null !== $this->oldUuid) {
            $res['OldUuid'] = $this->oldUuid;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->repoName) {
            $res['RepoName'] = $this->repoName;
        }
        if (null !== $this->repoNamespace) {
            $res['RepoNamespace'] = $this->repoNamespace;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return buildTasks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BuildTaskId'])) {
            $model->buildTaskId = $map['BuildTaskId'];
        }
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['FixTime'])) {
            $model->fixTime = $map['FixTime'];
        }
        if (isset($map['NewTag'])) {
            $model->newTag = $map['NewTag'];
        }
        if (isset($map['NewUuid'])) {
            $model->newUuid = $map['NewUuid'];
        }
        if (isset($map['OldTag'])) {
            $model->oldTag = $map['OldTag'];
        }
        if (isset($map['OldUuid'])) {
            $model->oldUuid = $map['OldUuid'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RepoName'])) {
            $model->repoName = $map['RepoName'];
        }
        if (isset($map['RepoNamespace'])) {
            $model->repoNamespace = $map['RepoNamespace'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
