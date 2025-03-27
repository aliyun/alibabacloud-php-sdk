<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteTextbookAssistantSseDialogueResponseBody\data;

class ExecuteTextbookAssistantSseDialogueResponseBody extends Model
{
    /**
     * @var string
     */
    public $assistant;

    /**
     * @var string
     */
    public $chatId;

    /**
     * @var data
     */
    public $data;

    /**
     * @var string
     */
    public $errCode;

    /**
     * @var string
     */
    public $errMessage;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $user;
    protected $_name = [
        'assistant' => 'assistant',
        'chatId' => 'chatId',
        'data' => 'data',
        'errCode' => 'errCode',
        'errMessage' => 'errMessage',
        'requestId' => 'requestId',
        'success' => 'success',
        'user' => 'user',
    ];

    public function validate()
    {
        if (null !== $this->data) {
            $this->data->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assistant) {
            $res['assistant'] = $this->assistant;
        }

        if (null !== $this->chatId) {
            $res['chatId'] = $this->chatId;
        }

        if (null !== $this->data) {
            $res['data'] = null !== $this->data ? $this->data->toArray($noStream) : $this->data;
        }

        if (null !== $this->errCode) {
            $res['errCode'] = $this->errCode;
        }

        if (null !== $this->errMessage) {
            $res['errMessage'] = $this->errMessage;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['success'] = $this->success;
        }

        if (null !== $this->user) {
            $res['user'] = $this->user;
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
        if (isset($map['assistant'])) {
            $model->assistant = $map['assistant'];
        }

        if (isset($map['chatId'])) {
            $model->chatId = $map['chatId'];
        }

        if (isset($map['data'])) {
            $model->data = data::fromMap($map['data']);
        }

        if (isset($map['errCode'])) {
            $model->errCode = $map['errCode'];
        }

        if (isset($map['errMessage'])) {
            $model->errMessage = $map['errMessage'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['success'])) {
            $model->success = $map['success'];
        }

        if (isset($map['user'])) {
            $model->user = $map['user'];
        }

        return $model;
    }
}
