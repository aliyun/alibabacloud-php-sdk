<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Serverless\V20210924\Models;

use AlibabaCloud\SDK\Serverless\V20210924\Models\Application\repoSource;
use AlibabaCloud\SDK\Serverless\V20210924\Models\Application\trigger;
use AlibabaCloud\Tea\Model;

class Application extends Model
{
    /**
     * @var string
     */
    public $autoDeploy;

    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var mixed[]
     */
    public $envVars;

    /**
     * @var mixed[]
     */
    public $lastRelease;

    /**
     * @var string
     */
    public $name;

    /**
     * @var mixed[]
     */
    public $output;

    /**
     * @var mixed[]
     */
    public $parameters;

    /**
     * @var repoSource
     */
    public $repoSource;

    /**
     * @var string
     */
    public $roleArn;

    /**
     * @var string
     */
    public $template;

    /**
     * @var trigger
     */
    public $trigger;

    /**
     * @var string
     */
    public $updatedTime;

    /**
     * @var string
     */
    public $workDir;
    protected $_name = [
        'autoDeploy'  => 'autoDeploy',
        'createdTime' => 'createdTime',
        'description' => 'description',
        'envVars'     => 'envVars',
        'lastRelease' => 'lastRelease',
        'name'        => 'name',
        'output'      => 'output',
        'parameters'  => 'parameters',
        'repoSource'  => 'repoSource',
        'roleArn'     => 'roleArn',
        'template'    => 'template',
        'trigger'     => 'trigger',
        'updatedTime' => 'updatedTime',
        'workDir'     => 'workDir',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoDeploy) {
            $res['autoDeploy'] = $this->autoDeploy;
        }
        if (null !== $this->createdTime) {
            $res['createdTime'] = $this->createdTime;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->envVars) {
            $res['envVars'] = $this->envVars;
        }
        if (null !== $this->lastRelease) {
            $res['lastRelease'] = $this->lastRelease;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->output) {
            $res['output'] = $this->output;
        }
        if (null !== $this->parameters) {
            $res['parameters'] = $this->parameters;
        }
        if (null !== $this->repoSource) {
            $res['repoSource'] = null !== $this->repoSource ? $this->repoSource->toMap() : null;
        }
        if (null !== $this->roleArn) {
            $res['roleArn'] = $this->roleArn;
        }
        if (null !== $this->template) {
            $res['template'] = $this->template;
        }
        if (null !== $this->trigger) {
            $res['trigger'] = null !== $this->trigger ? $this->trigger->toMap() : null;
        }
        if (null !== $this->updatedTime) {
            $res['updatedTime'] = $this->updatedTime;
        }
        if (null !== $this->workDir) {
            $res['workDir'] = $this->workDir;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Application
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['autoDeploy'])) {
            $model->autoDeploy = $map['autoDeploy'];
        }
        if (isset($map['createdTime'])) {
            $model->createdTime = $map['createdTime'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['envVars'])) {
            $model->envVars = $map['envVars'];
        }
        if (isset($map['lastRelease'])) {
            $model->lastRelease = $map['lastRelease'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['output'])) {
            $model->output = $map['output'];
        }
        if (isset($map['parameters'])) {
            $model->parameters = $map['parameters'];
        }
        if (isset($map['repoSource'])) {
            $model->repoSource = repoSource::fromMap($map['repoSource']);
        }
        if (isset($map['roleArn'])) {
            $model->roleArn = $map['roleArn'];
        }
        if (isset($map['template'])) {
            $model->template = $map['template'];
        }
        if (isset($map['trigger'])) {
            $model->trigger = trigger::fromMap($map['trigger']);
        }
        if (isset($map['updatedTime'])) {
            $model->updatedTime = $map['updatedTime'];
        }
        if (isset($map['workDir'])) {
            $model->workDir = $map['workDir'];
        }

        return $model;
    }
}
