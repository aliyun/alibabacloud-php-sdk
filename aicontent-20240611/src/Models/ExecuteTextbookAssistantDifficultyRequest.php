<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;

class ExecuteTextbookAssistantDifficultyRequest extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var string
     */
    public $assistant;

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
    protected $_name = [
        'action' => 'action',
        'assistant' => 'assistant',
        'authToken' => 'authToken',
        'chatId' => 'chatId',
        'scenario' => 'scenario',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->action) {
            $res['action'] = $this->action;
        }

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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['action'])) {
            $model->action = $map['action'];
        }

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
