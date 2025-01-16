<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Tea\Model;

class ExecuteTextbookAssistantRetryConversationRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 6788e0b4b54c5268c1b78638
     *
     * @var string
     */
    public $assistant;

    /**
     * @description This parameter is required.
     *
     * @example tc_e6dc70c890866f4028ca685b6fa29874
     *
     * @var string
     */
    public $authToken;

    /**
     * @description This parameter is required.
     *
     * @example 6788e0b475a4631ffc626722
     *
     * @var string
     */
    public $chatId;

    /**
     * @description This parameter is required.
     *
     * @example SYNC
     *
     * @var string
     */
    public $scenario;
    protected $_name = [
        'assistant' => 'assistant',
        'authToken' => 'authToken',
        'chatId'    => 'chatId',
        'scenario'  => 'scenario',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assistant) {
            $res['assistant'] = $this->assistant;
        }
        if (null !== $this->authToken) {
            $res['authToken'] = $this->authToken;
        }
        if (null !== $this->chatId) {
            $res['chatId'] = $this->chatId;
        }
        if (null !== $this->scenario) {
            $res['scenario'] = $this->scenario;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExecuteTextbookAssistantRetryConversationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['assistant'])) {
            $model->assistant = $map['assistant'];
        }
        if (isset($map['authToken'])) {
            $model->authToken = $map['authToken'];
        }
        if (isset($map['chatId'])) {
            $model->chatId = $map['chatId'];
        }
        if (isset($map['scenario'])) {
            $model->scenario = $map['scenario'];
        }

        return $model;
    }
}
