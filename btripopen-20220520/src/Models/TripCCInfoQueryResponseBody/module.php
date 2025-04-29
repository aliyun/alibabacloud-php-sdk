<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TripCCInfoQueryResponseBody;

use AlibabaCloud\Dara\Model;

class module extends Model
{
    /**
     * @var string
     */
    public $notifier;

    /**
     * @var int
     */
    public $notifyStartTime;
    protected $_name = [
        'notifier' => 'notifier',
        'notifyStartTime' => 'notify_start_time',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->notifier) {
            $res['notifier'] = $this->notifier;
        }

        if (null !== $this->notifyStartTime) {
            $res['notify_start_time'] = $this->notifyStartTime;
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
        if (isset($map['notifier'])) {
            $model->notifier = $map['notifier'];
        }

        if (isset($map['notify_start_time'])) {
            $model->notifyStartTime = $map['notify_start_time'];
        }

        return $model;
    }
}
