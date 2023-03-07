<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\SubmitJobRequest\jobRetry;
use AlibabaCloud\Tea\Model;

class SubmitJobRequest extends Model
{
    /**
     * @var jobRetry
     */
    public $jobRetry;

    /**
     * @description The job array.
     *
     * Format: X-Y:Z. The minimum index value X is the first index. The maximum index value Y is the last index. Z is the step size. For example, 2-7:2 indicates that three jobs need to be run and their index values are 2, 4, and 6.
     * @example 1-10:2
     *
     * @var string
     */
    public $arrayRequest;

    /**
     * @description Specifies whether to use an asynchronous link to submit the job.
     *
     * Default value: false
     * @example false
     *
     * @var bool
     */
    public $async;

    /**
     * @description The maximum running time of the job. Valid formats:
     *
     *   hh:mm:ss
     *   mm:ss
     *   ss
     *
     * We recommend that you use the hh:mm:ss format. If the maximum running time is 12 hours, set the value to 12:00:00.
     * @example 12:00:00
     *
     * @var string
     */
    public $clockTime;

    /**
     * @description The ID of the cluster.
     *
     * You can call the [ListClusters](~~87116~~) operation to query the cluster ID.
     * @example ehpc-hz-FYUr32****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The command that is used to run the job.
     *
     * @example ./LammpsTest/lammps.pbs
     *
     * @var string
     */
    public $commandLine;

    /**
     * @description The ID of the containerized application. If you want to use a container application, you must specify its ID.
     *
     * You can call the [ListContainerApps](~~87333~~) operation to query the container application ID.
     * @example ehpc-container-uerfrfffff****
     *
     * @var string
     */
    public $containerId;

    /**
     * @description The number of CPU cores required by a single compute node.
     *
     * @example 2
     *
     * @var int
     */
    public $cpu;

    /**
     * @description The maximum GPU usage required by a single compute node.
     *
     * The parameter takes effect only when the cluster uses PBS and a compute node is a GPU-accelerated instance.
     * @example 1
     *
     * @var int
     */
    public $gpu;

    /**
     * @description The URL of the job files that are uploaded to an Object Storage Service (OSS) bucket.
     *
     * @example https://ehpc-hangzhou.oss-cn-hangzhou.aliyuncs.com/test-u4****\/testlist_ehpc.sh
     *
     * @var string
     */
    public $inputFileUrl;

    /**
     * @description The name of the queue in which the job is run.
     *
     * You can call the [ListQueues](~~92176~~) operation to query the name of the queue.
     * @example workq
     *
     * @var string
     */
    public $jobQueue;

    /**
     * @description The maximum memory usage required by a single compute node. Unit: GB, MB, or KB. The unit is case-insensitive.
     *
     * @example 1GB
     *
     * @var string
     */
    public $mem;

    /**
     * @description The name of the job. The name must be 6 to 30 characters in length and start with a letter. It can contain letters, digits, and periods (.).
     *
     * @example job1
     *
     * @var string
     */
    public $name;

    /**
     * @description The number of compute nodes required to run the job.
     *
     * >  If the parameter is not specified, the Task, Thread, Mem, and Gpu parameters become invalid.
     * @example 2
     *
     * @var int
     */
    public $node;

    /**
     * @description The path that is used to run the job.
     *
     * @example ./Tem
     *
     * @var string
     */
    public $packagePath;

    /**
     * @description The command to perform on the job after the job is submitted.
     *
     * @example example.sh
     *
     * @var string
     */
    public $postCmdLine;

    /**
     * @description The priority of the job. Valid values: 0 to 9. A large value indicates a high priority.
     *
     * Default value: 0
     * @example 0
     *
     * @var int
     */
    public $priority;

    /**
     * @description Specifies whether the job can be rerun. Valid values:
     *
     *   true: The job can be rerun.
     *   false: The job cannot be rerun.
     *
     * @example false
     *
     * @var bool
     */
    public $reRunable;

    /**
     * @description The name of the user that runs the job.
     *
     * You can call the [ListUsers](~~188572~~) operation to query the users of the cluster.
     * @example root
     *
     * @var string
     */
    public $runasUser;

    /**
     * @description The user password.
     *
     * @example 12****
     *
     * @var string
     */
    public $runasUserPassword;

    /**
     * @description The output file path of stderr.
     *
     * @example ./LammpsTest
     *
     * @var string
     */
    public $stderrRedirectPath;

    /**
     * @description The output file path of stdout.
     *
     * @example ./LammpsTest
     *
     * @var string
     */
    public $stdoutRedirectPath;

    /**
     * @description The number of processes created for a single compute node.
     *
     * The parameter is applicable to Message Passing Interface (MPI) jobs.
     * @example 2
     *
     * @var int
     */
    public $task;

    /**
     * @description The number of threads created for a single compute node.
     *
     * The parameter is applicable to OpenMP jobs.
     * @example 1
     *
     * @var int
     */
    public $thread;

    /**
     * @description The command for file decompression. The command that is used to decompress the job files downloaded from an OSS bucket. Valid values:
     *
     *   tar xzf: Decompresses GZIP files.
     *   tar xf: Decompresses TAR files.
     *   unzip: Decompresses ZIP files.
     *
     * @example tar xzf
     *
     * @var string
     */
    public $unzipCmd;

