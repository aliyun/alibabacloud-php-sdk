<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ververica\V20220718\Models\ChatAiAgentRequest\hitlDecisions;
use AlibabaCloud\SDK\Ververica\V20220718\Models\ChatAiAgentRequest\refs;

class ChatAiAgentRequest extends Model
{
    /**
     * @var hitlDecisions[]
     */
    public $hitlDecisions;

    /**
     * @var refs
     */
    public $refs;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $userMessage;
    protected $_name = [
        'hitlDecisions' => 'hitlDecisions',
        'refs' => 'refs',
        'sessionId' => 'sessionId',
        'userMessage' => 'userMessage',
    ];

    public function validate()
    {
        if (\is_array($this->hitlDecisions)) {
            Model::validateArray($this->hitlDecisions);
        }
        if (null !== $this->refs) {
            $this->refs->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hitlDecisions) {
            if (\is_array($this->hitlDecisions)) {
                $res['hitlDecisions'] = [];
                $n1 = 0;
                foreach ($this->hitlDecisions as $item1) {
                    $res['hitlDecisions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->refs) {
            $res['refs'] = null !== $this->refs ? $this->refs->toArray($noStream) : $this->refs;
        }

        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
        }

        if (null !== $this->userMessage) {
            $res['userMessage'] = $this->userMessage;
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
        if (isset($map['hitlDecisions'])) {
            if (!empty($map['hitlDecisions'])) {
                $model->hitlDecisions = [];
                $n1 = 0;
                foreach ($map['hitlDecisions'] as $item1) {
                    $model->hitlDecisions[$n1] = hitlDecisions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['refs'])) {
            $model->refs = refs::fromMap($map['refs']);
        }

        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }

        if (isset($map['userMessage'])) {
            $model->userMessage = $map['userMessage'];
        }

        return $model;
    }
}
