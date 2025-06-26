<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DianJin\V20240628\Models\RunChatResultGenerationRequest\messages;
use AlibabaCloud\SDK\DianJin\V20240628\Models\RunChatResultGenerationRequest\tools;

class RunChatResultGenerationRequest extends Model
{
    /**
     * @var mixed[]
     */
    public $inferenceParameters;

    /**
     * @var messages[]
     */
    public $messages;

    /**
     * @var string
     */
    public $modelId;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var bool
     */
    public $stream;

    /**
     * @var tools[]
     */
    public $tools;
    protected $_name = [
        'inferenceParameters' => 'inferenceParameters',
        'messages' => 'messages',
        'modelId' => 'modelId',
        'sessionId' => 'sessionId',
        'stream' => 'stream',
        'tools' => 'tools',
    ];

    public function validate()
    {
        if (\is_array($this->inferenceParameters)) {
            Model::validateArray($this->inferenceParameters);
        }
        if (\is_array($this->messages)) {
            Model::validateArray($this->messages);
        }
        if (\is_array($this->tools)) {
            Model::validateArray($this->tools);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->inferenceParameters) {
            if (\is_array($this->inferenceParameters)) {
                $res['inferenceParameters'] = [];
                foreach ($this->inferenceParameters as $key1 => $value1) {
                    $res['inferenceParameters'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->messages) {
            if (\is_array($this->messages)) {
                $res['messages'] = [];
                $n1 = 0;
                foreach ($this->messages as $item1) {
                    $res['messages'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->modelId) {
            $res['modelId'] = $this->modelId;
        }

        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
        }

        if (null !== $this->stream) {
            $res['stream'] = $this->stream;
        }

        if (null !== $this->tools) {
            if (\is_array($this->tools)) {
                $res['tools'] = [];
                $n1 = 0;
                foreach ($this->tools as $item1) {
                    $res['tools'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['inferenceParameters'])) {
            if (!empty($map['inferenceParameters'])) {
                $model->inferenceParameters = [];
                foreach ($map['inferenceParameters'] as $key1 => $value1) {
                    $model->inferenceParameters[$key1] = $value1;
                }
            }
        }

        if (isset($map['messages'])) {
            if (!empty($map['messages'])) {
                $model->messages = [];
                $n1 = 0;
                foreach ($map['messages'] as $item1) {
                    $model->messages[$n1] = messages::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['modelId'])) {
            $model->modelId = $map['modelId'];
        }

        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }

        if (isset($map['stream'])) {
            $model->stream = $map['stream'];
        }

        if (isset($map['tools'])) {
            if (!empty($map['tools'])) {
                $model->tools = [];
                $n1 = 0;
                foreach ($map['tools'] as $item1) {
                    $model->tools[$n1] = tools::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
