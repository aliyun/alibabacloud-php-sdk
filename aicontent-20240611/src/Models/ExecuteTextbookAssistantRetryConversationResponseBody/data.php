<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteTextbookAssistantRetryConversationResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteTextbookAssistantRetryConversationResponseBody\data\result;

class data extends Model
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
     * @var result
     */
    public $result;

    /**
     * @var string
     */
    public $user;
    protected $_name = [
        'assistant' => 'assistant',
        'chatId' => 'chatId',
        'result' => 'result',
        'user' => 'user',
    ];

    public function validate()
    {
        if (null !== $this->result) {
            $this->result->validate();
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

        if (null !== $this->result) {
            $res['result'] = null !== $this->result ? $this->result->toArray($noStream) : $this->result;
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

        if (isset($map['result'])) {
            $model->result = result::fromMap($map['result']);
        }

        if (isset($map['user'])) {
            $model->user = $map['user'];
        }

        return $model;
    }
}
