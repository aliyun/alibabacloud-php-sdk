<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OssAgent\V20260622\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OssAgent\V20260622\Models\ChatRequest\messages;

class ChatRequest extends Model
{
    /**
     * @var messages[]
     */
    public $messages;

    /**
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'messages' => 'messages',
        'sessionId' => 'sessionId',
    ];

    public function validate()
    {
        if (\is_array($this->messages)) {
            Model::validateArray($this->messages);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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

        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
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

        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }

        return $model;
    }
}
