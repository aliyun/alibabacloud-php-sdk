<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models;

use AlibabaCloud\Dara\Model;

class ResponseTextDone extends Model
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
    public $responseId;

    /**
     * @var string
     */
    public $itemId;

    /**
     * @var int
     */
    public $outputIndex;

    /**
     * @var int
     */
    public $contentIndex;

    /**
     * @var string
     */
    public $text;
    protected $_name = [
        'type' => 'type',
        'eventId' => 'event_id',
        'responseId' => 'response_id',
        'itemId' => 'item_id',
        'outputIndex' => 'output_index',
        'contentIndex' => 'content_index',
        'text' => 'text',
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

        if (null !== $this->responseId) {
            $res['response_id'] = $this->responseId;
        }

        if (null !== $this->itemId) {
            $res['item_id'] = $this->itemId;
        }

        if (null !== $this->outputIndex) {
            $res['output_index'] = $this->outputIndex;
        }

        if (null !== $this->contentIndex) {
            $res['content_index'] = $this->contentIndex;
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
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['event_id'])) {
            $model->eventId = $map['event_id'];
        }

        if (isset($map['response_id'])) {
            $model->responseId = $map['response_id'];
        }

        if (isset($map['item_id'])) {
            $model->itemId = $map['item_id'];
        }

        if (isset($map['output_index'])) {
            $model->outputIndex = $map['output_index'];
        }

        if (isset($map['content_index'])) {
            $model->contentIndex = $map['content_index'];
        }

        if (isset($map['text'])) {
            $model->text = $map['text'];
        }

        return $model;
    }
}
