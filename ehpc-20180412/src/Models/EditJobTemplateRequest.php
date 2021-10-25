<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class EditJobTemplateRequest extends Model
{
    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $commandLine;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $runasUser;

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
    public $queue;

    /**
     * @var string
     */
    public $clockTime;

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
    protected $_name = [
        'templateId'         => 'TemplateId',
        'commandLine'        => 'CommandLine',
        'name'               => 'Name',
        'runasUser'          => 'RunasUser',
        'priority'           => 'Priority',
        'packagePath'        => 'PackagePath',
        'stdoutRedirectPath' => 'StdoutRedirectPath',
        'stderrRedirectPath' => 'StderrRedirectPath',
        'reRunable'          => 'ReRunable',
        'arrayRequest'       => 'ArrayRequest',
        'variables'          => 'Variables',
        'queue'              => 'Queue',
        'clockTime'          => 'ClockTime',
        'node'               => 'Node',
        'task'               => 'Task',
        'thread'             => 'Thread',
        'mem'                => 'Mem',
        'gpu'                => 'Gpu',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->commandLine) {
            $res['CommandLine'] = $this->commandLine;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->runasUser) {
            $res['RunasUser'] = $this->runasUser;
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
        if (null !== $this->queue) {
            $res['Queue'] = $this->queue;
        }
        if (null !== $this->clockTime) {
            $res['ClockTime'] = $this->clockTime;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EditJobTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['CommandLine'])) {
            $model->commandLine = $map['CommandLine'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RunasUser'])) {
            $model->runasUser = $map['RunasUser'];
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
        if (isset($map['Queue'])) {
            $model->queue = $map['Queue'];
        }
        if (isset($map['ClockTime'])) {
            $model->clockTime = $map['ClockTime'];
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

        return $model;
    }
}
