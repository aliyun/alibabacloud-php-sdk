<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListJobTemplatesResponseBody\templates;

use AlibabaCloud\Tea\Model;

class jobTemplates extends Model
{
    /**
     * @var int
     */
    public $task;

    /**
     * @var string
     */
    public $variables;

    /**
     * @var string
     */
    public $commandLine;

    /**
     * @var string
     */
    public $queue;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $mem;

    /**
     * @var int
     */
    public $thread;

    /**
     * @var string
     */
    public $arrayRequest;

    /**
     * @var string
     */
    public $stderrRedirectPath;

    /**
     * @var int
     */
    public $node;

    /**
     * @var string
     */
    public $stdoutRedirectPath;

    /**
     * @var int
     */
    public $gpu;

    /**
     * @var string
     */
    public $packagePath;

    /**
     * @var string
     */
    public $clockTime;

    /**
     * @var bool
     */
    public $reRunable;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $runasUser;
    protected $_name = [
        'task'               => 'Task',
        'variables'          => 'Variables',
        'commandLine'        => 'CommandLine',
        'queue'              => 'Queue',
        'priority'           => 'Priority',
        'mem'                => 'Mem',
        'thread'             => 'Thread',
        'arrayRequest'       => 'ArrayRequest',
        'stderrRedirectPath' => 'StderrRedirectPath',
        'node'               => 'Node',
        'stdoutRedirectPath' => 'StdoutRedirectPath',
        'gpu'                => 'Gpu',
        'packagePath'        => 'PackagePath',
        'clockTime'          => 'ClockTime',
        'reRunable'          => 'ReRunable',
        'name'               => 'Name',
        'id'                 => 'Id',
        'runasUser'          => 'RunasUser',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->task) {
            $res['Task'] = $this->task;
        }
        if (null !== $this->variables) {
            $res['Variables'] = $this->variables;
        }
        if (null !== $this->commandLine) {
            $res['CommandLine'] = $this->commandLine;
        }
        if (null !== $this->queue) {
            $res['Queue'] = $this->queue;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->mem) {
            $res['Mem'] = $this->mem;
        }
        if (null !== $this->thread) {
            $res['Thread'] = $this->thread;
        }
        if (null !== $this->arrayRequest) {
            $res['ArrayRequest'] = $this->arrayRequest;
        }
        if (null !== $this->stderrRedirectPath) {
            $res['StderrRedirectPath'] = $this->stderrRedirectPath;
        }
        if (null !== $this->node) {
            $res['Node'] = $this->node;
        }
        if (null !== $this->stdoutRedirectPath) {
            $res['StdoutRedirectPath'] = $this->stdoutRedirectPath;
        }
        if (null !== $this->gpu) {
            $res['Gpu'] = $this->gpu;
        }
        if (null !== $this->packagePath) {
            $res['PackagePath'] = $this->packagePath;
        }
        if (null !== $this->clockTime) {
            $res['ClockTime'] = $this->clockTime;
        }
        if (null !== $this->reRunable) {
            $res['ReRunable'] = $this->reRunable;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->runasUser) {
            $res['RunasUser'] = $this->runasUser;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return jobTemplates
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Task'])) {
            $model->task = $map['Task'];
        }
        if (isset($map['Variables'])) {
            $model->variables = $map['Variables'];
        }
        if (isset($map['CommandLine'])) {
            $model->commandLine = $map['CommandLine'];
        }
        if (isset($map['Queue'])) {
            $model->queue = $map['Queue'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['Mem'])) {
            $model->mem = $map['Mem'];
        }
        if (isset($map['Thread'])) {
            $model->thread = $map['Thread'];
        }
        if (isset($map['ArrayRequest'])) {
            $model->arrayRequest = $map['ArrayRequest'];
        }
        if (isset($map['StderrRedirectPath'])) {
            $model->stderrRedirectPath = $map['StderrRedirectPath'];
        }
        if (isset($map['Node'])) {
            $model->node = $map['Node'];
        }
        if (isset($map['StdoutRedirectPath'])) {
            $model->stdoutRedirectPath = $map['StdoutRedirectPath'];
        }
        if (isset($map['Gpu'])) {
            $model->gpu = $map['Gpu'];
        }
        if (isset($map['PackagePath'])) {
            $model->packagePath = $map['PackagePath'];
        }
        if (isset($map['ClockTime'])) {
            $model->clockTime = $map['ClockTime'];
        }
        if (isset($map['ReRunable'])) {
            $model->reRunable = $map['ReRunable'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['RunasUser'])) {
            $model->runasUser = $map['RunasUser'];
        }

        return $model;
    }
}
