<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InvokeAssistantRequest\extLoginUser;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InvokeAssistantRequest\messages;

class InvokeAssistantRequest extends Model
{
    /**
     * @var string
     */
    public $assistantId;

    /**
     * @var extLoginUser
     */
    public $extLoginUser;

    /**
     * @var messages[]
     */
    public $messages;

    /**
     * @var string
     */
    public $originalAssistantId;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $sourceIdOfOriginalAssistantId;

    /**
     * @var string
     */
    public $sourceTypeOfOriginalAssistantId;

    /**
     * @var bool
     */
    public $stream;
    protected $_name = [
        'assistantId' => 'assistantId',
        'extLoginUser' => 'extLoginUser',
        'messages' => 'messages',
        'originalAssistantId' => 'originalAssistantId',
        'sessionId' => 'sessionId',
        'sourceIdOfOriginalAssistantId' => 'sourceIdOfOriginalAssistantId',
        'sourceTypeOfOriginalAssistantId' => 'sourceTypeOfOriginalAssistantId',
        'stream' => 'stream',
    ];

    public function validate()
    {
        if (null !== $this->extLoginUser) {
            $this->extLoginUser->validate();
        }
        if (\is_array($this->messages)) {
            Model::validateArray($this->messages);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assistantId) {
            $res['assistantId'] = $this->assistantId;
        }

        if (null !== $this->extLoginUser) {
            $res['extLoginUser'] = null !== $this->extLoginUser ? $this->extLoginUser->toArray($noStream) : $this->extLoginUser;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['assistantId'])) {
            $model->assistantId = $map['assistantId'];
        }

        if (isset($map['extLoginUser'])) {
            $model->extLoginUser = extLoginUser::fromMap($map['extLoginUser']);
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
