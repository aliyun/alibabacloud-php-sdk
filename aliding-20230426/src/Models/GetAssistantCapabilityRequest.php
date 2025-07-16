<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\GetAssistantCapabilityRequest\messages;
use AlibabaCloud\Tea\Model;

class GetAssistantCapabilityRequest extends Model
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
     * @example originalAssistantId1
     *
     * @var string
     */
    public $originalAssistantId;

    /**
     * @example cfp
     *
     * @var string
     */
    public $protocol;

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
     * @example threadId
     *
     * @var string
     */
    public $threadId;

    /**
     * @example 5000
     *
     * @var int
     */
    public $timeout;
    protected $_name = [
        'assistantId' => 'assistantId',
        'messages' => 'messages',
        'originalAssistantId' => 'originalAssistantId',
        'protocol' => 'protocol',
        'sourceIdOfOriginalAssistantId' => 'sourceIdOfOriginalAssistantId',
        'sourceTypeOfOriginalAssistantId' => 'sourceTypeOfOriginalAssistantId',
        'threadId' => 'threadId',
        'timeout' => 'timeout',
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
        if (null !== $this->protocol) {
            $res['protocol'] = $this->protocol;
        }
        if (null !== $this->sourceIdOfOriginalAssistantId) {
            $res['sourceIdOfOriginalAssistantId'] = $this->sourceIdOfOriginalAssistantId;
        }
        if (null !== $this->sourceTypeOfOriginalAssistantId) {
            $res['sourceTypeOfOriginalAssistantId'] = $this->sourceTypeOfOriginalAssistantId;
        }
        if (null !== $this->threadId) {
            $res['threadId'] = $this->threadId;
        }
        if (null !== $this->timeout) {
            $res['timeout'] = $this->timeout;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAssistantCapabilityRequest
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
        if (isset($map['protocol'])) {
            $model->protocol = $map['protocol'];
        }
        if (isset($map['sourceIdOfOriginalAssistantId'])) {
            $model->sourceIdOfOriginalAssistantId = $map['sourceIdOfOriginalAssistantId'];
        }
        if (isset($map['sourceTypeOfOriginalAssistantId'])) {
            $model->sourceTypeOfOriginalAssistantId = $map['sourceTypeOfOriginalAssistantId'];
        }
        if (isset($map['threadId'])) {
            $model->threadId = $map['threadId'];
        }
        if (isset($map['timeout'])) {
            $model->timeout = $map['timeout'];
        }

        return $model;
    }
}
