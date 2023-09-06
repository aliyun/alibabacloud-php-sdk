<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListJobsResponseBody\jobs;

use AlibabaCloud\SDK\EHPC\V20180412\Models\ListJobsResponseBody\jobs\jobInfo\resources;
use AlibabaCloud\Tea\Model;

class jobInfo extends Model
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
     * @example 0.manager
     *
     * @var string
     */
    public $id;

    /**
     * @description The time when the job was last modified.
     *
     * @example 2018-07-18T17:46:48
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
     * @example user1
     *
     * @var string
     */
    public $owner;

    /**
     * @description The priority of the job. Valid values: 0 to 9. A large value indicates a higher priority.
     *
     * @example 0
     *
     * @var string
     */
    public $priority;

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
     * @example 2018-07-18T17:46:48
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The status of the job. Valid values:
     *
     *   FINISHED: The job is completed
     *   RUNNING: The job connector is running.
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
     * @example 2018-07-18T17:46:47
     *
     * @var string
     */
    public $submitTime;
    protected $_name = [
        'arrayRequest'   => 'ArrayRequest',
        'comment'        => 'Comment',
        'id'             => 'Id',
        'lastModifyTime' => 'LastModifyTime',
        'name'           => 'Name',
        'nodeList'       => 'NodeList',
        'owner'          => 'Owner',
        'priority'       => 'Priority',
        'resources'      => 'Resources',
        'shellPath'      => 'ShellPath',
        'startTime'      => 'StartTime',
        'state'          => 'State',
        'stderr'         => 'Stderr',
        'stdout'         => 'Stdout',
        'submitTime'     => 'SubmitTime',
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

        return $model;
    }
}
