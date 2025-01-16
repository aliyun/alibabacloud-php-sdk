<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Tea\Model;

class ExecuteTextbookAssistantDialogueRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $authToken;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $chatId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $scenario;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $userMessage;
    protected $_name = [
        'authToken'   => 'authToken',
        'chatId'      => 'chatId',
        'scenario'    => 'scenario',
        'userMessage' => 'userMessage',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return ExecuteTextbookAssistantDialogueRequest
     */
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
