<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageFixTaskResponseBody;

use AlibabaCloud\Tea\Model;

class buildTasks extends Model
{
    /**
     * @description The ID of the task.
     *
     * @example ivf-939536b5-c3ca-427b-8183-91007756
     *
     * @var string
     */
    public $buildTaskId;

    /**
     * @description The timestamp when the task starts. Unit: milliseconds.
     *
     * @example 2021-10-14 20:34:07
     *
     * @var string
     */
    public $finishTime;

    /**
     * @description The timestamp when the task ends. Unit: milliseconds.
     *
     * @example 2021-10-14 20:32:05
     *
     * @var string
     */
    public $fixTime;

    /**
     * @description The version of the image after image risks are fixed.
     *
     * @example redhat8-vault
     *
     * @var string
     */
    public $newTag;

    /**
     * @description The UUID of the image after image risks are fixed.
     *
     * @example 2fa731681911ae8d1b5f11893ace****
     *
     * @var string
     */
    public $newUuid;

    /**
     * @description The version of the image.
     *
     * @example centos8.1-ja
     *
     * @var string
     */
    public $oldTag;

    /**
     * @description The UUID of the image.
     *
     * @example 2fa731681911ae8d1b5f11893ace****
     *
     * @var string
     */
    public $oldUuid;

    /**
     * @description The region of the image.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the image repository.
     *
     * @example test-redhat
     *
     * @var string
     */
    public $repoName;

    /**
     * @description The namespace of the image.
     *
     * @example name-002
     *
     * @var string
     */
    public $repoNamespace;

    /**
     * @description The status of the task. Valid values:
     *
     *   **1**: The task is running.
     *   **2**: The task is successful.
     *   **3**: The task failed.
     *
     * @example 2
     *
     * @var int
     */
    public $status;

    /**
     * @description The type of the task. The value is fixed as IMAGE_REPAIR. The value indicates a task that fixes image risks.
     *
     * @example IMAGE_REPAIR
     *
     * @var string
     */
    public $taskType;

    /**
     * @description The alias of the fixed vulnerability.
     *
     * @example CVE-2007-5686:rpath_linux Information Disclosure
     *
     * @var string
     */
    public $vulAlias;
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
        'vulAlias'      => 'VulAlias',
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
        if (null !== $this->vulAlias) {
            $res['VulAlias'] = $this->vulAlias;
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
        if (isset($map['VulAlias'])) {
            $model->vulAlias = $map['VulAlias'];
        }

        return $model;
    }
}
