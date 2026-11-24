<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aidge\V20260428\Models\ResponseCreated\response;

class ResponseCreated extends Model
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
     * @var response
     */
    public $response;
    protected $_name = [
        'type' => 'type',
        'eventId' => 'event_id',
        'response' => 'response',
    ];

    public function validate()
    {
        if (null !== $this->response) {
            $this->response->validate();
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

        if (null !== $this->response) {
            $res['response'] = null !== $this->response ? $this->response->toArray($noStream) : $this->response;
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

        if (isset($map['response'])) {
            $model->response = response::fromMap($map['response']);
        }

        return $model;
    }
}
