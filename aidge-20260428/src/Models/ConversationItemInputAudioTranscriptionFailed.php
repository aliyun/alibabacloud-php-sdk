<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aidge\V20260428\Models\ConversationItemInputAudioTranscriptionFailed\error;

class ConversationItemInputAudioTranscriptionFailed extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $eventId;

    /**
     * @var string
     */
    public $itemId;

    /**
     * @var int
     */
    public $contentIndex;

    /**
     * @var error
     */
    public $error;
    protected $_name = [
        'type' => 'type',
        'eventId' => 'event_id',
        'itemId' => 'item_id',
        'contentIndex' => 'content_index',
        'error' => 'error',
    ];

    public function validate()
    {
        if (null !== $this->error) {
            $this->error->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->eventId) {
            $res['event_id'] = $this->eventId;
        }

        if (null !== $this->itemId) {
            $res['item_id'] = $this->itemId;
        }

        if (null !== $this->contentIndex) {
            $res['content_index'] = $this->contentIndex;
        }

        if (null !== $this->error) {
            $res['error'] = null !== $this->error ? $this->error->toArray($noStream) : $this->error;
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
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['event_id'])) {
            $model->eventId = $map['event_id'];
        }

        if (isset($map['item_id'])) {
            $model->itemId = $map['item_id'];
        }

        if (isset($map['content_index'])) {
            $model->contentIndex = $map['content_index'];
        }

        if (isset($map['error'])) {
            $model->error = error::fromMap($map['error']);
        }

        return $model;
    }
}
