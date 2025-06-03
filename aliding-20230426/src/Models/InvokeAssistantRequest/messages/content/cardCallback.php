<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\InvokeAssistantRequest\messages\content;

use AlibabaCloud\Dara\Model;

class cardCallback extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $relatedMessageId;
    protected $_name = [
        'content' => 'content',
        'relatedMessageId' => 'relatedMessageId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
