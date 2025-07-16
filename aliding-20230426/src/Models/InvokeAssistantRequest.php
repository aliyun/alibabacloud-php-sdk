<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\InvokeAssistantRequest\messages;
use AlibabaCloud\Tea\Model;

class InvokeAssistantRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example assistantId1
     *
     * @var string
     */
    public $assistantId;

    /**
     * @description This parameter is required.
     *
     * @var messages[]
     */
    public $messages;

    /**
     * @example assistantId2
     *
     * @var string
     */
    public $originalAssistantId;

    /**
     * @example sessionId1
     *
     * @var string
     */
    public $sessionId;

    /**
     * @example agentKey1
     *
     * @var string
     */
    public $sourceIdOfOriginalAssistantId;

    /**
     * @example 1
     *
     * @var string
     */
    public $sourceTypeOfOriginalAssistantId;

    /**
     * @example false
     *
     * @var bool
     */
    public $stream;
    protected $_name = [
        'assistantId' => 'assistantId',
        'messages' => 'messages',
        'originalAssistantId' => 'originalAssistantId',
        'sessionId' => 'sessionId',
        'sourceIdOfOriginalAssistantId' => 'sourceIdOfOriginalAssistantId',
        'sourceTypeOfOriginalAssistantId' => 'sourceTypeOfOriginalAssistantId',
        'stream' => 'stream',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->assistantId) {
            $res['assistantId'] = $this->assistantId;
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
        if (null !== $this->originalAssistantId) {
            $res['originalAssistantId'] = $this->originalAssistantId;
        }
        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
        }
        if (null !== $this->sourceIdOfOriginalAssistantId) {
            $res['sourceIdOfOriginalAssistantId'] = $this->sourceIdOfOriginalAssistantId;
        }
        if (null !== $this->sourceTypeOfOriginalAssistantId) {
            $res['sourceTypeOfOriginalAssistantId'] = $this->sourceTypeOfOriginalAssistantId;
        }
        if (null !== $this->stream) {
            $res['stream'] = $this->stream;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InvokeAssistantRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['assistantId'])) {
            $model->assistantId = $map['assistantId'];
        }
        if (isset($map['messages'])) {
            if (!empty($map['messages'])) {
                $model->messages = [];
                $n = 0;
                foreach ($map['messages'] as $item) {
                    $model->messages[$n++] = null !== $item ? messages::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['originalAssistantId'])) {
            $model->originalAssistantId = $map['originalAssistantId'];
        }
        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }
        if (isset($map['sourceIdOfOriginalAssistantId'])) {
            $model->sourceIdOfOriginalAssistantId = $map['sourceIdOfOriginalAssistantId'];
        }
        if (isset($map['sourceTypeOfOriginalAssistantId'])) {
            $model->sourceTypeOfOriginalAssistantId = $map['sourceTypeOfOriginalAssistantId'];
        }
        if (isset($map['stream'])) {
            $model->stream = $map['stream'];
        }

        return $model;
    }
}
