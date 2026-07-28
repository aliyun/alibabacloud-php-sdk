<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetAgentTaskResultResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetAgentTaskResultResponseBody\data\dialogues;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetAgentTaskResultResponseBody\data\response;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetAgentTaskResultResponseBody\data\usage;

class data extends Model
{
    /**
     * @var dialogues[]
     */
    public $dialogues;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $llmRequestId;

    /**
     * @var response
     */
    public $response;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var usage
     */
    public $usage;

    /**
     * @var string
     */
    public $vid;
    protected $_name = [
        'dialogues' => 'Dialogues',
        'errorMessage' => 'ErrorMessage',
        'llmRequestId' => 'LlmRequestId',
        'response' => 'Response',
        'status' => 'Status',
        'taskId' => 'TaskId',
        'usage' => 'Usage',
        'vid' => 'Vid',
    ];

    public function validate()
    {
        if (\is_array($this->dialogues)) {
            Model::validateArray($this->dialogues);
        }
        if (null !== $this->response) {
            $this->response->validate();
        }
        if (null !== $this->usage) {
            $this->usage->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dialogues) {
            if (\is_array($this->dialogues)) {
                $res['Dialogues'] = [];
                $n1 = 0;
                foreach ($this->dialogues as $item1) {
                    $res['Dialogues'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->llmRequestId) {
            $res['LlmRequestId'] = $this->llmRequestId;
        }

        if (null !== $this->response) {
            $res['Response'] = null !== $this->response ? $this->response->toArray($noStream) : $this->response;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->usage) {
            $res['Usage'] = null !== $this->usage ? $this->usage->toArray($noStream) : $this->usage;
        }

        if (null !== $this->vid) {
            $res['Vid'] = $this->vid;
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
        if (isset($map['Dialogues'])) {
            if (!empty($map['Dialogues'])) {
                $model->dialogues = [];
                $n1 = 0;
                foreach ($map['Dialogues'] as $item1) {
                    $model->dialogues[$n1] = dialogues::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        if (isset($map['LlmRequestId'])) {
            $model->llmRequestId = $map['LlmRequestId'];
        }

        if (isset($map['Response'])) {
            $model->response = response::fromMap($map['Response']);
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['Usage'])) {
            $model->usage = usage::fromMap($map['Usage']);
        }

        if (isset($map['Vid'])) {
            $model->vid = $map['Vid'];
        }

        return $model;
    }
}
