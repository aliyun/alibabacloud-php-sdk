<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models;

use AlibabaCloud\SDK\DianJin\V20240628\Models\RunChatResultGenerationRequest\messages;
use AlibabaCloud\SDK\DianJin\V20240628\Models\RunChatResultGenerationRequest\tools;
use AlibabaCloud\Tea\Model;

class RunChatResultGenerationRequest extends Model
{
    /**
     * @example {"topP": 0.8}
     *
     * @var mixed[]
     */
    public $inferenceParameters;

    /**
     * @description This parameter is required.
     *
     * @var messages[]
     */
    public $messages;

    /**
     * @description This parameter is required.
     *
     * @example qwen-max
     *
     * @var string
     */
    public $modelId;

    /**
     * @example 237645726354
     *
     * @var string
     */
    public $sessionId;

    /**
     * @example false
     *
     * @var bool
     */
    public $stream;

    /**
     * @var tools[]
     */
    public $tools;
    protected $_name = [
        'inferenceParameters' => 'inferenceParameters',
        'messages'            => 'messages',
        'modelId'             => 'modelId',
        'sessionId'           => 'sessionId',
        'stream'              => 'stream',
        'tools'               => 'tools',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inferenceParameters) {
            $res['inferenceParameters'] = $this->inferenceParameters;
        }
        if (null !== $this->messages) {
            $res['messages'] = [];
            if (null !== $this->messages && \is_array($this->messages)) {
                $n = 0;
                foreach ($this->messages as $item) {
                    $res['messages'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['tools'] = [];
            if (null !== $this->tools && \is_array($this->tools)) {
                $n = 0;
                foreach ($this->tools as $item) {
                    $res['tools'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunChatResultGenerationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['inferenceParameters'])) {
            $model->inferenceParameters = $map['inferenceParameters'];
        }
        if (isset($map['messages'])) {
            if (!empty($map['messages'])) {
                $model->messages = [];
                $n               = 0;
                foreach ($map['messages'] as $item) {
                    $model->messages[$n++] = null !== $item ? messages::fromMap($item) : $item;
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
                $n            = 0;
                foreach ($map['tools'] as $item) {
                    $model->tools[$n++] = null !== $item ? tools::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
