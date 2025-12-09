<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;

class GetChatContentResponseBody extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var int
     */
    public $checkpoint;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $contentType;

    /**
     * @var string
     */
    public $eventType;

    /**
     * @var int
     */
    public $level;
    protected $_name = [
        'category' => 'category',
        'checkpoint' => 'checkpoint',
        'content' => 'content',
        'contentType' => 'content_type',
        'eventType' => 'event_type',
        'level' => 'level',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->category) {
            $res['category'] = $this->category;
        }

        if (null !== $this->checkpoint) {
            $res['checkpoint'] = $this->checkpoint;
        }

        if (null !== $this->content) {
            $res['content'] = $this->content;
        }

        if (null !== $this->contentType) {
            $res['content_type'] = $this->contentType;
        }

        if (null !== $this->eventType) {
            $res['event_type'] = $this->eventType;
        }

        if (null !== $this->level) {
            $res['level'] = $this->level;
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
        if (isset($map['category'])) {
            $model->category = $map['category'];
        }

        if (isset($map['checkpoint'])) {
            $model->checkpoint = $map['checkpoint'];
        }

        if (isset($map['content'])) {
            $model->content = $map['content'];
        }

        if (isset($map['content_type'])) {
            $model->contentType = $map['content_type'];
        }

        if (isset($map['event_type'])) {
            $model->eventType = $map['event_type'];
        }

        if (isset($map['level'])) {
            $model->level = $map['level'];
        }

        return $model;
    }
}
