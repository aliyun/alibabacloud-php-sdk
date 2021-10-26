<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class SubmitJobRequest extends Model
{
    /**
     * @var string
     */
    public $arrayRequest;

    /**
     * @var string
     */
    public $clockTime;

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
    public $containerId;

    /**
     * @var int
     */
    public $gpu;

    /**
     * @var string
     */
    public $inputFileUrl;

    /**
     * @var string
     */
    public $jobQueue;

    /**
     * @var string
     */
    public $mem;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $node;

    /**
     * @var string
     */
    public $packagePath;

    /**
     * @var string
     */
    public $postCmdLine;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var bool
     */
    public $reRunable;

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
    public $stderrRedirectPath;

    /**
     * @var string
     */
    public $stdoutRedirectPath;

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
    public $unzipCmd;

    /**
     * @var string
     */
    public $variables;
    protected $_name = [
        'arrayRequest'       => 'ArrayRequest',
        'clockTime'          => 'ClockTime',
        'clusterId'          => 'ClusterId',
        'commandLine'        => 'CommandLine',
        'containerId'        => 'ContainerId',
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
        if (null !== $this->arrayRequest) {
            $res['ArrayRequest'] = $this->arrayRequest;
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
        if (isset($map['ArrayRequest'])) {
            $model->arrayRequest = $map['ArrayRequest'];
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
