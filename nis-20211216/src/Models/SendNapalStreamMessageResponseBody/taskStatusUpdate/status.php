<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models\SendNapalStreamMessageResponseBody\taskStatusUpdate;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Nis\V20211216\Models\SendNapalStreamMessageResponseBody\taskStatusUpdate\status\message;

class status extends Model
{
    /**
     * @var message
     */
    public $message;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $timestamp;
    protected $_name = [
        'message' => 'Message',
        'state' => 'State',
        'timestamp' => 'Timestamp',
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
            $res['Message'] = null !== $this->message ? $this->message->toArray($noStream) : $this->message;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
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
        if (isset($map['Message'])) {
            $model->message = message::fromMap($map['Message']);
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}
