<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class UpdateAIAgentInstanceRequest extends Model
{
    /**
     * @var AIAgentConfig
     */
    public $agentConfig;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var AIAgentTemplateConfig
     */
    public $templateConfig;

    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'agentConfig' => 'AgentConfig',
        'instanceId' => 'InstanceId',
        'templateConfig' => 'TemplateConfig',
        'userData' => 'UserData',
    ];

    public function validate()
    {
        if (null !== $this->agentConfig) {
            $this->agentConfig->validate();
        }
        if (null !== $this->templateConfig) {
            $this->templateConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentConfig) {
            $res['AgentConfig'] = null !== $this->agentConfig ? $this->agentConfig->toArray($noStream) : $this->agentConfig;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->templateConfig) {
            $res['TemplateConfig'] = null !== $this->templateConfig ? $this->templateConfig->toArray($noStream) : $this->templateConfig;
        }

        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
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
        if (isset($map['AgentConfig'])) {
            $model->agentConfig = AIAgentConfig::fromMap($map['AgentConfig']);
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['TemplateConfig'])) {
            $model->templateConfig = AIAgentTemplateConfig::fromMap($map['TemplateConfig']);
        }

        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
