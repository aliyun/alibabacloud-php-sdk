<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderDetailInfoResponseBody\module;

use AlibabaCloud\Tea\Model;

class cancelInfo extends Model
{
    /**
     * @example 2022-01-29
     *
     * @var string
     */
    public $cancelEndTime;

    /**
     * @example 2022-01-29
     *
     * @var string
     */
    public $cancelStartTime;
    protected $_name = [
        'cancelEndTime'   => 'cancel_end_time',
        'cancelStartTime' => 'cancel_start_time',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return cancelInfo
     */
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
