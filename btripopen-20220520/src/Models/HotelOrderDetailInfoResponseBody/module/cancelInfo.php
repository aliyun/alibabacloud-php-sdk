<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderDetailInfoResponseBody\module;

use AlibabaCloud\Dara\Model;

class cancelInfo extends Model
{
    /**
     * @var string
     */
    public $cancelEndTime;

    /**
     * @var string
     */
    public $cancelStartTime;
    protected $_name = [
        'cancelEndTime' => 'cancel_end_time',
        'cancelStartTime' => 'cancel_start_time',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cancelEndTime) {
            $res['cancel_end_time'] = $this->cancelEndTime;
        }

        if (null !== $this->cancelStartTime) {
            $res['cancel_start_time'] = $this->cancelStartTime;
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
        if (isset($map['cancel_end_time'])) {
            $model->cancelEndTime = $map['cancel_end_time'];
        }

        if (isset($map['cancel_start_time'])) {
            $model->cancelStartTime = $map['cancel_start_time'];
        }

        return $model;
    }
}
