<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationRequest\agentContext;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationRequest\chatConfig;

class RunSearchGenerationRequest extends Model
{
    /**
     * @var agentContext
     */
    public $agentContext;

    /**
     * @var chatConfig
     */
    public $chatConfig;

    /**
     * @var string
     */
    public $originalSessionId;

    /**
     * @var string
     */
    public $prompt;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'agentContext' => 'AgentContext',
        'chatConfig' => 'ChatConfig',
        'originalSessionId' => 'OriginalSessionId',
        'prompt' => 'Prompt',
        'taskId' => 'TaskId',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        if (null !== $this->agentContext) {
            $this->agentContext->validate();
        }
        if (null !== $this->chatConfig) {
            $this->chatConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentContext) {
            $res['AgentContext'] = null !== $this->agentContext ? $this->agentContext->toArray($noStream) : $this->agentContext;
        }

        if (null !== $this->chatConfig) {
            $res['ChatConfig'] = null !== $this->chatConfig ? $this->chatConfig->toArray($noStream) : $this->chatConfig;
        }

        if (null !== $this->originalSessionId) {
            $res['OriginalSessionId'] = $this->originalSessionId;
        }

        if (null !== $this->prompt) {
            $res['Prompt'] = $this->prompt;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['AgentContext'])) {
            $model->agentContext = agentContext::fromMap($map['AgentContext']);
        }

        if (isset($map['ChatConfig'])) {
            $model->chatConfig = chatConfig::fromMap($map['ChatConfig']);
        }

        if (isset($map['OriginalSessionId'])) {
            $model->originalSessionId = $map['OriginalSessionId'];
        }

        if (isset($map['Prompt'])) {
            $model->prompt = $map['Prompt'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
