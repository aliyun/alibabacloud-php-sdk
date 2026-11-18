<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\ListChatMessageContentsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\ListChatMessageContentsResponseBody\items\attachments;

class items extends Model
{
    /**
     * @var attachments[]
     */
    public $attachments;

    /**
     * @var string
     */
    public $messageId;

    /**
     * @var string
     */
    public $messageType;

    /**
     * @var int
     */
    public $recordId;

    /**
     * @var string
     */
    public $senderId;

    /**
     * @var string
     */
    public $senderName;

    /**
     * @var string
     */
    public $sentAt;

    /**
     * @var string
     */
    public $text;
    protected $_name = [
        'attachments' => 'attachments',
        'messageId' => 'messageId',
        'messageType' => 'messageType',
        'recordId' => 'recordId',
        'senderId' => 'senderId',
        'senderName' => 'senderName',
        'sentAt' => 'sentAt',
        'text' => 'text',
    ];

    public function validate()
    {
        if (\is_array($this->attachments)) {
            Model::validateArray($this->attachments);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attachments) {
            if (\is_array($this->attachments)) {
                $res['attachments'] = [];
                $n1 = 0;
                foreach ($this->attachments as $item1) {
                    $res['attachments'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->messageId) {
            $res['messageId'] = $this->messageId;
        }

        if (null !== $this->messageType) {
            $res['messageType'] = $this->messageType;
        }

        if (null !== $this->recordId) {
            $res['recordId'] = $this->recordId;
        }

        if (null !== $this->senderId) {
            $res['senderId'] = $this->senderId;
        }

        if (null !== $this->senderName) {
            $res['senderName'] = $this->senderName;
        }

        if (null !== $this->sentAt) {
            $res['sentAt'] = $this->sentAt;
        }

        if (null !== $this->text) {
            $res['text'] = $this->text;
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
        if (isset($map['attachments'])) {
            if (!empty($map['attachments'])) {
                $model->attachments = [];
                $n1 = 0;
                foreach ($map['attachments'] as $item1) {
                    $model->attachments[$n1] = attachments::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['messageId'])) {
            $model->messageId = $map['messageId'];
        }

        if (isset($map['messageType'])) {
            $model->messageType = $map['messageType'];
        }

        if (isset($map['recordId'])) {
            $model->recordId = $map['recordId'];
        }

        if (isset($map['senderId'])) {
            $model->senderId = $map['senderId'];
        }

        if (isset($map['senderName'])) {
            $model->senderName = $map['senderName'];
        }

        if (isset($map['sentAt'])) {
            $model->sentAt = $map['sentAt'];
        }

        if (isset($map['text'])) {
            $model->text = $map['text'];
        }

        return $model;
    }
}
