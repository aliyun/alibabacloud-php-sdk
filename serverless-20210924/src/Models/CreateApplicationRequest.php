<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Serverless\V20210924\Models;

use AlibabaCloud\Tea\Model;

class CreateApplicationRequest extends Model
{
    /**
     * @var bool
     */
    public $autoDeploy;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string[]
     */
    public $envVars;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $parameters;

    /**
     * @var RepoSource
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
     * @var TriggerConfig
     */
    public $trigger;
    protected $_name = [
        'autoDeploy'  => 'autoDeploy',
        'description' => 'description',
        'envVars'     => 'envVars',
        'name'        => 'name',
        'parameters'  => 'parameters',
        'repoSource'  => 'repoSource',
        'roleArn'     => 'roleArn',
        'template'    => 'template',
        'trigger'     => 'trigger',
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
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->envVars) {
            $res['envVars'] = $this->envVars;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateApplicationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['autoDeploy'])) {
            $model->autoDeploy = $map['autoDeploy'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['envVars'])) {
            $model->envVars = $map['envVars'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['parameters'])) {
            $model->parameters = $map['parameters'];
        }
        if (isset($map['repoSource'])) {
            $model->repoSource = RepoSource::fromMap($map['repoSource']);
        }
        if (isset($map['roleArn'])) {
            $model->roleArn = $map['roleArn'];
        }
        if (isset($map['template'])) {
            $model->template = $map['template'];
        }
        if (isset($map['trigger'])) {
            $model->trigger = TriggerConfig::fromMap($map['trigger']);
        }

        return $model;
    }
}
