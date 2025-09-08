<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitDeepWriteTaskRequest\agentOrchestration;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitDeepWriteTaskRequest\files;

class SubmitDeepWriteTaskRequest extends Model
{
    /**
     * @var agentOrchestration
     */
    public $agentOrchestration;

    /**
     * @var files[]
     */
    public $files;

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
        'agentOrchestration' => 'AgentOrchestration',
        'files' => 'Files',
        'input' => 'Input',
        'instructions' => 'Instructions',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        if (null !== $this->agentOrchestration) {
            $this->agentOrchestration->validate();
        }
        if (\is_array($this->files)) {
            Model::validateArray($this->files);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentOrchestration) {
            $res['AgentOrchestration'] = null !== $this->agentOrchestration ? $this->agentOrchestration->toArray($noStream) : $this->agentOrchestration;
        }

        if (null !== $this->files) {
            if (\is_array($this->files)) {
                $res['Files'] = [];
                $n1 = 0;
                foreach ($this->files as $item1) {
                    $res['Files'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
            $model->agentOrchestration = agentOrchestration::fromMap($map['AgentOrchestration']);
        }

        if (isset($map['Files'])) {
            if (!empty($map['Files'])) {
                $model->files = [];
                $n1 = 0;
                foreach ($map['Files'] as $item1) {
                    $model->files[$n1] = files::fromMap($item1);
                    ++$n1;
                }
            }
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
