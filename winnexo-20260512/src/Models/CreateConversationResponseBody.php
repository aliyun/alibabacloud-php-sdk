<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class CreateConversationResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $conversationId;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $message;

    /**
     * @var mixed[]
     */
    public $metadata;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'code' => 'code',
        'conversationId' => 'conversationId',
        'createdAt' => 'createdAt',
        'message' => 'message',
        'metadata' => 'metadata',
        'requestId' => 'requestId',
        'title' => 'title',
    ];

    public function validate()
    {
        if (\is_array($this->metadata)) {
            Model::validateArray($this->metadata);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->conversationId) {
            $res['conversationId'] = $this->conversationId;
        }

        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->metadata) {
            if (\is_array($this->metadata)) {
                $res['metadata'] = [];
                foreach ($this->metadata as $key1 => $value1) {
                    $res['metadata'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
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
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['conversationId'])) {
            $model->conversationId = $map['conversationId'];
        }

        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['metadata'])) {
            if (!empty($map['metadata'])) {
                $model->metadata = [];
                foreach ($map['metadata'] as $key1 => $value1) {
                    $model->metadata[$key1] = $value1;
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        return $model;
    }
}
