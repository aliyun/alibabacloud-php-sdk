<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class SubmitJobRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $commandLine;

    /**
     * @var string
     */
    public $runasUser;

    /**
     * @var string
     */
    public $runasUserPassword;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $packagePath;

    /**
     * @var string
     */
    public $stdoutRedirectPath;

    /**
     * @var string
     */
    public $stderrRedirectPath;

    /**
     * @var bool
     */
    public $reRunable;

    /**
     * @var string
     */
    public $arrayRequest;

    /**
     * @var string
     */
    public $variables;

    /**
     * @var string
     */
    public $inputFileUrl;

    /**
     * @var string
     */
    public $unzipCmd;

    /**
     * @var string
     */
    public $postCmdLine;

    /**
     * @var string
     */
    public $containerId;

    /**
     * @var string
     */
    public $jobQueue;

    /**
     * @var int
     */
    public $node;

    /**
     * @var int
     */
    public $task;

    /**
     * @var int
     */
    public $thread;

    /**
     * @var string
     */
    public $mem;

    /**
     * @var int
     */
    public $gpu;

    /**
     * @var string
     */
    public $clockTime;
    protected $_name = [
        'clusterId'          => 'ClusterId',
        'commandLine'        => 'CommandLine',
        'runasUser'          => 'RunasUser',
        'runasUserPassword'  => 'RunasUserPassword',
        'name'               => 'Name',
        'priority'           => 'Priority',
        'packagePath'        => 'PackagePath',
        'stdoutRedirectPath' => 'StdoutRedirectPath',
        'stderrRedirectPath' => 'StderrRedirectPath',
        'reRunable'          => 'ReRunable',
        'arrayRequest'       => 'ArrayRequest',
        'variables'          => 'Variables',
        'inputFileUrl'       => 'InputFileUrl',
        'unzipCmd'           => 'UnzipCmd',
        'postCmdLine'        => 'PostCmdLine',
        'containerId'        => 'ContainerId',
        'jobQueue'           => 'JobQueue',
        'node'               => 'Node',
        'task'               => 'Task',
        'thread'             => 'Thread',
        'mem'                => 'Mem',
        'gpu'                => 'Gpu',
        'clockTime'          => 'ClockTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->commandLine) {
            $res['CommandLine'] = $this->commandLine;
        }
        if (null !== $this->runasUser) {
            $res['RunasUser'] = $this->runasUser;
        }
        if (null !== $this->runasUserPassword) {
            $res['RunasUserPassword'] = $this->runasUserPassword;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->packagePath) {
            $res['PackagePath'] = $this->packagePath;
        }
        if (null !== $this->stdoutRedirectPath) {
            $res['StdoutRedirectPath'] = $this->stdoutRedirectPath;
        }
        if (null !== $this->stderrRedirectPath) {
            $res['StderrRedirectPath'] = $this->stderrRedirectPath;
        }
        if (null !== $this->reRunable) {
            $res['ReRunable'] = $this->reRunable;
        }
        if (null !== $this->arrayRequest) {
            $res['ArrayRequest'] = $this->arrayRequest;
        }
        if (null !== $this->variables) {
            $res['Variables'] = $this->variables;
        }
        if (null !== $this->inputFileUrl) {
            $res['InputFileUrl'] = $this->inputFileUrl;
        }
        if (null !== $this->unzipCmd) {
            $res['UnzipCmd'] = $this->unzipCmd;
        }
        if (null !== $this->postCmdLine) {
            $res['PostCmdLine'] = $this->postCmdLine;
        }
        if (null !== $this->containerId) {
            $res['ContainerId'] = $this->containerId;
        }
        if (null !== $this->jobQueue) {
            $res['JobQueue'] = $this->jobQueue;
        }
        if (null !== $this->node) {
            $res['Node'] = $this->node;
        }
        if (null !== $this->task) {
            $res['Task'] = $this->task;
        }
        if (null !== $this->thread) {
            $res['Thread'] = $this->thread;
        }
        if (null !== $this->mem) {
            $res['Mem'] = $this->mem;
        }
        if (null !== $this->gpu) {
            $res['Gpu'] = $this->gpu;
        }
        if (null !== $this->clockTime) {
            $res['ClockTime'] = $this->clockTime;
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['CommandLine'])) {
            $model->commandLine = $map['CommandLine'];
        }
        if (isset($map['RunasUser'])) {
            $model->runasUser = $map['RunasUser'];
        }
        if (isset($map['RunasUserPassword'])) {
            $model->runasUserPassword = $map['RunasUserPassword'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['PackagePath'])) {
            $model->packagePath = $map['PackagePath'];
        }
        if (isset($map['StdoutRedirectPath'])) {
            $model->stdoutRedirectPath = $map['StdoutRedirectPath'];
        }
        if (isset($map['StderrRedirectPath'])) {
            $model->stderrRedirectPath = $map['StderrRedirectPath'];
        }
        if (isset($map['ReRunable'])) {
            $model->reRunable = $map['ReRunable'];
        }
        if (isset($map['ArrayRequest'])) {
            $model->arrayRequest = $map['ArrayRequest'];
        }
        if (isset($map['Variables'])) {
            $model->variables = $map['Variables'];
        }
        if (isset($map['InputFileUrl'])) {
            $model->inputFileUrl = $map['InputFileUrl'];
        }
        if (isset($map['UnzipCmd'])) {
            $model->unzipCmd = $map['UnzipCmd'];
        }
        if (isset($map['PostCmdLine'])) {
            $model->postCmdLine = $map['PostCmdLine'];
        }
        if (isset($map['ContainerId'])) {
            $model->containerId = $map['ContainerId'];
        }
        if (isset($map['JobQueue'])) {
            $model->jobQueue = $map['JobQueue'];
        }
        if (isset($map['Node'])) {
            $model->node = $map['Node'];
        }
        if (isset($map['Task'])) {
            $model->task = $map['Task'];
        }
        if (isset($map['Thread'])) {
            $model->thread = $map['Thread'];
        }
        if (isset($map['Mem'])) {
            $model->mem = $map['Mem'];
        }
        if (isset($map['Gpu'])) {
            $model->gpu = $map['Gpu'];
        }
        if (isset($map['ClockTime'])) {
            $model->clockTime = $map['ClockTime'];
        }

        return $model;
    }
}
