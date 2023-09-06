<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListJobsWithFiltersResponseBody;

use AlibabaCloud\SDK\EHPC\V20180412\Models\ListJobsWithFiltersResponseBody\jobs\resources;
use AlibabaCloud\Tea\Model;

class jobs extends Model
{
    /**
     * @description The job array. If the job is not in a queue, the output is empty.
     *
     * Format: X-Y:Z. X is the minimum index value. Y is the maximum index value. Z is the step size. For example, 2-7:2 indicates that three jobs need to be run and their index values are 2, 4, and 6.
     * @example 1-10:2
     *
     * @var string
     */
    public $arrayRequest;

    /**
     * @description The description of the job.
     *
     * @example jobDescription
     *
     * @var string
     */
    public $comment;

    /**
     * @description The job ID.
     *
     * @example 8.scheduler
     *
     * @var string
     */
    public $id;

    /**
     * @description The time when the job was last modified.
     *
     * @example 1647428667
     *
     * @var string
     */
    public $lastModifyTime;

    /**
     * @description The name of the job.
     *
     * @example job1
     *
     * @var string
     */
    public $name;

    /**
     * @description The list of compute nodes that were used to run the job.
     *
     * @example [\"compute2\", \"compute3\"]
     *
     * @var string
     */
    public $nodeList;

    /**
     * @description The name of the user that ran the job.
     *
     * @example test2@scheduler
     *
     * @var string
     */
    public $owner;

    /**
     * @description The priority of the job. Valid values: 0 to 9. A larger value indicates a higher priority.
     *
     * @example 0
     *
     * @var string
     */
    public $priority;

    /**
     * @description The number of queues that ran the job.
     *
     * @example 2
     *
     * @var string
     */
    public $queue;

    /**
     * @description Indicates whether the job can be run again. Valid values:
     *
     *   true: yes
     *   false: no
     *
     * @example true
     *
     * @var bool
     */
    public $rerunable;

    /**
     * @description The resources that were used to run the job.
     *
     * @var resources
     */
    public $resources;

    /**
     * @description The path that was used to run the job.
     *
     * @example ./Temp
     *
     * @var string
     */
    public $shellPath;

    /**
     * @description The time when the job was created.
     *
     * @example 1647427667
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The status of the job. Valid value:
     *
     *   FINISHED: The job is completed.
     *   RUNNING: The job is running.
     *   QUEUED: The job is pending in a queue.
     *
     * @example FINISHED
     *
     * @var string
     */
    public $state;

    /**
     * @description The output file path of stderr.
     *
     * @example ./Temp
     *
     * @var string
     */
    public $stderr;

    /**
     * @description The output file path of stdout.
     *
     * @example ./Temp
     *
     * @var string
     */
    public $stdout;

    /**
     * @description The time when the job was submitted.
     *
     * @example 1647423718
     *
     * @var string
     */
    public $submitTime;

    /**
     * @description The list of variables of the job.
     *
     * @example {"PBS_O_SHELL":"/bin/bash", 	"PBS_O_HOST":"manager", 	"PBS_O_SYSTEM":"Linux", 	"PBS_O_LANG":"en_US.UTF-8", 	"PBS_O_QUEUE":"workq"}
     *
     * @var string
     */
    public $variableList;
    protected $_name = [
        'arrayRequest'   => 'ArrayRequest',
        'comment'        => 'Comment',
        'id'             => 'Id',
        'lastModifyTime' => 'LastModifyTime',
        'name'           => 'Name',
        'nodeList'       => 'NodeList',
        'owner'          => 'Owner',
        'priority'       => 'Priority',
        'queue'          => 'Queue',
        'rerunable'      => 'Rerunable',
        'resources'      => 'Resources',
        'shellPath'      => 'ShellPath',
        'startTime'      => 'StartTime',
        'state'          => 'State',
        'stderr'         => 'Stderr',
        'stdout'         => 'Stdout',
        'submitTime'     => 'SubmitTime',
        'variableList'   => 'VariableList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arrayRequest) {
            $res['ArrayRequest'] = $this->arrayRequest;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->lastModifyTime) {
            $res['LastModifyTime'] = $this->lastModifyTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->nodeList) {
            $res['NodeList'] = $this->nodeList;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->queue) {
            $res['Queue'] = $this->queue;
        }
        if (null !== $this->rerunable) {
            $res['Rerunable'] = $this->rerunable;
        }
        if (null !== $this->resources) {
            $res['Resources'] = null !== $this->resources ? $this->resources->toMap() : null;
        }
        if (null !== $this->shellPath) {
            $res['ShellPath'] = $this->shellPath;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->stderr) {
            $res['Stderr'] = $this->stderr;
        }
        if (null !== $this->stdout) {
            $res['Stdout'] = $this->stdout;
        }
        if (null !== $this->submitTime) {
            $res['SubmitTime'] = $this->submitTime;
        }
        if (null !== $this->variableList) {
            $res['VariableList'] = $this->variableList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return jobs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArrayRequest'])) {
            $model->arrayRequest = $map['ArrayRequest'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['LastModifyTime'])) {
            $model->lastModifyTime = $map['LastModifyTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NodeList'])) {
            $model->nodeList = $map['NodeList'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['Queue'])) {
            $model->queue = $map['Queue'];
        }
        if (isset($map['Rerunable'])) {
            $model->rerunable = $map['Rerunable'];
        }
        if (isset($map['Resources'])) {
            $model->resources = resources::fromMap($map['Resources']);
        }
        if (isset($map['ShellPath'])) {
            $model->shellPath = $map['ShellPath'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['Stderr'])) {
            $model->stderr = $map['Stderr'];
        }
        if (isset($map['Stdout'])) {
            $model->stdout = $map['Stdout'];
        }
        if (isset($map['SubmitTime'])) {
            $model->submitTime = $map['SubmitTime'];
        }
        if (isset($map['VariableList'])) {
            $model->variableList = $map['VariableList'];
        }

        return $model;
    }
}
