<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;

class RunSearchGenerationShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $agentContextShrink;

    /**
     * @var string
     */
    public $chatConfigShrink;

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
        'agentContextShrink' => 'AgentContext',
        'chatConfigShrink' => 'ChatConfig',
        'originalSessionId' => 'OriginalSessionId',
        'prompt' => 'Prompt',
        'taskId' => 'TaskId',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentContextShrink) {
            $res['AgentContext'] = $this->agentContextShrink;
        }

        if (null !== $this->chatConfigShrink) {
            $res['ChatConfig'] = $this->chatConfigShrink;
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
            $model->agentContextShrink = $map['AgentContext'];
        }

        if (isset($map['ChatConfig'])) {
            $model->chatConfigShrink = $map['ChatConfig'];
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
