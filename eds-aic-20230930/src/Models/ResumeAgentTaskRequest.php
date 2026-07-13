<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\ResumeAgentTaskRequest\clarificationAnswers;

class ResumeAgentTaskRequest extends Model
{
    /**
     * @var string
     */
    public $additionalPrompt;

    /**
     * @var clarificationAnswers[]
     */
    public $clarificationAnswers;

    /**
     * @var string[]
     */
    public $taskIds;

    /**
     * @var string
     */
    public $toolCallId;
    protected $_name = [
        'additionalPrompt' => 'AdditionalPrompt',
        'clarificationAnswers' => 'ClarificationAnswers',
        'taskIds' => 'TaskIds',
        'toolCallId' => 'ToolCallId',
    ];

    public function validate()
    {
        if (\is_array($this->clarificationAnswers)) {
            Model::validateArray($this->clarificationAnswers);
        }
        if (\is_array($this->taskIds)) {
            Model::validateArray($this->taskIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->additionalPrompt) {
            $res['AdditionalPrompt'] = $this->additionalPrompt;
        }

        if (null !== $this->clarificationAnswers) {
            if (\is_array($this->clarificationAnswers)) {
                $res['ClarificationAnswers'] = [];
                $n1 = 0;
                foreach ($this->clarificationAnswers as $item1) {
                    $res['ClarificationAnswers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->taskIds) {
            if (\is_array($this->taskIds)) {
                $res['TaskIds'] = [];
                $n1 = 0;
                foreach ($this->taskIds as $item1) {
                    $res['TaskIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->toolCallId) {
            $res['ToolCallId'] = $this->toolCallId;
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
        if (isset($map['AdditionalPrompt'])) {
            $model->additionalPrompt = $map['AdditionalPrompt'];
        }

        if (isset($map['ClarificationAnswers'])) {
            if (!empty($map['ClarificationAnswers'])) {
                $model->clarificationAnswers = [];
                $n1 = 0;
                foreach ($map['ClarificationAnswers'] as $item1) {
                    $model->clarificationAnswers[$n1] = clarificationAnswers::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TaskIds'])) {
            if (!empty($map['TaskIds'])) {
                $model->taskIds = [];
                $n1 = 0;
                foreach ($map['TaskIds'] as $item1) {
                    $model->taskIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ToolCallId'])) {
            $model->toolCallId = $map['ToolCallId'];
        }

        return $model;
    }
}
