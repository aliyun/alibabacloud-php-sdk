<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\PromptAgentSessionResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\PromptAgentSessionResponseBody\meta\eventCursor;

class meta extends Model
{
    /**
     * @var eventCursor
     */
    public $eventCursor;
    protected $_name = [
        'eventCursor' => 'EventCursor',
    ];

    public function validate()
    {
        if (null !== $this->eventCursor) {
            $this->eventCursor->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eventCursor) {
            $res['EventCursor'] = null !== $this->eventCursor ? $this->eventCursor->toArray($noStream) : $this->eventCursor;
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
        if (isset($map['EventCursor'])) {
            $model->eventCursor = eventCursor::fromMap($map['EventCursor']);
        }

        return $model;
    }
}
