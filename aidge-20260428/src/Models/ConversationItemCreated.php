<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aidge\V20260428\Models\ConversationItemCreated\item;

class ConversationItemCreated extends Model
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
    public $previousItemId;

    /**
     * @var item
     */
    public $item;
    protected $_name = [
        'type' => 'type',
        'eventId' => 'event_id',
        'previousItemId' => 'previous_item_id',
        'item' => 'item',
    ];

    public function validate()
    {
        if (null !== $this->item) {
            $this->item->validate();
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

        if (null !== $this->previousItemId) {
            $res['previous_item_id'] = $this->previousItemId;
        }

        if (null !== $this->item) {
            $res['item'] = null !== $this->item ? $this->item->toArray($noStream) : $this->item;
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

        if (isset($map['previous_item_id'])) {
            $model->previousItemId = $map['previous_item_id'];
        }

        if (isset($map['item'])) {
            $model->item = item::fromMap($map['item']);
        }

        return $model;
    }
}
