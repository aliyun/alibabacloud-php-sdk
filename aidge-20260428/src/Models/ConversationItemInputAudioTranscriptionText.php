<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models;

use AlibabaCloud\Dara\Model;

class ConversationItemInputAudioTranscriptionText extends Model
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
     * @var string
     */
    public $text;

    /**
     * @var string
     */
    public $stash;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $emotion;
    protected $_name = [
        'type' => 'type',
        'eventId' => 'event_id',
        'itemId' => 'item_id',
        'contentIndex' => 'content_index',
        'text' => 'text',
        'stash' => 'stash',
        'language' => 'language',
        'emotion' => 'emotion',
    ];

    public function validate()
    {
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

        if (null !== $this->text) {
            $res['text'] = $this->text;
        }

        if (null !== $this->stash) {
            $res['stash'] = $this->stash;
        }

        if (null !== $this->language) {
            $res['language'] = $this->language;
        }

        if (null !== $this->emotion) {
            $res['emotion'] = $this->emotion;
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

        if (isset($map['text'])) {
            $model->text = $map['text'];
        }

        if (isset($map['stash'])) {
            $model->stash = $map['stash'];
        }

        if (isset($map['language'])) {
            $model->language = $map['language'];
        }

        if (isset($map['emotion'])) {
            $model->emotion = $map['emotion'];
        }

        return $model;
    }
}
