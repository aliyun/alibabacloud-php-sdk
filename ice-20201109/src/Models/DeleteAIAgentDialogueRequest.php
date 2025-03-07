<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class DeleteAIAgentDialogueRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example f27f9b9be28642a88e18*******
     *
     * @var string
     */
    public $dialogueId;

    /**
     * @description This parameter is required.
     *
     * @example 6d594e7f55624c47a48789******
     *
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'dialogueId' => 'DialogueId',
        'sessionId'  => 'SessionId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return DeleteAIAgentDialogueRequest
     */
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
