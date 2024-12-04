<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\CreateJobRequest;

use AlibabaCloud\SDK\EHPC\V20240730\Models\CreateJobRequest\jobSpec\resources;
use AlibabaCloud\Tea\Model;

class jobSpec extends Model
{
    /**
     * @description The jobs in the queue.
     *
     * Format: X-Y:Z. X is the minimum index value. Y is the maximum index value. Z is the step size. For example, 2-7:2 indicates that three jobs need to be run and their index values are 2, 4, and 6.
     * @example 1-5:2
     *
     * @var string
     */
    public $arrayRequest;

    /**
     * @description The command or script that is used to run the job. If you want to use a command, you must specify the full path of the command, for example, /bin/ping.
     *
     * This parameter is required.
     * @example /home/xxx/test.job
     *
     * @var string
     */
    public $commandLine;

    /**
     * @description The queue to which the job belongs.
     *
     * @example comp
     *
     * @var string
     */
    public $jobQueue;

    /**
     * @description The post-processing command of the job.
     *
     * @example /bin/sleep 10
     *
     * @var string
     */
    public $postCmdLine;

    /**
     * @description The job priority.
     *
     * @example 1
     *
     * @var string
     */
    public $priority;

    /**
     * @description The resource configurations of the job.
     *
     * @var resources
     */
    public $resources;

    /**
     * @description The cluster-side user as which you want to submit the job.
     *
     * @example testuser
     *
     * @var string
     */
    public $runasUser;

    /**
     * @description The password of the user specified by the RunasUser parameter.
     *
     * @example xxx
     *
     * @var string
     */
    public $runasUserPassword;

    /**
     * @description The path of the standard error output file of the job. You need to specify the full path.
     *
     * @example /home/xxx/job.err
     *
     * @var string
     */
    public $stderrPath;

    /**
     * @description The path of the standard output file of the job. You need to specify the full path.
     *
     * @example /home/xxx/job.out
     *
     * @var string
     */
    public $stdoutPath;

    /**
     * @description The environment variables of the job. The value is a string in the JSON array format. Each array member is a JSON object that contains two members: Name and Value. Name indicates the name of the environment variable, and Value indicates the value of the environment variable.
     *
     * @example [{"Name":"x", "Value":"y"}]
     *
     * @var string
     */
    public $variables;

    /**
     * @description The maximum duration for which the job can be run. Format: `hour: minute: second`. For example, `01:00:00` indicates 1 hour.
     *
     * @example 360:48:50
     *
     * @var string
     */
    public $wallTime;
    protected $_name = [
        'arrayRequest'      => 'ArrayRequest',
        'commandLine'       => 'CommandLine',
        'jobQueue'          => 'JobQueue',
        'postCmdLine'       => 'PostCmdLine',
        'priority'          => 'Priority',
        'resources'         => 'Resources',
        'runasUser'         => 'RunasUser',
        'runasUserPassword' => 'RunasUserPassword',
        'stderrPath'        => 'StderrPath',
        'stdoutPath'        => 'StdoutPath',
        'variables'         => 'Variables',
        'wallTime'          => 'WallTime',
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
        if (null !== $this->commandLine) {
            $res['CommandLine'] = $this->commandLine;
        }
        if (null !== $this->jobQueue) {
            $res['JobQueue'] = $this->jobQueue;
        }
        if (null !== $this->postCmdLine) {
            $res['PostCmdLine'] = $this->postCmdLine;
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
        if (null !== $this->runasUserPassword) {
            $res['RunasUserPassword'] = $this->runasUserPassword;
        }
        if (null !== $this->stderrPath) {
            $res['StderrPath'] = $this->stderrPath;
        }
        if (null !== $this->stdoutPath) {
            $res['StdoutPath'] = $this->stdoutPath;
        }
        if (null !== $this->variables) {
            $res['Variables'] = $this->variables;
        }
        if (null !== $this->wallTime) {
            $res['WallTime'] = $this->wallTime;
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
        if (isset($map['ArrayRequest'])) {
            $model->arrayRequest = $map['ArrayRequest'];
        }
        if (isset($map['CommandLine'])) {
            $model->commandLine = $map['CommandLine'];
        }
        if (isset($map['JobQueue'])) {
            $model->jobQueue = $map['JobQueue'];
        }
        if (isset($map['PostCmdLine'])) {
            $model->postCmdLine = $map['PostCmdLine'];
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
        if (isset($map['RunasUserPassword'])) {
            $model->runasUserPassword = $map['RunasUserPassword'];
        }
        if (isset($map['StderrPath'])) {
            $model->stderrPath = $map['StderrPath'];
        }
        if (isset($map['StdoutPath'])) {
            $model->stdoutPath = $map['StdoutPath'];
        }
        if (isset($map['Variables'])) {
            $model->variables = $map['Variables'];
        }
        if (isset($map['WallTime'])) {
            $model->wallTime = $map['WallTime'];
        }

        return $model;
    }
}
