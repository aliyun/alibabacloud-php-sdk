<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\CreateMessageResponseBody\messages\content;

use AlibabaCloud\Tea\Model;

class cardCallback extends Model
{
    /**
     * @example {}
     *
     * @var string
     */
    public $content;

    /**
     * @example aliding_messageId123
     *
     * @var string
     */
    public $relatedMessageId;
    protected $_name = [
        'content' => 'content',
        'relatedMessageId' => 'relatedMessageId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        if (null !== $this->relatedMessageId) {
            $res['relatedMessageId'] = $this->relatedMessageId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cardCallback
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }
        if (isset($map['relatedMessageId'])) {
            $model->relatedMessageId = $map['relatedMessageId'];
        }

        return $model;
    }
}
