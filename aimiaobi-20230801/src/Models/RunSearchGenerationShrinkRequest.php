<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Tea\Model;

class RunSearchGenerationShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $agentContextShrink;

    /**
     * @example xxx
     *
     * @var string
     */
    public $chatConfigShrink;

    /**
     * @example qwen-max-latest
     *
     * @var string
     */
    public $modelId;

    /**
     * @example xxx
     *
     * @var string
     */
    public $originalSessionId;

    /**
     * @example xxx
     *
     * @var string
     */
    public $prompt;

    /**
     * @example 7AA2AE16-D873-5C5F-9708-15396C382EB1
     *
     * @var string
     */
    public $taskId;

    /**
     * @description This parameter is required.
     *
     * @example llm-xxx
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'agentContextShrink' => 'AgentContext',
        'chatConfigShrink' => 'ChatConfig',
        'modelId' => 'ModelId',
        'originalSessionId' => 'OriginalSessionId',
        'prompt' => 'Prompt',
        'taskId' => 'TaskId',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentContextShrink) {
            $res['AgentContext'] = $this->agentContextShrink;
        }
        if (null !== $this->chatConfigShrink) {
            $res['ChatConfig'] = $this->chatConfigShrink;
        }
        if (null !== $this->modelId) {
            $res['ModelId'] = $this->modelId;
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

    /**
     * @param array $map
     *
     * @return RunSearchGenerationShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentContext'])) {
            $model->agentContextShrink = $map['AgentContext'];
        }
        if (isset($map['ChatConfig'])) {
            $model->chatConfigShrink = $map['ChatConfig'];
        }
        if (isset($map['ModelId'])) {
            $model->modelId = $map['ModelId'];
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
