<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QwenB2BChat\V20261105\Models\VoiceCommand;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\QwenB2BChat\V20261105\Models\VoiceCommand\payload\input;
use AlibabaCloud\SDK\QwenB2BChat\V20261105\Models\VoiceCommand\payload\parameters;

class payload extends Model
{
    /**
     * @var string
     */
    public $taskGroup;

    /**
     * @var string
     */
    public $task;

    /**
     * @var string
     */
    public $retryOf;

    /**
     * @var parameters
     */
    public $parameters;

    /**
     * @var input
     */
    public $input;
    protected $_name = [
        'taskGroup' => 'taskGroup',
        'task' => 'task',
        'retryOf' => 'retryOf',
        'parameters' => 'parameters',
        'input' => 'input',
    ];

    public function validate()
    {
        if (null !== $this->parameters) {
            $this->parameters->validate();
        }
        if (null !== $this->input) {
            $this->input->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->taskGroup) {
            $res['taskGroup'] = $this->taskGroup;
        }

        if (null !== $this->task) {
            $res['task'] = $this->task;
        }

        if (null !== $this->retryOf) {
            $res['retryOf'] = $this->retryOf;
        }

        if (null !== $this->parameters) {
            $res['parameters'] = null !== $this->parameters ? $this->parameters->toArray($noStream) : $this->parameters;
        }

        if (null !== $this->input) {
            $res['input'] = null !== $this->input ? $this->input->toArray($noStream) : $this->input;
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
        if (isset($map['taskGroup'])) {
            $model->taskGroup = $map['taskGroup'];
        }

        if (isset($map['task'])) {
            $model->task = $map['task'];
        }

        if (isset($map['retryOf'])) {
            $model->retryOf = $map['retryOf'];
        }

        if (isset($map['parameters'])) {
            $model->parameters = parameters::fromMap($map['parameters']);
        }

        if (isset($map['input'])) {
            $model->input = input::fromMap($map['input']);
        }

        return $model;
    }
}
