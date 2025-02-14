<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class DeleteAIAgentDialogueRequest extends Model
{
    /**
     * @var string
     */
    public $dialogueId;
    /**
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'dialogueId' => 'DialogueId',
        'sessionId'  => 'SessionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dialogueId) {
            $res['DialogueId'] = $this->dialogueId;
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
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
        if (isset($map['DialogueId'])) {
            $model->dialogueId = $map['DialogueId'];
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        return $model;
    }
}
