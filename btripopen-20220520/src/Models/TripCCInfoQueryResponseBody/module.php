<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TripCCInfoQueryResponseBody;

use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @example user_12138
     *
     * @var string
     */
    public $notifier;

    /**
     * @example 1525104000
     *
     * @var int
     */
    public $notifyStartTime;
    protected $_name = [
        'notifier'        => 'notifier',
        'notifyStartTime' => 'notify_start_time',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return module
     */
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
