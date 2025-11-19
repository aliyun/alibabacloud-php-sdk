<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class ModelFeatures extends Model
{
    /**
     * @var bool
     */
    public $agentThought;

    /**
     * @var bool
     */
    public $multiToolCall;

    /**
     * @var bool
     */
    public $streamToolCall;

    /**
     * @var bool
     */
    public $toolCall;

    /**
     * @var bool
     */
    public $vision;
    protected $_name = [
        'agentThought' => 'agentThought',
        'multiToolCall' => 'multiToolCall',
        'streamToolCall' => 'streamToolCall',
        'toolCall' => 'toolCall',
        'vision' => 'vision',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentThought) {
            $res['agentThought'] = $this->agentThought;
        }

        if (null !== $this->multiToolCall) {
            $res['multiToolCall'] = $this->multiToolCall;
        }

        if (null !== $this->streamToolCall) {
            $res['streamToolCall'] = $this->streamToolCall;
        }

        if (null !== $this->toolCall) {
            $res['toolCall'] = $this->toolCall;
        }

        if (null !== $this->vision) {
            $res['vision'] = $this->vision;
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
        if (isset($map['agentThought'])) {
            $model->agentThought = $map['agentThought'];
        }

        if (isset($map['multiToolCall'])) {
            $model->multiToolCall = $map['multiToolCall'];
        }

        if (isset($map['streamToolCall'])) {
            $model->streamToolCall = $map['streamToolCall'];
        }

        if (isset($map['toolCall'])) {
            $model->toolCall = $map['toolCall'];
        }

        if (isset($map['vision'])) {
            $model->vision = $map['vision'];
        }

        return $model;
    }
}
