<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\StartAIAgentInstanceRequest\chatSyncConfig;

class StartAIAgentInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $AIAgentId;

    /**
     * @var AIAgentConfig
     */
    public $agentConfig;

    /**
     * @var chatSyncConfig
     */
    public $chatSyncConfig;

    /**
     * @var AIAgentRuntimeConfig
     */
    public $runtimeConfig;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var AIAgentTemplateConfig
     */
    public $templateConfig;

    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'AIAgentId' => 'AIAgentId',
        'agentConfig' => 'AgentConfig',
        'chatSyncConfig' => 'ChatSyncConfig',
        'runtimeConfig' => 'RuntimeConfig',
        'sessionId' => 'SessionId',
        'templateConfig' => 'TemplateConfig',
        'userData' => 'UserData',
    ];

    public function validate()
    {
        if (null !== $this->agentConfig) {
            $this->agentConfig->validate();
        }
        if (null !== $this->chatSyncConfig) {
            $this->chatSyncConfig->validate();
        }
        if (null !== $this->runtimeConfig) {
            $this->runtimeConfig->validate();
        }
        if (null !== $this->templateConfig) {
            $this->templateConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->AIAgentId) {
            $res['AIAgentId'] = $this->AIAgentId;
        }

        if (null !== $this->agentConfig) {
            $res['AgentConfig'] = null !== $this->agentConfig ? $this->agentConfig->toArray($noStream) : $this->agentConfig;
        }

        if (null !== $this->chatSyncConfig) {
            $res['ChatSyncConfig'] = null !== $this->chatSyncConfig ? $this->chatSyncConfig->toArray($noStream) : $this->chatSyncConfig;
        }

        if (null !== $this->runtimeConfig) {
            $res['RuntimeConfig'] = null !== $this->runtimeConfig ? $this->runtimeConfig->toArray($noStream) : $this->runtimeConfig;
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
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
        if (isset($map['AIAgentId'])) {
            $model->AIAgentId = $map['AIAgentId'];
        }

        if (isset($map['AgentConfig'])) {
            $model->agentConfig = AIAgentConfig::fromMap($map['AgentConfig']);
        }

        if (isset($map['ChatSyncConfig'])) {
            $model->chatSyncConfig = chatSyncConfig::fromMap($map['ChatSyncConfig']);
        }

        if (isset($map['RuntimeConfig'])) {
            $model->runtimeConfig = AIAgentRuntimeConfig::fromMap($map['RuntimeConfig']);
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
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
