<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenAgent\V20260801\Models\ListMessagesResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OpenAgent\V20260801\Models\ListMessagesResponseBody\data\timeline\message;

class timeline extends Model
{
    /**
     * @var message
     */
    public $message;

    /**
     * @var string
     */
    public $runId;
    protected $_name = [
        'message' => 'message',
        'runId' => 'runId',
    ];

    public function validate()
    {
        if (null !== $this->message) {
            $this->message->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->message) {
            $res['message'] = null !== $this->message ? $this->message->toArray($noStream) : $this->message;
        }

        if (null !== $this->runId) {
            $res['runId'] = $this->runId;
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
        if (isset($map['message'])) {
            $model->message = message::fromMap($map['message']);
        }

        if (isset($map['runId'])) {
            $model->runId = $map['runId'];
        }

        return $model;
    }
}
