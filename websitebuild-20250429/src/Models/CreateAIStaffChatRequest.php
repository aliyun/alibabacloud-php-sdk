<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\CreateAIStaffChatRequest\messages;

class CreateAIStaffChatRequest extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $chatId;

    /**
     * @var string
     */
    public $conversationId;

    /**
     * @var messages[]
     */
    public $messages;

    /**
     * @var string[]
     */
    public $metaData;
    protected $_name = [
        'bizId' => 'BizId',
        'chatId' => 'ChatId',
        'conversationId' => 'ConversationId',
        'messages' => 'Messages',
        'metaData' => 'MetaData',
    ];

    public function validate()
    {
        if (\is_array($this->messages)) {
            Model::validateArray($this->messages);
        }
        if (\is_array($this->metaData)) {
            Model::validateArray($this->metaData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }

        if (null !== $this->chatId) {
            $res['ChatId'] = $this->chatId;
        }

        if (null !== $this->conversationId) {
            $res['ConversationId'] = $this->conversationId;
        }

        if (null !== $this->messages) {
            if (\is_array($this->messages)) {
                $res['Messages'] = [];
                $n1 = 0;
                foreach ($this->messages as $item1) {
                    $res['Messages'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->metaData) {
            if (\is_array($this->metaData)) {
                $res['MetaData'] = [];
                foreach ($this->metaData as $key1 => $value1) {
                    $res['MetaData'][$key1] = $value1;
                }
            }
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
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }

        if (isset($map['ChatId'])) {
            $model->chatId = $map['ChatId'];
        }

        if (isset($map['ConversationId'])) {
            $model->conversationId = $map['ConversationId'];
        }

        if (isset($map['Messages'])) {
            if (!empty($map['Messages'])) {
                $model->messages = [];
                $n1 = 0;
                foreach ($map['Messages'] as $item1) {
                    $model->messages[$n1] = messages::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['MetaData'])) {
            if (!empty($map['MetaData'])) {
                $model->metaData = [];
                foreach ($map['MetaData'] as $key1 => $value1) {
                    $model->metaData[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
