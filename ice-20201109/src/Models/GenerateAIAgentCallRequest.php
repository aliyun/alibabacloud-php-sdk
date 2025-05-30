<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\GenerateAIAgentCallRequest\chatSyncConfig;

class GenerateAIAgentCallRequest extends Model
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
     * @var int
     */
    public $expire;

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

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'AIAgentId' => 'AIAgentId',
        'agentConfig' => 'AgentConfig',
        'chatSyncConfig' => 'ChatSyncConfig',
        'expire' => 'Expire',
        'sessionId' => 'SessionId',
        'templateConfig' => 'TemplateConfig',
        'userData' => 'UserData',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        if (null !== $this->agentConfig) {
            $this->agentConfig->validate();
        }
        if (null !== $this->chatSyncConfig) {
            $this->chatSyncConfig->validate();
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

        if (null !== $this->expire) {
            $res['Expire'] = $this->expire;
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

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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

        if (isset($map['Expire'])) {
            $model->expire = $map['Expire'];
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

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
