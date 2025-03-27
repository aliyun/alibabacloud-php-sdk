<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;

class ExecuteTextbookAssistantSseDialogueRequest extends Model
{
    /**
     * @var string
     */
    public $authToken;

    /**
     * @var string
     */
    public $chatId;

    /**
     * @var string
     */
    public $scenario;

    /**
     * @var string
     */
    public $userMessage;
    protected $_name = [
        'authToken' => 'authToken',
        'chatId' => 'chatId',
        'scenario' => 'scenario',
        'userMessage' => 'userMessage',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authToken) {
            $res['authToken'] = $this->authToken;
        }

        if (null !== $this->chatId) {
            $res['chatId'] = $this->chatId;
        }

        if (null !== $this->scenario) {
            $res['scenario'] = $this->scenario;
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
        if (isset($map['authToken'])) {
            $model->authToken = $map['authToken'];
        }

        if (isset($map['chatId'])) {
            $model->chatId = $map['chatId'];
        }

        if (isset($map['scenario'])) {
            $model->scenario = $map['scenario'];
        }

        if (isset($map['userMessage'])) {
            $model->userMessage = $map['userMessage'];
        }

        return $model;
    }
}
