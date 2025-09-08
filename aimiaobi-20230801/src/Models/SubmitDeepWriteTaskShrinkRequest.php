<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;

class SubmitDeepWriteTaskShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $agentOrchestrationShrink;

    /**
     * @var string
     */
    public $filesShrink;

    /**
     * @var string
     */
    public $input;

    /**
     * @var string
     */
    public $instructions;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'agentOrchestrationShrink' => 'AgentOrchestration',
        'filesShrink' => 'Files',
        'input' => 'Input',
        'instructions' => 'Instructions',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentOrchestrationShrink) {
            $res['AgentOrchestration'] = $this->agentOrchestrationShrink;
        }

        if (null !== $this->filesShrink) {
            $res['Files'] = $this->filesShrink;
        }

        if (null !== $this->input) {
            $res['Input'] = $this->input;
        }

        if (null !== $this->instructions) {
            $res['Instructions'] = $this->instructions;
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
        if (isset($map['AgentOrchestration'])) {
            $model->agentOrchestrationShrink = $map['AgentOrchestration'];
        }

        if (isset($map['Files'])) {
            $model->filesShrink = $map['Files'];
        }

        if (isset($map['Input'])) {
            $model->input = $map['Input'];
        }

        if (isset($map['Instructions'])) {
            $model->instructions = $map['Instructions'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
