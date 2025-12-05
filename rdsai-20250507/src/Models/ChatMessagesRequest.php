<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ChatMessagesRequest\inputs;

class ChatMessagesRequest extends Model
{
    /**
     * @var string
     */
    public $conversationId;

    /**
     * @var inputs
     */
    public $inputs;

    /**
     * @var string
     */
    public $parentMessageId;

    /**
     * @var string
     */
    public $query;
    protected $_name = [
        'conversationId' => 'ConversationId',
        'inputs' => 'Inputs',
        'parentMessageId' => 'ParentMessageId',
        'query' => 'Query',
    ];

    public function validate()
    {
        if (null !== $this->inputs) {
            $this->inputs->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->conversationId) {
            $res['ConversationId'] = $this->conversationId;
        }

        if (null !== $this->inputs) {
            $res['Inputs'] = null !== $this->inputs ? $this->inputs->toArray($noStream) : $this->inputs;
        }

        if (null !== $this->parentMessageId) {
            $res['ParentMessageId'] = $this->parentMessageId;
        }

        if (null !== $this->query) {
            $res['Query'] = $this->query;
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
        if (isset($map['ConversationId'])) {
            $model->conversationId = $map['ConversationId'];
        }

        if (isset($map['Inputs'])) {
            $model->inputs = inputs::fromMap($map['Inputs']);
        }

        if (isset($map['ParentMessageId'])) {
            $model->parentMessageId = $map['ParentMessageId'];
        }

        if (isset($map['Query'])) {
            $model->query = $map['Query'];
        }

        return $model;
    }
}
