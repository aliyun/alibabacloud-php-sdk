<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models;

use AlibabaCloud\Dara\Model;

class ChatMessagesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $apiId;

    /**
     * @var string
     */
    public $conversationId;

    /**
     * @var string
     */
    public $inputsShrink;

    /**
     * @var string
     */
    public $parentMessageId;

    /**
     * @var string
     */
    public $query;
    protected $_name = [
        'apiId' => 'ApiId',
        'conversationId' => 'ConversationId',
        'inputsShrink' => 'Inputs',
        'parentMessageId' => 'ParentMessageId',
        'query' => 'Query',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }

        if (null !== $this->conversationId) {
            $res['ConversationId'] = $this->conversationId;
        }

        if (null !== $this->inputsShrink) {
            $res['Inputs'] = $this->inputsShrink;
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
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }

        if (isset($map['ConversationId'])) {
            $model->conversationId = $map['ConversationId'];
        }

        if (isset($map['Inputs'])) {
            $model->inputsShrink = $map['Inputs'];
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
