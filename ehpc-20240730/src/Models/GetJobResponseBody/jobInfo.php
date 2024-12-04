<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\GetJobResponseBody;

use AlibabaCloud\SDK\EHPC\V20240730\Models\GetJobResponseBody\jobInfo\resources;
use AlibabaCloud\SDK\EHPC\V20240730\Models\GetJobResponseBody\jobInfo\resourcesUsed;
use AlibabaCloud\SDK\EHPC\V20240730\Models\GetJobResponseBody\jobInfo\variables;
use AlibabaCloud\Tea\Model;

class jobInfo extends Model
{
    /**
     * @description The parent job ID. If the return value is a non-empty string, the job is an array job.
     *
     * @example 1
     *
     * @var string
     */
    public $arrayJobId;

    /**
     * @description The sub-job ID. This parameter is valid when the ArrayJobId parameter is a non-empty string.
     *
     * @example 3
     *
     * @var string
     */
    public $arrayJobSubId;

    /**
     * @description The job queue. If the job is not in a queue, the output is empty.
     *
     * The format is X-Y:Z. X indicates the first index, Y indicates the final index, and Z indicates the step size. For example, 2-7:2 indicates three sub-jobs numbered 2, 4, and 6.
     * @example 1-5:2
     *
     * @var string
     */
    public $arrayRequest;

    /**
     * @description The command that is used to run the job.
     *
     * @example /home/huangsf/ehpc/job_meta.pbs
     *
     * @var string
     */
    public $commandLine;

    /**
     * @description The time when the job was submitted.
     *
     * @example 2024-08-16T10:52:48
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The error log file of the job.
     *
     * @example /home/xxx/STDIN.e1
     *
     * @var string
     */
    public $errorLog;

    /**
     * @description Additional information.
     *
     * @example {}
     *
     * @var string
     */
    public $extraInfo;

    /**
     * @description The job ID.
     *
     * @example 1.manager
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The job name.
     *
     * @example testJob
     *
     * @var string
     */
    public $jobName;

    /**
     * @description The queue to which the job belongs.
     *
     * @example workq
     *
     * @var string
     */
    public $jobQueue;

    /**
     * @description The time when the job was last modified.
     *
     * @example 2024-08-16T10:52:48
     *
     * @var string
     */
    public $lastModifyTime;

    /**
     * @description The compute nodes that are used to run the job.
     *
     * @example compute000
     *
     * @var string
     */
    public $nodeList;

    /**
     * @description The standard output log file of the job.
     *
     * @example /home/xxx/STDIN.o1
     *
     * @var string
     */
    public $outputLog;

    /**
     * @description The priority of the job.
     *
     * @example 0
     *
     * @var string
     */
    public $priority;

    /**
     * @description The resources that were requested when the job was submitted.
     *
     * @var resources
     */
    public $resources;

    /**
     * @description The resources that are actually used by the job.
     *
     * @var resourcesUsed
     */
    public $resourcesUsed;

    /**
     * @description The user to which the job belongs or that is used to submit the job. This user is a cluster-side user.
     *
     * @example testuser
     *
     * @var string
     */
    public $runasUser;

    /**
     * @description The time when the job was started.
     *
     * @example 2024-08-16T10:52:48
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The job state.
     *
     * @example Running
     *
     * @var string
     */
    public $state;

    /**
     * @description The variables of the job.
     *
     * @var variables[]
     */
    public $variables;
    protected $_name = [
        'arrayJobId'     => 'ArrayJobId',
        'arrayJobSubId'  => 'ArrayJobSubId',
        'arrayRequest'   => 'ArrayRequest',
        'commandLine'    => 'CommandLine',
        'createTime'     => 'CreateTime',
        'errorLog'       => 'ErrorLog',
        'extraInfo'      => 'ExtraInfo',
        'jobId'          => 'JobId',
        'jobName'        => 'JobName',
        'jobQueue'       => 'JobQueue',
        'lastModifyTime' => 'LastModifyTime',
        'nodeList'       => 'NodeList',
        'outputLog'      => 'OutputLog',
        'priority'       => 'Priority',
        'resources'      => 'Resources',
        'resourcesUsed'  => 'ResourcesUsed',
        'runasUser'      => 'RunasUser',
        'startTime'      => 'StartTime',
        'state'          => 'State',
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
        if (null !== $this->commandLine) {
            $res['CommandLine'] = $this->commandLine;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->errorLog) {
            $res['ErrorLog'] = $this->errorLog;
        }
        if (null !== $this->extraInfo) {
            $res['ExtraInfo'] = $this->extraInfo;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
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
        if (null !== $this->outputLog) {
            $res['OutputLog'] = $this->outputLog;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->resources) {
            $res['Resources'] = null !== $this->resources ? $this->resources->toMap() : null;
        }
        if (null !== $this->resourcesUsed) {
            $res['ResourcesUsed'] = null !== $this->resourcesUsed ? $this->resourcesUsed->toMap() : null;
        }
        if (null !== $this->runasUser) {
            $res['RunasUser'] = $this->runasUser;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->variables) {
            $res['Variables'] = [];
            if (null !== $this->variables && \is_array($this->variables)) {
                $n = 0;
                foreach ($this->variables as $item) {
                    $res['Variables'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return jobInfo
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
        if (isset($map['CommandLine'])) {
            $model->commandLine = $map['CommandLine'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ErrorLog'])) {
            $model->errorLog = $map['ErrorLog'];
        }
        if (isset($map['ExtraInfo'])) {
            $model->extraInfo = $map['ExtraInfo'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
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
        if (isset($map['OutputLog'])) {
            $model->outputLog = $map['OutputLog'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['Resources'])) {
            $model->resources = resources::fromMap($map['Resources']);
        }
        if (isset($map['ResourcesUsed'])) {
            $model->resourcesUsed = resourcesUsed::fromMap($map['ResourcesUsed']);
        }
        if (isset($map['RunasUser'])) {
            $model->runasUser = $map['RunasUser'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['Variables'])) {
            if (!empty($map['Variables'])) {
                $model->variables = [];
                $n                = 0;
                foreach ($map['Variables'] as $item) {
                    $model->variables[$n++] = null !== $item ? variables::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
