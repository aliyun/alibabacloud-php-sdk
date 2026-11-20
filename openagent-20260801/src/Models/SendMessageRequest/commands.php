<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenAgent\V20260801\Models\SendMessageRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OpenAgent\V20260801\Models\SendMessageRequest\commands\payload;

class commands extends Model
{
    /**
     * @var payload
     */
    public $payload;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'payload' => 'payload',
        'type' => 'type',
    ];

    public function validate()
    {
        if (null !== $this->payload) {
            $this->payload->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->payload) {
            $res['payload'] = null !== $this->payload ? $this->payload->toArray($noStream) : $this->payload;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['payload'])) {
            $model->payload = payload::fromMap($map['payload']);
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
