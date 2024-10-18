<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\ListJobsResponseBody\jobs;

use AlibabaCloud\SDK\EHPC\V20240730\Models\ListJobsResponseBody\jobs\jobSpec\resources;
use AlibabaCloud\Tea\Model;

class jobSpec extends Model
{
    /**
     * @description 数组作业ID。
     *
     * @example 4
     *
     * @var string
     */
    public $arrayJobId;

    /**
     * @description 数组子作业ID。
     *
     * @example 1
     *
     * @var string
     */
    public $arrayJobSubId;

    /**
     * @description The queue format of the job.
     *
     *   If the job is not in a queue, the output is empty.
     *   The format is X-Y:Z. X indicates the first index, Y indicates the final index, and Z indicates the step size. For example, 2-7:2 indicates three sub-jobs numbered 2, 4, and 6.
     *
     * @example 1-5:2
     *
     * @var string
     */
    public $arrayRequest;

    /**
     * @description The job description.
     *
     * @example jobDescription
     *
     * @var string
     */
    public $comment;

    /**
     * @description The job ID.
     *
     * @example 12
     *
     * @var string
     */
    public $id;

    /**
     * @description The queue name.
     *
     * @example comp
     *
     * @var string
     */
    public $jobQueue;

    /**
     * @description The time when the job was last updated.
     *
     * @example 1724123085
     *
     * @var string
     */
    public $lastModifyTime;

    /**
     * @description The compute nodes that were used to run the job.
     *
     * @example compute[002,005,003]
     *
     * @var string
     */
    public $nodeList;

    /**
     * @description The job priority. Valid values: 0 to 9. A larger value indicates a higher priority.
     *
     * @example 0
     *
     * @var string
     */
    public $priority;

    /**
     * @description The information about the resources required to run the job.
     *
     * @var resources
     */
    public $resources;

    /**
     * @description The user that ran the job.
     *
     * @example testuser1
     *
     * @var string
     */
    public $runasUser;

    /**
     * @description The job state. Valid values: (PBS cluster and Slurm cluster)
     *
     *   FINISHED/Completed
     *   RUNNING/Running
     *   QUEUED/Pending
     *   FAILED/Failed
     *
     * @example Running
     *
     * @var string
     */
    public $state;

    /**
     * @description The error output path.
     *
     * @example ./Temp
     *
     * @var string
     */
    public $stderrPath;

    /**
     * @description The standard output path.
     *
     * @example ./Temp
     *
     * @var string
     */
    public $stdoutPath;

    /**
     * @description The time when the job was submitted.
     *
     * @example 1724122486
     *
     * @var string
     */
    public $submitTime;

    /**
     * @description The variables of the job.
     *
     * @example {"PBS_O_SHELL":"/bin/bash", 	"PBS_O_HOST":"manager", 	"PBS_O_SYSTEM":"Linux", 	"PBS_O_LANG":"en_US.UTF-8", 	"PBS_O_QUEUE":"workq"}
     *
     * @var string
     */
    public $variables;
    protected $_name = [
        'arrayJobId'     => 'ArrayJobId',
        'arrayJobSubId'  => 'ArrayJobSubId',
        'arrayRequest'   => 'ArrayRequest',
        'comment'        => 'Comment',
        'id'             => 'Id',
        'jobQueue'       => 'JobQueue',
        'lastModifyTime' => 'LastModifyTime',
        'nodeList'       => 'NodeList',
        'priority'       => 'Priority',
        'resources'      => 'Resources',
        'runasUser'      => 'RunasUser',
        'state'          => 'State',
        'stderrPath'     => 'StderrPath',
        'stdoutPath'     => 'StdoutPath',
        'submitTime'     => 'SubmitTime',
        'variables'      => 'Variables',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arrayJobId) {
            $res['ArrayJobId'] = $this->arrayJobId;
        }
        if (null !== $this->arrayJobSubId) {
            $res['ArrayJobSubId'] = $this->arrayJobSubId;
        }
        if (null !== $this->arrayRequest) {
            $res['ArrayRequest'] = $this->arrayRequest;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->jobQueue) {
            $res['JobQueue'] = $this->jobQueue;
        }
        if (null !== $this->lastModifyTime) {
            $res['LastModifyTime'] = $this->lastModifyTime;
        }
        if (null !== $this->nodeList) {
            $res['NodeList'] = $this->nodeList;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->resources) {
            $res['Resources'] = null !== $this->resources ? $this->resources->toMap() : null;
        }
        if (null !== $this->runasUser) {
            $res['RunasUser'] = $this->runasUser;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->stderrPath) {
            $res['StderrPath'] = $this->stderrPath;
        }
        if (null !== $this->stdoutPath) {
            $res['StdoutPath'] = $this->stdoutPath;
        }
        if (null !== $this->submitTime) {
            $res['SubmitTime'] = $this->submitTime;
        }
        if (null !== $this->variables) {
            $res['Variables'] = $this->variables;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return jobSpec
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArrayJobId'])) {
            $model->arrayJobId = $map['ArrayJobId'];
        }
        if (isset($map['ArrayJobSubId'])) {
            $model->arrayJobSubId = $map['ArrayJobSubId'];
        }
        if (isset($map['ArrayRequest'])) {
            $model->arrayRequest = $map['ArrayRequest'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['JobQueue'])) {
            $model->jobQueue = $map['JobQueue'];
        }
        if (isset($map['LastModifyTime'])) {
            $model->lastModifyTime = $map['LastModifyTime'];
        }
        if (isset($map['NodeList'])) {
            $model->nodeList = $map['NodeList'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['Resources'])) {
            $model->resources = resources::fromMap($map['Resources']);
        }
        if (isset($map['RunasUser'])) {
            $model->runasUser = $map['RunasUser'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['StderrPath'])) {
            $model->stderrPath = $map['StderrPath'];
        }
        if (isset($map['StdoutPath'])) {
            $model->stdoutPath = $map['StdoutPath'];
        }
        if (isset($map['SubmitTime'])) {
            $model->submitTime = $map['SubmitTime'];
        }
        if (isset($map['Variables'])) {
            $model->variables = $map['Variables'];
        }

        return $model;
    }
}
