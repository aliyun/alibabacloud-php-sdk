<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models;

use AlibabaCloud\Dara\Model;

class CreateMultiModalTaskRequest extends Model
{
    /**
     * @var string
     */
    public $agentSpace;

    /**
     * @var mixed[]
     */
    public $args;

    /**
     * @var string
     */
    public $arn;

    /**
     * @var string
     */
    public $evaluatorRef;

    /**
     * @var string
     */
    public $ossRegion;

    /**
     * @var string
     */
    public $prompt;

    /**
     * @var string
     */
    public $taskName;
    protected $_name = [
        'agentSpace' => 'agentSpace',
        'args' => 'args',
        'arn' => 'arn',
        'evaluatorRef' => 'evaluatorRef',
        'ossRegion' => 'ossRegion',
        'prompt' => 'prompt',
        'taskName' => 'taskName',
    ];

    public function validate()
    {
        if (\is_array($this->args)) {
            Model::validateArray($this->args);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentSpace) {
            $res['agentSpace'] = $this->agentSpace;
        }

        if (null !== $this->args) {
            if (\is_array($this->args)) {
                $res['args'] = [];
                foreach ($this->args as $key1 => $value1) {
                    $res['args'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->arn) {
            $res['arn'] = $this->arn;
        }

        if (null !== $this->evaluatorRef) {
            $res['evaluatorRef'] = $this->evaluatorRef;
        }

        if (null !== $this->ossRegion) {
            $res['ossRegion'] = $this->ossRegion;
        }

        if (null !== $this->prompt) {
            $res['prompt'] = $this->prompt;
        }

        if (null !== $this->taskName) {
            $res['taskName'] = $this->taskName;
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
        if (isset($map['agentSpace'])) {
            $model->agentSpace = $map['agentSpace'];
        }

        if (isset($map['args'])) {
            if (!empty($map['args'])) {
                $model->args = [];
                foreach ($map['args'] as $key1 => $value1) {
                    $model->args[$key1] = $value1;
                }
            }
        }

        if (isset($map['arn'])) {
            $model->arn = $map['arn'];
        }

        if (isset($map['evaluatorRef'])) {
            $model->evaluatorRef = $map['evaluatorRef'];
        }

        if (isset($map['ossRegion'])) {
            $model->ossRegion = $map['ossRegion'];
        }

        if (isset($map['prompt'])) {
            $model->prompt = $map['prompt'];
        }

        if (isset($map['taskName'])) {
            $model->taskName = $map['taskName'];
        }

        return $model;
    }
}