    /**
     * @description The runtime variables passed to the job. They can be accessed by using environment variables in the executable file.
     *
     * @example [{Name:test1,Value:value1},{Name:test2,Value:value2}]
     *
     * @var string
     */
    public $variables;
    protected $_name = [
        'jobRetry'           => 'JobRetry',
        'arrayRequest'       => 'ArrayRequest',
        'async'              => 'Async',
        'clockTime'          => 'ClockTime',
        'clusterId'          => 'ClusterId',
        'commandLine'        => 'CommandLine',
        'containerId'        => 'ContainerId',
        'cpu'                => 'Cpu',
        'gpu'                => 'Gpu',
        'inputFileUrl'       => 'InputFileUrl',
        'jobQueue'           => 'JobQueue',
        'mem'                => 'Mem',
        'name'               => 'Name',
        'node'               => 'Node',
        'packagePath'        => 'PackagePath',
        'postCmdLine'        => 'PostCmdLine',
        'priority'           => 'Priority',
        'reRunable'          => 'ReRunable',
        'runasUser'          => 'RunasUser',
        'runasUserPassword'  => 'RunasUserPassword',
        'stderrRedirectPath' => 'StderrRedirectPath',
        'stdoutRedirectPath' => 'StdoutRedirectPath',
        'task'               => 'Task',
        'thread'             => 'Thread',
        'unzipCmd'           => 'UnzipCmd',
        'variables'          => 'Variables',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobRetry) {
            $res['JobRetry'] = null !== $this->jobRetry ? $this->jobRetry->toMap() : null;
        }
        if (null !== $this->arrayRequest) {
            $res['ArrayRequest'] = $this->arrayRequest;
        }
        if (null !== $this->async) {
            $res['Async'] = $this->async;
        }
        if (null !== $this->clockTime) {
            $res['ClockTime'] = $this->clockTime;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->commandLine) {
            $res['CommandLine'] = $this->commandLine;
        }
        if (null !== $this->containerId) {
            $res['ContainerId'] = $this->containerId;
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->gpu) {
            $res['Gpu'] = $this->gpu;
        }
        if (null !== $this->inputFileUrl) {
            $res['InputFileUrl'] = $this->inputFileUrl;
        }
        if (null !== $this->jobQueue) {
            $res['JobQueue'] = $this->jobQueue;
        }
        if (null !== $this->mem) {
            $res['Mem'] = $this->mem;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->node) {
            $res['Node'] = $this->node;
        }
        if (null !== $this->packagePath) {
            $res['PackagePath'] = $this->packagePath;
        }
        if (null !== $this->postCmdLine) {
            $res['PostCmdLine'] = $this->postCmdLine;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->reRunable) {
            $res['ReRunable'] = $this->reRunable;
        }
        if (null !== $this->runasUser) {
            $res['RunasUser'] = $this->runasUser;
        }
        if (null !== $this->runasUserPassword) {
            $res['RunasUserPassword'] = $this->runasUserPassword;
        }
        if (null !== $this->stderrRedirectPath) {
            $res['StderrRedirectPath'] = $this->stderrRedirectPath;
        }
        if (null !== $this->stdoutRedirectPath) {
            $res['StdoutRedirectPath'] = $this->stdoutRedirectPath;
        }
        if (null !== $this->task) {
            $res['Task'] = $this->task;
        }
        if (null !== $this->thread) {
            $res['Thread'] = $this->thread;
        }
        if (null !== $this->unzipCmd) {
            $res['UnzipCmd'] = $this->unzipCmd;
        }
        if (null !== $this->variables) {
            $res['Variables'] = $this->variables;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobRetry'])) {
            $model->jobRetry = jobRetry::fromMap($map['JobRetry']);
        }
        if (isset($map['ArrayRequest'])) {
            $model->arrayRequest = $map['ArrayRequest'];
        }
        if (isset($map['Async'])) {
            $model->async = $map['Async'];
        }
        if (isset($map['ClockTime'])) {
            $model->clockTime = $map['ClockTime'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['CommandLine'])) {
            $model->commandLine = $map['CommandLine'];
        }
        if (isset($map['ContainerId'])) {
            $model->containerId = $map['ContainerId'];
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['Gpu'])) {
            $model->gpu = $map['Gpu'];
        }
        if (isset($map['InputFileUrl'])) {
            $model->inputFileUrl = $map['InputFileUrl'];
        }
        if (isset($map['JobQueue'])) {
            $model->jobQueue = $map['JobQueue'];
        }
        if (isset($map['Mem'])) {
            $model->mem = $map['Mem'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Node'])) {
            $model->node = $map['Node'];
        }
        if (isset($map['PackagePath'])) {
            $model->packagePath = $map['PackagePath'];
        }
        if (isset($map['PostCmdLine'])) {
            $model->postCmdLine = $map['PostCmdLine'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['ReRunable'])) {
            $model->reRunable = $map['ReRunable'];
        }
        if (isset($map['RunasUser'])) {
            $model->runasUser = $map['RunasUser'];
        }
        if (isset($map['RunasUserPassword'])) {
            $model->runasUserPassword = $map['RunasUserPassword'];
        }
        if (isset($map['StderrRedirectPath'])) {
            $model->stderrRedirectPath = $map['StderrRedirectPath'];
        }
        if (isset($map['StdoutRedirectPath'])) {
            $model->stdoutRedirectPath = $map['StdoutRedirectPath'];
        }
        if (isset($map['Task'])) {
            $model->task = $map['Task'];
        }
        if (isset($map['Thread'])) {
            $model->thread = $map['Thread'];
        }
        if (isset($map['UnzipCmd'])) {
            $model->unzipCmd = $map['UnzipCmd'];
        }
        if (isset($map['Variables'])) {
            $model->variables = $map['Variables'];
        }

        return $model;
    }
}
