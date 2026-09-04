<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class RLLogContextLine extends Model
{
    /**
     * @var string
     */
    public $message;

    /**
     * @var int
     */
    public $timestampMs;
    protected $_name = [
        'message' => 'Message',
        'timestampMs' => 'TimestampMs',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->timestampMs) {
            $res['TimestampMs'] = $this->timestampMs;
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
            $model->message = $map['Message'];
        }

        if (isset($map['TimestampMs'])) {
            $model->timestampMs = $map['TimestampMs'];
        }

        return $model;
    }
}
