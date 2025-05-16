<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\CreateJobRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20240730\Models\CreateJobRequest\jobSpec\resources;

class jobSpec extends Model
{
    /**
     * @var string
     */
    public $arrayRequest;

    /**
     * @var string
     */
    public $commandLine;

    /**
     * @var string
     */
    public $jobQueue;

    /**
     * @var string
     */
    public $postCmdLine;

    /**
     * @var string
     */
    public $priority;

    /**
     * @var resources
     */
    public $resources;

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
    public $stderrPath;

    /**
     * @var string
     */
    public $stdoutPath;

    /**
     * @var string
     */
    public $variables;

    /**
     * @var string
     */
    public $wallTime;
    protected $_name = [
        'arrayRequest' => 'ArrayRequest',
        'commandLine' => 'CommandLine',
        'jobQueue' => 'JobQueue',
        'postCmdLine' => 'PostCmdLine',
        'priority' => 'Priority',
        'resources' => 'Resources',
        'runasUser' => 'RunasUser',
        'runasUserPassword' => 'RunasUserPassword',
        'stderrPath' => 'StderrPath',
        'stdoutPath' => 'StdoutPath',
        'variables' => 'Variables',
        'wallTime' => 'WallTime',
    ];

    public function validate()
    {
        if (null !== $this->resources) {
            $this->resources->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['Resources'] = null !== $this->resources ? $this->resources->toArray($noStream) : $this->resources;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
