<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class CreateJobTemplateRequest extends Model
{
    /**
     * @description The job array.
     *
     * Format: X-Y:Z. X is the minimum index value. Y is the maximum index value. Z is the step size. For example, 2-7:2 indicates that three jobs need to be run and their index values are 2, 4, and 6.
     * @example 1-10:2
     *
     * @var string
     */
    public $arrayRequest;

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
     * @description The command that is used to run the job.
     *
     * @example ./LammpsTest/lammps.pbs
     *
     * @var string
     */
    public $commandLine;

    /**
     * @description The maximum GPU usage required by a single compute node. Valid values: 1 to 8.
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
     * @example https://test.oss-cn-beijing.aliyuncs.com/test.py
     *
     * @var string
     */
    public $inputFileUrl;

    /**
     * @description The maximum memory usage required by a single compute node. Unit: GB, MB, or KB. The unit is case-insensitive.
     *
     * @example 1GB
     *
     * @var string
     */
    public $mem;

    /**
     * @description The name of the job template. The name must be 2 to 64 characters in length. It must start with a letter and can contain letters, digits, hyphens (-), and underscores (\_).
     *
     * @example jobtemplate1
     *
     * @var string
     */
    public $name;

    /**
     * @description The number of compute nodes. Valid values: 1 to 500.
     *
     * >  If you do not specify this parameter, the Task, Thread, Mem, or GPU parameters do not take effect.
     * @example 2
     *
     * @var int
     */
    public $node;

    /**
     * @description The path that is used to run the job.
     *
     * @example ./jobfolder
     *
     * @var string
     */
    public $packagePath;

    /**
     * @description The priority of the job. Valid values: 0 to 9. A larger value indicates a higher priority.
     *
     * Default value: 0.
     * @example 0
     *
     * @var int
     */
    public $priority;

    /**
     * @description The name of the queue in which the job is run.
     *
     * You can call the [ListQueues](~~92176~~) operation to query the name of the queue.
     * @example workq
     *
     * @var string
     */
    public $queue;

    /**
     * @description Specifies whether to automatically rerun the job after the job fails. Valid value:
     *
     *   true: reruns the job.
     *   false: does not rerun the job.
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
     * @example user1
     *
     * @var string
     */
    public $runasUser;

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
     * @description The number of tasks required by a single compute node. Valid values: 1 to 1000.
     *
     * @example 2
     *
     * @var int
     */
    public $task;

    /**
     * @description The number of threads required by a single compute node. Valid values: 1 to 1000.
     *
     * @example 1
     *
     * @var int
     */
    public $thread;

    /**
     * @description The command that is used to decompress the job files downloaded from an OSS bucket. The parameter takes effect only when WithUnzipCmd is set to true. Valid values:
     *
     *   tar xzf: decompresses GZIP files.
     *   tar xf: decompresses TAR files.
     *   unzip: decompresses ZIP files.
     *
     * @example tar xzf
     *
     * @var string
     */
    public $unzipCmd;

    /**
     * @description The runtime variables passed to the job. They can be accessed by using environment variables in the executable file.
     *
     * @example [{Name:,Value:},{Name:,Value:}]
     *
     * @var string
     */
    public $variables;

    /**
     * @description Specifies whether to decompress the job files downloaded from an OSS bucket. Valid values:
     *
     *   true: decompresses the job file.
     *   false: does not decompress the job file.
     *
     * @example true
     *
     * @var bool
     */
    public $withUnzipCmd;
    protected $_name = [
        'arrayRequest'       => 'ArrayRequest',
        'clockTime'          => 'ClockTime',
        'commandLine'        => 'CommandLine',
        'gpu'                => 'Gpu',
        'inputFileUrl'       => 'InputFileUrl',
        'mem'                => 'Mem',
        'name'               => 'Name',
        'node'               => 'Node',
        'packagePath'        => 'PackagePath',
        'priority'           => 'Priority',
        'queue'              => 'Queue',
        'reRunable'          => 'ReRunable',
        'runasUser'          => 'RunasUser',
        'stderrRedirectPath' => 'StderrRedirectPath',
        'stdoutRedirectPath' => 'StdoutRedirectPath',
        'task'               => 'Task',
        'thread'             => 'Thread',
        'unzipCmd'           => 'UnzipCmd',
        'variables'          => 'Variables',
        'withUnzipCmd'       => 'WithUnzipCmd',
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
        if (null !== $this->clockTime) {
            $res['ClockTime'] = $this->clockTime;
        }
        if (null !== $this->commandLine) {
            $res['CommandLine'] = $this->commandLine;
        }
        if (null !== $this->gpu) {
            $res['Gpu'] = $this->gpu;
        }
        if (null !== $this->inputFileUrl) {
            $res['InputFileUrl'] = $this->inputFileUrl;
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
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->queue) {
            $res['Queue'] = $this->queue;
        }
        if (null !== $this->reRunable) {
            $res['ReRunable'] = $this->reRunable;
        }
        if (null !== $this->runasUser) {
            $res['RunasUser'] = $this->runasUser;
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
        if (null !== $this->withUnzipCmd) {
            $res['WithUnzipCmd'] = $this->withUnzipCmd;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateJobTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArrayRequest'])) {
            $model->arrayRequest = $map['ArrayRequest'];
        }
        if (isset($map['ClockTime'])) {
            $model->clockTime = $map['ClockTime'];
        }
        if (isset($map['CommandLine'])) {
            $model->commandLine = $map['CommandLine'];
        }
        if (isset($map['Gpu'])) {
            $model->gpu = $map['Gpu'];
        }
        if (isset($map['InputFileUrl'])) {
            $model->inputFileUrl = $map['InputFileUrl'];
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
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['Queue'])) {
            $model->queue = $map['Queue'];
        }
        if (isset($map['ReRunable'])) {
            $model->reRunable = $map['ReRunable'];
        }
        if (isset($map['RunasUser'])) {
            $model->runasUser = $map['RunasUser'];
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
        if (isset($map['WithUnzipCmd'])) {
            $model->withUnzipCmd = $map['WithUnzipCmd'];
        }

        return $model;
    }
}
