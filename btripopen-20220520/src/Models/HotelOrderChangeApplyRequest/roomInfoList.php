<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderChangeApplyRequest;

use AlibabaCloud\Tea\Model;

class roomInfoList extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $cancelDate;

    /**
     * @description This parameter is required.
     *
     * @example 112
     *
     * @var int
     */
    public $roomNo;
    protected $_name = [
        'cancelDate' => 'cancel_date',
        'roomNo'     => 'room_no',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cancelDate) {
            $res['cancel_date'] = $this->cancelDate;
        }
        if (null !== $this->roomNo) {
            $res['room_no'] = $this->roomNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return roomInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cancel_date'])) {
            if (!empty($map['cancel_date'])) {
                $model->cancelDate = $map['cancel_date'];
            }
        }
        if (isset($map['room_no'])) {
            $model->roomNo = $map['room_no'];
        }

        return $model;
    }
}
